<?php
include ("conn.php");
?>
<!DOCTYPE html>
<html>
<body>
	<table>
			<?php
			$nim = $_GET['nim'];
			if (!empty($nim)) {
				$result = mysqli_query($conn,"SELECT * FROM `mhs` WHERE `nim` = '$nim'");
			}
			while ($d = mysqli_fetch_array($result)) {
			?>
			<tr>
				<td>Nama :</td>
				<td><?php echo $d['nama']; ?></td>
			</tr>
			<tr>
				<td>nim :</td>
				<td><?php echo $d['nim']; ?></td>
			</tr>
			<tr>
				<td>jenis_kelamin :</td>
				<td><?php echo $d['jenis_kelamin']; ?></td>
			</tr>
			<tr>
				<td>program studi :</td>
				<td><?php echo $d['program_studi']; ?></td>
			</tr>
			<tr>
				<td>fakultas :</td>
				<td><?php echo $d['fakultas']; ?></td>
			</tr>
			<tr>
				<td>asal :</td>
				<td><?php echo $d['asal']; ?></td>
			</tr>
			<tr>
				<td>moto hidup :</td>
				<td><?php echo $d['moto_hidup']; ?></td>
			</tr>
			<?php } ?>

	</table>
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
					<input type="submit" name="masuk" value="masuk"> atau <a href="halamanmahasiswa.php">Kembali</a>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php 
if (isset($_POST['masuk'])) {
		$nama = $_POST['nama'];
		$nim = $_POST['nim'];
		$jk = $_POST['jk'];
		$prodi = $_POST['prodi'];
		$fakultas = $_POST['fakultas'];
		$asal = $_POST['asal'];
		$moto = $_POST['moto'];

		$sql = "UPDATE mhs set nama = $nama ,
		nim = $nim,
		jenis_kelamin = $jk,
		program_studi = $prodi,
		fakultas = $fakultas,
		asal = $asal,
		moto_hidup = $moto";
		if (mysqli_query($conn,$sql)) {
			header("location: halamanmahasiswa.php");
		}else{
			echo "database gagal masuk";
		}

}
?>
