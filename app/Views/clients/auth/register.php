<?= $this->extend('layouts/auth'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="row justify-content-center" style="height: 100vh;">
        <div class="col-xl-6" style="background: orange"></div>
        <div class="col-xl-6 d-none d-xl-inline-block bg-light"></div>
        <div class="col-xl-8 col-11 p-0 card" style="position: absolute; top: 30px; background: #fff; border:0; box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 50px;">
            <div class="card-body p-0 d-flex">
                <div class="col-xl-6 d-none d-xl-flex">
                    <img src="<?= base_url('img/dog3.jpg'); ?>" style="width: 100%; height: 100%; object-fit: cover; border-radius: 5px 0 0 5px" alt="">
                </div>
                <div class="col-xl-6 col-12" style="padding: 40px 15px 50px 15px">
                    <h5 style="font-weight: 700">
                        <span class="h-2">Register</span> Here!
                    </h5>
                    <p class="text-muted" style="font-size: 14px">Create your account</p>

                    <form action="<?= base_url('/handleRegister'); ?>" method="POST" style="font-size: 14px">
                        <?= csrf_field(); ?>

                        <div class="mt-2">
                            <label for="username">Username<span class="text-danger">*</span></label>
                            <input required type="text" class="form-control" style="height: 50px; border-radius: 3px; border: 1px solid #ddd; font-size: 14px" placeholder="Enter your username" name="username" id="username">
                        </div>

                        <div class="mt-2">
                            <label for="email">Email<span class="text-danger">*</span></label>
                            <input required type="email" class="form-control" style="height: 50px; border-radius: 3px; border: 1px solid #ddd; font-size: 14px" placeholder="example@gmail.com" name="email" id="email">
                        </div>

                        <div class="mt-2">
                            <label for="password">Password<span class="text-danger">*</span></label>
                            <input required type="password" class="form-control" style="height: 50px; border-radius: 3px; border: 1px solid #ddd; font-size: 14px;" placeholder="Enter your password" name="password" id="confirm_password">
                        </div>

                        <div class="mt-2">
                            <label for="confirm_password">Confirm Password<span class="text-danger">*</span></label>
                            <input required type="password" class="form-control" style="height: 50px; border-radius: 3px; border: 1px solid #ddd; font-size: 14px;" placeholder="Confirm your password" name="confirm_password" id="confirm_password">
                        </div>

                        <div class="mt-4">
                            <button required type="submit" class="btn btn-dark px-4 py-2" style="width: 100%; border-radius: 3px; font-size: 14px"><strong>Register</strong></button>
                        </div>

                        <p class="mb-0 text-center mt-3" style="font-size: 14px">Do you already have account? <br> <a href="<?= base_url('/login'); ?>" style="font-size: 14px">Login here</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>