<?php
include "koneksi.php";

?>

<div class="container">
    <div class="mt-3">
        <h2 class="text-center">Data Siswa Smkn Takeran</h2>
    </div>
    <div class="mt-3">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Data Siswa
            </div>

            <div class="card-body">
                <button class="btn btn-success mb-2"><a href="?page=siswa/tambah" style="color: white; text-decoration: none;">Tambah Data</a></button>
                <table class="table table-bordered tabel-striped tabel-hover">
                    <tr class="text-center">
                        <th>Nis</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $query = mysqli_query($koneksi, "select * from siswa");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td align="center"><?php echo $data['nisn'] ?></td>
                            <td><?php echo $data['nama'] ?></td>
                            <td><?php echo $data['alamat'] ?></td>
                            <td> <button class="btn btn-danger btn-sm"><a style="color:white; text decoration:none;" href="?page=siswa/hapus&nisn=<?php echo $data['nisn'] ?>">Hapus</a></button>
                                <button class="btn btn-warning btn-sm"><a style="color: black; text decoration:none;" href="?page=siswa/edit&nisn=<?php echo $data['nisn'] ?>">Edit</a></button>
                            </td>
                        </tr>
            </div>
        </div>
    <?php
                    }
    ?>
    </table>