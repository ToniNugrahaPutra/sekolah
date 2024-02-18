  
<!-- BEGIN: Content-->
 <div class="content-wrapper pt-0 mt-0"> 
  <div class="card">           
   <div class="content-body">         
     <section class="app-ecommerce-details">
         <div class="card bg-transparent">
            <div class="card-body">
               <div class="divider">
                  <div class="divider-text bg-transparent">
                     <h3 class="font-large-1 text-uppercase">Formulir PPDB</h3></div>
               </div>
              
             <!-- Form wizard with step validation section start -->
                <section id="validation">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                               
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="master/do.php" method="post" enctype="multipart/form-data" class="steps-validation wizard-circle">
                                            <!-- Step 1 -->
                                            <h6><i class="step-icon fas fa-user"></i>BIODATA</h6>

                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                      <div class="font-small-3">Nama Lengkap</div>
                                                        <fieldset class="form-group position-relative input-divider-right">
                                                            <input type="text" class="form-control required" name="nama" placeholder="Tulis nama dengan benar">
                                                            <div class="form-control-position">
                                                                <i class="fas fa-user"></i>
                                                            </div>
                                                        </fieldset> 
                                                    </div>

                                                    <div class="col-md-6">
                                                      <div class="font-small-3">Kota Kelahiran</div>
                                                        <fieldset class="form-group position-relative input-divider-right">
                                                            <input type="text" class="form-control" name="kota_lahir" placeholder="Tulis kota kelahiran, contoh Malang">
                                                            <div class="form-control-position">
                                                                <i class="fas fa-map-marker-alt"></i>
                                                            </div>
                                                        </fieldset> 
                                                    </div>
                                                    
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">                                                        
                                                      <div class="font-small-3">Tanggal Lahir</div>
                                                        <fieldset class="form-group position-relative input-divider-right">
                                                            <input type="text" class="form-control pickadate-months-year" name="ttl" placeholder="Masukkan tanggal lahir">
                                                            <div class="form-control-position">
                                                                <i class="far fa-calendar-alt"></i>
                                                            </div>
                                                        </fieldset> 
                                                    </div>                                                   

                                                    <div class="col-md-6">
                                                      <div class="font-small-3">Jenis Kelamin</div>
                                                        <fieldset class="form-group position-relative input-divider-right">
                                                            <select class="custom-select form-control" name="jk">
                                                                <option>Laki-laki</option>
                                                                <option>Perempuan</option>
                                                            </select>
                                                            <div class="form-control-position">
                                                                <i class="fas fa-restroom"></i>
                                                            </div>
                                                        </fieldset> 
                                                    </div>
                                                                                                        
                                                </div>
                                            </fieldset>

                                            <!-- Step 2 -->
                                            <h6><i class="step-icon fas fa-graduation-cap"></i> PENDIDIKAN</h6>
                                            <fieldset>
                                                <div class="row">
                                                   <div class="col-md-6">
                                                      <div class="font-small-3">NISN (Nomer Induk Siswa Nasional)</div>
                                                        <fieldset class="form-group position-relative input-divider-right">
                                                            <input type="number" class="form-control required" name="no_induk" placeholder="Nomer Induk Siswa Nasional sesuai data DAPODIK">
                                                            <div class="form-control-position">
                                                                <i class="fas fa-id-card-alt"></i>
                                                            </div>
                                                            <a href="https://nisn.data.kemdikbud.go.id/index.php/Cindex/formcaribynama" class="badge badge-danger rounded-0">Lupa NISN?Cek NISN Saya</a>
                                                        </fieldset> 
                                                    </div>
                                                   
                                                   <div class="col-md-6">
                                                      <div class="font-small-3">Asal Sekolah</div>
                                                        <fieldset class="form-group position-relative input-divider-right">
                                                            <input type="text" class="form-control required" name="asal" placeholder="Tulis asal sekolah dengan benar">
                                                            <div class="form-control-position">
                                                                <i class="fas fa-city"></i>
                                                            </div>
                                                        </fieldset> 
                                                    </div>
                                                 </div>
                                                 
                                                 <div class="row">
                                                     <div class="col-md-6">
                                                      <div class="font-small-3">Tahun kelulusan</div>
                                                        <fieldset class="form-group position-relative input-divider-right">
                                                            <input type="text" class="form-control pickadate-months-year" name="angkatan" placeholder="Masukkan tahun kelulusan">
                                                            <div class="form-control-position">
                                                                <i class="far fa-calendar-alt"></i>
                                                            </div>
                                                        </fieldset> 
                                                    </div>
                                                    <div class="col-md-6">
                                                      <div class="font-small-3">Pilihan Jurusan</div>
                                                        <fieldset class="form-group position-relative input-divider-right">
                                                            <select class="custom-select form-control required" name="jurusan">
                                                                <option>Pilih Jurusan</option>
