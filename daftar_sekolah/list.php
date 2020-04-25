<?php 

	include_once("function/helper.php");
	include_once("function/koneksi.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Siswa yg Sudah Daftar</title>
	<style type="text/css">
		html {
		    margin: 0;
		    padding: 0;
		}
		body {
		    font-family: 'Handlee', cursive;
		    font-size: 13pt;
		    background-image: url('images/a.PNG');
		    padding: 10px;
		    margin: 0;
		}
		h1 {
		    font-size: 15pt;
		    color: #20bcd5;
		    text-align: center;
		    padding: 18px 0 18px 0;
		    margin: 0 0 15px 0;
		}
		h1 span {
		    border: 4px dashed #20bcd5;
		    padding: 10px;
		}
		p {
		    padding: 0;
		    margin: 0;
		}
		.img-circle {
		    border: 3px solid white;
		    border-radius: 50%;
		}
		.section {
		    background-color:skyblue;
		    padding: 15px;
		    margin-bottom: 10px;
		    border-radius: 10px;
		}
		#header {
		    background-image: url("https://www.sololearn.com/Uploads/header.jpg");
		    background-size: cover;
		}
		#header img {
		    display: block;
		    width: 80px;
		    height: 80px;
		    margin: auto;
		}
		#header p {
		    font-size: 25pt;
		    color: #3b464c;
		    padding-top: 5px;
		    margin: 0;
		    font-weight: bold;
		    text-align: center;
		}
		.quote {
		    font-size: 12pt;
		    text-align: right;
		    margin-top: 10px;
		}
		table {
		    width: 100%;
		    font-size: 20pt;
		}
		table, th, td {
		    background-color: white;
		    border: 2px solid #cecece;
		    border-collapse: collapse;
		    text-align: center;
		    table-layout: fixed;
		}
		.selected {
		    background-color: #f36f48;
		    font-weight: bold;
		    color: white;
		}
		li {
		    margin-bottom: 15px;
		    font-weight: bold;
		}
		hr {
		    border: 0;
		    height: 1px;
		    background: #f36f48;
		}
	</style>
</head>
<body>

	<?php 
	$query = mysqli_query($koneksi,"SELECT * FROM tb_daftar");
	if (mysqli_num_rows($query) == 0) {
		echo "<h3>Saat ini belum ada nama kategori di dalam table kategori</h3>";
	}else{
		echo "<h1><span>Calon Peserta Didik</span></h1>";
		echo "<div class='section'>";
			echo "<table border=1'>";

				echo "<tr class='baris-title'>
						<th class='kolom-nomor'>Nomor</th>
						<th class='kiri'>Nama</th>
						<th class='tengah'>Asal smp</th>
						<th class='tengah'>action</th>
					  </tr>";

				$no = 1;
				while ($row = mysqli_fetch_assoc($query)) {
					
					echo "<tr>
							<td>$no</td>
							<td class='kiri'>$row[nama_lengkap]</td>
							<td class='tengah'>$row[asal_smp]</td>
							<td class='tengah'>
							  <a href='tampilan.php?id=$row[id_daftar]'>lihat</a>
							</td>
					     </tr>";
					     $no++;
				}

			echo "</table>";
		echo "</div>";
	}
 ?>
</body>
</html>

