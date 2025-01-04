<?= $this->extend('layouts/app'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="container">
        <div class="row" style="margin-bottom: 15em;">
            <div class="col-12" style="margin-top: 10em;">
                <h5 style="font-weight: bold;"><?= $title; ?></h5>
                <div class="col-12 mt-2">
                    <div class="table-responsive">
                        <table class="table table-striped" id="data">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Prosev</th>
                                    <th>Purchase Stock</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($transactions as $transaction) : ?>
                                    <tr style="white-space: now-rap;">
                                        <td><?= $no++ . '.'; ?></td>
                                        <td class="d-flex">
                                            <img src="<?= base_url('prosev/' . $transaction['prosev_img']); ?>" alt="prosev image" width="50" class="rounded me-2">
                                            <div class="d-flex flex-column justify-content-center">
                                                <span class="mb-0"><?= $transaction['prosev_name']; ?></span>
                                                <span class="mb-0 text-muted"><?= $transaction['prosev_category']; ?></span>
                                            </div>
                                        </td>
                                        <td><?= $transaction['stock']; ?></td>
                                        <td>Rp. <?= number_format($transaction['amount'], 0, ',', '.'); ?></td>
                                        <td>
                                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="<?= '#hapus' . $transaction['transaction_id']; ?>">
                                                <i data-feather="trash"></i>
                                            </button>
                                        </td>

                                        <div class="modal fade" id="<?= 'hapus' . $transaction['transaction_id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title text-danger fs-5" id="exampleModalLabel">Warning</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure to delete your transaction history?
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
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>