<?php
include "koneksi.php";

?>

<div class="container">
    <div class="mt-3">
        <h2 class="text-center">Data Mapel Smkn Takeran</h2>
    </div>
    <div class="mt-3">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Data Mapel
            </div>

            <div class="card-body">
                <button class="btn btn-success mb-2"><a href="?page=mapel/tambah" style="color: white; text-decoration: none;">Tambah Data</a></button>
                <table class="table table-bordered tabel-striped tabel-hover">
                    <tr class="text-center">
                        <th>Kd_Mapel</th>
                        <th>Nama_Mapel</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $query = mysqli_query($koneksi, "select * from mapel");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td align="center"><?php echo $data['kd_mapel'] ?></td>
                            <td><?php echo $data['nama_mapel'] ?></td>
                            <td> <button class="btn btn-danger btn-sm"><a style="color:white; text decoration:none;" href="?page=mapel/hapus&kd_mapel=<?php echo $data['kd_mapel'] ?>">Hapus</a></button>
                                <button class="btn btn-warning btn-sm"><a style="color: black; text decoration:none;" href="?page=mapel/edit&kd_mapel=<?php echo $data['kd_mapel'] ?>">Edit</a></button>
                            </td>
                        </tr>
            </div>
        </div>
    <?php
                    }
    ?>
    </table>