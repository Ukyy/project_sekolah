<?php
session_start();
echo $_SESSION['username'];
if ($_SESSION['status'] <> "sukses") {
    header('location:login.php');
}
?>


<h1>Menu Utama</h1>
<li><a href="?page=siswa/index">siswa</a></li>
<li><a href="?page=guru/index">guru</a></li>
<li><a href="?page=mapel/index">mapel</a></li>
<li><a href="?page=nilai/index">nilai</a></li>
<li><a href="logout.php">logout</a></li>

<?php
include "isi.php";
?>