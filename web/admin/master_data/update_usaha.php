<?php
include('../inc/koneksi.php');
error_reporting(0);
if(isset($_POST['button_update'])){
$id_usaha			=$_POST['id_usaha'];
$nm_usaha			=$_POST['nm_usaha'];
$alamat				=$_POST['alamat'];
$kecamatan			=$_POST['kecamatan'];
$kota				=$_POST['kota'];
$telepon			=$_POST['telepon'];
$hp					=$_POST['hp'];
$hf					=$_POST['hf'];
$bg					=$_POST['bg'];
$tombol				=$_POST['tombol'];
$fb					=$_POST['fb'];
$ig					=$_POST['ig'];
$yt					=$_POST['yt'];
$twitter			=$_POST['twitter'];
$email				=$_POST['email'];
$tiktok				=$_POST['tiktok'];

$query_update="UPDATE tabel_usaha SET 
	nm_usaha='".$nm_usaha."',
	alamat='".$alamat."',	
	kecamatan='".$kecamatan."',
	kota='".$kota."',
	telepon='".$telepon."',
	hp='".$hp."',	
	fb='".$fb."',
	ig='".$ig."',
	twitter='".$twitter."',
	yt='".$yt."',
	email='".$email."',
	tiktok='".$tiktok."',		
	headerfooter='".$hf."',
	background='".$bg."',	
	tombol='".$tombol."'
	WHERE id_usaha='".$id_usaha."'";
$update=mysqli_query($koneksi, $query_update);
if($update){
echo "<script>document.location='../?menu=web'</script>";}
else{
echo "<script>window.history.go(-1);</script>";}
}
?>