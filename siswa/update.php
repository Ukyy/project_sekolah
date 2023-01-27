<?php
include "koneksi.php";
$nisn = $_POST['nisn'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$query = mysqli_query($koneksi, "update siswa set nama='$nama',alamat='$alamat' where nisn='$nisn'");
header('location:?page=siswa/index');
