<?php
session_start();
$nama = $_SESSION['nama']; 

$akses = $_SESSION ['akses'];
//print_t($_SESSION);
include 'header.php';
if ($akses!='admin') {
	echo "halaman boleh diakses, hai $nama";
}else{
	header('location: form.html');
}

?>