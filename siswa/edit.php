<?php
include "koneksi.php";
$nisn = $_GET['nisn'];
$query = mysqli_query($koneksi, "select * from siswa where nisn='$nisn'");
$data = mysqli_fetch_array($query);

?>
<div class="container">
    <div class="row vh-100 d-flex justify-content-center align-items-center">
        <div class="col-md-7 col-lg-10">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h2 class="mb-5 mt-3 text-center text-primary">Edit Data</h2>
                    <form action="?page=siswa/update" method="post">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Nisn</label>
                                <input type="text" class="form-control" name="nisn" value="<?php echo $data['nisn'] ?>" placeholder="Edit Nisn Anda!">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>" placeholder="Masukan Nama Anda!">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat'] ?>" placeholder="Masukan alamat Anda!">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>