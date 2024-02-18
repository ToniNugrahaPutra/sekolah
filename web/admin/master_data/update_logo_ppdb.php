<?php
include('../inc/koneksi.php');
$id_dinas_update	= $_POST ['id_dinas_up'];
$rand = rand();
$ekstensi =  array('png','jpg','jpeg','gif');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	echo "<script language='JavaScript'>alert('Gagal!!! ...');document.location='../?menu=web';</script>";
}else{
	if($ukuran < 1044070){		
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'logo/'.$rand.'_'.$filename);
		mysqli_query($koneksi, "UPDATE tabel_dinas SET logoppdb='".$xx."' WHERE id_dinas='".$id_dinas_update."'");
		echo "<script language='JavaScript'>alert('Good! Upload and resize image success ...');document.location='../?menu=web';</script>";
	}else{
		echo "<script language='JavaScript'>alert('Gagal!!! ...');document.location='../?menu=web';</script>";
	}
}
?>