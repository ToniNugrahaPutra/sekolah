<?php include('../inc/koneksi.php');
if($_POST['idx']) {
$id 	= $_POST['idx'];      
$data 	= mysqli_query($koneksi, "SELECT * FROM tabel_konten WHERE id_konten = '$id'");
$d 		= mysqli_fetch_array($data);
}?>    
       
  <form action="master_data/update_gbr_promosi.php" method="post" enctype="multipart/form-data">        
         
        <div class="row">    
           <input type="hidden" name="id_konten_update" class="form-control" value="<?php echo $d['id_konten'];?>" readonly> 
          <div class="form-group col-12 col-sm-12">
          <img src='master_data/images/<?php echo $d['gbr']; ?>' width='250' /><br />
           <label for="basicInputFile">Ganti File (File JPG,PNG,JPEG)</label>                                 
               <div class="input-group">                  
                    <input type="file" name="gambar">
               </div>     
            </div>                   
         
       </div>

       
       <div class="row">          
         <div class="form-group col-12">                                  
           <div class="input-group">
        <input type="submit" name="button_tambah" id="button_tambah" value="Ubah" class="btn btn-primary" />
           </div>
         </div>
       </div>    
       </form>