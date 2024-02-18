<div class="content-wrapper pt-0 mt-0"> 
  <div class="card">           
   <div class="content-body">
    <div class="row justify-content-center">
      <div class="col-md-12 text-center">
         <div class="divider">
            <div class="divider-text"><h3 class="display-5 text-uppercase">Alumni <?php echo $nm_dinas;?></h3></div>
          </div>
      </div>
    </div>
    <div class="card-content">
      <div class="card-body">
   		<div class="row">
<?php error_reporting(0);           
    $ketQuery = "SELECT * FROM tabel_anggota,tabel_alamat,tabel_data_anggota WHERE tabel_anggota.no_induk = tabel_alamat.no_induk AND tabel_anggota.no_induk = tabel_data_anggota.no_induk AND tabel_anggota.kategori = 'alumni' ORDER BY tabel_anggota.nama DESC";
    $executeSat = mysqli_query($koneksi, $ketQuery);
    while ($c=mysqli_fetch_array($executeSat)) {	
?>
                         <div class="col-sm-4 col-4">
                             <div class="card">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                     <img class="img-fluid mb-1" src="admin/master_data/anggota/<?php echo $c['pas_foto'] ?>">
                                        <hr class="my-1">
                                        <div class="d-flex justify-content-between mt-0">
                                            <div class="float-left d-xl-block d-none">
                                               <p class="font-small-2 font-italic mb-1"><?php echo $c['jurusan'] ?></p>
                                                 <a class="btn btn-sm rounded-0" style="background:<?php echo $tombol?>"><?php echo $c['nama'] ?></a>
                                            </div>
                                            <div class="float-right">
                                               <p class="font-small-2 mb-1 d-xl-block d-none">Cek profile</p>
                                                 <a href="?menu=cek&no_induk=<?php echo $c['no_induk'] ?>" class="btn btn-sm rounded-0" style="background:<?php echo $tombol?>" >...Profil...</a>
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
          </div>
       </div>
     </div> 
   