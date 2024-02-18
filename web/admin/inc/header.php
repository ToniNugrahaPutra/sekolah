<?php

if (isset($_SESSION['nm_user'])) {
  $query_info_user = mysqli_query($koneksi, "SELECT * FROM tabel_user WHERE nm_user='".$_SESSION['nm_user']."'");
  $info_user = mysqli_fetch_array($query_info_user); 
  $id_user  = $info_user['id_user'];
  $nm_user  = $info_user['nm_user'];
  $header = true;
}
?>
<title class="text-uppercase">.:<?php echo $nm_user ?>:.</title>
    
<!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                        </ul>                       
                       
                    </div>
                    <ul class="nav navbar-nav float-right">
                        
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
<?php $satQuery = "SELECT COUNT(id_member) as nm_member FROM tabel_siswa_baru";
      $executeSat = mysqli_query($koneksi, $satQuery);
      while ($pegawai=mysqli_fetch_array($executeSat)) {
?>                       
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="?menu=ppdb" title="Data Siswa Baru"><i class="ficon fas fa-user-tie pr-1"></i><span class="badge badge-pill badge-primary badge-up cart-item-count"><?=$pegawai['nm_member']?></span></a>
                        </li><?php  }  ?> 

<?php $satQuery = "SELECT COUNT(id_anggota) as anggota FROM tabel_anggota WHERE kategori  = 'alumni'";
      $executeSat = mysqli_query($koneksi, $satQuery);
      while ($alumni=mysqli_fetch_array($executeSat)) {
?>                        
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#"><i class="ficon fas fa-user-graduate pr-1"></i><span class="badge badge-pill badge-primary badge-up cart-item-count mb-3"><?=$alumni['anggota']?></span></a>
                        </li><?php  }  ?>
                        
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none">
                                <span class="user-name text-bold-600">Log on </span>
                                <span class="user-status"><?php echo $nm_user ?></span></div><span>
                                <img class="round" src="master_data/logo/<?php echo $a['logo'] ?>" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                            	<!--a class="dropdown-item" href="#"><i class="feather icon-home"></i> Edit user</a>
                            <div class="dropdown-divider"></div-->
                                <a class="dropdown-item" href="akses/logout.php">
                                <i class="feather icon-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
               <li class="nav-item mr-auto">
                	<a class="navbar-brand" href="index.php">
                        <h5 class="font-small-1 text-uppercase"><?php echo $nm_user ?></h5>
                    </a>
                </li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
               <li class="active"><a href="?menu=home"><i class="feather icon-home"></i>
                	<span class="menu-item" data-i18n="Dashboard">Beranda</span></a>
               </li>
               
                <li class="navigation-header"><span>KONTEN</span></li>
                    <li class="nav-item"><a href="?menu=home"><i class="fas fa-newspaper"></i>
                       <span class="menu-item" data-i18n="List View">Konten</span></a></li> 
				
				 <li class="navigation-header"><span>PPDB</span></li>
                    <li class="nav-item"><a href="?menu=ppdb"><i class="fa-solid fa-address-book"></i>
                       <span class="menu-item" data-i18n="List View">Data Siswa Baru</span></a></li>
                
                <li class="navigation-header"><span>DATA</span></li>                
<?php            
   error_reporting(0);
   $ketQuery = "SELECT * FROM tabel_kategori_anggota ORDER BY tabel_kategori_anggota.id_kategori ASC";
   $executeSat = mysqli_query($koneksi, $ketQuery);
   while ($b=mysqli_fetch_array($executeSat)) {    
	   $id_kat_anggota	= $b['id_kategori'];
	   $nm_kat_anggota	= $b['nm_kat_anggota'];
	   if ($nm_kat_anggota == 'Manajemen') {
    		$linkpage="<a href='?menu=data_anggota&kategori=$id_kat_anggota'><i class='fas fa-user-tie'></i> <span class='menu-item' data-i18n='List View'>$nm_kat_anggota </span></a>";
	   }elseif ($nm_kat_anggota == 'Operator') {
    		$linkpage="<a href='?menu=data_anggota&kategori=$id_kat_anggota'><i class='fa-solid fa-address-card'></i> <span class='menu-item' data-i18n='List View'>$nm_kat_anggota </span></a>";
	   }elseif ($nm_kat_anggota == 'Guru') {
    		$linkpage="<a href='?menu=data_anggota&kategori=$id_kat_anggota'><i class='fa-solid fa-chalkboard-user'></i> <span class='menu-item' data-i18n='List View'>$nm_kat_anggota </span></a>";
	   }elseif ($nm_kat_anggota == 'Siswa') {
    		$linkpage="<a href='?menu=data_anggota&kategori=$id_kat_anggota'><i class='fa-solid fa-user'></i></i> <span class='menu-item' data-i18n='List View'>$nm_kat_anggota </span></a>";
	   }elseif ($nm_kat_anggota == 'Pegawai') {
    		$linkpage="<a href='?menu=data_anggota&kategori=$id_kat_anggota'><i class='fa-solid fa-image-portrait'></i> <span class='menu-item' data-i18n='List View'>$nm_kat_anggota </span></a>";
	   }elseif ($nm_kat_anggota == 'Alumni') {
    		$linkpage="<a href='?menu=data_anggota&kategori=$id_kat_anggota'><i class='fa-solid fa-user-graduate'></i> <span class='menu-item' data-i18n='List View'>$nm_kat_anggota </span></a>";
	   }elseif ($nm_kat_anggota == 'Wali Siswa') {
    		$linkpage="<a href='?menu=data_anggota&kategori=$id_kat_anggota'><i class='fa-solid fa-user-group'></i> <span class='menu-item' data-i18n='List View'>$nm_kat_anggota </span></a>";
	   }
	   else {
    	$linkpage="";
	   }
?>
				   <li class="nav-item"><?php echo $linkpage; ?></li>
                    <?php } ?>
                <li class="navigation-header"><span>WEBSITE</span></li>   
                	<li class="nav-item"><a href="?menu=web"><i class="fas fa-globe"></i>
                        <span class="menu-item" data-i18n="List View">Website</span></a></li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
    
    
    <!-- BEGIN: Content-->
     <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-12 col-12 mb-2">
                   <div class="row">
                          
                          
                        
                   </div>                    
                </div>                
            </div>