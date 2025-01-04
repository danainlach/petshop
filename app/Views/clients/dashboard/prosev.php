<?= $this->extend('layouts/dashboard'); ?>

<?= $this->section('content'); ?>

<?php if ($id_page == 7) : ?>
    <div class="row mb-3">
        <div class="col-12">
            <div class="card bg-danger shadow">
                <div class="card-body">
                    <h6 class="mb-0 text-light">Stock Product:</h6>
                    <p class="mb-0 text-light" style="font-weight: bold;"><?= $product_total; ?></p>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="row">

    <div class="col-12">
        <button class="btn btn-primary" data-toggle="modal" data-target="#create">Create <?php if ($id_page == 7) : ?> Product <?php elseif ($id_page == 8) : ?> Service <?php endif; ?></button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary" id="exampleModalLabel">Create <?php if ($id_page == 7) : ?> Product <?php elseif ($id_page == 8) : ?> Service <?php endif; ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('/create_prosev'); ?>" method="POST" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="modal-body">
                        <div class="">
                            <label class="mb-0" for="prosev_name"><?php if ($id_page == 7) : ?> Product <?php elseif ($id_page == 8) : ?> Service <?php endif; ?> Name</label>
                            <input required type="text" class="form-control" name="prosev_name" id="prosev_name" placeholder="Enter name of <?php if ($id_page == 7) : ?> Product <?php elseif ($id_page == 8) : ?> Service <?php endif; ?>">
                        </div>

                        <div class="mt-3">
                            <label class="mb-0" for="prosev_price"><?php if ($id_page == 7) : ?> Product <?php elseif ($id_page == 8) : ?> Service <?php endif; ?> Price</label>
                            <input required type="number" min="0" class="form-control" name="prosev_price" id="prosev_price" placeholder="Enter price of <?php if ($id_page == 7) : ?> Product <?php elseif ($id_page == 8) : ?> Service <?php endif; ?>">
                        </div>

                        <div class="mt-3">
                            <label class="mb-0" for="prosev_desc"><?php if ($id_page == 7) : ?> Product <?php elseif ($id_page == 8) : ?> Service <?php endif; ?> Description</label>
                            <textarea required rows="3" class="form-control" name="prosev_desc" id="prosev_desc" placeholder="Enter description of <?php if ($id_page == 7) : ?> Product <?php elseif ($id_page == 8) : ?> Service <?php endif; ?>"></textarea>
                        </div>

                        <?php if ($id_page == 7) : ?>
                            <div class="mt-3">
                                <label class="mb-0" for="prosev_stock"><?php if ($id_page == 7) : ?> Product <?php elseif ($id_page == 8) : ?> Service <?php endif; ?> Stock</label>
                                <input required type="number" min="0" name="prosev_stock" id="prosev_stock" class="form-control" placeholder="Enter stock of <?php if ($id_page == 7) : ?> Product <?php elseif ($id_page == 8) : ?> Service <?php endif; ?>">
                            </div>

                        <?php else : ?>
                            <input type="hidden" name="prosev_stock" value="<?= 0; ?>">
                        <?php endif; ?>

                        <div class="mt-3">
                            <label class="mb-0" for="prosev_img"><?php if ($id_page == 7) : ?> Product <?php elseif ($id_page == 8) : ?> Service <?php endif; ?> Image</label>
                            <input required accept=".png, .jpeg, .jpg" type="file" min="0" name="prosev_img" id="prosev_img" class="form-control">
                        </div>

                        <input type="hidden" name="prosev_category" value="<?php if ($id_page == 7) : ?>Product<?php elseif ($id_page == 8) : ?>Service<?php endif; ?>">
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<div class="row my-3" style="row-gap: 18px;">
    <?php foreach ($prosevs as $prosev) : ?>
        <div class="col-xl-3 col-12">
            <div class="card">
                <div class="card-body p-0" style="height: 30vh;">
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

                    <div class="mt-3">
                        <button class="btn btn-info" data-toggle="modal" data-target="<?= '#edit' . $prosev['prosev_id']; ?>">Edit</button>
                        <button class="btn btn-danger" data-toggle="modal" data-target="<?= '#delete' . $prosev['prosev_id']; ?>">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="<?= 'delete' . $prosev['prosev_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-danger" id="exampleModalLabel">Delete <?php if ($id_page == 7) : ?> Product <?php elseif ($id_page == 8) : ?> Service <?php endif; ?> </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure to delete <strong><?= $prosev['prosev_name']; ?></strong> (<?= $prosev['prosev_category']; ?>)
                    </div>
                    <form action="<?= base_url('/delete_prosev/' . $prosev['prosev_id']); ?>" method="POST">
                        <?= csrf_field(); ?>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger">Delete it!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="<?= 'edit' . $prosev['prosev_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-info" id="exampleModalLabel">Edit <?php if ($id_page == 7) : ?> Product <?php elseif ($id_page == 8) : ?> Service <?php endif; ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('/update_prosev/' . $prosev['prosev_id']); ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <div class="modal-body">
                            <div class="">
                                <label class="mb-0" for="prosev_name"><?php if ($id_page == 7) : ?> Product <?php elseif ($id_page == 8) : ?> Service <?php endif; ?> Name</label>
                                <input required value="<?= $prosev['prosev_name']; ?>" type="text" class="form-control" name="prosev_name" id="prosev_name" placeholder="Enter name of <?php if ($id_page == 7) : ?> Product <?php elseif ($id_page == 8) : ?> Service <?php endif; ?>">
                            </div>

                            <div class="mt-3">
                                <label class="mb-0" for="prosev_price"><?php if ($id_page == 7) : ?> Product <?php elseif ($id_page == 8) : ?> Service <?php endif; ?> Price</label>
                                <input required value="<?= $prosev['prosev_price']; ?>" type="number" min="0" class="form-control" name="prosev_price" id="prosev_price" placeholder="Enter price of <?php if ($id_page == 7) : ?> Product <?php elseif ($id_page == 8) : ?> Service <?php endif; ?>">
                            </div>

                            <div class="mt-3">
                                <label class="mb-0" for="prosev_desc"><?php if ($id_page == 7) : ?> Product <?php elseif ($id_page == 8) : ?> Service <?php endif; ?> Description</label>
                                <textarea required rows="3" class="form-control" name="prosev_desc" id="prosev_desc" placeholder="Enter description of <?php if ($id_page == 7) : ?> Product <?php elseif ($id_page == 8) : ?> Service <?php endif; ?>"><?= $prosev['prosev_desc']; ?></textarea>
                            </div>

                            <?php if ($id_page == 7) : ?>
                                <div class="mt-3">
                                    <label class="mb-0" for="prosev_stock"><?php if ($id_page == 7) : ?> Product <?php elseif ($id_page == 8) : ?> Service <?php endif; ?> Stock</label>
                                    <input required value="<?= $prosev['prosev_stock']; ?>" type="number" min="0" name="prosev_stock" id="prosev_stock" class="form-control" placeholder="Enter stock of <?php if ($id_page == 7) : ?> Product <?php elseif ($id_page == 8) : ?> Service <?php endif; ?>">
                                </div>
                            <?php else : ?>
                                <input type="hidden" name="prosev_stock" value="<?= $prosev['prosev_stock']; ?>" id="">
                            <?php endif; ?>

                            <div class="mt-3">
                                <label class="mb-0" for="prosev_img"><?php if ($id_page == 7) : ?> Product <?php elseif ($id_page == 8) : ?> Service <?php endif; ?> Image</label>
                                <input accept=".png, .jpeg, .jpg" type="file" min="0" name="prosev_img" id="prosev_img" class="form-control">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>