<?php
session_start();
$database="db_sms";
$localhost="localhost";
$username="root";
$password="";

$koneksi= mysql_connect($localhost,$username,$password) or die();
mysql_select_db($database,$koneksi) or die("koneksi gagal!" .mysql_error());
?>