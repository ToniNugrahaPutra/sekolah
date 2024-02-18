<?php include('../inc/koneksi.php');
if($_POST['idx']) {
$id 	= $_POST['idx'];      
$data 	= mysqli_query($koneksi, "SELECT * FROM tabel_anggota,tabel_alamat,tabel_data_anggota WHERE tabel_anggota.id_anggota = '$id' AND tabel_anggota.no_induk = tabel_alamat.no_induk AND tabel_anggota.no_induk = tabel_data_anggota.no_induk");
//$data 	= mysqli_query($koneksi, "SELECT * FROM tabel_anggota WHERE id_anggota = '$id' ");
$d 		= mysqli_fetch_array($data);
}?>    
       
 <!-- information start -->
                        <div class="col-md-12 col-12 ">
                            <div class="card bg-transparent">                                
                                <div class="card-body">
                                    <table>
                                        <tr>
                                            <td class="font-weight-bold">Foto</td>
                                            <td><img src="master_data/anggota/<?php echo $d['pas_foto']; ?>"  width='100' /></td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">NISN </td>
                                            <td><?php echo $d['no_induk']; ?></td>
                                        </tr>.
                                        <tr>
                                            <td class="font-weight-bold">Nama </td>
                                            <td><?php echo $d['nama']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">No.HP</td>
                                            <td><?php echo $d['hp']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Alamat</td>
                                            <td><?php echo $d['alamat']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Jenis Kelamin</td>
                                            <td><?php echo $d['jk']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Tempat Tanggal Lahir</td>
                                            <td><?php echo $d['kota_lahir']; ?>, <?php echo $d['ttl']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Lulus Tahun</td>
                                            <td><?php echo $d['angkatan']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Asal Sekolah</td>
                                            <td><?php echo $d['asal']; ?></td>
                                        </tr>                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- information start -->  
  
