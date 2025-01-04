<?= $this->extend('layouts/app'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="row justify-content-center align-items-center" style="position: relative">
        <div class="col-xl-12 d-flex justify-content-center align-items-center" style="height:80vh; background: rgba(0, 0, 0, 0.5)">
            <img src="<?= base_url('img/pattern_pet.jpg'); ?>" style="z-index: -1; width: 100%; height: 100%; object-fit: cover; position: absolute" alt="">
            <h2 class="text-light text-center" style="font-weight: bold;">The service packages to pamper your pet</h2>
        </div>
    </div>

    <div class="container" style="position: relative; bottom: 100px;">
        <?php if ($service_count > 0) : ?>
            <div class="row justify-content-between" style="row-gap: 20px;">
                <?php foreach ($services as $service) : ?>
                    <div class="col-xl-4 col-12 p-2 px-xl-1">
                        <a href="<?= base_url('/detail/' . $service['prosev_id']); ?>" style="text-decoration: none; display: block;">
                            <div class="card" style="border:0">
                                <div class="card-body p-0" style="height: 30vh;">
                                    <img src="<?= base_url('prosev/' . $service['prosev_img']); ?>" style="border-radius: 5px 5px 0 0; width: 100%; height: 100%; object-fit: cover;" alt="product image">
                                </div>
                                <div class="card-footer">
                                    <h5 class="mb-1 text-dark" style="font-weight: 700">
                                        <?= $service['prosev_name']; ?>
                                    </h5>

                                    <p style="font-size: 13px;">
                                        <?php if ($service['prosev_category'] == 'Product') : ?>
                                            <span class="text-danger">Product</span>
                                        <?php else : ?>
                                            <span class="text-primary">Service</span>
                                        <?php endif; ?>
                                    </p>

                                    <div class="d-flex mb-1 justify-content-between align-items-center">
                                        <p class="mb-0" style="color: #f97133; font-weight: 800">
                                            Rp. <?= number_format($service['prosev_price'], 0, ',', '.'); ?>
                                        </p>
                                        <p class="mb-0 text-muted" style="font-size: 14px;">
                                            Stock: <?= $service['prosev_stock']; ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

        <?php else : ?>
            <div class="row bg-light justify-content-center align-items-center mb-5 rounded">
                <div class="col-xl-6 mt-3 p-0">
                    <img src="<?= base_url('img/empty.svg'); ?>" style="object-fit: contain; width: 100%;" alt="">
                    <h5 class="text-center text-muted">
                        No services here yet.
                    </h5>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<?= $this->endSection(); ?>