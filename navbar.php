<nav class="navbar navbar-expand-lg nav-orange">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
			<a class="nav-item nav-link text-white navlink <?= $aktif == 'home' ? 'active' : '' ?>" href="index.php">HOME</a>
			<a class="nav-item nav-link text-white navlink <?= $aktif == 'bukutamu' ? 'active' : '' ?>" href="buku_tamu.php">BUKU TAMU</a>
            <a class="nav-item nav-link text-white navlink <?= $aktif == 'visimisi' ? 'active' : '' ?>" href="visi_misi.php">VISI MISI</a>
            <a class="nav-item nav-link text-white navlink <?= $aktif == 'galery' ? 'active' : '' ?>" href="galery.php">GALERY</a>
			<a class="nav-item nav-link text-white navlink <?= $aktif == 'guru' ? 'active' : '' ?>" href="guru.php">GURU</a>
			<a class="nav-item nav-link text-white navlink <?= $aktif == 'kontakkami' ? 'active' : '' ?>" href="kontak_kami.php">KONTAK KAMI</a>
		</div>
	</div>
</nav>