<?php include('admin/inc/koneksi.php');?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<?php $a = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM tabel_dinas"));
$nm_dinas 		= $a['nm_dinas'];
$logo	 		= $a['logo'];
$ppdb	 		= $a['logoppdb'];
$telepon 		= $a['telepon'];
$hp	 			= $a['hp'];
$alamat			= $a['alamat'];
$kecamatan		= $a['kecamatan'];
$kota 			= $a['kota'];
$fb 			= $a['fb'];
$ig 			= $a['ig'];
$twitter 		= $a['twitter'];
$yt 			= $a['yt'];
$email 			= $a['email'];
$tiktok 		= $a['tiktok'];
$headerfooter	= $a['headerfooter'];
$background	 	= $a['background'];
$tombol 		= $a['tombol'];
$google_map		= $a['google_map'];
$web			= $a['web'];
 ?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>.:<?php echo $nm_dinas;?>:.</title>
    <link rel="apple-touch-icon" href="admin/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="admin/master_data/logo/<?php echo $ppdb; ?>">
    
    <link href="admin/app-assets/font/css/fontawesome.min.css" rel="stylesheet" type="text/css">
	<link href="admin/app-assets/font/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="admin/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/vendors/css/extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/vendors/css/extensions/tether.min.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/vendors/css/extensions/shepherd-theme-default.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="admin/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="admin/app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/css/pages/dashboard-analytics.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/css/pages/card-analytics.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/css/plugins/tour/tour.css">    
    <link rel="stylesheet" type="text/css" href="admin/app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/vendors/css/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/vendors/css/extensions/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/css/pages/app-ecommerce-shop.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/css/pages/users.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/css/pages/app-user.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/css/plugins/forms/validation/form-validation.css">
	<link rel="stylesheet" type="text/css" href="admin/app-assets/vendors/css/pickers/pickadate/pickadate.css">    
    <link rel="stylesheet" type="text/css" href="admin/app-assets/vendors/css/calendars/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/vendors/css/calendars/extensions/daygrid.min.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/vendors/css/calendars/extensions/timegrid.min.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/css/plugins/calendars/fullcalendar.css">    
    <link rel="stylesheet" type="text/css" href="admin/app-assets/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/css/plugins/file-uploaders/dropzone.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/css/pages/data-list-view.css"> 
    <link rel="stylesheet" type="text/css" href="admin/app-assets/css/plugins/forms/wizard.css">
    <link rel="stylesheet" type="text/css" href="admin/app-assets/css/pages/coming-soon.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="admin/assets/css/style.css">

    <link rel="stylesheet" href="asset/bootstrap-3.3.7/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="asset/select2-4.0.6-rc.1/dist/css/select2.min.css">
  <script src="asset/jquery/jquery-3.3.1.min.js"></script>
  <script src="asset/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
  <script src="asset/select2-4.0.6-rc.1/dist/js/select2.min.js"></script>   
  <script src="asset/select2-4.0.6-rc.1/dist/js/i18n/id.js"></script>   
  <script src="asset/js/app.js"></script>
  
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 2-columns navbar-floating footer-static" data-open="hover" data-menu="horizontal-menu" data-col="2-columns" style="background:<?php echo $background ?>">

<?php include "inc/header.php";?>
<!-- BEGIN: Content-->
<div class="app-content content pt-0 pl-0 pr-0">
    	<div class="card-content text-white" id="promo">
           <div class="card-body text-center" style="background-image:url(w/img/slide-1.jpg)">
           	 <div class="row ml-1 mr-1 pt-5 mt-5"> 
                 <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card pt-0 mt-3 shadow-none">
                          <div id="carousel-example-caption" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carousel-example-caption" data-slide-to="0" class="active"></li>
                              <li data-target="#carousel-example-caption" data-slide-to="1"></li>
                            </ol>
                              <div class="carousel-inner shadow" role="listbox">                                 
<?php             
   $ketQuery = "SELECT * FROM tabel_konten WHERE kat = 'promo' ORDER BY id_konten DESC limit 1";
   $executeSat = mysqli_query($koneksi, $ketQuery);
   while ($b=mysqli_fetch_array($executeSat)) {
?>                                  
                                  <div class="carousel-item active">
                                    <img class="img-fluid rounded" src="admin/master_data/images/<?php echo $b['gbr'] ?>">
                                  </div>
<?php } ?>                                    

