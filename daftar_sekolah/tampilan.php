<?php 
    include_once("function/helper.php");
    include_once("function/koneksi.php");
    $id = $_GET['id'];
    $query = mysqli_query($koneksi,"SELECT * FROM tb_daftar WHERE id_daftar = $id ");
    $row = mysqli_fetch_assoc($query);
 ?>

 <!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Data Siswa</title>
        <style>
            .utama{
                margin:0 auto;
                border:thin solid #000;
                width:700px;
            }
            .print{
                margin:0 auto;
                width:700px;
            }
            a{
                text-decoration: none;

            }
        </style>
    </head>

    <body>
        <div class="print">
            <a href="#" onclick="document.getElementById('print').style.display='none';window.print();">
                <img src="images/print-icon.png" id="print" width="25" height="25" border="0" /></a>
        </div>

        <div class="utama">
            <table width="98%" border="0" cellspacing="0" cellpadding="0" align="center" style="margin-top:10px;">
                <tr>
                    <td width="7%" rowspan="3" align="center" valign="top">
                        <img src="images/logo.png" width="55" height="55" /></td>
                    <td width="93%" valign="top"><strong style="color:lightgreen;">YAYASAN PRAWITAMA </strong></td>
                </tr>
                <tr>
                    <td valign="top">SMK Wikrama 1 GARUT </td>
                </tr>
                <tr>
                    <td valign="top">Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah </td>
                </tr>
            </table>

            <table width="100%">
                <tr><td><hr></td></tr>
            </table> 

            <table width="100%">   
            <tr>
               <strong>Data Calon Murid</strong>
            </tr>

            <tr>
                <hr>
            </tr>

            <tr>
                <td width="3%">1.</td>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td> <?= $row['nama_lengkap']; ?></td>
            </tr>
            

            <tr>
                <td>2.</td>
                <td >Jenis kelamin</td>
                <td>:</td>
                <td> <?= $row['jk']; ?></td>
            </tr>
            

            <tr>
                <td>3.</td>
                <td >Tanggal Lahir</td>
                <td>:</td>
                <td> <?= $row['tanggal_lahir']; ?></td>
            </tr>
            

            <tr>
                <td>4.</td>
                <td >Agama</td>
                <td>:</td>
                <td> <?= $row['agama']; ?></td>
            </tr>
            

            <tr>
                <td>5.</td>
                <td >Nama Ayah</td>
                <td>:</td>
                <td> <?= $row['nama_ayah']; ?></td>
            </tr>
            

            <tr>
                <td>6.</td>
                <td >Nama Ibu</td>
                <td>:</td>
                <td> <?= $row['nama_ibu']; ?></td>
            </tr>
            

            <tr>
                <td>7.</td>
                <td >No Telp</td>
                <td>:</td>
                <td> <?= $row['telp']; ?></td>
            </tr>
            

            <tr>
                <td>8.</td>
                <td >Jalan</td>
                <td>:</td>
                <td> <?= $row['jalan']; ?></td>
            </tr>
            

            <tr>
                <td>9.</td>
                <td >rt</td>
                <td>:</td>
                <td> <?= $row['rt']; ?></td>
            </tr>
            

            <tr>
                <td>10.</td>
                <td >rw</td>
                <td>:</td>
                <td> <?= $row['rw']; ?></td>
            </tr>
            

            <tr>
                <td>11.</td>
                <td >Desa</td>
                <td>:</td>
                <td> <?= $row['desa']; ?></td>
            </tr>
            

            <tr>
                <td>12.</td>
                <td >Kelurahan</td>
                <td>:</td>
                <td> <?= $row['kelurahan']; ?></td>
            </tr>
            

            <tr>
                <td>13.</td>
                <td >Kecamatan</td>
                <td>:</td>
                <td> <?= $row['kecamatan']; ?></td>
            </tr>
            

            <tr>
                <td>14.</td>
                <td >Kabupaten</td>
                <td>:</td>
                <td> <?= $row['kabupaten']; ?></td>
            </tr>
            

            <tr>
                <td>15.</td>
                <td >Kode Pos</td>
                <td>:</td>
                <td> <?= $row['kode_pos']; ?></td>
            </tr>
            

            <tr>
                <td>16.</td>
                <td >Email</td>
                <td>:</td>
                <td> <?= $row['emai']; ?></td>
            </tr>
            

            <tr>
                <td>17.</td>
                <td >Asal SMP</td>
                <td>:</td>
                <td> <?= $row['asal_smp']; ?></td>
            </tr>
            

            <tr>
                <td>18.</td>
                <td >NISN</td>
                <td>:</td>
                <td> <?= $row['nisn']; ?></td>
            </tr>
            

            <tr>
                <td>19.</td>
                <td >No KK</td>
                <td>:</td>
                <td> <?= $row['no_kk']; ?></td>
            </tr>
            

            <tr>
                <td>20.</td>
                <td >Nik Siswa</td>
                <td>:</td>
                <td> <?= $row['nik_siswa']; ?></td>
            </tr>
            

            <tr>
                <td>21.</td>
                <td >Nik Ayah</td>
                <td>:</td>
                <td> <?= $row['nik_ayah']; ?></td>
            </tr>
            

            <tr>
                <td>22.</td>
                <td >Nik Ibu</td>
                <td>:</td>
                <td> <?= $row['nik_ibu']; ?></td>
            </tr>
            

            <tr>
                <td>23.</td>
                <td >Pekerjaan Ayah</td>
                <td>:</td>
                <td> <?= $row['pekerjaan_ayah']; ?></td>
            </tr>
            

            <tr>
                <td>24.</td>
                <td >Pekerjaan Ibu</td>
                <td>:</td>
                <td> <?= $row['pekerjaan_ibu']; ?></td>
            </tr>
            

            <tr>
                <td>25.</td>
                <td >Minat Program</td>
                <td>:</td>
                <td> <?= $row['minat_program']; ?></td>
            </tr>
            

            <tr>
                <td>26.</td>
                <td >Berat Badan</td>
                <td>:</td>
                <td> <?= $row['berat_badan']; ?></td>
            </tr>
            

            <tr>
                <td>27.</td>
                <td >Anak ke</td>
                <td>:</td>
                <td> <?= $row['anak_ke']; ?></td>
            </tr>
            
            </table>
            
        </div>
    </body>
    <center><p>&copy; <?php echo date('Y'); ?> SMK WIKRAMA 1 GARUT</p></center>
</html>