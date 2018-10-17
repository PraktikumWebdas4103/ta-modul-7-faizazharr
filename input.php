<?php include("conn.php"); ?>
<form method="POST">
	<table>
		<tr>
			<td>
				Nama
			</td>
			<td>
				:
			</td>
			<td>
				<input type="text" name="nama">
			</td>
		</tr>
		<tr>
			<td>
				NIM
			</td>
			<td>
				:
			</td>
			<td>
				<input type="text" name="nim">
			</td>
		</tr>
		<tr>
			<td>
				Jenis kelamin
			</td>
			<td>
				:
			</td>
			<td>
				<input type="radio" name="jk" value="laki-laki"> laki-laki
				<input type="radio" name="jk" value="perempuan"> perempuan
			</td>
		</tr>
		<tr>
			<td>
				Program Studi
			</td>
			<td>
				:
			</td>
			<td>
				<select name="prodi">
				<option value="manajemen informatika">manajemen informatika</option> 
				<option value="teknik komputer">manajemen informatika</option> 
				<option value="komputansi akuntansi">manajemen informatika</option> 
				<option value="teknik informatika">manajemen informatika</option> 
				</select>
			</td>
		</tr>
		<tr>
			<td>
				Fakultas
			</td>
			<td>
				:
			</td>
			<td>
				<select name="fakultas">
				<option value="Fakultas Ilmu Terapan">FAKULTAS ILMU TERAPAN</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				Asal
			</td>
			<td>
				:
			</td>
			<td>
				<input type="text" name="asal">
			</td>
		</tr>
		<tr>
			<td>
				Moto hidup
			</td>
			<td>
				:
			</td>
			<td>
				<textarea name="moto"></textarea>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="masuk" value="masuk">
			</td>
		</tr>
	</table>
</form>

<?php  
	if (isset($_POST['masuk'])) {
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$jk = $_POST['jk'];
		$prodi = $_POST['prodi'];
		$fakultas = $_POST['fakultas'];
		$asal = $_POST['asal'];
		$moto = $_POST['moto'];

		$sql = "INSERT INTO mhs(nama,nim,jenis_kelamin,program_studi,fakultas,asal,moto_hidup) VALUES ('$nama','$nim','$jk','$prodi','$fakultas','asal','$moto')";
		if (mysqli_query($conn,$sql)) {
			header("location: halamanmahasiswa.php");
		}else{
			echo "database gagal masuk";
		}
	}
?>