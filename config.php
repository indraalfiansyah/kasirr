<?php
/*
  | Source Code Aplikasi Penjualan produk Kasir dengan PHP & MYSQL
  |
  | keterangan : untuk login aplikasi dengan username : admin dan password : 12345
  | 
  | 
  | 
 */

date_default_timezone_set("Asia/Jakarta");
error_reporting(0);

	// sesuaikan dengan server anda
	$host 	= 'localhost'; // host server
	$user 	= 'id21084691_tokohmesran';  // username server
	$pass 	= 'kasirH.mesran0801'; // password server, kalau pakai xampp kosongin saja
	$dbname = 'id21084691_kasir'; // nama database anda
	
	try{
		$config = new PDO("mysql:host=$host;dbname=$dbname;", $user,$pass);
		//echo 'sukses';
	}catch(PDOException $e){
		echo 'KONEKSI GAGAL' .$e -> getMessage();
	}
	
	$view = 'fungsi/view/view.php'; // direktori fungsi select data
?>

