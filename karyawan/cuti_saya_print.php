<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pegawai -Aplikasi Pengajuan Cuti</title>
    <link rel="stylesheet" type="text/css" href="laporan.css"/>
    <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

    <style>

        ol.d {
          list-style-type: lower-number;
      }
  </style>

  <style type="text/css">

  </style>
</head>
<body style="padding: 10px;">
 <?php
 include '../koneksi.php';
 $idcuti = $_GET['id'];
 $data = mysqli_query($koneksi,"select * from tbl_cuti, tbl_karyawan, tbl_manajer, tbl_devisi where cuti_id='$idcuti' and cuti_pegawai=karyawan_id and karyawan_devisi=devisi_id and cuti_manajer=manajer_id");
 $d = mysqli_fetch_assoc($data);     
 ?>

 <div style="float:right;display:block;width:200px">  
 <p>Banjarmasin <?php echo date('d-m-Y') ?></p>
    <p>PERATURAN BADAN KEPEGAWAIAN NEGARA REPUBLIK INDONESIA NOMOR 24 TAHUN 2017 TENTANG TATA CARA PEMBERIAN CUTI PEGAWAI NEGERI SIPIL<br> 
    <p>Banjarmasin <br>
    <p>Kepada <br>
        Yth,<br>        
           Di ....................<br>
        
    </p>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center><p><b>FORMULIR PERMINTAAN DAN PEMBERIAN CUTI</b></p></center>

<table border="1" border="1" width="670px">
    <tr>
        <th colspan="5" style="text-align: left;">1. Data Pegawai</th>
    </tr>
    <tr>
        <td>Nama</td>
        <td><?php echo $d['karyawan_nama'] ?></td>             
        <td>NIP/NRR </td>
        <td><?php echo $d['karyawan_nip'] ?></td>
    </tr>
    <tr>
        <td>Jabatan</td>
        <td><?php echo $d['karyawan_jabatan'] ?></td>        
        <td>Masa Kerja</td>
        <td></td>
    </tr>
    <tr>
        <td>Unit Kerja</td>
        <td><?php echo $d['devisi_nama'] ?></td>
    </tr>
</table>

<br>
<table border="1" border="1" width="670px">
    <tr>
        <th colspan="5" style="text-align: left;">II.JENIS CUTI YANG DIAMBIL</th>
    </tr>
    <tr>
        <?php
        $jenis = mysqli_query($koneksi,"select * from tbl_jenis_cuti");
        while($j = mysqli_fetch_array($jenis)){
            ?>
            <td><?php echo $j['jenis_nama'] ?></td>
            <td><?php echo $j['jenis_jumlah'] ?></td>
            <?php
        }

        ?>

        
    </tr>    
</table>
<br>

<table border="1" border="1" width="670px">
    <tr>
        <th colspan="5" style="text-align: left;">III. ALASAN CUTI</th>
    </tr>
    <tr>
        <td><?php echo $d['cuti_alasan'] ?></td>        
    </tr>    
</table>
<br>

<table border="1" border="1" width="670px">
    <tr>
        <th colspan="6" style="text-align: left;">IV. LAMANYA CUTI</th>
    </tr>
    <tr>
        <td>Selama</td>        
        <td><?php echo $d['cuti_jumlah']+ 1 . " Hari"?></td>        
        <td>Mulai Tanggal</td>        
        <td><?php echo date('d-m-Y', strtotime($d['cuti_dari'])) ?></td>
        <td>Sampai Tanggal</td>        
        <td><?php echo date('d-m-Y', strtotime($d['cuti_sampai'])) ?></td>
    </tr>    
</table>
<br>

