<?= $this->extend('layouts/dashboard'); ?>

<?= $this->section('content'); ?>

<div class="row mb-3">
    <div class="col-12">
        <div class="card bg-success shadow">
            <div class="card-body">
                <h6 class="mb-0 text-light">Total Income:</h6>
                <p class="mb-0 text-light" style="font-weight: bold;">Rp. <?= number_format($income_total[0]['amount'], 0, ',', '.'); ?></p>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-warning text-light">Financial Report</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="data">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Client</th>
                                <th>Product/Services</th>
                                <th class="text-center">Purchase Stock</th>
                                <th>Amount Received</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($transactions as $transaction) : ?>

                                <tr>
                                    <td><?= $no++ . '.'; ?></td>
                                    <td><?= $transaction['username']; ?></td>
                                    <td><?= $transaction['prosev_name']; ?></td>
                                    <td class="text-center"><?= $transaction['stock']; ?></td>
                                    <td class="text-success">Rp. <?= number_format($transaction['amount'], 0, ',', '.'); ?></td>
                                    <td class="text-center">
                                        <button class="btn btn-danger" data-toggle="modal" data-target="<?= '#hapus' . $transaction['transaction_id']; ?>">Delete</button>
                                    </td>
                                </tr>

                                <div class="modal fade" id="<?= 'hapus' . $transaction['transaction_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-danger" id="exampleModalLongTitle">Warning</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure to delete the transaction?
                                            </div>
                                            <form action="<?= base_url('/delete_transaction/' . $transaction['transaction_id']); ?>" method="POST">
                                                <?= csrf_field(); ?>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-danger">Yes, Delete it</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>