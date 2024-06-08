<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-fixed navbar-brand-center"
    style="background:<?php echo $headerfooter ?>">
    <div class="navbar-header d-xl-block d-none">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item"><a class="navbar-brand mt-1" href="?menu=home">
                    <div class="avatar avatar-xl">
                        <img src="admin/master_data/logo/<?php echo $logo; ?>" class="img-fluid shadow-lg border-white">
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a
                                class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                    class="ficon feather icon-menu"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav bookmark-icons">
                        <li class="nav-item d-none d-lg-block text-bold-700"><a href="?menu=home"
                                class="btn mt-1 mb-1 font-small-3"
                                style="color:<?php echo $tombol; ?>"><?php echo $nm_dinas; ?></a></li>
                    </ul>
                </div>
                <ul class="nav navbar-nav float-right">
                    <!--li class="nav-item nav"><a href="#login" class="btn btn-dark mt-1 mb-1 font-small-3"><i class="fab fa-google-play"></i> Download App!</a></li-->
                    <li class="nav-item nav"><a href="?menu=ppdb" class="btn btn-dark mt-1 mb-1 font-small-3"><i
                                class="fas fa-clipboard-check"></i> Daftar PPDB!</a></li>
                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link"
                            href="#" data-toggle="dropdown" style="color:<?php echo $tombol; ?>">
                            <div class="user-nav"><span class="user-name text-bold-300">Access</span><span
                                    class="user-status text-bold-600">Now!</span></div>
                            <!--span><img class="round" src="w/logo.png" height="40" width="40"></span-->
                            <span><i class="fas fa-user round fa-2x"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#log"><i
                                    class="fas fa-user-lock"></i> Login!</a>
                            <!--a class="dropdown-item" href="#"><i class="fas fa-user-plus"></i> Register!</a-->
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->

<!-- BEGIN: Main Menu-->
<div class="horizontal-menu-wrapper">
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-without-dd-arrow navbar-shadow menu-border"
        role="navigation" data-menu="menu-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="index.php">
                        <h4 class="font-medium-1"><?php echo $nm_dinas; ?></h4>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                            class="feather icon-x d-block d-xl-none font-medium-4 dark toggle-icon"></i><i
                            class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                            data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <!-- Horizontal menu content-->
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <ul class="nav navbar-nav justify-content-center" id="main-menu-navigation" data-menu="menu-navigation">
                <li class="nav-item"><a class="nav-link" href="?menu=home#promo"><i class="fas fa-home-alt"></i>
                        BERANDA</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- END: Main Menu-->