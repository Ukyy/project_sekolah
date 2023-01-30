<?php
//$koneksi = mysqli_connect("localhost", "root", "", "sekolah_ukyy");

$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=sekolah_ukyy", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$sql = "SELECT * FROM siswa";
$sql = $conn->prepare($sql);
$sql->execute();
while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
    print_r($row);
}
die('tes');
?>