<?php
include "koneksi.php";
$kd_mapel = $_GET['kd_mapel'];
$query = mysqli_query($koneksi, "delete from mapel where kd_mapel='$kd_mapel'");
header('location:index.php');
