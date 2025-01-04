<?= $this->extend('layouts/app'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="container">
        <div class="row mb-5" style="padding-top: 7em;">
            <div class="col-12 rounded" style="height: 40vh;">
                <img src="<?= base_url('img/petshop_ilustration.png'); ?>" class="rounded" style="object-fit: cover; height: 100%; width: 100%;" alt="Petshop Ilustration">
            </div>
        </div>

        <div class="row mb-1">
            <div class="h5 col-12">
                All Product & Services
                <hr style="border: 1px solid #ccc">
            </div>
        </div>

        <?php if ($prosev_count > 0) : ?>
            <div class="row mb-5 owl-carousel owl-theme" style="row-gap: 20px;">
                <?php foreach ($prosevs as $prosev) : ?>
                    <div class="item">
                        <a href="<?= base_url('/detail/' . $prosev['prosev_id']); ?>" style="text-decoration: none;">
                            <div class="col-xl-12 col-12 p-2 px-xl-1">
                                <div class="card" style="border:1px solid #ddd; height: 60vh; overflow-y: auto;">
                                    <div class="card-body p-0">
                                        <img src="<?= base_url('prosev/' . $prosev['prosev_img']); ?>" style="border-radius: 5px 5px 0 0; width: 100%; height: 100%; object-fit: cover;" alt="product image">
                                    </div>
                                    <div class="card-footer">
                                        <h5 class="mb-1 text-dark" style="font-weight: 700">
                                            <?= $prosev['prosev_name']; ?>
                                        </h5>

                                        <p style="font-size: 13px;">
                                            <?php if ($prosev['prosev_category'] == 'Product') : ?>
                                                <span class="text-danger">Product</span>
                                            <?php else : ?>
                                                <span class="text-primary">Service</span>
                                            <?php endif; ?>
                                        </p>

                                        <div class="d-flex mb-1 justify-content-between align-items-center">
                                            <p class="mb-0" style="color: #f97133; font-weight: 800">
                                                Rp. <?= number_format($prosev['prosev_price'], 0, ',', '.'); ?>
                                            </p>
                                            <p class="mb-0 text-muted" style="font-size: 14px;">
                                                Stock: <?= $prosev['prosev_stock']; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <div class="row bg-light justify-content-center align-items-center mb-5 rounded">
                    <div class="col-xl-6 mt-3 p-0">
                        <img src="<?= base_url('img/empty.svg'); ?>" style="object-fit: contain; width: 100%;" alt="">
                        <h5 class="text-center text-muted">
                            No products or services here yet.
                        </h5>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
</div>

<?= $this->endSection(); ?>