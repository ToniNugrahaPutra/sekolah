 <div class="modal fade" id="siaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Galeri</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form method="post" action="../?menu=home" enctype="multipart/form-data">
                	
                  <div class="row">

                    <div class="col-12">
                      <div class="font-medium-2 mb-1">
                         Kategori
                       </div>
                       <fieldset class="form-group position-relative has-icon-left input-divider-left">          
                          <select name="kat" class="form-control">
                               <option value="Separation">Separation</option>
                               <option value="Drying">Drying</option>
                               <option value="Ginning">Ginning</option>
                               <option value="Sortir small pressing">Sortir small pressing</option>
                               <option value="Sortir big balle">Sortir big balle</option>
                            </select>
                         <div class="form-control-position">
                            <i class="feather icon-file"></i>
                           </div>
                       </fieldset>
                     </div>
                     
                     <div class="col-12">
                      <div class="font-medium-2 mb-1">
                         Foto
                       </div>
                       <fieldset class="form-group position-relative has-icon-left input-divider-left">          
                          <input type="file" name="gambar">                         
                       </fieldset>
                     </div>                     
                   </div> 
                     
                   <div class="col-12">
                      <div class="font-medium-2 mb-1">
                         Keterangan
                       </div>
                       <fieldset class="form-group position-relative has-icon-left input-divider-left">          
                          <input type="text" name="ket" class="form-control">
                         <div class="form-control-position">
                            <i class="feather icon-edit-1"></i>
                           </div>
                       </fieldset>
                     </div>
                     
                     
                </div>  
                    
                    <input type="submit" name="button_tambah" id="button_tambah" value="Tambah" class="btn btn-primary" />
                    
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
 
 
 <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
 <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0">
        <span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; <?php echo date('Y');?>
        <a class="text-bold-800 grey darken-2" href="https://republicvisual.com" target="_blank">Development by republicvisual.com,</a>All rights Reserved</span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
<!-- END: Footer-->