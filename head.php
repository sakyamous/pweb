<?php 
    $user = $_SESSION['username'];
	if(isset($user)){
		if(substr($user,0,3) == "A12"){
			$status = "mahasiswa";
		}else if(substr($user,0,4) == "0686"){
			$status = "dosen";
		}else if(substr($user,0,5) == "admin"){
			$status = "administrator";
		}
	}
 ?>
<div class="menusamping">
	<h1>SIA <?= strtoupper($status) ?></h1>
	<a href="homeadmin.php">Home</a>
	<a href="updateMhs.php">Mahasiswa</a>
	<a href="updateDosen.php">Dosen</a>
	<a href="updateMatkul.php">Mata Kuliah</a>
	<a href="updateTawar.php">Kuliah Tawar</a>
	<a href="logout.php">Logout1</a>
</div>
