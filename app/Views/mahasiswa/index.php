<?= $this->extend("templates/template"); ?>

<?= $this->section("content"); ?>

<div class="row d-flex justify-content-center">
    <div class="col-md-8 mb-5 mt-5">
        <h1>Daftar Mahasiswa</h1>
    </div>
    <div class="col-md-8 mb-2">
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Tambah Mahasiswa
        </button>
    </div>
    <div class="col-md-8">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Alamat</th>
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
                        <td><?= $mahasiswa["alamat"]; ?></td>
                        <td>
                            <a href="/mahasiswas/detail/<?= $mahasiswa["NPM"] ?>" class="btn btn-primary">View</a>
                            <a href="/mahasiswas/edit/<?= $mahasiswa["NPM"] ?>" class="btn btn-warning">Edit</a>
                            <a href="/mahasiswas/hapus/<?= $mahasiswa["NPM"] ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="npm" class="form-label">NPM</label>
                        <input type="number" class="form-control" id="npm" aria-describedby="emailHelp" name="npm">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Name</label>
                        <input type="text" class="form-control" id="nama" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Tambah Mahasiswa</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>