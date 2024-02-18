  
<!-- BEGIN: Content-->
 <div class="content-wrapper pt-0 mt-0"> 
  <div class="card">           
   <div class="content-body">
         
 
<?php error_reporting(0);           
    $ketQuery = "SELECT * FROM tabel_konten WHERE id_konten = '$_GET[id_konten]' limit 1";
    $executeSat = mysqli_query($koneksi, $ketQuery);
    while ($d=mysqli_fetch_array($executeSat)) {
	$kategori = $d['kat'];	
?>          
            <div class="content-body">
                <!-- app ecommerce details start -->
                <section class="app-ecommerce-details">
                    <div class="card bg-transparent">
                        <div class="card-body">
                            <div class="row mb-5 mt-2">
                                <div class="col-12 col-md-5 d-flex align-items-center justify-content-center mb-2 mb-md-0">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <img src="admin/master_data/images/<?php echo $d['gbr']; ?>" class="img-fluid">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <h5><?php echo $d['judul']; ?></h5>
                                    <p class="text-dark">by <?php echo $nm_dinas; ?></p>
                                    <div class="ecommerce-details-price d-flex flex-wrap">

                                        <p class="text-white display-5 mr-1 mb-0 btn btn-dark">KATEGORI : <?php echo $d['kat']; ?></p>
                                        <!--span class="pl-1 font-medium-3 border-left">
                                            <i class="fas fa-star text-dark"></i>
                                            <i class="fas fa-star text-dark"></i>
                                            <i class="fas fa-star text-dark"></i>
                                            <i class="fas fa-star text-dark"></i> 
                                            <i class="fas fa-star text-dark"></i>
                                        </span>
                                        <span class="ml-50 text-dark font-medium-1">424 ratings</span-->
                                    </div>
                                    <hr>
                                    <p class="text-dark display-5 mr-1 mb-0"><?php echo $d['ket']; ?></p>
<?php
if(isset($_POST['sukai'])){
	$kode = $_POST ['id_konten'];
	$sukai_1 = $_POST['suka'];
	$sukai_2 = $sukai_1+1;
	mysqli_query($koneksi,"UPDATE tabel_konten SET suka='$sukai_2' WHERE id_konten='$kode'"); 
    echo "<script type='text/javascript'> window.location.replace('?menu=details&id_konten=$d[id_konten]')</script>";
 } ?>
                <form action="" method="POST">
                	<input type="hidden" name="id_konten" value="<?php echo $d['id_konten']; ?>">
                    <input type="hidden" name="suka" value="<?php echo $d['suka']; ?>" />
                    <button type="submit" class="btn btn-icon rounded-0" name="sukai">Like </button>
                    <i class="fas fa-heart fa-2x"></i><sup class="badge badge-danger"><?php echo $d['suka']; ?></sup>
                </form>
                                   

                                    <!--div class="btn-group">
                                        <a href="index.php?menu=checkout" class="btn btn-success rounded-0">
                                         <i class="fas fa-luggage-cart"></i> Checkout</a>
                                        <button class="btn btn-danger rounded-0"><i class="far fa-heart"></i> Suka</button>
                                        <a href="index.php?menu=store&id_user=<?php echo $d['id_user']; ?>" class="btn btn-danger rounded-0">
                                        <i class="fas fa-store"></i> Cek Toko</a>
                                        <a href="chat.php" class="btn btn-info rounded-0">
                                        <i class="far fa-comment-dots"></i> Chat</a>
                                    </div-->
<?php     
    $site_url  = "$web?menu=details&judul = $d[judul]";    
    $site_title  = "onlinecode";
?>                                    
                                    <div class="divider">
                                      <div class="divider-text bg-transparent">
                                          <h3 class="font-medium-1 text-uppercase"><i class="fas fa-share-alt"></i> Share</h3></div>
                                     </div>
                                    <a type="button" class="btn btn-icon rounded-circle btn-dark mr-1 mb-1" href="http://www.facebook.com/sharer.php?u=<?=$site_url?>" target="_blank" ><i class="fab fa-facebook"></i></a>
                                    <a type="button" class="btn btn-icon rounded-circle btn-dark mr-1 mb-1" href="https://twitter.com/share?url=<?=$site_url?>&amp;text=&amp;hashtags=smkmapanpakis" target="_blank"><i class="fab fa-twitter"></i></a>
                                     <a type="button" class="btn btn-icon rounded-circle btn-dark mr-1 mb-1" href="https://wa.me/<?php echo $hp; ?>?text=<?=$site_url?>" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                    
                                    
                                  <!--div class="divider">
                                     <div class="divider-text bg-transparent">
                                        <h3 class="font-medium-1 text-uppercase">Ulasan</h3></div>
                                  </div>
                                  <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-1">
                                                <img src="../img/<?php echo $logo;?>" height="45" width="45">
                                            </div>
                                            <div class="user-page-info">
                                                <h6 class="mb-0"><?php echo $toko;?></h6>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="d-flex align-items-center">
                                                <i class="feather icon-heart font-medium-2 mr-50"></i>
                                                <span>276</span>
                                            </div>
                                            
                                            <p class="ml-auto d-flex align-items-center">
                                                <i class="feather icon-message-square font-medium-2 mr-50"></i>105
                                            </p>
                                        </div>
                                        
                                        <div class="d-flex justify-content-start align-items-center mb-1">
                                            <div class="avatar mr-50">
                                                <img src="../img/user/<?php echo $foto;?>" height="30" width="30">
                                            </div>
                                            <div class="user-page-info">
                                                <h6 class="mb-0">Darcey Nooner</h6>
                                                <span class="font-small-2">I love cupcake danish jujubes sweet.</span>
                                            </div>
                                            <div class="ml-auto cursor-pointer">
                                                <i class="feather icon-heart mr-50"></i>
                                                <i class="feather icon-message-square"></i>
                                            </div>
                                        </div>
                                        
                                        
                                        <fieldset class="form-label-group mb-50">
                                            <textarea class="form-control" id="label-textarea2" rows="3" placeholder="Add Comment"></textarea>
                                            <label for="label-textarea2">Add Comment</label>
                                        </fieldset>
                                        <button type="button" class="btn btn-sm btn-primary">Post Comment</button>
                                    </div-->
                                </div>
                                  
                                </div>
                            </div>
                        </div>
                       
                        <?php } ?>
                        
                        
                        
                        
                        
                      <div class="card">  
                        <div class="card-body">
                            <div class="divider">
                                <div class="divider-text bg-transparent">
                                  <h3 class="font-large-1 text-uppercase">Info Lainnya</h3></div>
                             </div>
                             <div class="swiper-responsive-breakpoints swiper-container">
                                 <div id="produk_lain" class="carousel slide" data-ride="carousel">
                                     <div class="carousel-inner" role="listbox">
                                                                        
                     <div class="carousel-item active">
                        <div class="row">
