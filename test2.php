<!DOCTYPE html>
<html>
<head>
<style>
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 280px;
  height: 380px;
  margin-left: 0 auto;
  margin-right: 0 auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>

<div class="row" id="load_data">
      <?php
        include 'koneksi.php';
        $query = "SELECT * FROM tgambar ORDER BY id ASC";
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

      
<div class="responsive">
  <div class="gallery">
  <img src="resources\images\gambar/<?= $row['gambar'] ?>" alt="gambar">
    </a>
    <div class="desc"><h4><?php echo $judul; ?></h4></div>
    <p1><?php echo $keterangan; ?></p1>
  </div>
</div>
      <?php } ?>

    </div>
    <br><br>
</html>


<!-- The grid: four columns -->


<!-- The expanding image container -->
<div class="container">
  <!-- Close the image -->
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>

  <!-- Expanded image -->
  <img id="expandedImg" style="width:100%">

  <!-- Image text -->
  <div id="imgtext"></div>
</div>