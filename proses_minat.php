<?php 

require_once 'koneksi.php';
if(!isset($_POST['kirim'])) header('Location: minat.php');

$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$tlp = mysqli_real_escape_string($koneksi, $_POST['tlp']);

$query = mysqli_query($koneksi, "INSERT INTO tbl_minat (nama, email, tlp) VALUES ('$nama', '$email', '$tlp')");

if($query){
	?>
		<script>
			alert('Terkirim, Terimkasih Sudah Mengisi')
			document.location.href = 'minat.php';
		</script>
	<?php
} else {
	?>
		<script>
			alert('Gagal Terkirim!')
			document.location.href = 'minat.php';
		</script>
	<?php
}