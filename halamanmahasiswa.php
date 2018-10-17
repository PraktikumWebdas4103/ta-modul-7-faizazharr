<?php include("conn.php"); ?>
<table>
	<tr>
		<td>
			<form method="POST">
				<input type="submit" name="input" value="Input Data">
			</form>
		</td>
		<td>
			<form method="POST">
				<input type="text" name="nim">
			
		</td>
		<td>
			<input type="submit" name="cari" value="cari">
			</form>
		</td>
	</tr>
</table><br><br>
List data Mahasiswa<br>
<?php 
if (isset($_POST['input'])) {
 	header("location: input.php");
}
if (isset($_POST['cari'])) {
	$nim = $_POST['nim'];
	$result = mysqli_query($conn,"SELECT * FROM mhs where nim like '%$nim%' ");
}else{
	$result = mysqli_query($conn,"SELECT * FROM mhs");
}

?>
<table border="1">
	<tr>
		<th>
			NAMA
		</th>
		<th>
			NIM
		</th>
		<th>
			AKSI	
		</th>
	</tr>
<?php while ($row = mysqli_fetch_array($result)) {?>
	<tr>
		<td>
			<?php echo $row['nama']; ?>
		</td>
		<td>
			<?php echo $row['nim']; ?>
		</td>
		<td>
			<a href="delete.php?nim='<?php echo $row['nim']?>'">delete</a> |
			<a href="edit.php?nim='<?php echo $row['nim']?>'">detail</a>	
		</td>
	</tr>
<?php } ?>
</table>