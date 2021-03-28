<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - SMP NEGERI 59 KOTA BANDUNG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Guru</title>
    <link href="resources\images\logo.ico" rel='shortcut icon'>
    <link href="resources\css\style.css?version=<?php echo filemtime('resources\css\style.css'); ?>" rel="stylesheet">
</head>

<div class="display">
<img src="resources\images\logo59.jpg" alt="" height="180px" width="400px">
</div>

<nav class='navmenu'>
  <ul>
  <li><a href="index.php">Home</a></li>
  <li class='submenu'><a href="#">Akademik ˅ </a>
    <ul class='dropdown'>
        <li><a href="guru.php"> Data Guru</a></li>
        <li><a href="galery.php">Gallery</a></li>
        <li><a href="kaldik.php">Kalender Akademik</a></li>
        <li><a href="fasilitas.php">Fasilitas</a></li>
        <li><a href="eskul.php">Ekstrakulikuler</a></li>
    </ul>
</li>
    
<li class='submenu'><a href="#">OSIS ˅ </a>
    <ul class='dropdown'>
        <li><a href="profil.php">Profil OSIS</a></li>
        <li><a href="artikel.php"> Kegiatan OSIS</a></li>
        
    </ul>
</li>
  <li><a href="pengumuman.php">Pengumuman</a></li>
  <li><a href="buku_tamu.php">Buku Tamu</a></li>
  <li><a href="visi_misi.php">Visi Misi</a></li>
  <li><a href="minat.php">Minat</a></li>
  <li><a href="kontak_kami.php">Kontak Kami</a></li>
  <li><a href="bot.php">Hub Admin</a></li>

  </ul>
</nav>



    <style>
        th {
			border: 2px solid black;
			text-align: center;
		}
        td {
            border: 2px solid black;
			text-align: center;
            width: 100px;
            font-size: 18px;
            font: bold;
            font-family: 'Times New Roman', Times, serif;
            
        }
    </style>
  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA GURU
            </div>
            <div class="card-body"><table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col" >Nama</th>
                    <th scope="col">Mata Pelajaran</th>
                    <th scope="col" width= "20px">Foto</th>
                  </tr>
                </thead>
                  <?php 
                     //untuk meinclude kan koneksi
                     include('koneksi.php');
         
                         //jika kita klik cari, maka yang tampil query cari ini
                         if(isset($_GET['kata_cari'])) {
                             //menampung variabel kata_cari dari form pencarian
                             $kata_cari = $_GET['kata_cari'];
         
                             //jika hanya ingin mencari berdasarkan kode_tbl_guru, silahkan hapus dari awal OR
                             //jika ingin mencari 1 ketentuan saja query nya ini : SELECT * FROM tbl_guru WHERE kode_tbl_guru like '%".$kata_cari."%' 
                             $query = "SELECT * FROM tbl_guru WHERE nama like '%".$kata_cari."%' OR mata_pelajaran like '%".$kata_cari."%' ORDER BY id ASC";
                         } else {
                             //jika tidak ada pencarian, default yang dijalankan query ini
                             $query = "SELECT * FROM tbl_guru ORDER BY id ASC";
                         }
                         
         
                         $result = mysqli_query($koneksi, $query);
         
                         if(!$result) {
                             die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
                         }
                         //kalau ini melakukan foreach atau perulangan
                         while ($row = mysqli_fetch_assoc($result)) {
                     ?>
                     <tr>
                         <td><?php echo $row['nama']; ?></td>
                         <td><?php echo $row['mata_pelajaran']; ?></td>
                         <td><img src="images/guru/<?= $row['foto'] ?>" alt="" width="100%" class="img-thumbnail"></td>
                         
                                         
                     </tr>
                     <?php
                     }
                     ?>
                <?php  ?>
                </table>
              
            </div>
          </div>
      </div>
    </div>
    </body>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>

  
</html>
<br><br>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<div class="footer">


<div class="footer2">
	<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="clear30"></div>
			<div class="col-sm-12 text-center"><p><strong>copyright © 2021 Melly Desnia</strong></p></div>
			<div class="clear30"></div>
		</div>
		
	</div>
	
</div>
</div>
</div>