<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aplikasi Pengajuan Cuti Pegawai</title>  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="../dist/img/favicon.ico" type="image/x-icon"> 
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">  
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">  
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">  
  <link rel="stylesheet" href="dist/css/adminlte.min.css">  
  <link rel="manifest" href="/manifest.json">

  
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page" style="background-image: url('dist/img/kemenag.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script>
        // Cek query string di URL
        const urlParams = new URLSearchParams(window.location.search);
        const alertType = urlParams.get('alert');

        // Tampilkan SweetAlert jika alertType adalah 'gagal'
        if (alertType === 'gagal') {
            Swal.fire({
                title: 'Login Gagal',
                text: 'Username atau password salah, atau terlalu banyak percobaan.',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        } else if (alertType === 'too_many_attempts') {
            Swal.fire({
                title: 'Terlalu Banyak Upaya Login ',
                text: 'Tunggu 5 menit atau coba lagi nanti demi keamanan website.',
                icon: 'warning',
                confirmButtonText: 'OK'
            });
        }
    </script>
    <script>
  if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/service-worker.js')
      .then(function(registration) {
        console.log('Service Worker registered with scope:', registration.scope);
      }, function(error) {
        console.log('Service Worker registration failed:', error);
      });
  }
</script>

  <div class="card">
    <div class="card-body login-card-body">
    <div class="login-logo">
  <a href="index.php" style="color: black;"><b>Sistem Manajemen Cuti Pegawai</b></a>
</div>
  
  <div class="card">
    <div class="card-body login-card-body">
      <!-- Tambahkan elemen gambar di sini -->
      <div class="text-center">
        <img src="dist/img/images.png" alt="Logo" style="width: 300px; height: auto;">
      </div>
      <br>
      
      
      <p class="login-box-msg">Login untuk mengelola sistem</p>

      <form action="index_act.php" method="post">
    <div class="input-group mb-3">
        <input type="text" class="form-control" name="username" placeholder="Username">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-user"></span>
            </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="fas fa-lock"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                    Remember Me
                </label>
            </div>
        </div>
        <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
        </div>
    </div>
</form>

   
    </div>    
  </div>
</div>


<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
