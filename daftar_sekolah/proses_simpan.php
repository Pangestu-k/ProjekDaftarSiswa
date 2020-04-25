<?php 
include_once("function/koneksi.php");
include_once("function/helper.php");

$nama_lengkap = $_POST['nama_lengkap'];
$jk = $_POST['jk'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$agama = $_POST['agama'];
$nama_ayah = $_POST['nama_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$telp = $_POST['telp'];
$jalan = $_POST['jalan'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$desa = $_POST['desa'];
$kelurahan = $_POST['kelurahan'];
$kecamatan = $_POST['kecamatan'];
$kabupaten = $_POST['kabupaten'];
$kode_pos = $_POST['kode_pos'];
$email = $_POST['email'];
$asal_smp = $_POST['asal_smp'];
$nisn = $_POST['nisn'];
$no_kk = $_POST['no_kk'];
$nik_siswa = $_POST['nik_siswa'];
$nik_ayah = $_POST['nik_ayah'];
$nik_ibu = $_POST['nik_ibu'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$minat_program = $_POST['minat_program'];
$berat_badan = $_POST['berat_badan'];
$anak_ke = $_POST['anak_ke'];
$button = $_POST['submit'];

if ($button == "simpan") {
	$query = "INSERT INTO `tb_daftar` VALUES (NULL, '$nama_lengkap', '$jk', '$tanggal_lahir', '$agama', '$nama_ayah', '$nama_ibu', '$telp', '$jalan', '$rt', '$rw', '$desa', '$kelurahan', '$kecamatan', '$kabupaten', '$kode_pos', '$email', '$asal_smp', '$nisn', '$no_kk', '$nik_siswa', '$nik_ayah', '$nik_ibu', '$pekerjaan_ayah', '$pekerjaan_ibu', '$minat_program', '$berat_badan', '$anak_ke')";

	$eksekusi = mysqli_query($koneksi,$query);

	if ($eksekusi) {
		echo "<script>alert('Data anda berhasil disimpan');document.location.href='index.php';</script>";
	}else{
		echo "<script>alert('Data anda Gagal disimpan');document.location.href='index.php';</script>";
	}
}



 ?>