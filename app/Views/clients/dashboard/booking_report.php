<?= $this->extend('layouts/dashboard'); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header bg-primary text-light">Booking Report</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered" id="data">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Client</th>
                                <th>Services</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($transactions as $transaction) : ?>
                                <?php if ($transaction['prosev_category'] == 'Service') :  ?>

                                    <tr>
                                        <td><?= $no++ . '.'; ?></td>
                                        <td><?= $transaction['username']; ?></td>
                                        <td><?= $transaction['prosev_name']; ?></td>
                                    </tr>

                                <?php endif; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>