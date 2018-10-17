<?php  
$conn = @mysqli_connect("localhost","root","","mahasiswa") or die("database tidak terhubung");
if (!$conn) {
	echo $conn;
}
?>