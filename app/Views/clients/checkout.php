<?= $this->extend('layouts/auth'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center align-items-center">
        <div class="col-xl-9 mb-3 d-xl-flex justify-content-between align-items-start mt-5">
            <div>
                <h4 style="font-weight: 800" class="mb-4 mb-xl-0">Checkout</h4>
                <a href="<?= base_url('/detail/' . $prosev['prosev_id']); ?>" class="btn p-0 mt-3 mb-2 border-0" style="text-decoration: none">
                    <p class="text-dark" style="font-size: 14px"><i data-feather="arrow-left"></i> Kembali</p>
                </a>
            </div>
            <div class="">
                <a href="<?= base_url('/petshop_center'); ?>" class="btn">
                    <i data-feather="home"></i>
                </a>

                <?php if (session()->has('user_id') == true) : ?>
                    <?php if (session('role') == 'member') : ?>
                        <a href="<?= base_url('/transaction_history'); ?>">
                            <button class="btn btn-dark">
                                My Transaction
                            </button>
                        </a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="row justify-content-center align-items-center">
        <div class="col-xl-9 d-xl-flex justify-content-between align-items-start">
            <div class="col-xl-7 card p-3" style="border: 1px solid #eee">
                <div class="d-xl-flex justify-content-between">
                    <h6 style="letter-spacing: 1px" class="text-secondary">Product Detail</h6>
                </div>

                <h3 style="font-weight: 900">
                    Rp. <?= number_format($prosev['prosev_price'], 0, ',', '.'); ?>
                </h3>

                <hr style="border: 1px solid #ddd">

                <div class="col-xl-12 mt-1 rounded" style="font-size: 13px;">
                    <p class="mb-0">Product name: <strong><?= $prosev['prosev_name']; ?></strong></p>
                    <p class="mb-0">Category: <strong><?= $prosev['prosev_category']; ?></strong></p>
                    <p class="mb-0">Stock: <strong><?php if ($prosev['prosev_category'] == 'Service') : ?> - <?php else : ?> <?= $prosev['prosev_stock']; ?> <?php endif; ?> </strong></p>
                </div>
            </div>

            <?php if (session()->has('user_id') == true) : ?>
                <?php if (session('role') == 'member') : ?>
                    <div class="col-xl-4 mt-3 mt-xl-0 card mb-5 p-3" style="border: 1px solid #eee">
                        <h6 style="letter-spacing: 1px" class="text-secondary">Payment</h6>
                        <form action="<?= base_url('/pay/' . $prosev['prosev_id']); ?>" method="POST">
                            <?= csrf_field(); ?>

                            <?php if ($prosev['prosev_category'] == 'Product') : ?>
                                <?php if ($prosev['prosev_stock'] > 0) : ?>
                                    <input type="number" class="form-control mb-3" required name="stock" id="stock" placeholder="Enter stock product" style="font-size: 14px;">
                                    <input type="number" min="0" class="form-control" name="amount" id="pay" required placeholder="Pay Here" style="font-size: 14px;">
                                    <button class="mt-3 btn btn-primary px-3 py-1" style="font-size: 14px;">Pay!</button>
                                <?php else : ?>
                                    <h4 class="text-danger mt-2" style="font-weight: bold;">Sold Out</h4>
                                <?php endif; ?>
                            <?php else : ?>
                                <input type="hidden" name="stock" value="<?= 0; ?>">
                                <input type="number" min="0" class="form-control" name="amount" id="pay" required placeholder="Pay Here" style="font-size: 14px;">
                                <button class="mt-3 btn btn-primary px-3 py-1" style="font-size: 14px;">Pay!</button>
                            <?php endif; ?>
                        </form>
                    <?php endif; ?>

                <?php else : ?>
                    <div class="col-xl-4 mt-4">
                        <p>Login terlebih dahulu</p>
                        <a href="<?= base_url('/login'); ?>" class="btn btn-dark">Login</a>
                    </div>
                    </div>
                <?php endif; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>