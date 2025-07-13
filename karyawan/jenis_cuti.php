<?php
include 'header.php';
?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Sisa Cuti</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Sisa Cuti</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                       <div class="table-responsive">
                            <h5 class="card-title">Pengajuan Cuti Terakhir</h5>
                            <br>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th width="1%">Nomor</th>
                                        <th>Jenis Cuti</th>
                                        <th>Jumlah Diberikan</th>
                                        <th>Jumlah Diambil</th>
                                        <th>Sisa Cuti</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $saya = $_SESSION['id'];
                                    $tahun = date('Y');
                                    $no = 1;
                                    $data = mysqli_query($koneksi, "SELECT * FROM tbl_jenis_cuti");

                                    // Cek apakah hari ini tanggal 6 Januari
                                    $isJanuariEnam = date('d-m') == '06-01';

                                    while ($d = mysqli_fetch_array($data)) {
                                        $jenisid = $d['jenis_id'];
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d['jenis_nama']; ?></td>
                                            <td><?php echo $d['jenis_jumlah']; ?> Hari</td>
                                            <td>
                                                <?php
                                                // Menghitung total cuti yang diambil
                                                $xx = mysqli_query($koneksi, "SELECT SUM(DATEDIFF(cuti_sampai, cuti_dari) + 1) AS total FROM tbl_cuti WHERE cuti_jenis='$jenisid' AND cuti_pegawai='$saya' AND YEAR(cuti_tanggal)='$tahun'");

                                                if (!$xx) {
                                                    die("Query gagal: " . mysqli_error($koneksi));
                                                }

                                                $x = mysqli_fetch_assoc($xx);
                                                $diambil = $x['total'] ? $x['total'] : 0;
                                                echo $diambil . " Hari";
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                // Menghitung sisa cuti
                                                $diberikan = $d['jenis_jumlah'];

                                                // Tambahkan 6 hari pada tanggal 6 Januari jika sisa cuti belum terpakai
                                                if ($diambil == 0 && $isJanuariEnam) {
                                                    // Update database dengan penambahan 6 hari
                                                    mysqli_query($koneksi, "UPDATE tbl_jenis_cuti SET jenis_jumlah = jenis_jumlah + 6 WHERE jenis_id = '$jenisid'");
                                                    $diberikan += 6;
                                                }

                                                $sisa = $diberikan - $diambil;
                                                echo $sisa . " Hari";
                                                ?>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>
