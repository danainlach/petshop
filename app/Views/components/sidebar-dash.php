<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('/overview'); ?>">
        <div class="sidebar-brand-icon">
            <img src="<?= base_url('img/logo.jpg'); ?>" class="rounded" width="40" alt="">
        </div>
        <div class="sidebar-brand-text mx-3">KAY</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if ($id_page == 5) : ?> active <?php endif; ?>">
        <a class="nav-link" href="<?= base_url('/overview'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Overview</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Management
    </div>

    <li class="nav-item <?php if ($id_page == 6) : ?> active <?php endif; ?>">
        <a class="nav-link" href="<?= base_url('/users_management'); ?>">
            <i class="fas fa-fw fa-users"></i>
            <span>Users Management</span>
        </a>
    </li>

    <li class="nav-item <?php if ($id_page == 7) : ?> active <?php endif; ?>">
        <a class="nav-link" href="<?= base_url('/products_management'); ?>">
            <i class="fas fa-fw fa-rocket"></i>
            <span>Products Management</span>
        </a>
    </li>

    <li class="nav-item <?php if ($id_page == 8) : ?> active <?php endif; ?>">
        <a class="nav-link" href="<?= base_url('/services_management'); ?>">
            <i class="fas fa-fw fa-heart"></i>
            <span>Services Management</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Report
    </div>


    <li class="nav-item <?php if ($id_page == 9) : ?> active <?php endif; ?>">
        <a class="nav-link" href="<?= base_url('/sales_report'); ?>">
            <i class="fas fa-fw fa-fax"></i>
            <span>Sales Report</span>
        </a>
    </li>


    <li class="nav-item <?php if ($id_page == 10) : ?> active <?php endif; ?>">
        <a class="nav-link" href="<?= base_url('/booking_report'); ?>">
            <i class="fas fa-fw fa-check"></i>
            <span>Booking Report</span>
        </a>
    </li>

    <li class="nav-item <?php if ($id_page == 11) : ?> active <?php endif; ?>">
        <a class="nav-link" href="<?= base_url('/financial_report'); ?>">
            <i class="fas fa-fw fa-dollar-sign"></i>
            <span>Financial Report</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->