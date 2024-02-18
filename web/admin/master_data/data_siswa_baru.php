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

<?php $a = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM tabel_dinas")); ?> 
<div class="content-body"> 
<?php	
$kategori = $_GET['kategori'];
$b = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM tabel_siswa_baru")); ?>
 <h2 class="content-header-title float-left mb-0">DATA </h2>
    <div class="breadcrumb-wrapper col-12">
      <ol class="breadcrumb">
           <li class="breadcrumb-item">SISWA BARU</li>                     
      </ol>
  </div>
<!-- Column selectors with Export Options and print table -->
 	
  <section id="column-selectors">
    <div class="row">
      <div class="col-12">        
        <div class="card">
          <div class="card-content">
            <div class="card-body card-dashboard">
			<a href="?menu=input_ppdb" class="btn text-white" style="background:<?php echo $a['headerfooter'] ?>"><i class="fa-solid fa-address-book"></i> Tambah Pendaftar</a>	
            <div class="card">
            <div class="divider">
            	<div class="divider-text"><h3 class="mb-3 display-4 pt-2 text-uppercase"><?php echo $b['nm_kat_anggota']; ?></h3></div>
        	</div>
              <div class="table-responsive p-1">
                 <table class="table table-striped dataex-html5-selectors">
                     <thead>
                        <tr>                          
                          <th>NISN</th>
                          <th>DATA SISWA</th>
                          <th>JURUSAN</th>
                          <th>FILES</th>
                          <th>NO.HP</th>
                          <th class="d-print-none">AKSI</th>
                        </tr>
                      </thead>
                      <tbody>
<?php            
   error_reporting(0);
   $ketQuery = "SELECT * FROM tabel_siswa_baru ORDER BY id_member ASC";
   $executeSat = mysqli_query($koneksi, $ketQuery);
   while ($c=mysqli_fetch_array($executeSat)) {    
?>
                    
                       <tr>                    	
                        <td><?php echo $c['id_member']; ?>/<?php echo $c['nisn']; ?></td>
                        <td>
                        <h4 class="font-medium-3"><?php echo $c['nama']; ?></h4>
                        <span><?php echo $c['alamat']; ?></span>                        
                        </td> 
                        <td><?php echo $c['jurusan']; ?></td>
                        <td>
                        <a href="master_data/download.php?file=<?php echo $c['kartu_1']; ?>" class="badge" style="background:<?php echo $tombol; ?>"><i class="fas fa-file-download"></i> KTP Orangtua</a>
                        <a href="master_data/download.php?file=<?php echo $c['kartu_2']; ?>" class="badge" style="background:<?php echo $tombol; ?>"><i class="fas fa-file-download"></i> Akta Kelahiran</a>
                        </td>
                        <td><a href="https://wa.me/62<?php echo substr($c['hp'],1,15); ?>" class="btn rounded-0" style="background:<?php echo $tombol; ?>; color:<?php echo $background; ?>" target="_blank"><i class="fab fa-whatsapp"></i> Hubungi <?php echo $b['hp']; ?></a></td>
                        <td><div class="btn btn-group">
                        <!--?php echo "<a href='#lihat_siswa' data-toggle='modal' data-id=" . $b['id_anggota'] . "><span class='btn btn-icon' style='background:$a[tombol]'><i class='fas fa-eye'></i></span></a>"; ?-->
                        <a href="?menu=cetak&no_induk=<?php echo $c['no_induk']; ?>"class="btn btn-danger"><i class="fas fa-print"></i></a>
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

<!-- Modal -->
<div class="modal fade text-left " id="lihat_siswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
     <div class="modal-content" style="max-width: 800px;">
       <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel16">Cek Data</h4>
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

