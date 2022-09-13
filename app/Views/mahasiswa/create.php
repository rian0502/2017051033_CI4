<?= $this->extend("templates/template"); ?>

<?= $this->section("content"); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Mahasiswa Baru</h1>
</div>

<div class="col-lg-8">
    <form method="POST" action="/mahasiswa/store/" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="mb-3">
            <label for="npm" class="form-label">NPM</label>
            <input type="number" class="form-control <?= ($validation->hasError('NPM')) ? 'is-invalid' : ''; ?>" id="npm" name="NPM" value="<?= old('NPM'); ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('NPM') ?>
            </div>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" value="<?= old('nama'); ?>" name="nama">
            <div class="invalid-feedback">
                <?= $validation->getError('nama') ?>
            </div>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="textArea" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" id="alamat" value="<?= old('alamat'); ?>" name="alamat">
            <div class="invalid-feedback">
                <?= $validation->getError('alamat') ?>
            </div>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Foto Mahasiswa</label>
            <input class="form-control" type="file" id="formFile" name="image">
            <div class="invalid-feedback">
                <?= $validation->getError('image') ?>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-danger" href="<?= base_url(); ?>/mahasiswas">Back</a>
    </form>
</div>



<?= $this->endSection(); ?>