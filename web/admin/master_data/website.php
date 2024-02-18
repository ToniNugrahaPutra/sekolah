<div class="content-body"> 
 <h2 class="content-header-title float-left mb-0">DATA WEB</h2>
    <div class="breadcrumb-wrapper col-12">
      <ol class="breadcrumb">
           <li class="breadcrumb-item">Website</li>                     
      </ol>
  </div>
     <div class="content-body">
<!-- account setting page start -->
       <section id="page-account-settings">
         <div class="row">
<!-- left menu section -->
          
                       
<!-- right content section -->
          <div class="col-md-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  
                  <div class="tab-content">
                    
                    <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
                      <div class="media">
                         <a href="javascript: void(0);">
                             <img src="master_data/logo/<?php echo $a['logo'] ?>" class="rounded mr-75" height="64" width="64">
                          </a>
                          <div class="media-body mt-75">                             
                             <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                               <form action="master_data/update_logo_dinas.php" method="post" enctype="multipart/form-data"> 
                                <label class="btn btn-sm rounded-0 ml-50 mb-50 mb-sm-0 cursor-pointer" for="account-upload" style="background:<?php echo $a['headerfooter'] ?>">Upload new logo dinas</label>
                                   <input type="hidden" value="<?php echo $a['id_dinas'] ?>" name="id_dinas_update" />
                                   <input type="file" id="account-upload" name="gambar" hidden>
                                <button type="submit" class="btn btn-sm ml-50" style="background:<?php echo $a['tombol'] ?>">Update</button>
                               </form> 
                              </div>
                              <p class="text-dark ml-75 mt-50">
                                <small>Allowed JPG, GIF or PNG. Max size of 100kB</small>
                              </p>
                             </div>
                           </div>
                         <hr class="my-1">
                       
                       <div class="media">
                         <a href="javascript: void(2);">
                           <img src="master_data/logo/<?php echo $a['logoppdb'] ?>" class="rounded mr-75" height="64" width="64">
                          </a>
                          <div class="media-body mt-75">
                             <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                               
                               <form action="master_data/update_logo_ppdb.php" method="post" enctype="multipart/form-data"> 
                                <label class="btn btn-sm rounded-0 ml-50 mb-50 mb-sm-0 cursor-pointer" for="account-upload-2" style="background:<?php echo $a['headerfooter'] ?>">Upload logo ppdb</label>
                                   <input type="hidden" value="<?php echo $a['id_dinas'] ?>" name="id_dinas_up" />
                                   <input type="file" name="foto" id="account-upload-2" hidden>
                                <button type="submit" value="Upload" class="btn btn-sm ml-50" style="background:<?php echo $a['tombol'] ?>">Update</button>
                               </form> 
                              </div>
                              <p class="text-dark ml-75 mt-50">
                                <small>Allowed PNG. Max size of 100kB</small>
                              </p>
                             </div>
                           </div>
                        <hr class="my-1">
                           
                     <form action="master_data/update_dinas.php" method="post">
                        <input type="hidden" value="<?php echo $a['id_dinas'] ?>" name="id_dinas" />
                       <div class="row">                                                       
                        <div class="col-12 col-sm-6">
                          <div class="form-group">
                            <div class="controls">
                              <label for="account-name">Nama</label>
                     			<input type="text" class="form-control" name="nm_dinas" value="<?php echo $a['nm_dinas'] ?>">
                            </div>
                          </div>
                        </div>
                        
                                               
                        <div class="col-12 col-sm-6">
                          <div class="form-group">
                            <div class="controls">
                              <label>Alamat</label>
                                <input type="text" class="form-control" name="alamat" value="<?php echo $a['alamat'] ?>">
                            </div>
                          </div>
                        </div>
                        
                        <div class="col-6 col-sm-6">
                          <div class="form-group">
                             <div class="controls">
                                 <label>Kecamatan</label>
                                    <input type="text" class="form-control" name="kecamatan" value="<?php echo $a['kecamatan'] ?>">
                              </div>
                            </div>
                        </div>
                        
                        <div class="col-6 col-sm-6">
                          <div class="form-group">
                             <div class="controls">
                                 <label>Kota</label>
                                    <input type="text" class="form-control" name="kota" value="<?php echo $a['kota'] ?>">
                              </div>
                            </div>
                        </div>
                        
                        <div class="col-6 col-sm-6">
                          <div class="form-group">
                             <div class="controls">
                                 <label>Telepon</label>
                                    <input type="text" class="form-control" name="telepon" value="<?php echo $a['telepon'] ?>">
                              </div>
                            </div>
                        </div>
                        
                         <div class="col-6 col-sm-6">
                          <div class="form-group">
                             <div class="controls">
                                 <label>Handphone <sup class="badge badge-danger">Format 628xxx</sup></label>
                                    <input type="text" class="form-control" name="hp" value="<?php echo $a['hp'] ?>">
                              </div>
                            </div>
                        </div>
                        
                         <div class="col-12 col-sm-12">
                          <div class="form-group">
                             <div class="controls">                                 
                                 <label>Google Map <sup class="badge badge-danger">Ganti width dengan 100%</sup></label>
                                   <textarea class="form-control" name="google_map"><?php echo $a['google_map'] ?></textarea>
                              </div>
                            </div>
                        </div>
                        
                        <div class="col-4 col-sm-4">
                          <div class="form-group">
                             <div class="controls">
                                 <label>Tema Header</label>
                                    <input type="text" id="headerfooter" name="hf" class="form-control" value="<?php echo $a['headerfooter'] ?>">
                              </div>
                            </div>
                        </div>
                        
                        <div class="col-4 col-sm-4">
                          <div class="form-group">
                             <div class="controls">
                                 <label>Background</label>
                                    <input type="text" id="latar" name="bg" class="form-control" value="<?php echo $a['background'] ?>">
                              </div>
                            </div>
                        </div>
                        
                        <div class="col-4 col-sm-4">
                          <div class="form-group">
                             <div class="controls">
                                 <label>Tema Tombol</label>
                                  <input type="text" id="tombol" name="tombol" class="form-control" value="<?php echo $a['tombol'] ?>">
                              </div>
                            </div>
                        </div>
                        <?php echo $a['google_map'] ?>
                      </div>  
            <div class="divider">
            	<div class="divider-text"><h3 class="mb-3 display-4 pt-2 text-uppercase">Sosial Media</h3></div>
        	</div>
                   <div class="row">      
                       
                       <div class="col-6 col-sm-3">
                          <div class="form-group">
                             <div class="controls">
                                 <label>Facebook</label>
                                    <input type="text" id="tombol" name="fb" class="form-control" value="<?php echo $a['fb'] ?>">
                              </div>
                            </div>
                        </div>
                        
                        <div class="col-6 col-sm-3">
                          <div class="form-group">
                             <div class="controls">
                                 <label>Instagram</label>
                                    <input type="text" id="tombol" name="ig" class="form-control" value="<?php echo $a['ig'] ?>">
                              </div>
                            </div>
                        </div>
                        
                        <div class="col-6 col-sm-3">
                          <div class="form-group">
                             <div class="controls">
                                 <label>Twitter</label>
                                    <input type="text" id="tombol" name="twitter" class="form-control" value="<?php echo $a['twitter'] ?>">
                              </div>
                            </div>
                        </div>
                        
                        <div class="col-6 col-sm-3">
                          <div class="form-group">
                             <div class="controls">
                                 <label>Tiktok</label>
                                    <input type="text" id="tombol" name="tiktok" class="form-control" value="<?php echo $a['tiktok'] ?>">
                              </div>
                            </div>
                        </div>
                        
                        <div class="col-4 col-sm-4">
                          <div class="form-group">
                             <div class="controls">
                                 <label>Youtube</label>
                                    <input type="text" id="tombol" name="yt" class="form-control" value="<?php echo $a['yt'] ?>">
                              </div>
                            </div>
                        </div>
                        
                        
                        
                        <div class="col-4 col-sm-4">
                          <div class="form-group">
                             <div class="controls">
                                 <label>Email</label>
                                    <input type="text" id="tombol" name="email" class="form-control" value="<?php echo $a['email'] ?>">
                              </div>
                            </div>
                        </div>
                        
                         <div class="col-4 col-sm-4">
                          <div class="form-group">
                             <div class="controls">
                                 <label>Website</label>
                                    <input type="text" id="tombol" name="web" class="form-control" value="<?php echo $a['web'] ?>">
                              </div>
                            </div>
                        </div>
                        
                        
                                                        
                       <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                          <button type="submit" class="btn mr-sm-1 mb-1 mb-sm-0" name="button_update" style="background:<?php echo $a['tombol'] ?>">Ubah</button>
                          <button type="reset" class="btn btn-outline-warning">Cancel</button>
                       </div>
                    </div>
                   </form>
                </div>
                                            
               
                                            
          </div>
        </div>
       </div>
      </div>
     </div>
    </div>
   </section>
<!-- account setting page end -->
   </div>
  </div>
</div>
<!-- END: Content-->

    