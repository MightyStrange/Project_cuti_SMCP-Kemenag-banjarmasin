<!DOCTYPE html>
<html lang="id">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" />
    <title>Cuti Pegawai</title>
    <style>
        .t {
            transform-origin: bottom left;
            z-index: 2;
            position: absolute;
            white-space: pre;
            overflow: visible;
            line-height: 1.5;
        }

        .text-container {
            white-space: pre;
        }

        @supports (-webkit-touch-callout: none) {
            .text-container {
                white-space: normal;
            }
        }

        /* Inline CSS for positioning text */
        #t1_1 { left: 275px; bottom: 1176px; letter-spacing: 0.23px; }
        #t2_1 { left: 270px; bottom: 1148px; letter-spacing: 0.12px; }
        #t3_1 { left: 382px; bottom: 1124px; letter-spacing: 0.14px; }
        #t4_1 { left: 315px; bottom: 1100px; letter-spacing: -0.16px; }
        #t5_1 { left: 382px; bottom: 1100px; letter-spacing: 0.13px; }
        #t6_1 { left: 359px; bottom: 1076px; letter-spacing: 0.08px; }
        #t7_1 { left: 655px; bottom: 1004px; letter-spacing: 0.12px; }
        #t8_1 { left: 240px; bottom: 927px; letter-spacing: 0.1px; }
        #t9_1 { left: 297px; bottom: 903px; letter-spacing: 0.08px; }
        #ta_1 { left: 110px; bottom: 827px; letter-spacing: 0.08px; }
        #tb_1 { left: 165px; bottom: 754px; letter-spacing: 0.24px; }
        #tc_1 { left: 385px; bottom: 754px; }
        #td_1 { left: 165px; bottom: 730px; letter-spacing: 0.13px; }
        #te_1 { left: 385px; bottom: 730px; }
        #tf_1 { left: 165px; bottom: 706px; letter-spacing: 0.1px; }
        #tg_1 { left: 330px; bottom: 706px; }
        #th_1 { left: 165px; bottom: 682px; letter-spacing: 0.09px; }
        #ti_1 { left: 385px; bottom: 682px; }
        #tj_1 { left: 165px; bottom: 658px; letter-spacing: 0.11px; }
        #tk_1 { left: 385px; bottom: 658px; }
        #tl_1 { left: 110px; bottom: 600px; letter-spacing: 0.14px; }
        #tm_1 { left: 110px; bottom: 576px; letter-spacing: 0.09px; }
        #tn_1 { left: 165px; bottom: 528px; letter-spacing: 0.12px; }
        #to_1 { left: 193px; bottom: 528px; letter-spacing: 0.07px; }
        #tp_1 { left: 193px; bottom: 503px; letter-spacing: 0.1px; }
        #tq_1 { left: 165px; bottom: 479px; letter-spacing: 0.14px; }
        #tr_1 { left: 193px; bottom: 479px; letter-spacing: 0.09px; }
        #ts_1 { left: 193px; bottom: 455px; letter-spacing: 0.11px; }
        #tt_1 { left: 110px; bottom: 407px; letter-spacing: 0.1px; }
        #tu_1 { left: 110px; bottom: 383px; letter-spacing: 0.1px; }
        #tv_1 { left: 672px; bottom: 262px; letter-spacing: 0.08px; }
        #tw_1 { left: 668px; bottom: 165px; letter-spacing: 0.16px; }

        .s0 { font-size: 24px; font-family: CIDFont-F1_8; color: #000; }
        .s1 { font-size: 21px; font-family: CIDFont-F1_8; color: #000; }
        .s2 { font-size: 18px; font-family: CIDFont-F1_8; color: #000; }
        .s3 { font-size: 21px; font-family: CIDFont-F2_g; color: #000; }

        /* New style for size 14px */
        .s4 { font-size: 20px; font-family: CIDFont-F1_8; color: #000; }
    </style>
</head>

<body style="padding: 10px;">
    

<div id="p1" style="overflow: hidden; position: relative; background-color: white; width: 909px; height: 1286px;">
    
    <!-- Tanggal dan isi surat -->
    <?php
    include '../koneksi.php';
    $idcuti = $_GET['id'];
    $data = mysqli_query($koneksi,"SELECT * FROM tbl_cuti 
                                    JOIN tbl_karyawan ON cuti_pegawai = karyawan_id 
                                    JOIN tbl_manajer ON cuti_manajer = manajer_id 
                                    JOIN tbl_devisi ON karyawan_devisi = devisi_id 
                                    WHERE cuti_id = '$idcuti'");
    $d = mysqli_fetch_assoc($data); 
    ?>
    <br>
    <br>
    <br>
    
     <!-- Begin page background -->
     <div id="pg1Overlay" style="width:100%; height:100%; position:absolute; z-index:1; background-color:rgba(0,0,0,0); -webkit-user-select: none;"></div>
<div id="pg1" style="-webkit-user-select: none;">
    <img src="../dist/img/images.png" alt="Image" style="width:150px; height:150px; margin-left: 80px; -moz-transform:scale(1); z-index: 0;">
</div>
<hr style="border: 1px solid black; margin: 20px 0;">

    <div class="text-container">
        <span id="t1_1" class="t s0">   KEMENTERIAN AGAMA REPUBLIK INDONESIA </span>
        <span id="t2_1" class="t s1">   KANTOR KEMENTERIAN AGAMA KOTA BANJARMASIN </span>
        <span id="t3_1" class="t s2">Jalan Pulau Laut No. 24 Banjarmasin 70114 </span>
        <span id="t4_1" class="t s2">Telepon </span><span id="t5_1" class="t s2">: 0511-3353586 email : bkmkalsel@kemenag.go.id </span>
        <span id="t6_1" class="t s2"> Website : https://banjarmasinkota.kemenag.go.id </span>
    </div>

    <div>
        <span id="t7_1" class="t s2">                         <?php echo date('d-m-Y'); ?></span>
        <span id="t8_1" class="t s4">          IZIN SEMENTARA PELAKSANAAN <?php echo strtoupper($d['cuti_alasan']); ?> </span>
        <span id="t9_1" class="t s4">Nomor : B.115/Kk.17.01-1/KP.08.<?php echo date('d-m-Y'); ?></span>
        <span id="ta_1" class="t s4">Diberikan izin sementara untuk  melaksanakan <?php echo $d['cuti_alasan']; ?> kepada Pegawai Negeri Sipil : </span>
        <span id="tb_1" class="t s4">Nama </span><span id="tc_1" class="t s4">: <?php echo $d['karyawan_nama']; ?> </span>
        <span id="td_1" class="t s4">NIP </span><span id="te_1" class="t s4">: <?php echo $d['karyawan_nip']; ?></span>
        <span id="tf_1" class="t s4">Pangkat / Gol Ruang </span><span id="tg_1" class="t s4"  style="margin-left: 55px;">: </span>
        <span id="th_1" class="t s4">Jabatan </span><span id="ti_1" class="t s4">: <?php echo $d['karyawan_jabatan']; ?></span>
        <span id="tj_1" class="t s4">Unit Kerja </span><span id="tk_1" class="t s4">: <?php echo $d['devisi_nama']; ?> </span>
        <span id="tl_1" class="t s4">Selama <?php echo $d['cuti_jumlah']+ 1 . " hari";?> terhitung mulai tanggal <?php echo date('d-m-Y', strtotime($d['cuti_dari'])); ?> sampai dengan <?php echo date('d-m-Y', strtotime($d['cuti_sampai'])); ?> </span>
        <span id="tm_1" class="t s4">dengan ketentuan sebagai berikut : </span>
        <span id="tn_1" class="t s4">a. </span><span id="to_1" class="t s4">Sebelum  menjalankan  <?php echo $d['cuti_alasan']; ?> wajib  menyerahkan  pekerjaannya  kepada </span>
        <span id="tp_1" class="t s4">atasan langsungnya atau pejabat lain yang ditunjuk. </span>
        <span id="tq_1" class="t s4">b. </span><span id="tr_1" class="t s4">Setelah  selesai  menjalankan  <?php echo $d['cuti_alasan']; ?> wajib melaporkan diri kepada atasan </span>
        <span id="ts_1" class="t s4">langsungnya, dan bekerja kembali sebagaimana biasa. </span>
        <span id="tt_1" class="t s4">Demikian izin sementara melaksanakan <?php echo $d['cuti_alasan']; ?> ini dibuat,untuk dapat dipergunakan </span>
        <span id="tu_1" class="t s4">sebagaimana mestinya. </span>  
        <span id="tv_1" class="t s2">Plt Kepala Kantor </span>
        <span id="tw_1" class="t s2">H BURHAN NOOR </span>
    </div>
</div>

</body>
</html>

<script>
    window.print();
    $(document).ready(function(){

    });
</script>
