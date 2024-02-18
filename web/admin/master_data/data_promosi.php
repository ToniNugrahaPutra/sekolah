<style>
.item {
    position:relative;
    padding-top:20px;
    display:inline-block;
}
.notify-badge{
    position: absolute;
    right:-20px;
    top:10px;    
    text-align: center; 
    padding:5px 10px;
    font-size:16px;
}
</style>
<?php
if(isset($_GET['id'])){
$id=$_GET['id'];
$query_slide_update="SELECT * FROM tabel_konten WHERE id='".$id."'";
$slide_update=mysqli_query($koneksi, $query_slide_update);
$data_slide_update=mysqli_fetch_array($slide_update);
$id_slide_update	=$data_slide_update['id_konten'];
$kat_slide_update	=$data_slide_update['kat'];
$gbr_slide_update	=$data_slide_update['gbr'];
$ket_slide_update	=$data_slide_update['ket'];
}
?>
<?php $a = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM tabel_dinas")); ?> 
<div class="content-body"> 
 <h2 class="content-header-title float-left mb-0">DATA WEB</h2>
    <div class="breadcrumb-wrapper col-12">
      <ol class="breadcrumb">
           <li class="breadcrumb-item">Konten</li>                     
      </ol>
  </div>
<!-- Column selectors with Export Options and print table -->
  <section id="column-selectors">
    <div class="row">
      <div class="col-12">        
        <div class="card">
          <div class="card-content">
            <div class="card-body card-dashboard"> 
            
            <div class="content-header-right text-right col-12 p-0 m-0">
                    <div class="col-md-12 pb-3">            
            <a href="#" class="btn text-white" data-toggle="modal" data-target="#siaran" style="background:<?php echo $a['tombol'] ?>"><i class="feather icon-edit"></i> Tambah Konten</a>
            <!--a href="#" class="btn btn-primary text-white" data-toggle="modal" data-target="#profile"><i class="feather icon-award"></i> Profile</a-->
            		</div>
             </div>       
            
            <div class="card">
            <div class="divider">
            	<div class="divider-text"><h3 class="mb-3 display-4 pt-2 text-uppercase">Data Konten</h3></div>
        	</div>
              <div class="table-responsive p-1">
                 <table class="table table-striped dataex-html5-selectors">
                     <thead>
                        <tr>                          
                          <th>FILE</th>
                          <th>KONTEN</th>
                          <th class="d-print-none">AKSI</th>
                        </tr>
                      </thead>
                      <tbody>
<?php $query = "SELECT * FROM tabel_konten ORDER BY id_konten DESC";$result = mysqli_query($koneksi, $query);while ($sl = mysqli_fetch_array($result)){ 
$id_slide 	= $sl['id_konten'];
$kat_slide	= $sl['kat'];
$gbr_slide	= $sl['gbr'];
$judule		= $sl['judul'];
$link_slide	= $sl['ket'];
/*if ($gbr_slide == 1) {
    $inpoh="<img src='master_data/images/$gbr_slide' width='100' />";
} else {
    $inpoh="https://www.youtube.com/embed/live_stream?channel=$link_slide";
}*/
?>                    
                       <tr>
                    	
                        <td> 
                        <div class="item">
                            <?php echo "<a href='#edit_gambar' data-toggle='modal' data-id=" . $id_slide . " title='Ganti Foto'><span class='notify-badge bg-danger'><i class='feather icon-camera text-white'></i></span></a>"; ?>
                                <img src="master_data/images/<?php echo $gbr_slide; ?>"  width='75' />
                        </div>
                        </td>
                        <td>
                        <span class="font-small-3"><?php echo $kat_slide; ?></span><br /><h4><?php echo $judule; ?></h4>
						<?php echo substr($link_slide, 1, 100); ?>
                        
                        </td> 
                        <td><div class="btn btn-group">
                        <!--a href="?menu=filedit&gbr=<?php echo $gbr_slide; ?>"class="btn btn-warning" title="Ganti Foto"><i class="feather icon-camera"></i></a-->                        
                        <a href="?menu=edit&id_konten=<?php echo $id_slide; ?>"class="btn" title="Ubah Text" style="background:<?php echo $a['tombol'] ?>"><i class="feather icon-edit"></i></a>
                        <a href="master_data/delete_slide.php?gbr=<?php echo $gbr_slide; ?>"class="btn btn-danger" title="Hapus data"><i class="feather icon-trash-2"></i></a>
                        </div></td>                      
                       </tr> 
                        <?php } ?>
                    </tbody>
                  </table>  
              </div>            
             </div>              
            </div>
           </div>      
         </div>
       </div>  
      </div>
     </section>
     
</div> 

<!-----MODAL---->
 <div class="modal fade" id="siaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
     <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Konten</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body p-3">
                <!--form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data"-->
                <form method="post" action="master_data/do.php" enctype="multipart/form-data">
                	
                  <div class="row">

                    <div class="col-12 col-md-12">
                      <div class="font-medium-2 mb-1">Kategori <sup class="badge badge-danger">Wajib di Isi</sup></div>
                       <fieldset class="form-group position-relative has-icon-right input-divider-left">          
                          <select name="kat" class="form-control select2">
                               <option value="promo">Promo (Ukuran 1920x720pixel)</option>
                               <option value="profile">Profile</option>
                               <option value="keahlian">Keahlian</option>
                               <option value="agenda">Agenda</option> 
                               <option value="ppdb">PPDB</option> 
                               <option value="bkk">BKK</option>                               
                            </select>
                         <div class="form-control-position"><i class="feather icon-menu pr-5"></i></div>
                       </fieldset>
                     </div>
                     
                     <div class="col-12 col-md-12">
                      <div class="font-medium-2 mb-1">Judul</div>
                       <fieldset class="form-group position-relative has-icon-left input-divider-left">                          
                          <input class="form-control" name="judul" placeholder="Tulis judul" />
                         <div class="form-control-position"><i class="feather icon-edit-1"></i></div>
                       </fieldset>
                     </div>
                     
                     <div class="col-12 col-md-12">
                      <div class="font-medium-2 mb-1">Foto <sup class="badge badge-danger">File JPG/JPEG/PNG</sup></div>
                       <fieldset class="form-group position-relative has-icon-left input-divider-left">          
                          <input type="file" name="gambar" placeholder="Upload foto">                         
                       </fieldset>
                     </div>                     
                   
                     
                   <div class="col-12 col-md-12 mb-5">
                      <div class="font-medium-2 mb-1">Keterangan</div>
                       <fieldset class="form-group position-relative has-icon-left input-divider-left">
                          <textarea id="summernote" name="ket" class="form-control"> Berikan keterangan</textarea>
                       </fieldset>
                     </div>
                  
                  
                  
                    <div class="col-12 col-md-12">
                    	<input type="submit" name="button_tambah" id="button_tambah" value="Tambah" class="btn btn-primary" />
                    </div>    
                    
                </form>
                </div> 
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade text-left " id="edit_gambar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
     <div class="modal-content" style="max-width: 800px;">
       <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel16">Ubah Gambar</h4>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
       </div>
       <div class="modal-body">
          <div class="hasil-data"></div>                                                      
       </div>
       <div class="modal-footer"></div>
     </div>
   </div>
  </div>
</div> 

