<?= $this->extend("templates/template"); ?>
<?= $this->section("content"); ?>

<div class="row">
    <div class="col-md-4 mt-5">

        <main class="form-signin w-100 m-auto">
            <form action="/login">
                <?= csrf_field(); ?>
                <h1 class="h3 mb-3 fw-normal">Login</h1>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" name="email" require>
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="passwortd">
                    <label require for="floatingPassword">Password</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
        </main>
        
    </div>
</div>
<?= $this->endSection(); ?>