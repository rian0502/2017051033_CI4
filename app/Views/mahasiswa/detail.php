<?= $this->extend("templates/template"); ?>

<?= $this->section("content"); ?>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $mahasiswa['nama'] ;?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['NPM'] ;?></h6>
    <p class="card-text"><?= $mahasiswa['alamat'] ;?></p>
  </div>
</div>
<a class="btn btn-danger" href="<?= base_url();?>/mahasiswas">Back</a>
<?= $this->endSection(); ?>