<?php error_reporting(0);           
    $ketQuery = "SELECT * FROM tabel_konten WHERE kat = '$kategori' limit 4";
    $executeSat = mysqli_query($koneksi, $ketQuery);
    while ($e=mysqli_fetch_array($executeSat)) {
?> 
                         <div class="col-sm-4 col-6">
                             <div class="card">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                     <img class="img-fluid mb-1" src="admin/master_data/images/<?php echo $e['gbr'] ?>">
                                        <h5 class="mt-1 text-capitalize"><?php echo $e['judul'] ?>
                                       <span class="float-right"><i class="fas fa-heart"></i> <?php echo $e['suka'] ?></span></h5>
                                        <hr class="my-1">
                                        <div class="d-flex justify-content-between mt-0">
                                            <div class="float-left d-xl-block d-none">
                                                <p class="font-small-2 font-italic mb-1">Kategori</p>
                                                <a class="btn btn-sm rounded-0" style="background:<?php echo $tombol?>"><?php echo $e['kat'] ?></a>
                                            </div>
                                            <div class="float-right">
                                                <p class="font-medium-1 mb-1 d-xl-block d-none">Selengkapnya</p>
                                                <a href="?menu=details&id_konten=<?php echo $e['id_konten'] ?>" class="btn btn-sm rounded-0" style="background:<?php echo $tombol?>">...Read More...</a>
                                            </div>
                                        </div>                                        
                                       </div>
                                   </div>
                               </div>                   
                             </div>
                         
                        
<?php } ?>
                   </div>
                 </div>
                                                                        
                 <div class="carousel-item">                                         
                   <div class="row">
<?php error_reporting(0);           
    $ketQuery = "SELECT * FROM tabel_konten WHERE kat = '$kategori' limit 4";
    $executeSat = mysqli_query($koneksi, $ketQuery);
    while ($f=mysqli_fetch_array($executeSat)) {
?> 
                       <div class="col-sm-4 col-6">
                             <div class="card">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                     <img class="img-fluid mb-1" src="admin/master_data/images/<?php echo $f['gbr'] ?>">
                                        <h5 class="mt-1 text-capitalize"><?php echo $f['judul'] ?>
                                       <span class="float-right"><i class="fas fa-heart"></i> <?php echo $f['suka'] ?></span></h5>
                                        <hr class="my-1">
                                        <div class="d-flex justify-content-between mt-0">
                                            <div class="float-left d-xl-block d-none">
                                                <p class="font-small-2 font-italic mb-1">Kategori</p>
                                                <a class="btn btn-sm rounded-0" style="background:<?php echo $tombol?>"><?php echo $f['kat'] ?></a>
                                            </div>
                                            <div class="float-right">
                                                <p class="font-medium-1 mb-1 d-xl-block d-none">Selengkapnya</p>
                                                <a href="?menu=details&id_konten=<?php echo $f['id_konten'] ?>" class="btn btn-sm rounded-0" style="background:<?php echo $tombol?>">...Read More...</a>
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
                   <a class="carousel-control-prev" href="#produk_lain" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                   </a>
                   <a class="carousel-control-next" href="#produk_lain" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                   </a>
                  </div>
               </div> 
              </div>
             </div>
            </section>
         <!-- app ecommerce details end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
 </div>   