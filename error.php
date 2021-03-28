<?php
require_once ("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ERROR 404!</title>
</head>
<link rel="stylesheet" href="<?=('resources\css\bootstrap.min.css'); ?>" media="screen" title="no title">
<link rel="shorcut icon" href="<?= ('images/favicon.png'); ?>">
<script type="text/javascript" src="<?= ('resources\js\jquery.js'); ?>"></script>
<style>
	body{
		background-image: url('resources\images\error.jpg');
		color: black !important;
	}
	.box{
		margin:15% auto !important;
		padding: 20px;
		border-radius: 5px;
		width: 50%;
		background: rgba(255,255,255,0.3);
		text-align: center;
	}
	a{
		color: black;
		text-decoration: underline;
	}
</style>
<body>
	<div class="container">
		<div class="row">
        <img src="resources\images\error.jpg" alt="">
			<div class="box">
				<h1>Oops....!!!</h1>
				<h4>Maaf! Halaman yang Anda cari tidak ditemukan!</h4>
				<br>
			
			</div>
		</div>
	</div>
</body>
</html>