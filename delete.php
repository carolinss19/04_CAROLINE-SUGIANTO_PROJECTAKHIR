<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM upload WHERE id='$id'");

header("location:display_upl.php");
?>