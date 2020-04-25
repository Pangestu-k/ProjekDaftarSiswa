<?php 

include_once("function/helper.php");
include_once("function/koneksi.php");

//isset fungsinya untuk mengecek sebuah variable dan disini kita memakai ternary opetor yaitu ? (if true) : (if false)
$page = isset($_GET['page']) ? $_GET['page'] : false;

?>


<!-- file index adalah file yang utama yang akan ditampilkan pertama kali oleh w browser saat kita mengakses
program weshop ini -->

<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa SMK Wikama 1 Garut</title>
	<link href="css/style.css" type="text/css" rel="stylesheet" />
</head>
<body style="background-image: url('images/a.PNG');">

   <div id="container">

		<!-- ini adalah pembuka tag content -->
	   	<div id="content">
		   		<?php 
		   			$filename = "$page.php"; //ini adalah variable page yang di concate dengan string .php 
		   			if (file_exists($filename)) {
		   				include ($filename);
		   			}else{
		   				include ("main.php");
		   			}
		   		 ?>
	   	</div>
		<!-- ini adalah penutup tag content -->

   </div>

</body>
</html>