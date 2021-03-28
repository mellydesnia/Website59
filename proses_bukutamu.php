<?php 

require_once 'koneksi.php';
if(!isset($_POST['kirim'])) header('Location: buku_tamu.php');

$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$isi = mysqli_real_escape_string($koneksi, $_POST['isi']);

$query = mysqli_query($koneksi, "INSERT INTO tbl_bukutamu (nama, email, isi) VALUES ('$nama', '$email', '$isi')");

if($query){
	?>
		<script>
			alert('Terkirim, Terimkasih Sudah Mengisi Buku Tamu')
			document.location.href = 'buku_tamu.php';
		</script>
	<?php
} else {
	?>
		<script>
			alert('Gagal Terkirim!')
			document.location.href = 'buku_tamu.php';
		</script>
	<?php
}