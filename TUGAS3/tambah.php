<?php
// $page digunakan agar kita tahu dihal berapa skrng
$page = "tambah";
include 'header.php';
include 'function.php';
?>
<!-- ========================== KONTEN UTAMA =========================== -->
<div class="konten-utama">
    <div class="container">
        <?php
        $id = ($_POST['kode']);
        $username = ($_POST['penerbit']);
        if (isset($_POST["submit"])) {
            if (tambah($_POST) > 0) {
                ?>
        <div class="alert alert-success"><strong>Berhasil !</strong> Data Berhasil Ditambahkan</div>
        <?php
                } else {
                    ?>
        <strong class="alert alert-danger"><strong>Gagal !</strong> Data gagal Ditambahkan</strong>
        <?php }
        } ?>
        <div class="card">
            <div class="card-header bg-primary text-white" align="center">Tambahh Peserta Makrab</div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nama" class="text-reset">Username</label>
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Anda" required
                            autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="email" class="text-reset">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Masukkan Email Anda" required
                            autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="jk" class="text-reset">Jenis Kelamin</label><br>
                        <label class="radio-inline" class="text-reset">
                            <input type="radio" name="jk" value="L" required autocomplete="off"> Laki-Laki
                        </label>
                        <label class="radio-inline" class="text-reset">
                            <input type="radio" name="jk" value="P" required autocomplete="off">Perempuan
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="agama" class="text-reset">Agama</label>
                        <select class="form-control" id="agama" name="agama" required autocomplete="off">
                            <option value="Khatolik">Khatolik</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Islam">Islam</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                            <option value="DLL">DLL</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="umur" class="text-reset">Umur</label>
                        <input type="number" class="form-control" name="umur" placeholder="Masukkan Umur(dalam Tahun) "
                            required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="text-reset">Alamat</label>
                        <textarea class="form-control" name="alamat" name="alamat" placeholder="Masukkan Alamat Anda"
                            required autocomplete="off"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-daftar" name="submit">Daftar </button>
                    <button type="reset" class="btn btn-warning "
                        onclick="return confirm('Yakin !?  Data Akan tereset semua lohh ')">reset</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- =================================================================== -->

<!-- Untuk Footer -->
<?php
include 'footer.php';
?>