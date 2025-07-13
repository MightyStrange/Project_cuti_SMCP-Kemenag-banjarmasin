<?php
session_start();
include '../koneksi.php';

// Fungsi untuk menjalankan query dengan persiapan (prepared statement)
function executeQuery($query, $params = []) {
    global $koneksi;

    $stmt = mysqli_prepare($koneksi, $query);
    if ($stmt) {
        if (count($params) > 0) {
            $types = '';
            foreach ($params as $param) {
                $types .= gettype($param)[0];
            }
            array_unshift($params, $types);
            call_user_func_array([$stmt, 'bind_param'], $params);
        }
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        return $result;
    } else {
        die('Error preparing statement: ' . mysqli_error($koneksi));
    }
}

// Query untuk mereset jumlah cuti yang diambil menjadi 0
$query_reset = "UPDATE tbl_jenis_cuti SET jenis_jumlah_diambil = 0";

// Jalankan query dengan persiapan
if (executeQuery($query_reset)) {
    // Tulis log jika berhasil
    error_log("Reset jumlah cuti diambil berhasil pada " . date('Y-m-d H:i:s'), 3, 'log.txt');
} else {
    // Tulis log jika gagal
    error_log("Gagal mereset jumlah cuti diambil: " . mysqli_error($koneksi), 3, 'log.txt');
}