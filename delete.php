<?php include("conn.php"); ?>
<?php 
$nim = $_GET['nim'];
if (!empty($nim)) {
	$result = mysqli_query($conn,"DELETE FROM mhs where nim =".$nim.";");
}
header("location: halamanmahasiswa.php");
?>
