<?php
include "koneksi.php";
$id  = $_GET['id'];
$query = mysqli_query($koneksi, "delete from nilai where id = '$id'");
header('location:index.php');
