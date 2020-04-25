<?php 	

//ini adalah pendefinisian variable
//ini dilakukan agar membuat kodingan sedikit lebih rapih

$host = "localhost";
$username ="root";
$password = "";
$dbname = "sekolah";

$koneksi = mysqli_connect($host,$username,$password,$dbname) or die("koneksi anda gagal");