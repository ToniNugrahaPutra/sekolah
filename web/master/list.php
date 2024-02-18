   
<?php $a = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM tabel_konten WHERE kat = '$_GET[kategori]'"));?>
<div class="content-wrapper pt-0 mt-0"> 
  <div class="card">           
   <div class="content-body">
    <div class="row justify-content-center">
      <div class="col-md-12 text-center">
         <div class="divider">
            <div class="divider-text"><h3 class="display-4 text-uppercase">daftar <?php echo $a['kat'] ?></h3></div>
          </div>
      </div>
    </div>
    <div class="card-content">
      <div class="card-body">
   		<div class="row">
<?php error_reporting(0);           
    $ketQuery = "SELECT * FROM tabel_konten WHERE kat = '$_GET[kategori]'";
    $executeSat = mysqli_query($koneksi, $ketQuery);
    while ($c=mysqli_fetch_array($executeSat)) {
	$kategori = $c['kat'];	
?>
                         <div class="col-sm-4 col-4">
                             <div class="card">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                     <img class="img-fluid mb-1" src="admin/master_data/images/<?php echo $c['gbr'] ?>">
                                        <h5 class="mt-1 text-capitalize"><?php echo $c['judul'] ?>
                                       <span class="float-right"><i class="fas fa-heart"></i> <?php echo $c['suka'] ?></span></h5>
                                        <hr class="my-1">
                                        <div class="d-flex justify-content-between mt-0">
                                            <div class="float-left d-xl-block d-none">
                                                <p class="font-small-2 font-italic mb-1">Kategori</p>
                                                <a class="btn btn-sm rounded-0" style="background:<?php echo $tombol?>"><?php echo $c['kat'] ?></a>
                                            </div>
                                            <div class="float-right">
                                                <p class="font-medium-1 mb-1 d-xl-block d-none">Selengkapnya</p>
                                                <a href="?menu=details&id_konten=<?php echo $c['id_konten'] ?>" class="btn btn-sm rounded-0" style="background:<?php echo $tombol?>">...Read More...</a>
                                            </div>
                                        </div>                                        
                                       </div>
                                   </div>
                               </div>                   
                             </div>
                           
<?php } ?> 
                  </div>
               </div>                   
            </div>
          </div>
       </div>
     </div> 
   