<?php $query = "SELECT * FROM tabel_konten WHERE kat = 'keahlian' ORDER BY id_konten DESC";
$result = mysqli_query($koneksi, $query);
while ($ahli = mysqli_fetch_array($result)){ 
?>                                                                
                                                                <option><?php echo $ahli['judul']; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                            <div class="form-control-position">
                                                                <i class="fas fa-list-ol"></i>
                                                            </div>
                                                        </fieldset> 
                                                    </div>                                                    
                                                 </div>   
                                                   
                                               
                                            </fieldset>

                                            <!-- Step 3 -->
                                            <h6><i class="step-icon far fa-address-book"></i> KONTAK</h6>
                                            <fieldset>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                      <div class="font-small-3">Nomer Handphone <sup class="badge badge-danger">AKTIF</sup></div>
                                                        <fieldset class="form-group position-relative input-divider-right">
                                                            <input type="number" class="form-control required" name="hp" placeholder="Tulis nomer handphone dengan benar">
                                                            <div class="form-control-position">
                                                                <i class="fas fa-mobile-alt"></i>
                                                            </div>
                                                        </fieldset>
                                                        
                                                        <div class="font-small-3">Pas Foto 4x6 <sup class="badge badge-danger">Format JPG Max.100kb</sup></div>
                                                        <fieldset class="form-group position-relative input-divider-right">
                                                        <input type="file" class="custom-file-input required" name="foto">
                                                        <label class="custom-file-label" for="inputGroupFile01">Pilih file</label>
                                                            
                                                        </fieldset>
                                                         
                                                    
                                                        <div class="font-small-3">Scan KTP Orang Tua <sup class="badge badge-danger">Format JPG Max.100kb</sup></div>
                                                        <fieldset class="form-group position-relative input-divider-right">
                                                        <input type="file" class="custom-file-input required" name="pictures">
                                                        <label class="custom-file-label" for="inputGroupFile01">Pilih file</label>
                                                            
                                                        </fieldset>
                                                        
                                                        <div class="font-small-3">Scan Akta Kelahiran <sup class="badge badge-danger">Format JPG Max.100kb</sup></div>
                                                        <fieldset class="form-group position-relative input-divider-right">
                                                        <input type="file" class="custom-file-input required" name="gambar">
                                                        <label class="custom-file-label" for="inputGroupFile01">Pilih file</label>
                                                            
                                                        </fieldset>
                                                         
                                                    </div>
                                                    
                                                    <div class="col-md-6">
                                                      <div class="font-small-3">Alamat rumah</div>
                                                        <fieldset class="form-group position-relative input-divider-right">
                                                            <textarea class="form-control required" name="alamat" placeholder="Tulis alamat rumah dengan benar"></textarea>
                                                            <div class="form-control-position">
                                                                <i class="fas fa-map-marker-alt"></i>
                                                            </div>
                                                        </fieldset>                                                     
                                                      <div class="text-center"> 
                                                      <p>Silahkan kirim data anda untuk di validasi operator</p>
                                                       <button type="submit" class="btn btn-lg rounded-0" style="background: <?php echo $tombol;?>"><i class="fas fa-paper-plane"></i> Kirim Data</button> 
                                                      </div> 
                                                    </div>  
                                                 </div>
                                            </fieldset>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Form wizard with step validation section end -->
             
             </div>   
                        
                        
                      <div class="card">  
                        <div class="card-body">
                            <div class="divider">
                                <div class="divider-text bg-transparent">
                                  <h3 class="font-large-1 text-uppercase">Info PPDB</h3></div>
                             </div>
                             <div class="swiper-responsive-breakpoints swiper-container">
                                 <div id="produk_lain" class="carousel slide" data-ride="carousel">
                                     <div class="carousel-inner" role="listbox">
                                                                        
                     <div class="carousel-item active">
                        <div class="row">
<?php error_reporting(0);           
    $ketQuery = "SELECT * FROM tabel_konten WHERE kat = 'ppdb' limit 4";
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
    $ketQuery = "SELECT * FROM tabel_konten WHERE kat = 'ppdb' limit 4";
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
   