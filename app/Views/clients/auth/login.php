<?= $this->extend('layouts/auth'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-xl-8 p-0 d-none d-xl-inline-block bg-secondary" style="height: 100vh;">
            <img src="<?= base_url('img/login_ilustration.jpg'); ?>" style="width: 100%; height: 100%; object-fit: cover;" alt="Login Ilustration">
        </div>

        <div class="col-xl-4">
            <a href="<?= base_url('/'); ?>" style="text-decoration: none; color: #000">
                <div class="d-flex mt-3 justify-content-start align-items-center">
                    <img src="<?= base_url('img/logo.jpg'); ?>" width="60" style="border-radius: 100%" alt="">
                    <h5 class="mb-0 ms-2" style="font-weight: 800">
                        KAY PETSHOP
                    </h5>
                </div>

                <hr style="border: 1px solid #ddd">
            </a>

            <div class="mt-4">
                <h5 style="font-weight: 700;">Welcome Back!</h5>
                <p class="mb-0 text-muted">Please login</p>
            </div>

            <form action="<?= base_url('/handleLogin'); ?>" class="mt-4" method="POST">
                <?= csrf_field(); ?>

                <div class="mt-2">
                    <label for="email">Email</label>
                    <input required type="email" class="form-control" style="height: 55px; border: 1px solid #eee" name="email" id="email" placeholder="example@gmail.com">
                </div>
                <div class="mt-3">
                    <label for="password">Password</label>
                    <input required type="password" class="form-control" style="height: 55px; border: 1px solid #eee" name="password" id="password" placeholder="Enter your password">
                </div>

                <div class="mt-5">
                    <button type="submit" class="btn px-4 text-light py-3" style="width: 100%; background: linear-gradient(to right, orange, orangered);"><strong>Log In</strong></button>
                </div>

                <p class="text-center mt-3" style="font-size: 14px;">
                    Do you haven't account? <br> <a href="<?= base_url('/register'); ?>">Register here.</a>
                </p>
            </form>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>