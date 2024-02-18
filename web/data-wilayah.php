<?php
	include("koneksi.php");     
	switch ($_POST['jenis']) {
		//ambil data kota / kabupaten
		case 'kota':
		$id_provinces = $_POST['id_provinces'];
		if($id_provinces == ''){
		     exit;
		}else{
		     $getcity = mysqli_query($koneksi,"SELECT  * FROM kabupaten WHERE id_prov ='$id_provinces' ORDER BY nama ASC") or die ('Query Gagal');
		     while($data = mysqli_fetch_array($getcity)){
		          echo '<option value="'.$data['id_kab'].'">'.$data['nama'].'</option>';
		     }
		     exit;    
		}
		break;

		//ambil data kecamatan
		case 'kecamatan':
		$id_regencies = $_POST['id_regencies'];
		if($id_regencies == ''){
		     exit;
		}else{
		     $getcity = mysqli_query($koneksi,"SELECT  * FROM kecamatan WHERE id_kab ='$id_regencies' ORDER BY nama ASC") or die ('Query Gagal');
		     while($data = mysqli_fetch_array($getcity)){
		          echo '<option value="'.$data['id_kec'].'">'.$data['nama'].'</option>';
		     }
		     exit;    
		}
		break;
		

		//ambil data kelurahan
		case 'kelurahan':
		$id_district = $_POST['id_district'];
		if($id_district == ''){
		     exit;
		}else{
		     $getcity = mysqli_query($koneksi,"SELECT  * FROM kelurahan WHERE id_kec ='$id_district' ORDER BY nama ASC") or die ('Query Gagal');
		     while($data = mysqli_fetch_array($getcity)){
		          echo '<option value="'.$data['id_kel'].'">'.$data['nama'].'</option>';
		     }
		     exit;    
		}
		break;
		
	}
?>