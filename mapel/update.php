<?php
include "koneksi.php";
$kd_mapel = $_POST['kd_mapel'];
$nama_mapel = $_POST['nama_mapel'];
$query = mysqli_query($koneksi, "update mapel set nama_mapel='$nama_mapel' where kd_mapel='$kd_mapel'");
header('location:?page=mapel/index');
