<?= $this->extend("templates/template"); ?>

<?= $this->section("content"); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Mahasiswa</h1>
</div>

<div class="col-lg-8">

    <form method="POST" action="/mahasiswa/update/" enctype="multipart/form-data">
        <?= csrf_field(); ?>
        <div class="mb-3">
            <label for="npm" class="form-label">NPM</label>
            <input type="number" readonly class="form-control <?= ($validation->hasError('NPM')) ? 'is-invalid' : '' ;?>" id="npm" name="NPM" value="<?= $mahasiswa['NPM'] ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('NPM') ?>
            </div>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ;?>" id="nama" name="nama" value="<?= $mahasiswa['nama'] ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('nama') ?>
            </div>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="textArea" class="form-control" id="alamat" name="alamat" value="<?= $mahasiswa['alamat'] ?>">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Foto Mahasiswa</label>
            <input class="form-control" type="file" id="formFile" name="image">
            <img width="200" src="<?=base_url(); ?>/assets/images/<?= $mahasiswa['image']; ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('image') ?>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-danger" href="<?= base_url();?>/mahasiswas">Back</a>
    </form>
</div>

<?= $this->endSection(); ?>