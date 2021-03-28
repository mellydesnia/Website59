<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Gallery Foto</title>
        <link href="dist\css\lightgallery.css" rel="stylesheet">
		<link href="dist\css\mystyle.css" rel="stylesheet">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Home - SMP NEGERI 59 KOTA BANDUNG</title>
		<link href="resources\images\logo.ico" rel='shortcut icon'>
		<link href="resources\css\style.css?version=<?php echo filemtime('resources\css\style.css'); ?>" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    </head>
	
	
<body>
    
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
 

	<section class="container">
        <h3>Kumpulan Foto Kegiatan SMP Negeri 59 Kota Bandung</h3>
        <hr/>
		<p>* Silahkan Klik Foto Untuk Melihat Lebih Deatil</p>
        <br><br>
        
    </section>

	<?php
		$koneksi = mysqli_connect("localhost", "root", "", "db_web59") or die 
		($koneksi);
	?>
        <div class="demo-gallery">
	
            <ul id="lightgallery" class="list-unstyled row">
				<!--Mulai Looping-->
				<?php
					$tampil = mysqli_query($koneksi, "SELECT * FROM tgambar order by 
					id desc");
					while ($data = mysqli_fetch_array($tampil)) :

				?>
                <li class="col-xs-6 col-sm-4 col-md-3" data-src="resources\images\gambar/<?=$data['gambar']?>" data-sub-html="<h4><?=$data['judul']?></h4><p><?=$data['keterangan']?></p>">
                    <a href="">
                        <img class="img-responsive" src="resources\images\gambar/<?=$data['gambar']?>">
                    </a>
                </li>
				<?php
					endwhile;
				?>
                
            </ul>
        </div>
        <script type="text/javascript">
        $(document).ready(function(){
            $('#lightgallery').lightGallery();
        });
        </script>
        <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
        <script src="dist\js\lightgallery-all.min.js"></script>
        <script src="lib\jquery.mousewheel.min.js"></script>


        <br><br><br><br><br><br>
        <br><br><br><br><br><br>
        <br><br><br><br><br><br>
        <br><br><br><br><br><br>
        <br><br><br><br><br><br>
        <br><br><br><br><br><br>
        <br><br><br><br><br><br>


    </body>
    
   
    

</html>