<?php             
   $ketQuery = "SELECT * FROM tabel_konten WHERE kat = 'promo' ORDER BY id_konten DESC";
   $executeSat = mysqli_query($koneksi, $ketQuery);
   while ($b=mysqli_fetch_array($executeSat)) {
?>                                  
                                  <div class="carousel-item">
                                      <img class="img-fluid rounded" src="admin/master_data/images/<?php echo $b['gbr'] ?>">
                                  </div>
<?php } ?>                                               
                                    </div>
                            <a class="carousel-control-prev" href="#carousel-example-caption" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-example-caption" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                            </a>
                    	</div>                         
                 	</div>
                 </div>
               </div>
           </div>
         </div>
<!-- END: Content-->   

<?php          
          if (isset($_GET['menu'])) {
            $menu = $_GET['menu'];
            switch ($menu) {
              case ('home');
                include('master/home.php');
                break;
		      case ('list');
                include('master/list.php');
                break;
			  case ('details');
                include('master/detail.php');
                break;
			  case ('ppdb');
                include('master/ppdb.php');
                break;
			  case ('dapeg');
                include('master/pegawai.php');
                break;	
			  case ('dalum');
                include('master/alumni.php');
                break;
			  case ('cek');
                include('master/view.php');
                break;			
			  						
            }
          }
?>
<?php
    include("koneksi.php");     
  ?>
<div class="content-wrapper pt-0 mt-0"> 
  <div class="card">           
   <div class="content-body">
    <div class="row justify-content-center">
      <div class="col-md-12 text-center">
         <div class="divider">
            <div class="divider-text"><h3 class="display-5 text-uppercase">DATA SISWA BARU</h3></div>

          </div>
      </div>
    </div>
    
    <form class="form-horizontal" method="post" action="lokasi.php">
              <div class="form-group">
                <label class="control-label col-sm-3">Provinsi:</label>
                <div class="col-sm-9">
                  <?php                    
                    $sql_provinsi = mysqli_query($koneksi,"SELECT * FROM provinsi ORDER BY nama ASC");
                   ?>
                  <select class="form-control" name="provinsi" id="provinsi">
                    <option></option>
                    <?php                       
                        while($rs_provinsi = mysqli_fetch_assoc($sql_provinsi)){ 
                           echo '<option value="'.$rs_provinsi['id_prov'].'">'.$rs_provinsi['nama'].'</option>';
                        }                        
                      ?>
                  </select>
                  <img src="asset/img/loading.gif" width="35" id="load1" style="display:none;" />
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3" >Kota/Kabupaten:</label>
                <div class="col-sm-9">          
                  <select class="form-control" name="kota" id="kota">
                    <option></option>
                  </select>
                  <img src="asset/img/loading.gif" width="35" id="load2" style="display:none;" />
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3" >Kecamatan:</label>
                <div class="col-sm-9">          
                  <select class="form-control" name="kecamatan" id="kecamatan">
                    <option></option>
                  </select>
                  <img src="asset/img/loading.gif" width="35" id="load3" style="display:none;" />
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3" >Kelurahan:</label>
                <div class="col-sm-9">          
                  <select class="form-control" name="kelurahan" id="kelurahan">
                    <option></option>
                  </select>
                </div>
              </div>
              <div class="form-group">        
                <div class="col-sm-offset-3 col-sm-9">
                  <input type="submit" class="btn btn-default" name="tambah" value="SIMPAN">
                </div>
              </div>
            </form>
                      </div>
                      <h1>Data tampil</h1>	
	<table class="table" border="1px solid #111">
		<thead>
			<tr>
			 	<th>No</th>
				<th>Provinsi</th>
				<th>Kota/Kabupaten</th>
				<th>Kecamatan</th>
				<th>Kelurahan/Desa</th>
			</tr>
		</thead>
		
		<tbody>
