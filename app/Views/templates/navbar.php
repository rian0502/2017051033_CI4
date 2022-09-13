<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <a class="navbar-brand" href="<?= base_url() ?>/">WEB RIAN</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link <?= $title === "Home" ? "active fs-5"  : "" ?>" href="<?= base_url() ?>/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $title === "About" ? "active fs-5"  : "" ?>" href="<?= base_url() ?>/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $title === "Pages" ? "active fs-5"  : "" ?>" href="<?= base_url() ?>/pages">Pages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $title === "Daftar Buku" ? "active fs-5"  : "" ?>" href="<?= base_url() ?>/books">Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $title === "Mahasiswa" ? "active fs-5"  : "" ?>" href="<?= base_url() ?>/mahasiswas">Mahasiswa</a>
                    </li>
                </ul>
            </div>
        </nav>
</header>