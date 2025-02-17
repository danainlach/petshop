<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title; ?> | KAY Dashboard</title>
    <link href="<?= base_url('vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?= base_url('css/sb-admin-2.min.css'); ?>" rel="stylesheet">
    <link rel="icon" href="<?= base_url('img/logo.jpg'); ?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <?= $this->include('components/sidebar-dash'); ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">

                <?= $this->include('components/nav-dash'); ?>

                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center mb-4 d-xl-none d-inline-block">
                        <h1 class="h4 mb-0" style="font-weight: 700;"><?= $title; ?></h1>
                    </div>

                    <?php if ($id_page != 5) : ?>
                        <div style="font-size: 14px;" class="mb-3">
                            <a href="<?= base_url('/overview'); ?>">Overview</a> / <?= $title; ?>
                        </div>
                    <?php endif; ?>

                    <?= $this->renderSection('content'); ?>

                </div>
            </div>

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; KAY <?= date('Y'); ?></span>
                    </div>
                </div>
            </footer>

        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="<?= base_url('vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('vendor/bootstrap/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?= base_url('vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <script src="<?= base_url('js/sb-admin-2.min.js'); ?>"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#data').DataTable();
        });
    </script>

    <?= $this->include('components/popup'); ?>
</body>

</html>