<?php 
session_start();

$koneksi = mysqli_connect('localhost', 'root', '', 'db_web59') or die('gagal koneksi');


  if(!$koneksi){ //jika tidak terkoneksi maka akan tampil error
    die ("Koneksi dengan database gagal: ".mysqli_connect_error());
  }
?>