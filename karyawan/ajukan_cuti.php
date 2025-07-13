<?php include'header.php' ?>
<!-- Add SweetAlert CDN in header or here -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="content-wrapper">
    <!-- Previous header content remains same -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <?php 
                            if(isset($_GET['alert'])){
                                if($_GET['alert']=="gagal"){
                                    ?>
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <h5><i class="icon fas fa-info"></i> Alert!</h5>
                                        Permintaan cuti gagal, silahkan cek tanggal.
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                            <center>
                                <h2 class="card-title">Form Pengajuan Cuti</h2>
                            </center>
                            <br>                        
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="ajukan_cuti_act.php" method="POST" id="formCuti">
                                        <div class="form-group">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th width="1%">Pilih</th>
                                                    <th>Cuti</th>
                                                    <th>Sisa Cuti</th>                                            
                                                </tr>
                                                <?php 
                                                $cek = mysqli_query($koneksi, "SELECT * FROM tbl_jenis_cuti");
                                                while ($c = mysqli_fetch_array($cek)) {
                                                    $idjenis = $c['jenis_id'];
                                                    $saya = $_SESSION['id'];
                                                    $tahun = date('Y');
                                                    $isJanuariEnam = date('d-m') == '06-01';
                                                    
                                                    $xx = mysqli_query($koneksi, "SELECT SUM(DATEDIFF(cuti_sampai, cuti_dari) + 1) AS total FROM tbl_cuti WHERE cuti_jenis='$idjenis' AND cuti_pegawai='$saya' AND YEAR(cuti_tanggal)='$tahun'");
                                                    $x = mysqli_fetch_assoc($xx);
                                                    $diambil = $x['total'] ? $x['total'] : 0;
                                                    
                                                    $diberikan = $c['jenis_jumlah'];
                                                    if ($diambil == 0 && $isJanuariEnam) {
                                                        $diberikan += 6;
                                                    }
                                                    $sisa = $diberikan - $diambil;
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <input type="radio" name="jenis" value="<?php echo $c['jenis_id']; ?>" 
                                                                   data-sisa="<?php echo $sisa; ?>"
                                                                   <?php echo $sisa <= 0 ? 'disabled' : ''; ?>
                                                                   required>
                                                        </td>
                                                        <td><?php echo $c['jenis_nama']; ?></td>
                                                        <td>
                                                            <?php echo $sisa; ?>
                                                            <input type="hidden" name="sisa" value="<?php echo $sisa; ?>">
                                                        </td>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                            </table>
                                        </div>
                                        <div class="form-group">
                                            <label>Mulai Cuti</label>
                                            <input type="date" name="mulai" id="mulai" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Akhir Cuti </label>
                                            <input type="date" name="akhir" id="akhir" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Alasan Cuti </label>
                                            <textarea class="form-control" name="alasan" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat Selama Cuti (opsional)</label>
                                            <textarea class="form-control" name="alamat"></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>                                    
                                    </form>
                                </div>
                            </div>                
                        </div>
                    </div>
                </div>        
            </div>
        </div>    
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('formCuti');
    const mulaiInput = document.getElementById('mulai');
    const akhirInput = document.getElementById('akhir');
    
    // Function to calculate number of days between two dates
    function calculateDays(startDate, endDate) {
        const start = new Date(startDate);
        const end = new Date(endDate);
        const diffTime = Math.abs(end - start);
        return Math.ceil(diffTime / (1000 * 60 * 60 * 24)) + 1; // +1 to include both start and end dates
    }

    // Function to validate leave duration
    function validateLeaveDuration() {
        const selectedRadio = document.querySelector('input[type="radio"][name="jenis"]:checked');
        if (!selectedRadio || !mulaiInput.value || !akhirInput.value) return true;

        const sisa = parseInt(selectedRadio.getAttribute('data-sisa'));
        const duration = calculateDays(mulaiInput.value, akhirInput.value);

        if (duration > sisa) {
            Swal.fire({
                title: 'Tidak Dapat Mengajukan Cuti',
                text: `Durasi cuti (${duration} hari) melebihi sisa cuti Anda (${sisa} hari)`,
                icon: 'error',
                confirmButtonText: 'OK'
            });
            return false;
        }
        return true;
    }

    // Validate when dates change
    mulaiInput.addEventListener('change', validateLeaveDuration);
    akhirInput.addEventListener('change', validateLeaveDuration);

    // Handle radio button selection
    const radioButtons = document.querySelectorAll('input[type="radio"][name="jenis"]');
    radioButtons.forEach(radio => {
        radio.addEventListener('click', function() {
            const sisa = parseInt(this.getAttribute('data-sisa'));
            
            if (sisa <= 0) {
                Swal.fire({
                    title: 'Tidak Dapat Mengajukan Cuti',
                    text: 'Sisa cuti Anda untuk jenis ini sudah habis',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
                this.checked = false;
            } else {
                // Validate duration when changing leave type
                validateLeaveDuration();
            }
        });
    });

    // Form submission handler
    form.addEventListener('submit', function(e) {
        const selectedRadio = document.querySelector('input[type="radio"][name="jenis"]:checked');
        
        if (!selectedRadio) return;

        const sisa = parseInt(selectedRadio.getAttribute('data-sisa'));
        if (sisa <= 0) {
            e.preventDefault();
            Swal.fire({
                title: 'Tidak Dapat Mengajukan Cuti',
                text: 'Sisa cuti Anda untuk jenis ini sudah habis',
                icon: 'error',
                confirmButtonText: 'OK'
            });
            return;
        }

        // Validate duration before submitting
        if (!validateLeaveDuration()) {
            e.preventDefault();
        }
    });

    // Additional validation for end date not being before start date
    akhirInput.addEventListener('change', function() {
        if (mulaiInput.value && this.value) {
            if (new Date(this.value) < new Date(mulaiInput.value)) {
                Swal.fire({
                    title: 'Tanggal Tidak Valid',
                    text: 'Tanggal akhir cuti tidak boleh sebelum tanggal mulai cuti',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
                this.value = '';
            }
        }
    });
});
</script>

<?php include'footer.php' ?>