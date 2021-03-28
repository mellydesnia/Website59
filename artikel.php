<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Kegiatan OSIS - SMP NEGERI 59 KOTA BANDUNG</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="resources\images\logo.ico" rel='shortcut icon'>
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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

<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<style type="text/css">
  .card-title{
    min-height: 50px;
    font-size: 25px;
  }
  .card-text {
    min-height: 120px;
    font-size: 18px;
  }
  .card-footer {
    font-size: 12px;
  }
</style>

<br><br><br>
<body>

<div class="container">
    <h2 align="center">Data Kegiatan OSIS</h2>
    <hr>
    <br>
    <div class="row" id="load_data">
      <?php
        include 'koneksi.php';
        $query = "SELECT * FROM tbl_kegiatanosis ORDER BY id ASC";
        $dewan1 = $koneksi->prepare($query);
        $dewan1->execute();
        $res1 = $dewan1->get_result();
        while ($row = $res1->fetch_assoc()) {
          $id = $row["id"];
          $foto = $row["foto"];
          $tgl_input = $row["tgl_input"];
          $penulis = $row["penulis"];
          $judul = $row["judul"];
          if (strlen($judul) > 60) {
            $judul = substr($judul, 0, 60) . "...";
          }
          $deskripsi = $row["deskripsi"];
          if (strlen($deskripsi) > 100) {
            $deskripsi = substr($deskripsi, 0, 100) . "...";
          }
      ?>

        <div class="col-sm-3 mb-3">
          <div class="card">
            <td><img src="images/kegiatanosis/<?= $row['foto'] ?>" alt="gambar" width="100%" class="card-img-top"></td>
            <div class="card-body">
              <h5 class="card-title"><?php echo $judul; ?></h5>
              <hr>
              <p class="card-text"><?php echo $deskripsi; ?></p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Post on <?php echo $tgl_input; ?></small>
                <br>
                <small class="text-muted">By <?php echo $penulis; ?></small>
              </div>
              
          </div>
        </div>
      <?php } ?>

    </div>
</div>

</body>


<br><br><br>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<div class="footer">
	<div class="footer1">
<div class="container-fluid">
	
	<div class="container ">
	<div class="row">
		<div class="col-sm-4">
		  <p>
            <div class="myframegmap"> 
                <img src="resources\images\logo.ico" alt="">
            </div></p><br>
		</div>
		<div class="col-sm-4 ">
			<h2>Contact Us</h2>
			<p >
			 
				<i class="fa fa-phone"></i> (022)63746448</a><br>
				<i class="fa fa-envelope"></i> smpn59bandung@gmail.com</a><br>
				<i class="fa fa-map-marker"></i>    Jl. Cicabe
			</p>
				
			<br>
		</div>
        <div class="col-sm-4">
		  <p>
            <div class="myframegmap"> 
                <img src="resources\images\tutwurihandayani.ico" alt="" width="220px" height="220px">
            </div></p><br>
		</div>
	</div>
		<div class="clear30"></div>
</div>
</div></div>


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
<!--footer end-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  <!-- Font Awesome 5 links-->
  <script src="https://kit.fontawesome.com/fddf5c0916.js" crossorigin="anonymous"></script>
<!--Grid row-->
   
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script  src="resources\js\funcation.js"></script>

</html>