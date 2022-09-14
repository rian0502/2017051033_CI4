<?= $this->extend("templates/template"); ?>

<?= $this->section("content"); ?>


<div class="col-md-8 mb-5 mt-5">
    <h1>Daftar Mahasiswa</h1>
</div>

<?php
if (session()->getFlashdata("success")) {
    echo '<div class="col-md-8 mt-2"> <div class="alert alert-success alert-dismissible fade show" role="alert">' . session()->getFlashdata("success") .
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div></div>';
} else if (session()->getFlashdata("error")) {
    echo '<div class="col-md-8 mt-2"> <div class="alert alert-success alert-dismissible fade show" role="alert">' . session()->getFlashdata("error") .
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div></div>';
}
?>

<div class="col-md-8 mb-2">
    <a href="/mahasiswas/create/" class="btn btn-success">Tambah Mahasiswa</a>
</div>
<div class="col-md-8">
    <form action="/mahasiswas" method="GET">
        <div class="input-group mb-3">
            <input type="text" name="search" value="<?= ($input == NULL) ? "" : $input; ?>" class="form-control" placeholder="Cari Mahasiswa" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-success" type="submit" id="button-addon2">Cari</button>
        </div>
    </form>
</div>
<div class="col-md-8">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($mahasiswa as $mahasiswa) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $mahasiswa["NPM"]; ?></td>
                    <td><?= $mahasiswa["nama"]; ?></td>
                    <td>
                        <a href="/mahasiswas/<?= $mahasiswa["NPM"]; ?>" class="btn btn-primary">Detail</a>
                        <a href="/mahasiswas/edit/<?= $mahasiswa["NPM"] ?>" class="btn btn-warning">Edit</a>
                        <a onclick="confirm('Apakah Anda ingin Menghapus Data ini ?')" href="/mahasiswas/delete/<?= $mahasiswa["NPM"] ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="col d-flex justify-content-end">
        <?= $pager->links('mahasiswa', 'bootstrap_pagination'); ?>
    </div>
</div>



<?= $this->endSection(); ?>