  
<!-- BEGIN: Content-->
 
  <div class="card">           
   <div class="content-body">         
     <section class="app-ecommerce-details">
         <div class="card bg-transparent">
            <div class="card-body">
               <div class="divider">
                  <div class="divider-text bg-transparent">
                     <h3 class="font-large-1 text-uppercase">Formulir Alumni <?php echo $nm_usaha;?></h3></div>
               </div>
              
             <!-- Form wizard with step validation section start -->
                <section id="validation">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                               
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="master_data/add_alumni.php" method="post" enctype="multipart/form-data" class="steps-validation wizard-circle">
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
                                                      <div class="font-small-3">Tempat kerja/Kuliah</div>
                                                        <fieldset class="form-group position-relative input-divider-right">
                                                            <input type="text" class="form-control required" name="asal" placeholder="Tulis Tempat kerja/Kuliah">
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
                        
                    
                           
                              
                             
            </section>
         <!-- app ecommerce details end -->

            </div>
        </div>

    <!-- END: Content-->
   