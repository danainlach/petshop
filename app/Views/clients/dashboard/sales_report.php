<?= $this->extend('layouts/dashboard'); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-info text-light">Sales Report</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="data">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Client</th>
                                <th>Product/Service</th>
                                <th>Category</th>
                                <th class="text-center">Purchase Stock</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($transactions as $transaction) : ?>
                                <tr>
                                    <td><?= $no++ . '.'; ?></td>
                                    <td><?= $transaction['username']; ?></td>
                                    <td><?= $transaction['prosev_name']; ?></td>
                                    <td><?= $transaction['prosev_category']; ?></td>
                                    <td class="text-center"><?= $transaction['stock']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>