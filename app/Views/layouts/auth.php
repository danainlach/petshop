<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?> | KAY Petshop</title>
    <link rel="stylesheet" href="<?= base_url('css/bs5.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('css/public.css'); ?>">
    <link rel="icon" href="<?= base_url('img/logo.jpg'); ?>">
</head>

<body>

    <?= $this->renderSection('content'); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?= base_url('js/bs5.js'); ?>"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <script>
        feather.replace()
    </script>
    <?= $this->include('components/popup'); ?>
</body>

</html>