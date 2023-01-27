<?php
include "koneksi.php";
$kd_mapel = $_GET['kd_mapel'];
$query = mysqli_query($koneksi, "select * from mapel where kd_mapel='$kd_mapel'");
$data = mysqli_fetch_array($query);

?>
<div class="container">
    <div class="row vh-100 d-flex justify-content-center align-items-center">
        <div class="col-md-7 col-lg-10">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h2 class="mb-5 mt-3 text-center text-primary">Edit Data</h2>
                    <form action="?page=mapel/update" method="post">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label class="form-label">Kd_mapel</label>
                                <input type="text" class="form-control" name="kd_mapel" value="<?php echo $data['kd_mapel'] ?>" placeholder="Edit Kd Anda!">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama_mapel</label>
                                <input type="text" class="form-control" name="nama_mapel" value="<?php echo $data['nama_mapel'] ?>" placeholder="Masukan Mapel Anda!">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>