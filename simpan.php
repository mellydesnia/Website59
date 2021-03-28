<?php
include("koneksi.php");
$nama=$_POST['nama'];
$email=$_POST['email'];
$pesan = $_POST['pesan'];
$sql="insert into dataku(nama,email,pesan,tanggal) values ('$nama','$email','$pesan')";
mysqli_query($koneksi,$sql);
header('location:buku_tamu.php');
?>