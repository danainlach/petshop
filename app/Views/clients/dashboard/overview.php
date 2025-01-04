<?= $this->extend('layouts/dashboard'); ?>

<?= $this->section('content'); ?>



<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card bg-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-light text-uppercase mb-1">
                            Members (Clients)</div>
                        <div class="h5 mb-0 font-weight-bold text-light">
                            <?= $member_total; ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card bg-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-light text-uppercase mb-1">
                            Income</div>
                        <div class="h5 mb-0 font-weight-bold text-light">
                            Rp. <?= number_format($orderTransaction_total[0]['amount'], 0, ',', '.'); ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card bg-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-light text-uppercase mb-1">
                            Products</div>
                        <div class="h5 mb-0 font-weight-bold text-light">
                            <?= $product_total; ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-rocket fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow h-100 py-2" style="background: orangered;">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-light text-uppercase mb-1">
                            Services</div>
                        <div class="h5 mb-0 font-weight-bold text-light">
                            <?= $service_total; ?>
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-heart fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row my-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-dark">
                <h6 class="mb-0 text-light" style="font-weight: bold;">Member Report</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="data">
                        <thead>
                            <tr>
                                <th class="text-center">No.</th>
                                <th>Username</th>
                                <th>Email</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($members as $member) : ?>
                                <tr style="white-space: nowrap;">
                                    <td class="text-center"><?= $no++ . '.'; ?></td>
                                    <td><?= $member['username']; ?></td>
                                    <td><?= $member['email']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12 my-3">
        <h5 style="font-weight: bold;">Products & Services</h5>
    </div>

    <?php foreach ($prosevs as $prosev) : ?>
        <div class="col-xl-3 col-12 mb-5">
            <div class="card" style="height: 50vh; overflow-y: auto;">
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
    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>