<table border="1" border="1" width="670px">
      
    <tr>
        <th colspan="6" style="text-align: left;">V. CATATAN CUTI</th>
    </tr>
    <tr>
        <td colspan="3">1 Cuti Tahunan</td>   
        <tr>
            <td>Tahun</td>
            <td>Sisa </td>
            <td>Keterangan</td>
        </tr>           
        <td colspan="3">2 Cuti Besar</td>
        <tr>
            <td>Tahun</td>
            <td>Sisa</td>
            <td>Keterangan</td>
        </tr> 
        <td colspan="3">3 Cuti Sakit</td>
        <tr>
            <td>Tahun</td>
            <td>Sisa</td>
            <td>Keterangan</td>
        </tr>
        <td colspan="3">4 Cuti Melahirkan</td>
        <tr>
            <td>Tahun</td>
            <td>Sisa</td>
            <td>Keterangan</td>
        </tr> 
        <td colspan="3">5 Cuti Karena Alasan Penting</td>
        <tr>
            <td>Tahun</td>
            <td>Sisa</td>
            <td>Keterangan</td>
        </tr> 
        <td colspan="3">6 Cuti di Luar Tanggungan Negara</td>
        <tr>
            <td>Tahun</td>
            <td>Sisa</td>
            <td>Keterangan</td>
        </tr>                  
    </tr>    

</table>
<br>
<br>
<br>
<br>


<table border="1" border="1" width="670px">
    <tr>
        <th colspan="5" style="text-align: left;">VI. ALAMAT SELAMA MENJALANKAN CUTI</th>
        <th>Telepon </th>
        <td><?php echo $d['karyawan_kontak'] ?></td>
    </tr>
    <tr>
        <td colspan="5"><?php echo $d['cuti_alamat'] ?></td>
        <td colspan="2">
            <center>Hormat Saya</center>
            <br>
            <br>
            <br>            
            <center>.........................</center>
            <br>
        </td>
    </tr>

</table>
<br>



<table border="1" border="1" width="670px">
    <tr>
        <th colspan="5" style="text-align: left;">VII. PERTIMBANGAN ATASAN LANGSUNG</th>        
    </tr>
    <tr>
     <td>DISETUJUI</td>
     <td>PERUBAHAN****</td>
     <td>DITANGGUHKAN****</td>
     <td>TIDAK DISETUJUI****</td>
 </tr>

 <tr>
    <td><br></td>    
    <td></td>    
    <td></td>    
    <td></td>    
</tr>

<tr>
    <td colspan="3"></td>
    <td>
        <br>
        <br>
        <br>
        <br>
        <center>
           <p>.........................</p> 
        </center>
    </td>
</tr>

</table>
<br>


<table border="1" border="1" width="670px">
    <tr>
        <th colspan="5" style="text-align: left;">VIII. KEPUTUASN PEJABAT YANG MEMEBERIKAN CUTI</th>        
    </tr>
    <tr>
     <td>DISETUJUI</td>
     <td>PERUBAHAN****</td>
     <td>DITANGGUHKAN****</td>
     <td>TIDAK DISETUJUI****</td>
 </tr>
 <tr>
    <td><br></td>    
    <td></td>    
    <td></td>    
    <td></td>    
</tr>

<tr>
    <td colspan="3"></td>
    <td>
        <center></center>
        <br>
        <br>
        <br>
        <br>
        <center>
            <p>............................</p>
            NIP
        </center>
    </td>
</tr>

</table>
<br>

<br>


<p>Catatan :</p>
<ol class="d">
    <li>* Coret yang tidak perlu</li>
    <li>** Pilih salah satu dengan memberikan tanda centang</li>
    <li>*** Diisi oleh pejabat yang menangani bidang kepegawaian sebelum PNS mengajukan cuti</li>
    <li>**** Diberi tanda centang oleh atasannya</li>
    <li>N Cuti tahun yang berjalan</li>
    <li>N-1 Sisa Cuti 1 tahun sebelumnya</li>
    <li>N-2 Sisa Cuti 2 tahun sebelumnya</li>    
</ol>



</body>

</html>


<script>
    window.print();
    $(document).ready(function(){

    });
</script>