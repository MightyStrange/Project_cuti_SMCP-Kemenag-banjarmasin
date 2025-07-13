<?php
include 'koneksi.php';
session_start();

// Sanitize inputs
$username = mysqli_real_escape_string($koneksi, $_POST['username']);
$password = $_POST['password']; // Biarkan dalam bentuk plain text
$ip_address = $_SERVER['REMOTE_ADDR'];
$max_attempts = 10;
$block_time = 5;

try {
    // Check login attempts
    $stmt = $koneksi->prepare("SELECT COUNT(*) AS attempts FROM login_attempts WHERE ip_address = ? AND attempt_time > NOW() - INTERVAL ? MINUTE");
    $stmt->bind_param("si", $ip_address, $block_time);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

    if ($data['attempts'] >= $max_attempts) {
        header("Location: index.php?alert=too_many_attempts");
        exit();
    }

    // Login tables configuration
    $login_queries = [
        ['table' => 'tbl_admin', 'username_col' => 'admin_username', 'password_col' => 'admin_password', 'id_col' => 'admin_id', 'name_col' => 'admin_nama', 'role' => 'Admin', 'devisi_col' => null],
        ['table' => 'tbl_supervisor', 'username_col' => 'supervisor_username', 'password_col' => 'supervisor_password', 'id_col' => 'supervisor_id', 'name_col' => 'supervisor_nama', 'role' => 'Supervisor', 'devisi_col' => 'supervisor_devisi'],
        ['table' => 'tbl_manajer', 'username_col' => 'manajer_username', 'password_col' => 'manajer_password', 'id_col' => 'manajer_id', 'name_col' => 'manajer_nama', 'role' => 'Manajer', 'devisi_col' => 'manajer_devisi'],
        ['table' => 'tbl_karyawan', 'username_col' => 'karyawan_username', 'password_col' => 'karyawan_password', 'id_col' => 'karyawan_id', 'name_col' => 'karyawan_nama', 'role' => 'Karyawan', 'devisi_col' => 'karyawan_devisi']
    ];

    $user = null;
    foreach ($login_queries as $query_info) {
        $stmt = $koneksi->prepare("SELECT * FROM {$query_info['table']} WHERE {$query_info['username_col']} = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            
            // Periksa apakah password menggunakan MD5 atau password_hash
            if (password_verify($password, $user[$query_info['password_col']]) || $user[$query_info['password_col']] === md5($password)) {
                // Jika masih pakai MD5, update ke password_hash
                if ($user[$query_info['password_col']] === md5($password)) {
                    $new_password_hash = password_hash($password, PASSWORD_DEFAULT);
                    $update_stmt = $koneksi->prepare("UPDATE {$query_info['table']} SET {$query_info['password_col']} = ? WHERE {$query_info['username_col']} = ?");
                    $update_stmt->bind_param("ss", $new_password_hash, $username);
                    $update_stmt->execute();
                }

                $user['role'] = $query_info['role'];
                $user['id_col'] = $query_info['id_col'];
                $user['name_col'] = $query_info['name_col'];
                $user['table'] = $query_info['table'];
                $user['devisi_col'] = $query_info['devisi_col'];
                break;
            }
        }
    }

    if ($user) {
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $user[$user['id_col']];
        $_SESSION['nama'] = $user[$user['name_col']];
        $_SESSION['status'] = $user['role'];
        
        // Add devisi to session if exists
        if ($user['devisi_col'] && isset($user[$user['devisi_col']])) {
            $_SESSION['devisi'] = $user[$user['devisi_col']];
        }
        
        // Redirect based on role
        switch ($user['role']) {
            case 'Admin':
                header("Location: admin/?alert=success");
                break;
            case 'Manajer':
                header("Location: manajer/");
                break;
            case 'Supervisor':
                header("Location: supervisor/");
                break;
            case 'Karyawan':
                header("Location: karyawan/?alert=success");
                break;
            default:
                header("Location: index.php?alert=gagal");
        }
        exit();
    } else {
        // Log failed attempt
        $stmt = $koneksi->prepare("INSERT INTO login_attempts (ip_address, username) VALUES (?, ?)");
        $stmt->bind_param("ss", $ip_address, $username);
        $stmt->execute();
        
        header("Location: index.php?alert=gagal");
        exit();
    }
} catch (Exception $e) {
    // Log error or handle exception
    error_log($e->getMessage());
    header("Location: index.php?alert=error");
    exit();
}
?>
