<html>  
<head>  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <link rel="icon" href="dk.png">
  <link href="resources\images\logo.ico" rel='shortcut icon'>
		<link href="resources\css\style.css?version=<?php echo filemtime('resources\css\style.css'); ?>" rel="stylesheet">

  <title>Dewan Card Dinamis Pagination - www.dewankomputer.com</title>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="resources\css\bootstrap.min.css">
  <style type="text/css">
    .card-title{
      min-height: 40px;
      margin: 0 auto;
    }
    .card-text {
      margin-top: 20px;
    }
    .card {
      margin: 0 auto;
      margin-bottom: 20px;
    }
    .card-img-top {
      height: 200px;
      width: 200px;
      margin: 0 auto;
    }
    .card:hover {
      border: 1px solid #1C90F3;
    }
  </style>
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

<br><br>
<body>

  <div class="container">
      <h2 align="center">Gallery Foto SMP Negeri 59 Kota Bandung</h2>
      <hr>
      <div class="row" id="load_data">
        <?php
          include 'koneksi.php';

          $page = (isset($_GET['page']))? $_GET['page'] : 1;
          $limit = 4; 
          $limit_start = ($page - 1) * $limit;
          $no = $limit_start + 1;

          $query = "SELECT * FROM tgambar ORDER BY id ASC LIMIT $limit_start, $limit";
          $dewan1 = $koneksi->prepare($query);
          $dewan1->execute();
          $res1 = $dewan1->get_result();
          while ($row = $res1->fetch_assoc()) {
            $id = $row["id"];
            $gambar = $row["gambar"];
            $judul = $row["judul"];
            if (strlen($judul) > 60) {
              $judul = substr($judul, 0, 60) . "...";
            }
            $keterangan = $row["keterangan"];
            if (strlen($keterangan) > 100) {
              $keterangan = substr($keterangan, 0, 100) . "...";
            }
        ?>
          <div class="col-sm-3 mb-3">
            <div class="card">
              <img src="resources\images\gambar/<?= $row['gambar'] ?>" class="card-img-top" alt="gambar">
              <div class="card-body">
                <h5 class="card-title"><?php echo $judul; ?></h5>
                <p class="card-text"><?php echo $keterangan; ?></p>
              </div>
            </div>
          </div>
        <?php } ?>

      </div>
            <br><br><br>
      <?php
          $query_jumlah = "SELECT count(*) AS jumlah FROM tgambar";
          $dewan1 = $koneksi->prepare($query_jumlah);
          $dewan1->execute();
          $res1 = $dewan1->get_result();
          $row = $res1->fetch_assoc();
          $total_records = $row['jumlah'];
        ?>
        <nav class="mb-5">
          <ul class="pagination justify-content-center">
            <?php
              $jumlah_page = ceil($total_records / $limit);
              $jumlah_number = 1; //jumlah halaman ke kanan dan kiri dari halaman yang aktif
              $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1;
              $end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page;
              
              if($page == 1){
                echo '<li class="page-item disabled"><a class="page-link" href="#">First</a></li>';
                echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
              } else {
                $link_prev = ($page > 1)? $page - 1 : 1;
                echo '<li class="page-item"><a class="page-link" href="?page=1">First</a></li>';
                echo '<li class="page-item"><a class="page-link" href="?page='.$link_prev.'" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
              }

              for($i = $start_number; $i <= $end_number; $i++){
                $link_active = ($page == $i)? ' active' : '';
                echo '<li class="page-item '.$link_active.'"><a class="page-link" href="?page='.$i.'">'.$i.'</a></li>';
              }

              if($page == $jumlah_page){
                echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
                echo '<li class="page-item disabled"><a class="page-link" href="#">Last</a></li>';
              } else {
                $link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
                echo '<li class="page-item"><a class="page-link" href="?page='.$link_next.'" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
                echo '<li class="page-item"><a class="page-link" href="?page='.$jumlah_page.'">Last</a></li>';
              }
            ?>
          </ul>
        </nav>
  </div>

  <div class="text-center mt-5">© <?php echo date('Y'); ?> Copyright Template Card :
      <a href="https://dewankomputer.com/"> Dewan Komputer</a>
  </div>
</body>
</html>