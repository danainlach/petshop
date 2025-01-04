<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php if (session()->has('error')) : ?>
    <script>
        Swal.fire({
            icon: "error",
            title: "Ups..",
            text: "<?= session('error'); ?>",
        })
    </script>

<?php elseif (session()->has('success')) : ?>
    <script>
        Swal.fire({
            icon: "success",
            title: "Success",
            text: "<?= session('success'); ?>",
        })
    </script>

<?php elseif (session()->has('warning')) : ?>
    <script>
        Swal.fire({
            icon: "warning",
            title: "Warning",
            text: "<?= session('warning'); ?>",
        })
    </script>

<?php elseif (session()->has('info')) : ?>
    <script>
        Swal.fire({
            icon: "info",
            title: "Information",
            text: "<?= session('info'); ?>",
        })
    </script>
<?php endif; ?>