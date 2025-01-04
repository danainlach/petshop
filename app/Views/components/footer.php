<footer class="container-fluid bottom-0">
    <div class="row py-5 text-dark d-flex justify-content-evenly" style="background: #F9ECE4;">
        <div class="col-xl-4 col-md-12 col-sm-12">
            <a href="/" class="d-block text-dark text-decoration-none">
                <img src="<?= base_url('img/logo.jpg'); ?>" height="50" alt="Kawan Neo Logo" class="rounded mb-3">
                <span style="font-size: 25px;">
                    <strong>KAY</strong>
                </span>
            </a>

            <div class="d-block mb-3 mb-xl-0">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>Aplikasi Web Petshop</span>
            </div>
        </div>

        <div class="col-xl-3 col-sm-12 col-md-12 my-2 mb-4">
            <h4 style="font-weight: 700">Menu</h4>
            <a class="text-decoration-none" href="<?= base_url('/'); ?>">
                <p class="mb-0 text-dark">Home</p>
            </a>
            <a class="text-decoration-none" href="<?= base_url('/petshop_center'); ?>">
                <p class="mb-0 text-dark">Petshop Center</p>
            </a>
            <a class="text-decoration-none" href="<?= base_url('/services'); ?>">
                <p class="mb-0 text-dark">Services</p>
            </a>
            <a class="text-decoration-none" href="<?= base_url('/testimoni'); ?>">
                <p class="mb-0 text-dark">Testimoni</p>
            </a>
        </div>

        <div class="col-xl-3 col-sm-12 col-md-12 my-2 mb-4">
            <h4 style="font-weight: 700">Social Media</h4>
            <a class="d-block text-decoration-none text-dark" href="#" target="_blank">
                <span>Instagram</span>
            </a>

            <a class="d-block text-decoration-none text-dark" href="#" target="_blank">
                <span>Twitter</span>
            </a>

            <a class="d-block text-decoration-none text-dark" href="#" target="_blank">
                <span>Facebook</span>
            </a>
        </div>
    </div>

    <div class="row bg-muted bg-dark text-light">
        <hr class="mb-0">
        <div class="col-12 d-flex justify-content-center align-items-center" style="height: 10vh">
            <p class="pt-3" style="font-size: 12px;">Copyright &copy; <?= date('Y'); ?> KAY.</p>
        </div>
    </div>
</footer>