<?php
require_once ("koneksi.php");

$username = $_POST["username"];
$password = $_POST["password"];

$sql 	= "select * from sisiwa";
$result = mysql_query($sql);
$row 	= mysql_fetch_array($result);

if($username || $row['password']){
	echo "<script>alert(\"Username atau Password salah\");</script>";
	echo "<meta http-equiv='refresh' content='1;URL=index.php'>";
}

$sql="select * from sisiwa where username='$username' and password='$password'";
$result = mysql_query($sql);
$jumlah = mysql_num_rows($result);
$row 	= mysql_fetch_array($result);

if($jumlah==1){
	$_SESSION['nis']=$row['nis'];
	$_SESSION['nama']=$row['nama'];
	$_SESSION['foto']=$row['foto'];
	
	header("location: index.php");
}
?>