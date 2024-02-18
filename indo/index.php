<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mari Belajar Coding - Wilayah Adminstrasi Indonesia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="asset/bootstrap-3.3.7/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="asset/select2-4.0.6-rc.1/dist/css/select2.min.css">
  <script src="asset/jquery/jquery-3.3.1.min.js"></script>
  <script src="asset/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
  <script src="asset/select2-4.0.6-rc.1/dist/js/select2.min.js"></script>   
  <script src="asset/select2-4.0.6-rc.1/dist/js/i18n/id.js"></script>   
  <script src="asset/js/app.js"></script>
  <?php
    include("koneksi.php");     
  ?>
</head>
<body>
<div class="container" style="margin-top: 10px">
  <div class="row">
    <div class="col-sm-offset-2  col-sm-8">
      <div class="panel panel-default">
        <div class="panel-heading"><b>Mari Belajar Coding - Wilayah Adminstrasi Indonesia</b></div>
        <div class="panel-body">
           <form class="form-horizontal" method="post" action="lokasi.php">
              <div class="form-group">
                <label class="control-label col-sm-3">Provinsi:</label>
                <div class="col-sm-9">
                  <?php                    
                    $sql_provinsi = mysqli_query($koneksi,"SELECT * FROM provinsi ORDER BY nama ASC");
                   ?>
                  <select class="form-control" name="provinsi" id="provinsi">
                    <option></option>
                    <?php                       
                        while($rs_provinsi = mysqli_fetch_assoc($sql_provinsi)){ 
                           echo '<option value="'.$rs_provinsi['id_prov'].'">'.$rs_provinsi['nama'].'</option>';
                        }                        
                      ?>
                  </select>
                  <img src="asset/img/loading.gif" width="35" id="load1" style="display:none;" />
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3" >Kota/Kabupaten:</label>
                <div class="col-sm-9">          
                  <select class="form-control" name="kota" id="kota">
                    <option></option>
                  </select>
                  <img src="asset/img/loading.gif" width="35" id="load2" style="display:none;" />
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3" >Kecamatan:</label>
                <div class="col-sm-9">          
                  <select class="form-control" name="kecamatan" id="kecamatan">
                    <option></option>
                  </select>
                  <img src="asset/img/loading.gif" width="35" id="load3" style="display:none;" />
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3" >Kelurahan:</label>
                <div class="col-sm-9">          
                  <select class="form-control" name="kelurahan" id="kelurahan">
                    <option></option>
                  </select>
                </div>
              </div>
              <div class="form-group">        
                <div class="col-sm-offset-3 col-sm-9">
                  <input type="submit" class="btn btn-default" name="tambah" value="SIMPAN">
                </div>
              </div>
            </form>
        </div>
      </div>
<h1>Data tampil</h1>	
	<table class="table" border="1px solid #111">
		<thead>
			<tr>
			 	<th>No</th>
				<th>Provinsi</th>
				<th>Kota/Kabupaten</th>
				<th>Kecamatan</th>
				<th>Kelurahan/Desa</th>
			</tr>
		</thead>
		
		<tbody>
<?php 
	$query = "SELECT * FROM lokasi ORDER BY id ASC";		
	$result = mysqli_query($koneksi, $query);
	while ($a = mysqli_fetch_array($result)){ 
$id 	= $a['id'];		
$prov 	= $a['prov'];
$kab	= $a['kab'];
$kec	= $a['kec'];
$kel	= $a['kel'];		
/*if ($prov = $nama) {
    $nm_prov= "$nama";	
} else {
    $hargae = "";
}	*/
?> 			
			<tr>
				<td><?php echo $id ;?></td>
				<td><?php echo $prov ;?></td>
				<td><?php echo $kab ;?></td>
				<td><?php echo $kec ;?></td>
				<td><?php echo $kel ;?></td>
			</tr>	
			<?php } ?>
			

			
			
		</tbody>
	
	</table> 		
		
		
		
    </div>
  </div>  
</div>
</body>
</html>
