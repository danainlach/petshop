<?= $this->extend('layouts/dashboard'); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="col-12">
        <button class="btn btn-success" data-toggle="modal" data-target="#create">+ Create User</button>
    </div>

    <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title text-success font-weight-bold" id="createModalLabel">Create User</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="<?= base_url('/create_user'); ?>" method="POST">
                    <?= csrf_field(); ?>

                    <div class="modal-body">
                        <div class="">
                            <label for="username" class="mb-0">Username</label>
                            <input type="text" required class="form-control" placeholder="Enter username" name="username" id="username">
                            <p style="font-size: 12px;">*The user's default password is its username.</p>

                        </div>

                        <div class="mt-3">
                            <label for="email" class="mb-0">Email</label>
                            <input type="email" required class="form-control" placeholder="example@gmail.com" name="email" id="email">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Create</button>
                    </div>
                </form>
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
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($members as $member) : ?>
                                <tr style="white-space: nowrap;">
                                    <td class="text-center"><?= $no++ . '.'; ?></td>
                                    <td><?= $member['username']; ?></td>
                                    <td><?= $member['email']; ?></td>
                                    <td class="text-center">
                                        <button class="btn btn-danger" data-toggle="modal" data-target="<?= '#hapus' . $member['user_id']; ?>">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <button class="btn btn-info" data-toggle="modal" data-target="<?= '#edit' . $member['user_id']; ?>">
                                            <i class="fas fa-cog"></i>
                                        </button>
                                    </td>


                                    <div class="modal fade" id="<?= 'hapus' . $member['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title text-danger font-weight-bold" id="createModalLabel">Delete User</h6>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>
                                                        Are you sure to delete <strong><?= $member['username']; ?></strong>?
                                                    </p>
                                                </div>

                                                <form action="<?= base_url('/delete_user/' . $member['user_id']); ?>" method="POST">
                                                    <?= csrf_field(); ?>

                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade" id="<?= 'edit' . $member['user_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title text-info font-weight-bold" id="createModalLabel">Edit User</h6>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                <form action="<?= base_url('/update_user/' . $member['user_id']); ?>" method="POST">
                                                    <?= csrf_field(); ?>

                                                    <div class="modal-body">
                                                        <div>
                                                            <label for="username" class="mb-0">Username</label>
                                                            <input type="text" name="username" class="form-control" required id="username" placeholder="Enter username" value="<?= $member['username']; ?>">
                                                            <p style="font-size: 12px;">*The user's default password is its username.</p>
                                                        </div>
                                                        <div class="mt-3">
                                                            <label for="email" class="mb-0">Email</label>
                                                            <input required type="text" name="email" class="form-control" required id="email" placeholder="example@gmail.com" value="<?= $member['email']; ?>">
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-info">Update</button>
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

<?= $this->endSection(); ?>