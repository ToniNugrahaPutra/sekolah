<?php
include('inc/koneksi.php');
session_start();
if (!isset($_SESSION['nm_user']) && !isset($_SESSION['akses'])) {
  header('location:akses/login.php');
} 
else {
  
}
?>
<?php $a = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM tabel_dinas"));
$nm_usaha 		= $a['nm_dinas'];
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
?> 
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content=""> 
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="master_data/logo/<?php echo $ppdb ?>">
    
    <link href="app-assets/font/css/fontawesome.min.css" rel="stylesheet" type="text/css">
	<link href="app-assets/font/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/tether.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/shepherd-theme-default.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
   	<link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/dashboard-analytics.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/card-analytics.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/tour/tour.css">    
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/forms/select/select2.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/extensions/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-ecommerce-shop.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/users.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/app-user.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/validation/form-validation.css">
	<link rel="stylesheet" type="text/css" href="app-assets/vendors/css/pickers/pickadate/pickadate.css">    
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/calendars/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/calendars/extensions/daygrid.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/calendars/extensions/timegrid.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/calendars/fullcalendar.css">    
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/file-uploaders/dropzone.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/data-list-view.css"> 
    <link rel="stylesheet" type="text/css" href="app-assets/css/plugins/forms/wizard.css">
    
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/invoice.css">    
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" style="background:<?php echo $background ?>">

    <?php include 'inc/header.php' ;?>
	
    <?php
        if (isset($_GET['menu'])) {
          $menu = $_GET['menu'];
          switch ($menu) {            
			case ('home');
              include('master_data/data_promosi.php');
              break;
			case ('edit');
              include('master_data/edit_promosi.php');
              break; 
			case ('filedit');
              include('master_data/edit_gbr_promosi.php');
              break;   			 			
			case ('web');
              include('master_data/website.php');
              break;
		    case ('data_anggota');
              include('master_data/data_anggota.php');
              break;			
			case ('data_input');
              include('master_data/data_input.php');
              break; 
			case ('cetak');
              include('master_data/print_data.php');
              break;       	  
			case ('ppdb');
              include('master_data/data_siswa_baru.php');
              break;
			case ('input_ppdb');
              include('master_data/data_input_siswa_baru.php');
              break; 	  
          }
        }
        ?>
	
    <?php include 'inc/footer.php' ;?>


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS--
    <script src="app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="app-assets/vendors/js/extensions/tether.min.js"></script>
    <script src="app-assets/vendors/js/extensions/shepherd.min.js"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <script src="app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->
    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/pages/dashboard-analytics.js"></script>
    <script src="app-assets/js/scripts/modal/components-modal.js"></script>
    
    <script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="app-assets/js/scripts/forms/select/form-select2.js"></script>
    
    <script src="app-assets/js/scripts/extensions/sweet-alerts.js"></script>
    <script src="app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="app-assets/vendors/js/extensions/polyfill.min.js"></script>
    
    <script src="app-assets/js/scripts/pages/app-ecommerce-details.js"></script>
    <script src="app-assets/js/scripts/forms/number-input.js"></script>
    <script src="app-assets/js/scripts/pages/app-ecommerce-shop.js"></script>
    
    <script src="app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="app-assets/js/scripts/datatables/datatable.js"></script> 
    <script src="app-assets/vendors/js/extensions/dropzone.min.js"></script>    
    <script src="app-assets/vendors/js/tables/datatable/dataTables.select.min.js"></script>
    <script src="app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js"></script>
    <script src="app-assets/js/scripts/ui/data-list-view.js"></script>    
    <script src="app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
	   
    <script src="app-assets/js/scripts/pages/app-user.js"></script>
    <script src="app-assets/js/scripts/navs/navs.js"></script>    
    <script src="app-assets/vendors/js/extensions/moment.min.js"></script>
    
    <script src="app-assets/vendors/js/pagination/jquery.bootpag.min.js"></script>
    <script src="app-assets/vendors/js/pagination/jquery.twbsPagination.min.js"></script>
    <script src="app-assets/js/scripts/pagination/pagination.js"></script>
    
    <script src="app-assets/vendors/js/extensions/jquery.steps.min.js"></script>
    <script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="app-assets/js/scripts/forms/wizard-steps.js"></script>
    <!-- END: Page JS-->
    
    <script src="app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
    <script src="app-assets/vendors/js/pickers/pickadate/legacy.js"></script>    
    <script src="app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>    
    
    <script src="app-assets/js/scripts/pages/invoice.js"></script>
    <!-- END: Page JS-->
	
    
    <!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
$(document).ready(function() {
  $('#summernote').summernote();
});
</script>
<!-- END: Page JS-->
<script type="text/javascript">
    $(document).ready(function() {
      $('#edit_gambar').on('show.bs.modal', function(e) {
        var idx = $(e.relatedTarget).data('id');
        //menggunakan fungsi ajax untuk pengambilan data
        $.ajax({
          type: 'post',
          url: 'master_data/edit_gbr_promosi.php',
          data: 'idx=' + idx,
          success: function(data) {
            $('.hasil-data').html(data); //menampilkan data ke dalam modal
          }
        });
      });
    });
</script>

 
<script src="app-assets/js/scripts/bootstrap-colorpicker.js"></script>
<script>
      $(function () {
      $('#headerfooter').colorpicker();
      $('#headerfooter').on('colorpickerChange', function(event) {
        $('#demo').css('background-color', event.color.toString());
      });
      });
	   
	  $(function () {      
      $('#latar').colorpicker();
      $('#latar').on('colorpickerChange', function(event) {
        $('#demo').css('background-color', event.color.toString());
      });
      });
	  
	  $(function () {      
      $('#tombol').colorpicker();
      $('#tombol').on('colorpickerChange', function(event) {
        $('#demo').css('background-color', event.color.toString());
      });
      });
  </script>
	
</body>
<!-- END: Body-->

</html>