<?= $this->extend('layouts/app'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid" style="background: #F9ECE4;">
    <div class="container">
        <div class="row justify-content-between align-items-center mt-xl-0" style="height: 100vh; padding-top: 3em;">
            <div class="col-xl-5 mt-xl-0">
                <h6 class="text-center text-xl-start mt-5 mt-xl-0"><strong>KAY!</strong> <span style="color: #f97133;">Your Petshop care center!</span></h6>
                <h1 class="text-center text-xl-start" style="font-weight: bold;">We Care Because Your <span style="color: #f97133;">Care</span> Your <span style="color: #f97133;">Pet</span></h1>
                <p class="text-center text-xl-start" style="font-size: 13.5px">
                    KAY is a petshop brand that provides a variety of high-quality products and services for your pets. With a focus on pet health and comfort, KAY provides the best pet food and supplies.
                </p>
                <p class="mb-0 text-xl-start text-center">
                    <a href="<?= base_url('/petshop_center'); ?>" style="text-decoration:none;">
                        <button class="btn mb-0 text-light px-3" style="background: #000; height: 48px;">
                            Start Now
                        </button>
                    </a>
                    <a href="<?= base_url('/services'); ?>" style="text-decoration:none; color: #000">
                        <button class="btn mb-0 ms-2 border-dark" style="height: 48px;">
                            Our Services
                        </button>
                    </a>
                </p>
            </div>

            <div class="col-xl-6 position-relative">
                <img src="<?= base_url('img/home_ilustration.png'); ?>" style="width: 100%; object-fit: cover">
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mt-5">
        <div class="col-12 text-center">
            <h2 style="font-weight: bold;">Our <span>Services & Products</span></h2>
            <p style="color: #f97133;">Services for your pet</p>
        </div>
    </div>

    <div class="row my-3 justify-content-between align-items-center" style="row-gap: 25px;">
        <div class="col-xl-4">
            <div class="card" style="border: 0; box-shadow: rgba(17, 17, 26, 0.05) 0px 0px 16px; height: 30vh;">
                <div class="card-body">
                    <h4 style="font-weight: 700;">Pet Hotel</h4>
                    <p class="text-primary">Service</p>
                    <p style="font-size: 11px;">
                        Pet hotel merupakan jasa penitipan hewan peliharaan dimana pemilik hewan peliharaan dapat menitipkan hewan peliharannya selama beberpa hari.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card" style="border: 0; box-shadow: rgba(17, 17, 26, 0.05) 0px 0px 16px; height: 30vh;">
                <div class="card-body">
                    <h4 style="font-weight: 700;">Washing Pets</h4>
                    <p class="text-primary">Service</p>
                    <p style="font-size: 11px;">
                        Proses mencuci hewan peliharaan seperti anjing, kucing, atau kelinci dengan menggunakan air dan produk perawatan khusus untuk menjaga kebersihan dan kesehatan hewan peliharaan.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card" style="border: 0; box-shadow: rgba(17, 17, 26, 0.05) 0px 0px 16px; height: 30vh;">
                <div class="card-body">
                    <h4 style="font-weight: 700;">Grooming</h4>
                    <p class="text-primary">Service</p>
                    <p style="font-size: 11px;">
                        Grooming hewan peliharaan adalah proses merawat dan menjaga kebersihan hewan peliharaan, tidak hanya mencakup mencuci atau membersihkan tubuh hewan peliharaan, tetapi juga meliputi perawatan kuku, bulu, telinga, dan gigi.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card" style="border: 0; box-shadow: rgba(17, 17, 26, 0.05) 0px 0px 16px; height: 30vh;">
                <div class="card-body">
                    <h4 style="font-weight: 700;">Pet Food</h4>
                    <p class="text-danger">Product</p>
                    <p style="font-size: 11px;">
                        Makanan hewan peliharaan dibuat dari bahan-bahan tertentu yang disesuaikan dengan kebutuhan nutrisi hewan tersebut.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card" style="border: 0; box-shadow: rgba(17, 17, 26, 0.05) 0px 0px 16px; height: 30vh;">
                <div class="card-body">
                    <h4 style="font-weight: 700;">Pet Accessories</h4>
                    <p class="text-danger">Product</p>
                    <p style="font-size: 11px;">
                        Pet accessories dirancang untuk membantu pemilik hewan peliharaan memberikan kenyamanan, keamanan, dan gaya hidup yang sehat dan aktif bagi hewan peliharaan mereka.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-xl-4">
            <div class="card" style="border: 0; box-shadow: rgba(17, 17, 26, 0.05) 0px 0px 16px; height: 30vh;">
                <div class="card-body">
                    <h4 style="font-weight: 700;">Pet Cage</h4>
                    <p class="text-danger">Product</p>
                    <p style="font-size: 11px;">
                        Pet cage berfungsi sebagai tempat tinggal sementara atau tetap bagi hewan peliharaan, tergantung pada ukuran dan tujuannya.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="row my-5">
        <div class="col-12 text-center">
            <p style="font-size: 13px;">
                Informasi detail mengenai produk dan layanan jasa KAY petshop.
            </p>
            <a href="<?= base_url('/petshop_center'); ?>" class="btn text-light" style="background: #f97133;">Petshop Center</a>
        </div>
    </div>
    <hr style="border: 1px solid #ddd">
</div>

<div class="container-fluid">
    <div class="row pb-5 justify-content-center align-items-center" style="margin-top: 80px">
        <div class="col-xl-6 d-flex justify-content-center align-items-center">
            <img src="<?= base_url('img/rabbit.jpg'); ?>" class="rounded" style="width: 100%; height: 100%; object-fit: contain" alt="">
        </div>
        <div class="col-xl-5 text-xl-start text-center mt-3 mt-xl-0">
            <h1 style="font-weight: 800">Who <span class="px-1" style="color: #f97133;">are</span> We?</h1>
            <p style="color:#3a40d0">
                Digital with pets.
            </p>
            <p style="font-size: 14px;">
                KAY is a pet store brand that operates online and offers a variety of products for pet owners. The brand is dedicated to providing affordable, high-quality pet products for cats, dogs, birds, fish and other small pets. KAY offers a convenient online shopping experience with an easy-to-use website and a variety of payment options. Their products include pet food, accessories, grooming tools, toys and cages. KAY also provides information and tips on pet care through their blog and social media platforms.
            </p>

            <a href="<?= base_url('/testimoni'); ?>" class="my-2 px-4 py-2 btn text-danger border-danger">Our Testimoni</a>
        </div>
    </div>

    <div class="row justify-content-center align-items-center" style="position: relative">
        <div class="col-xl-12 d-flex justify-content-center align-items-center" style="height:50vh; background: rgba(0, 0, 0, 0.7)">
            <img src="<?= base_url('img/cat.jpg'); ?>" style="z-index: -1; width: 100%; height: 100%; object-fit: cover; position: absolute" alt="">
            <div class="col-xl-6 text-light text-center py-5">
                <h1 style="font-weight: 800">
                    Connect with Us
                </h1>
                <p>
                    If you still have some questions please contact us
                </p>

                <a href="https://wa.me/62895602939944?text=Saya%20ingin%20berkonsultasi%20lebih%20lanjut%20mengenai%20hewan%20peliharaan%20saya." target="_blank" class="btn border-light text-light">Contact Us</a>
            </div>
        </div>
    </div>

</div>



<?= $this->endSection(); ?>