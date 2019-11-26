<?php
$page = "index";
include 'header.php';
include 'function.php';
if (isset($_GET['search'])) {
    $nama_search = $_GET['nilai'];
    echo "Sukses";
    $data = query("SELECT * FROM peserta_makrab WHERE nama LIKE '$nama_search%'");
} else {
    $data = query("SELECT * FROM peserta_makrab ORDER BY nama");
}
// var_dump($data);

?>
<!-- ========================== KONTEN UTAMA =========================== -->
<div class="konten-utama">
    <div class="container">
        <?php if (isset($_GET['cek'])) : ?>
        <?php if ($_GET['cek'] == 'sudah') { ?>
        <div class="alert alert-success"><strong>Berhasil !</strong> Data yang anda pilih berhasil dihapus
            <a href="index.php">
                <button type="button" class="btn btn-warning btn-md" name="reset" data-toggle="tooltip"
                    data-placement="bottom" title="Reset"><span class="fa fa-refresh"></span>
                </button>
            </a>
        </div>
        <?php } else { ?>
        <div class="alert alert-danger"><strong>Gagal !</strong> Data yang anda pilih Gagal dihapus</div>
        <?php  } ?>
        <?php endif ?>
        <div class="row">
            <br>
            <h1 class="judul">
                <center>Data Peserta Makrab</center>
            </h1>
            <div class="table-responsive">
                <table class="table table-bordered table-grey table-striped table-hover">
                    <thead>
                        <tr class="warna-table">
                            <th class="text-white">No</th>
                            <th class="text-white">Nama </th>
                            <th class="text-white">Email</th>
                            <th class="text-white">Jenis Kelamin</th>
                            <th class="text-white">Umur</th>
                            <th class="text-white">Agama</th>
                            <th class="text-white">Alamat</th>
                            <th class="text-white">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 0;
                        foreach ($data as $row) :
                            ?>
                        <tr>
                            <td><?php echo $i + 1; ?></td>
                            <td><?php echo $row['nama']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['jk']; ?></td>
                            <td><?php echo $row['umur']; ?> thn </td>
                            <td><?php echo $row['agama']; ?></td>
                            <td><?php echo $row['alamat']; ?></td>
                            <td>
                                <a href="edit.php?id=<?= $row["id"]; ?> ">
                                    <button type="button" class="btn btn-hijau btn-xs" name="edit" data-toggle="tooltip"
                                        data-placement="bottom" title="Edit"><span class="fa fa-edit btn-putih"></span>
                                    </button>
                                </a> |
                                <a href="hapus.php?id=<?= $row["id"]; ?> ">
                                    <button type="button" class="btn btn-merah btn-xs" name="hapus"
                                        data-toggle="tooltip" data-placement="bottom" title="Hapus"
                                        onclick="return confirm('Yakin !?  Data yang telah dihapus tidak dapat dikembalikan lagi')"><span
                                            class="fa fa-trash btn-putih"></span>
                                    </button>
                                </a>
                            </td>
                        </tr>
                        <?php
                            $i++;
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- ========================== KONTEN UTAMA =========================== -->
<!-- End Navbar -->
<!-- Untuk Footer -->
<?php
include 'footer.php';
?>