<?php
include "koneksi.php";

?>

<div class="container">
    <div class="mt-3">
        <h2 class="text-center">Data Guru Smkn Takeran</h2>
    </div>
    <div class="mt-3">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Data Guru
            </div>

            <div class="card-body">
                <button class="btn btn-success mb-2"><a href="?page=guru/tambah" style="color: white; text-decoration: none;">Tambah Data</a></button>
                <table class="table table-bordered tabel-striped tabel-hover">
                    <tr class="text-center">
                        <th>Nip</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $query = mysqli_query($koneksi, "select * from guru");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td align="center"><?php echo $data['nip'] ?></td>
                            <td><?php echo $data['nama'] ?></td>
                            <td><?php echo $data['alamat'] ?></td>
                            <td> <button class="btn btn-danger btn-sm"><a style="color:white; text decoration:none;" href="?page=guru/hapus&nip=<?php echo $data['nip'] ?>">Hapus</a></button>
                                <button class="btn btn-warning btn-sm"><a style="color: black; text decoration:none;" href="?page=guru/edit&nip=<?php echo $data['nip'] ?>">Edit</a></button>
                            </td>
                        </tr>
            </div>
        </div>
    <?php
                    }
    ?>
    </table>