<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="<?= base_url() ?>/">WEB CI</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link <?= $title === "Home" ? "active"  : "" ?>" href="<?= base_url() ?>/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $title === "About" ? "active"  : "" ?>" href="<?= base_url() ?>/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $title === "Pages" ? "active"  : "" ?>" href="<?= base_url() ?>/pages">Pages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $title === "Daftar Buku" ? "active"  : "" ?>" href="<?= base_url() ?>/books">Books</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $title === "Mahasiswa" ? "active"  : "" ?>" href="<?= base_url() ?>/mahasiswas">Mahaiswa</a>
                    </li>
                </ul>
            </div>
        </nav>
</header>