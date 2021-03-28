<!DOCTYPE html>
<html>
<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buku Tamu - SMP NEGERI 59 KOTA BANDUNG</title>
    <link href="resources\images\logo.ico" rel='shortcut icon'>
    <link href="resources\css\style.css?version=<?php echo filemtime('resources\css\style.css'); ?>" rel="stylesheet">
</head>

    <!--header-->
    
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
   
        <br><br><br>

        <div class="banner">

        </div>

        <br><br><br>

    <!--banner-->
    
  

    <div class="container">
    <br><br><br><br>
    <h2>Form Pengisian Minat Masyarakat Terhadap SMP Negeri 59 Kota Bandung
    </h2>
    <hr/>
    <br><br>
    
        <form action="proses_minat.php" method="post">
        <div class="form-group">
                <label for="nama">Nama :</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" />
            </div>
        <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" name="email" class="form-control" placeholder="Masukan Email" />
            </div>
        <div class="form-group">
                <label for="tlp">No Telepon :</label>
                <input type="number" name="tlp" class="form-control" placeholder="Masukan No HP Anda" />
            </div>
           
            <br><br>

            <div class="form-group">
                <button type="submit" class="btn btn-sm btn-primary" name="kirim">Kirim</button>
                <button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')">Batal</button>
            </div>
        </form>
    </div>
    <br><br><br><br>
    
   
    <br><br><br><br>
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
				<i class="fa fa-envelope"></i>  smpn59bandung@gmail.com</a><br>
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


</html>