<?= $this->extend("templates/template"); ?>

<?= $this->section("content"); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Mahasiswa</h1>
</div>

<div class="col-lg-8">

    <form method="POST" action="/mahasiswa/update/">
        <?= csrf_field(); ?>
        <div class="mb-3">
            <label for="npm" class="form-label">NPM</label>
            <input type="number" readonly class="form-control" id="npm" name="NPM" value="<?= $mahasiswa['NPM'] ?>">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama'] ?>">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="textArea" class="form-control" id="alamat" name="alamat" value="<?= $mahasiswa['alamat'] ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<?= $this->endSection(); ?>