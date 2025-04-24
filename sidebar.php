<?php
$halaman_sekarang = basename($_SERVER['PHP_SELF'])
?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id=" accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-at"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Angga</div>
    </a>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        tugas PBP - Used
    </div>

    <li class="nav-item <?= ($halaman_sekarang == 'dashboard.php') ? 'active' : '' ?>">
        <a class="nav-link" href="dashboard.php">
            <i class="fas fa-home m-1" style="width: 20px;"></i>
            <span>Home</span></a>
    </li>
    <li class="nav-item <?= ($halaman_sekarang == 'biodata.php') ? 'active' : '' ?>">
        <a class="nav-link" href="biodata.php">
            <i class="fas fa-user m-1" style="width: 20px;"></i>
            <span>Biodata</span>
        </a>
    </li>
    <li class="nav-item <?= ($halaman_sekarang == 'keahlian.php') ? 'active' : '' ?>">
        <a class="nav-link" href="keahlian.php">
            <i class="fas fa-brain m-1" style="width: 20px;"></i>
            <span>Keahlian</span></a>
    </li>
    <li class="nav-item <?= ($halaman_sekarang == 'kalkulator.php') ? 'active' : '' ?>">
        <a class="nav-link" href="kalkulator.php">
            <i class="fas fa-calculator m-1" style="width: 20px;"></i>
            <span>Kalkulator</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        tugas PBP - Unused
    </div>

    <li class="nav-item <?= ($halaman_sekarang == 'signin.php') ? 'active' : '' ?>">
        <a class="nav-link" href="signin.php">
            <i class="fas fa-sign-in-alt m-1" style="width: 20px;"></i>
            <span>Sign In</span></a>
    </li>
    <li class="nav-item <?= ($halaman_sekarang == 'signup.php') ? 'active' : '' ?>">
        <a class="nav-link" href="signup.php">
            <i class="fas fa-user-plus m-1" style="width: 20px;"></i>
            <span>Sign Up</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>