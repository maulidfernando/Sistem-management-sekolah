<?php
session_start();
unset($_SESSION['NIS']);
unset($_SESSION['Nama']);
unset($_SESSION['Poto']);
session_destroy();
header("location: index.php");
?>