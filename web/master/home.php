  
    
<div class="content-wrapper pt-0 mt-0" id="profile"> 
  <div class="card">           
   <div class="content-body">
    <div class="row justify-content-center">
      <div class="col-md-12 text-center">         
      </div>
    </div>
    <div class="card-content">
      <div class="card-body">
        <section>
          <div class="row">
<?php error_reporting(0); $sql = "SELECT * FROM tabel_konten WHERE kat='profile' ORDER BY id_konten ASC limit 1"; $query = mysqli_query($koneksi, $sql); $row = mysqli_fetch_array($query);
?>                   
            <div class="col-md-4 col-12">
                 <div class="card">
                   <div class="card-content">
                      <div class="card-body p-0">
						<div id="<?php echo $row['kat']; ?>" class="carousel slide" data-ride="carousel" data-pause="hover">
                           <ol class="carousel-indicators">
                              <li data-target="#<?php echo $row['kat']; ?>" data-slide-to="0" class="active"></li>
                              <li data-target="#<?php echo $row['kat']; ?>" data-slide-to="1"></li>
                           </ol>
                          <div class="carousel-inner" role="listbox">
                             <div class="carousel-item active">
<?php error_reporting(0);
$kueri = "SELECT * FROM tabel_konten WHERE kat='profile' ORDER BY id_konten ASC limit 1"; $result = mysqli_query($koneksi, $kueri); while ($produk = mysqli_fetch_array($result)) {
?>                                                
                         <img class="img-fluid" src="admin/master_data/images/<?php echo $produk['gbr']; ?>">
<?php }?>                                                 
                                                 
                        </div>
                                                
                        <div class="carousel-item">
<?php error_reporting(0);
$kueri = "SELECT * FROM tabel_konten WHERE kat='profile' ORDER BY RAND () limit 1 "; $result = mysqli_query($koneksi, $kueri); while ($produk = mysqli_fetch_array($result)) {
?>
                           <img class="img-fluid" src="admin/master_data/images/<?php echo $produk['gbr']; ?>" >
<?php }?> 
                        </div>
                     </div>
                         <a class="carousel-control-prev" href="#<?php echo $row['kat']; ?>" role="button" data-slide="prev">
                               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                               <span class="sr-only">Previous</span>
                         </a>
                         <a class="carousel-control-next" href="#<?php echo $row['kat']; ?>" role="button" data-slide="next">
                               <span class="carousel-control-next-icon" aria-hidden="true"></span>
                               <span class="sr-only">Next</span>
                         </a>
                       </div>                                        
                     </div>                                                                           
                   </div>
                </div>
           </div>
        <div class="col-md-8 col-12">
          <div class="card">
             <div class="card-header d-flex justify-content-between pb-0">
               <h4 class="mb-1 font-medium-3"><?php echo $row['judul']; ?></h4>
             </div>
             <div class="card-content">
                <div class="card-body pre-scrollable">
                  <p class="text-justify"><?php echo $row['ket']; ?></p>
                 </div>
              </div>
             </div>
           </div>
                       
       </div>
      </section>
		</div>
     </div> 
   </div>
  </div>
</div>
<!-- UD -->

<div class="content-wrapper pt-0 mt-0"> 
  <div class="card"> 
  <div class="ml-auto"><span class="badge font-weight-normal p-1 rounded-0" style="background:<?php echo $tombol?>"><a href="?menu=dapeg" class="text-uppercase" style="color:<?php echo $headerfooter?>">Cek Daftar</a></span></div>          
   <div class="content-body">
    <div class="row justify-content-center">
      <div class="col-md-12 text-center">
         <div class="divider">
            <div class="divider-text"><h3 class="display-5 text-uppercase">Guru dan Karyawan</h3></div>
          </div>
      </div>
    </div>
    <div class="card-content">
      <div class="card-body">
   		
        <div class="swiper-responsive-breakpoints swiper-container">
                <div id="ahli" class="carousel slide" data-ride="carousel">
                   <div class="carousel-inner" role="listbox">         
                     <div class="carousel-item active">
                       <div class="row">
