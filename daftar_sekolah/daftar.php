<form action="<?= BASE_URL . "proses_simpan.php"; ?>" method="post" >

<div class="container-form" style="overflow: hidden;width:100%;height: auto; ">

	<div class="kiri" style="float: left;">
		<div class="element-form">
			<label>Nama lengkap</label>
			<input type="text" name="nama_lengkap" required>
		</div>

		<div class="element-form">
			<label>Jenis Kelamin</label>
			  <input type="radio" name="jk" value="lk"/ required>Laki-laki
			  <input type="radio" name="jk" value="p" />Perempuan
		</div>

		<div class="element-form">
			<label>Tanggal lahir</label>
			<input type="date" name="tanggal_lahir" required>
		</div>

		<div class="element-form">
			<label>Agama</label>
			<select name="agama" required>
				<option value="islam">islam</option>
				<option value="kristen">kristen</option>
				<option value="budha">budha</option>
				<option value="hindu">hindu</option>
				<option value="katholik">katholik</option>
				<option value="konghuchu">konghuchu</option>
			</select>
		</div>

		<div class="element-form">
			<label>Nama Ayah</label>
			<input type="text" name="nama_ayah" required>
		</div>

		<div class="element-form">
			<label>Nama Ibu</label>
			<input type="text" name="nama_ibu" required>
		</div>

		<div class="element-form">
			<label>Telp</label>
			<input type="number" name="telp" required>
		</div>

		<div class="element-form">
			<label>Jalan</label>
			<textarea name="jalan" required></textarea>
		</div>

		<div class="element-form">
			<label>RT</label>
			<input type="number" name="rt" required>
		</div>
	</div>


	<div class="tengah" style="float: left;">
		<div class="element-form">
			<label>RW</label>
			<input type="number" name="rw" required>
		</div>

		<div class="element-form">
			<label>Desa</label>
			<input type="text" name="desa" required>
		</div>

		<div class="element-form">
			<label>Kelurahan</label>
			<input type="text" name="kelurahan" required>
		</div>

		<div class="element-form">
			<label>Kecamatan</label>
			<input type="text" name="kecamatan" required>
		</div>

		<div class="element-form">
			<label>Kabupaten</label>
			<input type="text" name="kabupaten" required>
		</div>

		<div class="element-form">
			<label>Kode Pos</label>
			<input type="number" name="kode_pos" required>
		</div>

		<div class="element-form">
			<label>Email</label>
			<input type="email" name="email" required required>
		</div>

		<div class="element-form">
			<label>Asal SMP</label>
			<input type="text" name="asal_smp" required>
		</div>

		<div class="element-form">
			<label>NISN</label>
			<input type="number" name="nisn" required>
		</div>
	</div>

	<div class="kanan" style="float: left;">
		<div class="element-form">
			<label>NO KK</label>
			<input type="number" name="no_kk" required>
		</div>

		<div class="element-form">
			<label>NIK Siswa</label>
			<input type="number" name="nik_siswa" required>
		</div>

		<div class="element-form">
			<label>NIK Ayah</label>
			<input type="number" name="nik_ayah" required>
		</div>

		<div class="element-form">
			<label>NIK Ibu</label>
			<input type="number" name="nik_ibu" required>
		</div>

		<div class="element-form">
			<label>Pekerjaan Ayah</label>
			<input type="text" name="pekerjaan_ayah" required>
		</div>

		<div class="element-form">
			<label>Pekerjaan Ibu</label>
			<input type="text" name="pekerjaan_ibu" required>
		</div>

		<div class="element-form">
			<label>Minat Program</label>
				<select name="minat_program" required>
					<option value="rpl">rpl</option>
					<option value="tkj">tkj</option>
				</select>
		</div>

		<div class="element-form">
			<label>Berat Badan</label>
			<input type="number" name="berat_badan" required>
		</div>

		<div class="element-form">
			<label>Anak ke</label>
			<input type="number" name="anak_ke" required>
		</div>

	</div>
</div>
	<div class="element-form">
		<input type="submit" name="submit" value="simpan">
	</div>
</form>