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
 <h2 class="content-header-title float-left mb-0">DATA WEB</h2>
    <div class="breadcrumb-wrapper col-12">
      <ol class="breadcrumb">
           <li class="breadcrumb-item">KEPEGAWAIAN</li>                     
      </ol>
  </div>
<!-- Column selectors with Export Options and print table -->
  <section id="column-selectors">
    <div class="row">
      <div class="col-12">        
        <div class="card">
          <div class="card-content">
            <div class="card-body card-dashboard"> 
           		<a href="?menu=data_input" class="btn text-white" style="background:<?php echo $a['tombol'] ?>"><i class="feather icon-edit"></i> Tambah Pegawai</a>
            <div class="card">
            <div class="divider">
            	<div class="divider-text"><h3 class="mb-3 display-4 pt-2 text-uppercase">Guru dan Karyawan <?php echo $nm_usaha ;?></h3></div>
        	</div>
              <div class="table-responsive p-1">
                 <table class="table table-striped dataex-html5-selectors">
                     <thead>
                        <tr>                          
                          <th>NIP</th>
                          <th>NAMA</th>
                          <th>JABATAN</th>                          
                          <th>NO.HP</th>
                          <th class="d-print-none">AKSI</th>
                        </tr>
                      </thead>
                      <tbody>
<?php            
   error_reporting(0);
   $ketQuery = "SELECT * FROM tabel_anggota,tabel_alamat,tabel_data_anggota WHERE tabel_anggota.no_induk = tabel_alamat.no_induk AND tabel_anggota.no_induk = tabel_data_anggota.no_induk AND tabel_anggota.kategori='pegawai' ORDER BY tabel_anggota.id_anggota DESC";
   $executeSat = mysqli_query($koneksi, $ketQuery);
   while ($b=mysqli_fetch_array($executeSat)) {    
?>
                    
                       <tr>                    	
                        <td><?php echo $b['id_anggota']; ?>/<?php echo $b['no_induk']; ?></td>
                        <td>
                        <h4 class="font-medium-3"><?php echo $b['nama']; ?></h4>
                        <span><?php echo $b['alamat']; ?></span>                        
                        </td> 
                        <td><?php echo $b['jurusan']; ?></td>                        
                        <td><a href="https://wa.me/62<?php echo substr($b['hp'],1,15); ?>" class="btn rounded-0" style="background:<?php echo $tombol; ?>" target="_blank"><i class="fab fa-whatsapp"></i> Hubungi <?php echo $b['hp']; ?></a></td>
                        <td><div class="btn btn-group">                        
                        <a href="?menu=cetak&no_induk=<?php echo $b['no_induk']; ?>"class="btn btn-danger"><i class="fas fa-print"></i></a>
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



