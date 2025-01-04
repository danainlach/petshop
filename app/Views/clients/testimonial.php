<?= $this->extend('layouts/app'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid">

    <div class="row justify-content-center align-items-center" style="position: relative">
        <div class="col-xl-12 d-flex justify-content-center align-items-center" style="height:80vh; background: rgba(0, 0, 0, 0.5)">
            <img src="<?= base_url('img/dog.jpg'); ?>" style="z-index: -1; width: 100%; height: 100%; object-fit: cover; position: absolute" alt="">
            <div class="col-xl-6 text-light text-center py-5">
                <h1 style="font-weight: 800">
                    Amazing owner with good testimonial
                </h1>
                <p>
                    What they say about KAY petshop?
                </p>

                <a href="#clients" class="btn btn-light">See More</a>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-around align-items-center my-5" style="row-gap: 20px;">
            <div class="col-xl-4 text-xl-start text-center">
                <h2 style="font-weight: 700;">Data <span style="color: #f97133;">Summary</span></h2>
                <p>Overview our data about products, services and our clients.</p>
            </div>

            <div class="col-xl-2 text-center card p-4" style="border: 1px solid #eee">
                <h1 style="font-weight: 800;"><?= $product_total; ?></h1>
                <p>Our Products</p>
            </div>
            <div class="col-xl-2 text-center card p-4" style="border: 1px solid #eee">
                <h1 style="font-weight: 800;"><?= $member_total; ?></h1>
                <p>Our Clients</p>
            </div>
            <div class="col-xl-2 text-center card p-4" style="border: 1px solid #eee">
                <h1 style="font-weight: 800;"><?= $service_total; ?></h1>
                <p>Our Services</p>
            </div>
            <div id="clients"></div>
        </div>


        <div class="row my-4">
            <hr style="border: 1px solid #ddd">

            <div class="col-12 mt-4 text-center">
                <h2 style="font-weight: 700;">
                    What <span style="color: #f97133;">Clients</span> Say
                </h2>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 p-0">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="row bg-info mt-xl-5 mt-2 justify-content-around align-items-center">
                        <div class="col-xl-4 mt-4 mt-xl-0">
                            <p class="text-xl-start text-center text-light">
                                <em>
                                    <q>
                                        Saya sangat senang dengan pelayanan yang diberikan oleh petshop ini. Hewan peliharaan saya selalu diperlakukan dengan sangat baik dan peralatan yang dijual juga sangat berkualitas.
                                    </q>
                                </em>
                            </p>

                            <div class="my-5">
                                <h6 class="text-xl-start text-center text-muted" style="font-weight: bold;">- Neville Jeremy Onorato Laia</h6>
                            </div>
                        </div>
                        <div class="col-xl-4 col-11 p-0 bg-warning rounded" style="height: 80vh; position: relative; bottom: 30px;">
                            <img src="<?= base_url('img/testimoni/1.png'); ?>" class="rounded" style="width: 100%; height: 100%; object-fit: cover;" alt="">
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row bg-danger mt-xl-5 mt-2 justify-content-around align-items-center">
                        <div class="col-xl-4 mt-4 mt-xl-0">
                            <p class="text-xl-start text-center text-light">
                                <em>
                                    <q>
                                        Terima kasih petshop atas bantuan dan saran yang diberikan dalam memilih makanan yang tepat untuk hewan peliharaan saya. Saya sangat puas dengan hasilnya!
                                    </q>
                                </em>
                            </p>

                            <div class="my-5">
                                <h6 class="text-xl-start text-center text-light" style="font-weight: bold;">- Mhd. Fathurrahman</h6>
                            </div>
                        </div>
                        <div class="col-xl-4 col-11 p-0 bg-info rounded" style="height: 80vh; position: relative; bottom: 30px;">
                            <img src="<?= base_url('img/testimoni/2.png'); ?>" class="rounded" style="width: 100%; height: 100%; object-fit: cover;" alt="">
                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="row bg-warning mt-xl-5 mt-2 justify-content-around align-items-center">
                        <div class="col-xl-4 mt-4 mt-xl-0">
                            <p class="text-xl-start text-center text-light">
                                <em>
                                    <q>
                                        Toko hewan ini sangat direkomendasikan bagi siapa saja yang ingin memberikan perawatan terbaik bagi hewan peliharaannya.
                                    </q>
                                </em>
                            </p>

                            <div class="my-5">
                                <h6 class="text-xl-start text-center text-muted" style="font-weight: bold;">- Syarah Afni Fadlin</h6>
                            </div>
                        </div>
                        <div class="col-xl-4 col-11 px-0 bg-primary rounded" style="height: 80vh; position: relative; bottom: 30px;">
                            <img src="<?= base_url('img/testimoni/3.jpg'); ?>" class="rounded" style="width: 100%; height: 100%; object-fit: cover;" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<?= $this->endSection(); ?>