<?php
session_start();

if( !isset($_SESSION['saya_admin']) )
{
	header('location:./../'.$_SESSION['akses']);
	exit();
}

$nama = ( isset($_SESSION['nama_user']) ) ? $_SESSION['nama_user'] : '';
?>
<h1>Halaman Admin <span style="color:red"><?php echo $nama;?></span></h1>
<a href="./../logout.php">Logout</a>