<?php 
	$query = "SELECT * FROM lokasi ORDER BY id ASC";		
	$result = mysqli_query($koneksi, $query);
	while ($a = mysqli_fetch_array($result)){ 
$id 	= $a['id'];		
$prov = $a['prov'];
$kab	= $a['kab'];
$kec	= $a['kec'];
$kel	= $a['kel'];		
/*if ($prov = $nama) {
    $nm_prov= "$nama";	
} else {
    $hargae = "";
}	*/
?> 			
			<tr>
				<td><?php echo $id ;?></td>
				<td><?php echo $prov ;?></td>
				<td><?php echo $kab ;?></td>
				<td><?php echo $kec ;?></td>
				<td><?php echo $kel ;?></td>
			</tr>	
			<?php } ?>
			

			
			
		</tbody>
	
	</table> 		
  </div>
      </div>
    </div> 
                      
            
    <div class="card-content">
      <div class="card-body">
   		<div class="row">

<?php error_reporting(0);
$kueri = "SELECT DISTINCT jurusan FROM tabel_anggota WHERE kategori='ppdb' ORDER BY id_anggota"; $result = mysqli_query($koneksi, $kueri); while ($p = mysqli_fetch_array($result)) {
?>       
        
            <div class="col-sm-4 col-6 pl-1 pr-1">
             <div class="card text-center p-1" style="background:<?php echo $tombol ?>;color:<?php echo $background ?>"> 
                  <i class="fas fa-users fa-3x"></i><hr class="my-1"> 
<?php $sql_user = mysqli_query($koneksi,"SELECT * FROM tabel_anggota WHERE jurusan = '$p[jurusan]'");
 $jumlah_user = mysqli_num_rows($sql_user); ?>
                  <h3 class="counter font-large-4" style="color:<?php echo $background;?>"><?php echo $jumlah_user?></h3>
                    <p class="text-uppercase text-bold-700"><?php echo $p['jurusan'];?></p>
                </div>
            </div>
<?php }?>         
    
       
         </div>
       </div>
     </div> 
   </div>
  </div>
</div>

<div class="content-wrapper pt-0 mt-0" id="kontak"> 
  <div class="card">           
   <div class="content-body">
    <div class="row justify-content-center">
      <div class="col-md-12 text-center">
         <div class="divider">
            <div class="divider-text"><h3 class="display-4 text-uppercase">Mitra Kerja</h3></div>
          </div>
      </div>
    </div>
    <div class="card-content">
      <div class="card-body text-center">      	
		<div class="row">
		  <div class="col-lg-4 col-sm-4 col-md-4 col-6">
			<img src="admin/master_data/logo/1.png" width="250">
		  </div>
		  <div class="col-lg-4 col-sm-4 col-md-4 col-6">
			<img src="admin/master_data/logo/2.png" width="250">
		  </div>
		  <div class="col-lg-4 col-sm-4 col-md-4 col-6">
			<img src="admin/master_data/logo/3.png" width="250">
		  </div>
		  <div class="col-lg-4 col-sm-4 col-md-4 col-6">
			<img src="admin/master_data/logo/4.png" width="250">
		  </div>
		  <div class="col-lg-4 col-sm-4 col-md-4 col-6">
			<img src="admin/master_data/logo/5.png" width="250">
		  </div>
		  <div class="col-lg-4 col-sm-4 col-md-4 col-6">
			<img src="admin/master_data/logo/6.png" width="250">
		  </div>	
		</div>  
        
       </div>
     </div> 
   </div>
  </div>
</div> 	
	
<div class="content-wrapper pt-0 mt-0" id="kontak"> 
  <div class="card">           
   <div class="content-body">
    <div class="row justify-content-center">
      <div class="col-md-12 text-center">
         <div class="divider">
            <div class="divider-text"><h3 class="display-4 text-uppercase">Kontak Kami</h3></div>
          </div>
      </div>
    </div>
    <div class="card-content">
      <div class="card-body text-center">
      <?php echo $google_map; ?>
      
      <hr class="my-1">
      <h3 class="font-large-1"><?php echo $nm_dinas ?></h3>
      <span class="font-medium-2"><?php echo $alamat ?> - <?php echo $kota ?></span>
      <hr class="my-1">
