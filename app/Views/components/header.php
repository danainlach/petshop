<header class="navbar navbar-expand-lg position-fixed" style="width: 100%; background: #fff; box-shadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px; z-index: 100">
    <div class="container p-2">
        <img src="<?= base_url('img/logo.jpg'); ?>" class="rounded" width="50" alt="logo KAY">
        <a class="navbar-brand mx-2 mx-xl-0" href="/">
            <h5 class="mb-0 ms-2" style="font-size: 18px">
                <strong>KAY</strong>
            </h5>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="border: none">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto" style="font-size: 14px">
                <?php if (session()->has('user_id') == false) : ?>
                    <a href="<?= base_url('/'); ?>" class="nav-item nav-link text-center mx-4" <?php if ($id_page == 1) : ?> style="color: #f97133; border-bottom: 2px solid #f97133" <?php endif ?>>Home</a>
                <?php endif; ?>
                <a href="<?= base_url('/petshop_center'); ?>" class="nav-item nav-link text-center mx-4" <?php if ($id_page == 2) : ?> style="color: #f97133; border-bottom: 2px solid #f97133" <?php endif ?>>Petshop Center</a>
                <a href="<?= base_url('/services'); ?>" class="nav-item nav-link text-center mx-4" <?php if ($id_page == 3) : ?> style="color: #f97133; border-bottom: 2px solid #f97133" <?php endif ?>>Services</a>
                <a href="<?= base_url('/testimonial'); ?>" class="nav-item nav-link text-center mx-4" <?php if ($id_page == 4) : ?> style="color: #f97133; border-bottom: 2px solid #f97133" <?php endif ?>>Testimonial</a>

                <?php if (session()->has('user_id') == true) : ?>
                    <?php if (session('role') == 'member') : ?>
                        <a href="<?= base_url('/transaction_history'); ?>" class="nav-item nav-link text-center mx-4" <?php if ($id_page == 12) : ?> style="color: #f97133; border-bottom: 2px solid #f97133" <?php endif ?>>Transaction History</a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>

            <div class="navbar-nav ms-auto text-center" style="font-size: 15px;">
                <?php if (session()->has('user_id')) : ?>

                    <?php if (session('role') == 'admin') : ?>
                        <a href="<?= base_url('/overview'); ?>" class="btn nav-item me-2 nav-link d-none d-xl-inline-block">
                            <i data-feather="command"></i>
                        </a>

                        <a href="<?= base_url('/overview'); ?>" class="btn nav-item nav-link d-xl-none d-inline-block">
                            Dashboard
                        </a>

                    <?php else : ?>
                        <a href="<?= base_url('/'); ?>" class="btn nav-item me-2 nav-link d-none d-xl-inline-block">
                            <i data-feather="home" <?php if ($id_page == 1) : ?> class="text-dark" <?php endif; ?>></i>
                        </a>

                        <a href="<?= base_url('/'); ?>" class="btn nav-item mb-2 nav-link d-xl-none d-inline-block" <?php if ($id_page == 1) : ?> style="color: #f97133; border-bottom: 2px solid #f97133" <?php endif ?>>
                            Home
                        </a>

                    <?php endif; ?>

                    <form action="<?= base_url('/handleLogout'); ?>" method="POST">
                        <?= csrf_field(); ?>

                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                <?php else : ?>
                    <a href="<?= base_url('/login'); ?>" class="btn nav-item nav-link" style="color: #f97133; border:none">
                        Login
                    </a>
                    <a href="<?= base_url('/register'); ?>" class="nav-item nav-link btn text-light px-4 mx-2" style="border: none; background: #f97133; border-radius: 25px;">
                        Register
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>