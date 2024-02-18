<a href="?menu=ppdb" class="float">
  <img src="admin/master_data/logo/<?php echo $ppdb; ?>" width="100" />
</a>                    
    

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static navbar-shadow" style="background:<?php echo $headerfooter ?>">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="align-self-center d-block d-md-inline-block mt-25">COPYRIGHT &copy; <?php echo date('Y');?><a class="text-bold-800 grey darken-2" href="https://smkmu8pakis.sch.id" target="_blank"><?php echo $nm_dinas;?>,</a>All rights Reserved</span>
            <a href="#promo" class="btn btn-dark btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></a>
        </p>
    </footer>
    <!-- END: Footer-->
    
<div class="modal fade" id="log" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Login</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">  
                <form action="admin/akses/login_aksi.php" method="post" id="login_toko">
                    <fieldset class="form-label-group form-group position-relative has-icon-left">
                       <input type="text" class="form-control" name="nm_user" placeholder="username" required>
                        <div class="form-control-position">
                          <i class="feather icon-user"></i>
                        </div>
                        <label for="user-name">Username</label>
                    </fieldset>

                    <fieldset class="form-label-group position-relative has-icon-left">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                           <div class="form-control-position">
                              <i class="feather icon-lock"></i>
                           </div>
                          <label for="user-password">Password</label>
                    </fieldset>
                                                    
					
                    <button type="submit" name="button_login" class="btn btn-primary float-right btn-inline">Login</button>
                   </form>
                
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>    