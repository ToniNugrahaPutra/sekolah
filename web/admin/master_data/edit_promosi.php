<!--?php include('inc/koneksi.php');
if($_POST['idx']) {
$id 	= $_POST['idx'];      
$data 	= mysqli_query($koneksi, "SELECT * FROM tabel_konten WHERE gbr = '$id'");
$d 		= mysqli_fetch_array($data);
}?--> 
<?php
	include('inc/koneksi.php');
	$id_konten = $_GET['id_konten'];
	$sql = "SELECT * FROM tabel_konten WHERE id_konten = '$id_konten'";
	$query = mysqli_query($koneksi, $sql);
	$r = mysqli_fetch_array($query); ?>  
   
       
  <form action="master_data/update_promosi.php" method="post">        
         
        <div class="row">    
           <input type="hidden" name="id_konten_update" class="form-control" value="<?php echo $r['id_konten'];?>" readonly> 
          <div class="form-group col-12 col-sm-6"> 
           <label for="basicInputFile">Kategori</label>                                 
               <div class="input-group">                  
                    <select class="form-control select2" name="kat_update">
                    	<option value="<?php echo $r['kat'];?>">Don't Change</option>
                        <option value="0">Ganti Kategori</option>
                        <option value="promo">Promo (Ukuran 1920x720pixel)</option>
                        <option value="profile">Profile</option>
                        <option value="keahlian">Keahlian</option>
                        <option value="agenda">Agenda</option> 
                        <option value="ppdb">PPDB</option> 
                        <option value="bkk">BKK</option>
                    </select>
               </div>
            <label for="basicInputFile">Judul</label>                                 
               <div class="input-group">                  
                    <input type="text" name="judul_update" class="form-control" value="<?php echo $r['judul'];?>">
               </div>   
                    
            </div>                   
         <div class="col-sm-6 col-12">
    		<label for="basicInputFile">Keterangan</label>
    		 
     			<textarea data-length="100" class="form-control" id="summernote" rows="3" name="ket_update"><?php echo $r['ket'];?></textarea>
                <!--textarea id="summernote" name="ket" class="form-control"></textarea-->
    		      
    	 </div>
       </div>

       
       <div class="row">          
         <div class="form-group col-12">                                  
           <div class="input-group">
        <button type="submit" name="button_update" class="btn btn-primary">Ubah Data</button>
           </div>
         </div>
       </div>    
       </form>