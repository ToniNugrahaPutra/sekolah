<?php
include('../inc/koneksi.php');
error_reporting(0);
if(isset($_POST['button_update'])){
$id_dinas			=$_POST['id_dinas'];
$nm_dinas			=$_POST['nm_dinas'];
$alamat				=$_POST['alamat'];
$kecamatan			=$_POST['kecamatan'];
$kota				=$_POST['kota'];
$telepon			=$_POST['telepon'];
$hp					=$_POST['hp'];
$google_map			=$_POST['google_map'];
$hf					=$_POST['hf'];
$bg					=$_POST['bg'];
$tombol				=$_POST['tombol'];
$fb					=$_POST['fb'];
$ig					=$_POST['ig'];
$yt					=$_POST['yt'];
$twitter			=$_POST['twitter'];
$email				=$_POST['email'];
$tiktok				=$_POST['tiktok'];
$web				=$_POST['web'];

$query_update="UPDATE tabel_dinas SET 
	nm_dinas='".$nm_dinas."',
	alamat='".$alamat."',	
	kecamatan='".$kecamatan."',
	kota='".$kota."',
	telepon='".$telepon."',
	hp='".$hp."',
	google_map='".$google_map."',	
	fb='".$fb."',
	ig='".$ig."',
	twitter='".$twitter."',
	yt='".$yt."',
	email='".$email."',
	tiktok='".$tiktok."',
	web='".$web."',		
	headerfooter='".$hf."',
	background='".$bg."',	
	tombol='".$tombol."'
	WHERE id_dinas='".$id_dinas."'";
$update=mysqli_query($koneksi, $query_update);
if($update){
echo "<script>document.location='../?menu=web'</script>";}
else{
echo "<script>window.history.go(-1);</script>";}
}
?>