<?= $this->extend('layouts/auth'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="row justify-content-center align-items-center">
        <div class="col-xl-9 d-flex justify-content-between align-items-start mt-xl-5 mt-4">
            <div class="">
                <h4 style="font-weight: 800">Detail Product</h4>
                <a href="<?= base_url('/petshop_center'); ?>" class="btn p-0 mt-3 mb-2 border-0" style="text-decoration: none">
                    <p class="text-dark" style="font-size: 14px"><i data-feather="arrow-left"></i> Kembali</p>
                </a>
            </div>

            <?php if (session()->has('user_id') == false) : ?>
                <a href="<?= base_url('/login'); ?>">
                    <button class="btn btn-dark px-3">Login</button>
                </a>
            <?php endif; ?>
        </div>
    </div>

    <div class="row justify-content-center align-items-center">
        <div class="col-xl-9 d-xl-flex justify-content-between align-items-start">
            <div class="col-xl-4 col-12 bg-light rounded" style="height: 55vh">
                <img src="<?= base_url('prosev/' . $prosev['prosev_img']); ?>" style="width: 100%; height: 100%; object-fit: cover" class="rounded" alt="">
            </div>
            <div class="col-xl-8 col-12 px-0 px-xl-3 p-3">
                <h2 style="font-weight: 800"><?= $prosev['prosev_name']; ?></h2>

                <p>
                    <?= $prosev['prosev_desc']; ?>
                </p>

                <p style="font-size: 14px;">
                    <?php if ($prosev['prosev_category'] == 'Product') : ?>
                        <span class="text-danger">Product</span>
                    <?php else : ?>
                        <span class="text-primary">Service</span>
                    <?php endif; ?>
                </p>

                <hr>

                <div class="mt-2 d-flex justify-content-between">
                    <h4 style="color: #EE4E2E; font-weight: bold">Rp. <?= number_format($prosev['prosev_price'], 0, ',', '.'); ?></h4>

                    <a href="<?= base_url('/checkout/' . $prosev['prosev_id']); ?>">
                        <?php if ($prosev['prosev_category'] == 'Product') : ?>
                            <button class="btn px-3" style="border: 2px solid #000">Buy now</button>
                        <?php else : ?>
                            <button class="btn px-3" style="border: 2px solid blue">Booking now</button>
                        <?php endif; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>