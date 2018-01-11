<?php
include "koneksi.php";

if (isset($_POST["simpan"])) {
$nis = $_POST["nis"];
$nama = $_POST["nama"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$tempat_lahir = $_POST["tempat_lahir"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$alamat = $_POST["alamat"];
$password = $_POST["password"];
$username = $_POST["username"];

$file_name = $_FILES['foto']['name'];
$source = $_FILES['foto']['tmp_name'];
$direktori = "img/$file_name";

move_uploaded_file($source, $direktori)
or die ("Unggah foto gagal!");

$sql = "INSERT INTO sisiwa VALUES('$nis','$nama','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$alamat','$username','$password','$file_name')";
$query = mysql_query($sql);

if (!$query) {
    die ('Gagal menambahkan data' . mysql_error());
}

    echo "<script>alert(\"Pendaftaran anda Berhasil!\");</script>";
    echo "<meta http-equiv='refresh' content='1;URL=index.php'>";

}
?>