<a href="https://wa.me/<?php echo $hp ?>" target="_blank" style="background:<?php echo $tombol ?>" class="btn btn-icon shadow"><i class="fab fa-whatsapp fa-4x"></i></a>   		
<a href="<?php echo $fb ?>" target="_blank" style="background:<?php echo $tombol ?>" class="btn btn-icon shadow"><i class="fab fa-facebook fa-4x"></i></a>
<a href="<?php echo $twitter ?>" target="_blank" style="background:<?php echo $tombol ?>" class="btn btn-icon shadow"><i class="fab fa-twitter fa-4x"></i></a>
<a href="<?php echo $ig ?>" target="_blank" style="background:<?php echo $tombol ?>" class="btn btn-icon shadow"><i class="fab fa-instagram fa-4x"></i></a>
<a href="<?php echo $yt ?>" target="_blank" style="background:<?php echo $tombol ?>" class="btn btn-icon shadow"><i class="fab fa-youtube fa-4x"></i></a>
<a href="<?php echo $email ?>" target="_blank" style="background:<?php echo $tombol ?>" class="btn btn-icon shadow"><i class="fas fa-envelope fa-4x"></i></a>
<a href="<?php echo $tiktok ?>" target="_blank" style="background:<?php echo $tombol ?>" class="btn btn-icon shadow"><i class="fab fa-tiktok fa-4x"></i></a>	
        
       </div>
     </div> 
   </div>
  </div>
</div>                    
                    
<?php include "inc/footer.php";?>                    



     <!-- BEGIN: Vendor JS-->
    <script src="admin/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="admin/app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="admin/app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="admin/app-assets/vendors/js/extensions/tether.min.js"></script>
    <script src="admin/app-assets/vendors/js/extensions/shepherd.min.js"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Theme JS-->
    <script src="admin/app-assets/js/core/app-menu.js"></script>
    <script src="admin/app-assets/js/core/app.js"></script>
    <script src="admin/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->
    <!-- BEGIN: Page JS-->
    <script src="admin/app-assets/js/scripts/pages/dashboard-analytics.js"></script>
    <script src="admin/app-assets/js/scripts/modal/components-modal.js"></script>
    
    <script src="admin/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="admin/app-assets/js/scripts/forms/select/form-select2.js"></script>
    
    <script src="admin/app-assets/js/scripts/extensions/sweet-alerts.js"></script>
    <script src="admin/app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="admin/app-assets/vendors/js/extensions/polyfill.min.js"></script>
    
    <script src="admin/app-assets/js/scripts/pages/app-ecommerce-details.js"></script>
    <script src="admin/app-assets/js/scripts/forms/number-input.js"></script>
    <script src="admin/app-assets/js/scripts/pages/app-ecommerce-shop.js"></script>
    
    <script src="admin/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="admin/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="admin/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="admin/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="admin/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="admin/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="admin/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="admin/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="admin/app-assets/js/scripts/datatables/datatable.js"></script> 
    <script src="admin/app-assets/vendors/js/extensions/dropzone.min.js"></script>    
    <script src="admin/app-assets/vendors/js/tables/datatable/dataTables.select.min.js"></script>
    <script src="admin/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <script src="admin/app-assets/js/scripts/ui/data-list-view.js"></script>    
    <script src="admin/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
	   
    <script src="admin/app-assets/js/scripts/pages/app-user.js"></script>
    <script src="admin/app-assets/js/scripts/navs/navs.js"></script>    
    <script src="admin/app-assets/vendors/js/extensions/moment.min.js"></script>
    
    <script src="admin/app-assets/vendors/js/pagination/jquery.bootpag.min.js"></script>
    <script src="admin/app-assets/vendors/js/pagination/jquery.twbsPagination.min.js"></script>
    <script src="admin/app-assets/js/scripts/pagination/pagination.js"></script>
    
    <script src="admin/app-assets/vendors/js/extensions/jquery.steps.min.js"></script>
    <script src="admin/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="admin/app-assets/js/scripts/forms/wizard-steps.js"></script>
    <!-- END: Page JS-->
    
    <script src="admin/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="admin/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="admin/app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
    <script src="admin/app-assets/vendors/js/pickers/pickadate/legacy.js"></script>    
    <script src="admin/app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>  
    
	<script>
    $(document).ready(function() {
    
    $('.counter').each(function () {
    $(this).prop('Counter',0).animate({
    Counter: $(this).text()
    }, {
    duration: 4000,
    easing: 'swing',
    step: function (now) {
    $(this).text(Math.ceil(now));
    }
    });
    });
    
    });
    </script>
	
</body>
<!-- END: Body-->

</html>