<?php             
   $ketQuery = "SELECT * FROM tabel_anggota,tabel_alamat,tabel_data_anggota WHERE tabel_anggota.no_induk = tabel_alamat.no_induk AND tabel_anggota.no_induk = tabel_data_anggota.no_induk AND tabel_anggota.kategori = 'pegawai' ORDER BY tabel_anggota.nama DESC limit 4";
   $executeSat = mysqli_query($koneksi, $ketQuery);
   while ($f=mysqli_fetch_array($executeSat)) {
   $kategori = $f['kat'];	   
?>
                         <div class="swiper-wrapper col-sm-3 col-6">
                           <div class="swiper-slide rounded swiper-shadow">
                             <div class="card p-1" style="background-color:<?php echo $headerfooter ?>">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                     <img class="card-img img-fluid" src="admin/master_data/anggota/<?php echo $f['pas_foto'] ?>" style="max-height:200px">
                                        <hr class="my-1">
                                        <div class="d-flex justify-content-between mt-0">
                                            <div class="float-left d-xl-block d-none">
                                                <p class="font-small-2 font-italic mb-1"><?php echo $f['jurusan'] ?></p>
                                                <a class="btn btn-sm rounded-0" style="background:<?php echo $tombol?>"><?php echo $f['nama'] ?></a>
                                            </div>
                                            <div class="float-right">
                                                <p class="font-small-2 mb-1 d-xl-block d-none">Cek profile</p>
                                                <a href="?menu=cek&no_induk=<?php echo $f['no_induk'] ?>" class="btn btn-sm rounded-0" style="background:<?php echo $tombol?>" >...Profil...</a>
                                            </div>
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
<?php             
   $ketQuery = "SELECT * FROM tabel_anggota,tabel_alamat,tabel_data_anggota WHERE tabel_anggota.no_induk = tabel_alamat.no_induk AND tabel_anggota.no_induk = tabel_data_anggota.no_induk AND tabel_anggota.kategori = 'pegawai' ORDER BY RAND() limit 4";
   $executeSat = mysqli_query($koneksi, $ketQuery);
   while ($f=mysqli_fetch_array($executeSat)) {
   $kategori = $f['kat'];	   
?>
                         <div class="swiper-wrapper col-sm-3 col-6">
                           <div class="swiper-slide rounded swiper-shadow">
                             <div class="card p-1" style="background-color:<?php echo $headerfooter ?>">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                     <img class="card-img img-fluid" src="admin/master_data/anggota/<?php echo $f['pas_foto'] ?>" style="max-height:200px">
                                        <hr class="my-1">
                                        <div class="d-flex justify-content-between mt-0">
                                            <div class="float-left d-xl-block d-none">
                                                <p class="font-small-2 font-italic mb-1"><?php echo $f['jurusan'] ?></p>
                                                <a class="btn btn-sm rounded-0" style="background:<?php echo $tombol?>"><?php echo $f['nama'] ?></a>
                                            </div>
                                            <div class="float-right">
                                                <p class="font-small-2 mb-1 d-xl-block d-none">Cek profile</p>
                                                <a href="?menu=cek&no_induk=<?php echo $f['no_induk'] ?>" class="btn btn-sm rounded-0" style="background:<?php echo $tombol?>" >...Profil...</a>
                                            </div>
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
                    <a class="carousel-control-prev" href="#ahli" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#ahli" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                 </div>
              </div> 
        
       </div>
     </div> 
   </div>
  </div>
</div>

<div class="content-wrapper pt-0 mt-0" id="keahlian"> 
  <div class="card">           
   <div class="content-body">
    <div class="row justify-content-center">
      <div class="col-md-12 text-center">
         <div class="divider">
            <div class="divider-text"><h3 class="display-5 text-uppercase">program keahlian</h3></div>
          </div>
      </div>
    </div>
    <div class="card-content">
      <div class="card-body">
   		
        <div class="swiper-responsive-breakpoints swiper-container">
                <div id="ahli" class="carousel slide" data-ride="carousel">
                   <div class="carousel-inner" role="listbox">         
                     <div class="carousel-item active">
                       <div class="row">
<?php             
   $ketQuery = "SELECT * FROM tabel_konten WHERE kat = 'keahlian' ORDER BY id_konten DESC limit 4";
   $executeSat = mysqli_query($koneksi, $ketQuery);
   while ($f=mysqli_fetch_array($executeSat)) {
   $kategori = $f['kat'];	   
?>
                         <div class="swiper-wrapper col-sm-3 col-6">
                           <div class="swiper-slide rounded swiper-shadow">
                             <div class="card">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                     <img class="card-img img-fluid" src="admin/master_data/images/<?php echo $f['gbr'] ?>" style="max-height:200px">
                                        <h5 class="mt-1 text-capitalize font-small-3"><?php echo $f['judul'] ?>
                                       <span class="float-right"><i class="fas fa-heart"></i> <?php echo $f['suka'] ?></span></h5>
                                        <hr class="my-1">
                                        <div class="d-flex justify-content-between mt-0">
                                            <div class="float-left d-xl-block d-none">
                                                <p class="font-small-2 font-italic mb-1">Kategori</p>
                                                <a class="btn btn-sm rounded-0" style="background:<?php echo $tombol?>"><?php echo $f['kat'] ?></a>
                                            </div>
                                            <div class="float-right">
                                                <p class="font-medium-1 mb-1 d-xl-block d-none">Selengkapnya</p>
                                                <a href="?menu=details&id_konten=<?php echo $f['id_konten'] ?>" class="btn btn-sm rounded-0" style="background:<?php echo $tombol?>" >...Read More...</a>
                                            </div>
                                        </div>                                        
                                       </div>
                                   </div>
                               </div>                   
                             </div>
                           </div>
<?php } ?> 
                     </div>
                 <div class="divider">
            		<div class="divider-text">
                     <a href="?menu=list&kategori=<?php echo $kategori?>" class="btn rounded-0 text-uppercase" style="background:<?php echo $tombol?>">Daftar Informasi <?php echo $kategori?></a></div>
                 </div>    
                  </div>
                                                                        
                  <div class="carousel-item">                                         
                     <div class="row">
<?php             
   $ketQuery = "SELECT * FROM tabel_konten WHERE kat = 'keahlian' ORDER BY RAND() limit 4";
   $executeSat = mysqli_query($koneksi, $ketQuery);
   while ($f=mysqli_fetch_array($executeSat)) {
   $kategori = $f['kat'];	   
?>
                         <div class="swiper-wrapper col-sm-3 col-6">
                           <div class="swiper-slide rounded swiper-shadow">
                             <div class="card">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                      <img class="card-img img-fluid" src="admin/master_data/images/<?php echo $f['gbr'] ?>" style="max-height:200px">
                                        <h5 class="mt-1 text-capitalize font-small-3"><?php echo $f['judul'] ?>
                                       <span class="float-right"><i class="fas fa-heart"></i> <?php echo $f['suka'] ?></span></h5>
                                        <hr class="my-1">
                                        <div class="d-flex justify-content-between mt-0">
                                            <div class="float-left d-xl-block d-none">
                                                <p class="font-small-2 font-italic mb-1">Kategori</p>
                                                <a class="btn btn-sm rounded-0" style="background:<?php echo $tombol?>"><?php echo $f['kat'] ?></a>
                                            </div>
                                            <div class="float-right">
                                                <p class="font-medium-1 mb-1 d-xl-block d-none">Selengkapnya</p>
                                                <a href="?menu=details&id_konten=<?php echo $f['id_konten'] ?>" class="btn btn-sm rounded-0" style="background:<?php echo $tombol?>" >...Read More...</a>
                                            </div>
                                        </div>                                        
                                       </div>
                                   </div>
                               </div>                   
                             </div>
                           </div>
<?php } ?> 
                        
                       </div> 
                   <div class="divider">
            		<div class="divider-text">
                     <a href="?menu=list&kategori=<?php echo $kategori?>" class="btn rounded-0 text-uppercase" style="background:<?php echo $tombol?>">Daftar Informasi <?php echo $kategori?></a></div>
                 </div>                                     
                     </div>
                    </div>
                    <a class="carousel-control-prev" href="#ahli" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#ahli" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                 </div>
              </div> 
        
       </div>
     </div> 
   </div>
  </div>
</div>


<div class="content-wrapper pt-0 mt-0" id="agenda"> 
  <div class="card">           
   <div class="content-body">
    <div class="row justify-content-center">
      <div class="col-md-12 text-center">
         <div class="divider">
            <div class="divider-text"><h3 class="display-5 text-uppercase">agenda</h3></div>
          </div>
      </div>
    </div>
    <div class="card-content">
      <div class="card-body">
   		
        <div class="swiper-responsive-breakpoints swiper-container">
                <div id="info" class="carousel slide" data-ride="carousel">
                   <div class="carousel-inner" role="listbox">         
                     <div class="carousel-item active">
                       <div class="row">
<?php             
   $ketQuery = "SELECT * FROM tabel_konten WHERE kat = 'agenda' ORDER BY id_konten DESC limit 4";
   $executeSat = mysqli_query($koneksi, $ketQuery);
   while ($f=mysqli_fetch_array($executeSat)) {
   $kategori = $f['kat'];	   
?>
                         <div class="swiper-wrapper col-sm-3 col-6">
                           <div class="swiper-slide rounded swiper-shadow">
                             <div class="card">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                     <img class="card-img img-fluid" src="admin/master_data/images/<?php echo $f['gbr'] ?>" style="max-height:200px">
                                        <h5 class="mt-1 text-capitalize font-small-3"><?php echo $f['judul'] ?>
                                       <span class="float-right"><i class="fas fa-heart"></i> <?php echo $f['suka'] ?></span></h5>
                                        <hr class="my-1">
                                        <div class="d-flex justify-content-between mt-0">
                                            <div class="float-left d-xl-block d-none">
                                                <p class="font-small-2 font-italic mb-1">Kategori</p>
                                                <a class="btn btn-sm rounded-0" style="background:<?php echo $tombol?>"><?php echo $f['kat'] ?></a>
                                            </div>
                                            <div class="float-right">
                                                <p class="font-medium-1 mb-1 d-xl-block d-none">Selengkapnya</p>
                                                <a href="?menu=details&id_konten=<?php echo $f['id_konten'] ?>" class="btn btn-sm rounded-0" style="background:<?php echo $tombol?>" >...Read More...</a>
                                            </div>
                                        </div>                                        
                                       </div>
                                   </div>
                               </div>                   
                             </div>
                           </div>
<?php } ?> 
                     </div>
                 <div class="divider">
            		<div class="divider-text">
                     <a href="?menu=list&kategori=<?php echo $kategori?>" class="btn rounded-0 text-uppercase" style="background:<?php echo $tombol?>">Daftar Informasi <?php echo $kategori?></a></div>
                 </div>    
                  </div>
                                                                        
                  <div class="carousel-item">                                         
                     <div class="row">
<?php             
   $ketQuery = "SELECT * FROM tabel_konten WHERE kat = 'agenda' ORDER BY RAND() limit 4";
   $executeSat = mysqli_query($koneksi, $ketQuery);
   while ($f=mysqli_fetch_array($executeSat)) {
   $kategori = $f['kat'];	   
?>
                         <div class="swiper-wrapper col-sm-3 col-6">
                           <div class="swiper-slide rounded swiper-shadow">
                             <div class="card">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                      <img class="card-img img-fluid" src="admin/master_data/images/<?php echo $f['gbr'] ?>" style="max-height:200px">
                                        <h5 class="mt-1 text-capitalize font-small-3"><?php echo $f['judul'] ?>
                                       <span class="float-right"><i class="fas fa-heart"></i> <?php echo $f['suka'] ?></span></h5>
                                        <hr class="my-1">
                                        <div class="d-flex justify-content-between mt-0">
                                            <div class="float-left d-xl-block d-none">
                                                <p class="font-small-2 font-italic mb-1">Kategori</p>
                                                <a class="btn btn-sm rounded-0" style="background:<?php echo $tombol?>"><?php echo $f['kat'] ?></a>
                                            </div>
                                            <div class="float-right">
                                                <p class="font-medium-1 mb-1  d-xl-block d-none">Selengkapnya</p>
                                                <a href="?menu=details&id_konten=<?php echo $f['id_konten'] ?>" class="btn btn-sm rounded-0" style="background:<?php echo $tombol?>" >...Read More...</a>
                                            </div>
                                        </div>                                        
                                       </div>
                                   </div>
                               </div>                   
                             </div>
                           </div>
<?php } ?> 
                        
                       </div> 
                   <div class="divider">
            		<div class="divider-text">
                     <a href="?menu=list&kategori=<?php echo $kategori?>" class="btn rounded-0 text-uppercase" style="background:<?php echo $tombol?>">Daftar Informasi <?php echo $kategori?></a></div>
                 </div>                                     
                     </div>
                    </div>
                    <a class="carousel-control-prev" href="#info" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#info" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                 </div>
              </div> 
        
       </div>
     </div> 
   </div>
  </div>
</div>


<div class="content-wrapper pt-0 mt-0" id="ppdb"> 
  <div class="card">           
   <div class="content-body">
    <div class="row justify-content-center">
      <div class="col-md-12 text-center">
         <div class="divider">
            <div class="divider-text"><h3 class="display-5 text-uppercase">PPDB</h3></div>
          </div>
      </div>
    </div>
    <div class="card-content">
      <div class="card-body">
   		
        <div class="swiper-responsive-breakpoints swiper-container">
                <div id="pendaftaran" class="carousel slide" data-ride="carousel">
                   <div class="carousel-inner" role="listbox">         
                     <div class="carousel-item active">
                       <div class="row">
<?php             
   $ketQuery = "SELECT * FROM tabel_konten WHERE kat = 'ppdb' ORDER BY id_konten DESC limit 4";
   $executeSat = mysqli_query($koneksi, $ketQuery);
   while ($f=mysqli_fetch_array($executeSat)) {
   $kategori = $f['kat'];	   
?>
                         <div class="swiper-wrapper col-sm-3 col-6">
                           <div class="swiper-slide rounded swiper-shadow">
                             <div class="card">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                     <img class="card-img img-fluid" src="admin/master_data/images/<?php echo $f['gbr'] ?>" style="max-height:200px">
                                        <h5 class="mt-1 text-capitalize font-small-3"><?php echo $f['judul'] ?>
                                       <span class="float-right"><i class="fas fa-heart"></i> <?php echo $f['suka'] ?></span></h5>
                                        <hr class="my-1">
                                        <div class="d-flex justify-content-between mt-0">
                                            <div class="float-left d-xl-block d-none">
                                                <p class="font-small-2 font-italic mb-1">Kategori</p>
                                                <a class="btn btn-sm rounded-0" style="background:<?php echo $tombol?>"><?php echo $f['kat'] ?></a>
                                            </div>
                                            <div class="float-right">
                                                <p class="font-medium-1 mb-1 d-xl-block d-none">Selengkapnya</p>
                                                <a href="?menu=details&id_konten=<?php echo $f['id_konten'] ?>" class="btn btn-sm rounded-0" style="background:<?php echo $tombol?>" >...Read More...</a>
                                            </div>
                                        </div>                                        
                                       </div>
                                   </div>
                               </div>                   
                             </div>
                           </div>
<?php } ?> 
                     </div>
                 <div class="divider">
            		<div class="divider-text">
                     <a href="?menu=list&kategori=<?php echo $kategori?>" class="btn rounded-0 text-uppercase" style="background:<?php echo $tombol?>">Daftar Informasi <?php echo $kategori?></a></div>
                 </div>    
                  </div>
                                                                        
                  <div class="carousel-item">                                         
                     <div class="row">
<?php             
   $ketQuery = "SELECT * FROM tabel_konten WHERE kat = 'ppdb' ORDER BY RAND() limit 4";
   $executeSat = mysqli_query($koneksi, $ketQuery);
   while ($f=mysqli_fetch_array($executeSat)) {
   $kategori = $f['kat'];	   
?>
                         <div class="swiper-wrapper col-sm-3 col-6">
                           <div class="swiper-slide rounded swiper-shadow">
                             <div class="card">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                      <img class="card-img img-fluid" src="admin/master_data/images/<?php echo $f['gbr'] ?>" style="max-height:200px">
                                        <h5 class="mt-1 text-capitalize font-small-3"><?php echo $f['judul'] ?>
                                       <span class="float-right"><i class="fas fa-heart"></i> <?php echo $f['suka'] ?></span></h5>
                                        <hr class="my-1">
                                        <div class="d-flex justify-content-between mt-0">
                                            <div class="float-left d-xl-block d-none">
                                                <p class="font-small-2 font-italic mb-1">Kategori</p>
                                                <a class="btn btn-sm rounded-0" style="background:<?php echo $tombol?>"><?php echo $f['kat'] ?></a>
                                            </div>
                                            <div class="float-right">
                                                <p class="font-medium-1 mb-1 d-xl-block d-none">Selengkapnya</p>
                                                <a href="?menu=details&id_konten=<?php echo $f['id_konten'] ?>" class="btn btn-sm rounded-0" style="background:<?php echo $tombol?>" >...Read More...</a>
                                            </div>
                                        </div>                                        
                                       </div>
                                   </div>
                               </div>                   
                             </div>
                           </div>
<?php } ?> 
                        
                       </div> 
                   <div class="divider">
            		<div class="divider-text">
                     <a href="?menu=list&kategori=<?php echo $kategori?>" class="btn rounded-0 text-uppercase" style="background:<?php echo $tombol?>">Daftar Informasi <?php echo $kategori?></a></div>
                 </div>                                     
                     </div>
                    </div>
                    <a class="carousel-control-prev" href="#pendaftaran" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#pendaftaran" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                 </div>
              </div> 
        
       </div>
     </div> 
   </div>
  </div>
</div>





<div class="content-wrapper pt-0 mt-0" id="bkk"> 
  <div class="card">           
   <div class="content-body">
    <div class="row justify-content-center">
      <div class="col-md-12 text-center">
         <div class="divider">
            <div class="divider-text"><h3 class="display-5 text-uppercase">BURSA KERJA</h3></div>
          </div>
      </div>
    </div>
    <div class="card-content">
      <div class="card-body">
   		
        <div class="swiper-responsive-breakpoints swiper-container">
                <div id="kerja" class="carousel slide" data-ride="carousel">
                   <div class="carousel-inner" role="listbox">         
                     <div class="carousel-item active">
                       <div class="row">
<?php             
   $ketQuery = "SELECT * FROM tabel_konten WHERE kat = 'bkk' ORDER BY id_konten DESC limit 4";
   $executeSat = mysqli_query($koneksi, $ketQuery);
   while ($f=mysqli_fetch_array($executeSat)) {
   $kategori = $f['kat'];	   
?>
                         <div class="swiper-wrapper col-sm-3 col-6">
                           <div class="swiper-slide rounded swiper-shadow">
                             <div class="card">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                     <img class="card-img img-fluid" src="admin/master_data/images/<?php echo $f['gbr'] ?>" style="max-height:200px">
                                        <h5 class="mt-1 text-capitalize font-small-3"><?php echo $f['judul'] ?>
                                       <span class="float-right"><i class="fas fa-heart"></i> <?php echo $f['suka'] ?></span></h5>
                                        <hr class="my-1">
                                        <div class="d-flex justify-content-between mt-0">
                                            <div class="float-left d-xl-block d-none">
                                                <p class="font-small-2 font-italic mb-1">Kategori</p>
                                                <a class="btn btn-sm rounded-0" style="background:<?php echo $tombol?>"><?php echo $f['kat'] ?></a>
                                            </div>
                                            <div class="float-right">
                                                <p class="font-medium-1 mb-1 d-xl-block d-none">Selengkapnya</p>
                                                <a href="?menu=details&id_konten=<?php echo $f['id_konten'] ?>" class="btn btn-sm rounded-0" style="background:<?php echo $tombol?>" >...Read More...</a>
                                            </div>
                                        </div>                                        
                                       </div>
                                   </div>
                               </div>                   
                             </div>
                           </div>
<?php } ?> 
                     </div>
                 <div class="divider">
            		<div class="divider-text">
                     <a href="?menu=list&kategori=<?php echo $kategori?>" class="btn rounded-0 text-uppercase" style="background:<?php echo $tombol?>">Daftar Informasi <?php echo $kategori?></a></div>
                 </div>    
                  </div>
                                                                        
                  <div class="carousel-item">                                         
                     <div class="row">
<?php             
   $ketQuery = "SELECT * FROM tabel_konten WHERE kat = 'bkk' ORDER BY RAND() limit 4";
   $executeSat = mysqli_query($koneksi, $ketQuery);
   while ($f=mysqli_fetch_array($executeSat)) {
   $kategori = $f['kat'];	   
?>
                         <div class="swiper-wrapper col-sm-3 col-6">
                           <div class="swiper-slide rounded swiper-shadow">
                             <div class="card">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                      <img class="card-img img-fluid" src="admin/master_data/images/<?php echo $f['gbr'] ?>" style="max-height:200px">
                                        <h5 class="mt-1 text-capitalize font-small-3"><?php echo $f['judul'] ?>
                                       <span class="float-right"><i class="fas fa-heart"></i> <?php echo $f['suka'] ?></span></h5>
                                        <hr class="my-1">
                                        <div class="d-flex justify-content-between mt-0">
                                            <div class="float-left d-xl-block d-none">
                                                <p class="font-small-2 font-italic mb-1">Kategori</p>
                                                <a class="btn btn-sm rounded-0" style="background:<?php echo $tombol?>"><?php echo $f['kat'] ?></a>
                                            </div>
                                            <div class="float-right">
                                                <p class="font-medium-1 mb-1 d-xl-block d-none">Selengkapnya</p>
                                                <a href="?menu=details&id_konten=<?php echo $f['id_konten'] ?>" class="btn btn-sm rounded-0" style="background:<?php echo $tombol?>" >...Read More...</a>
                                            </div>
                                        </div>                                        
                                       </div>
                                   </div>
                               </div>                   
                             </div>
                           </div>
<?php } ?> 
                        
                       </div> 
                   <div class="divider">
            		<div class="divider-text">
                     <a href="?menu=list&kategori=<?php echo $kategori?>" class="btn rounded-0 text-uppercase" style="background:<?php echo $tombol?>">Daftar Informasi <?php echo $kategori?></a></div>
                 </div>                                     
                     </div>
                    </div>
                    <a class="carousel-control-prev" href="#kerja" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#kerja" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                 </div>
              </div> 
        
       </div>
     </div> 
   </div>
  </div>
</div>


