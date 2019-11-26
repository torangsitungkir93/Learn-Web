<?php
// $page digunakan agar kita tahu dihal berapa skrng
$page = "edit";
include 'header.php';
include 'function.php';

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM peserta_makrab WHERE id=$id");
$data = mysqli_fetch_assoc($query);

// Cek Apakah tombol Submit sudah ditekan atau belu,
if (isset($_POST["edit"])) {

    //Cek apakah data berhasil dibah atau tidak
    if (edit($_POST) > 0) {
        echo "
            <script>
                alert('Data berhasil diedit ! ');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal diedit ! ');
            document.location.href = 'edit.php';
        </script>
    ";
    }
}

?>
<!-- ========================== KONTEN UTAMA =========================== -->
<div class="konten-utama">
    <div class="container">
        <div class="card">
            <div class="card-header bg-warning text-white" align="center">Edit Data Peserta</div>
            <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" value="<?= $data['id'] ?>" name="id">
                    <div class="form-group">
                        <label for="nama">Nama Peserta</label>
                        <input type="text" class="form-control" name="nama" value="<?= $data['nama'] ?>" required
                            autocomplete=" off">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" value="<?= $data['email'] ?>" required
                            autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="jk" class="text-grey">Jenis Kelamin <p class="text-reset btn-xs">(Sebelumnya >>>>>>
                                *
                                <?= $data['jk'] ?> *)
                            </p>
                        </label><br>
                        <label class="radio-inline" class="text-reset">
                            <input type="radio" name="jk" value="L" required autocomplete="off"> Laki-Laki
                        </label>
                        <label class="radio-inline" class="text-reset">
                            <input type="radio" name="jk" value="P" required autocomplete="off">Perempuan
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="agama" class="text-grey">Agama</label>
                        <select class="form-control" id="agama" name="agama" required autocomplete="off">
                            <option selected value="<?= $data['agama'] ?>"> --- <?= $data['agama'] ?> ---
                            </option>
                            <option value="Khatolik">Khatolik</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Islam">Islam</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                            <option value="DLL">DLL</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="number" class="form-control" name="umur" value="<?= $data['umur'] ?>" "
                            required autocomplete=" off">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" name="alamat" placeholder="" required
                            autocomplete="off"><?= $data['alamat'] ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-edit" name="edit">Edit Sekarang </button>
                    <a href="index.php">
                        <button type="" class="btn btn-danger btn-kembali" name="kembali">Kembali </button>
                    </a>
                    <?php
                    if (isset($_GET['kembali']))
                        header('location: index.php');
                    ?>
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


<!-- ?php

include 'function.php';
$id = $_GET["id"];

if (edit($id) > 0) {
    echo "Edit Berhasil";
    header('location: index.php?cek_edit=sudah');
} else {
    echo "Edit gagal Dilakukan";
    header('location: index.php?cek_edit=belum');
} -->