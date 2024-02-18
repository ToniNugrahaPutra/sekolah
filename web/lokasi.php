<?php
include("koneksi.php");    
error_reporting(0);
$query_max_id=mysqli_query($koneksi, "SELECT MAX(id_lokasi) as maxid FROM lokasi");
$result=mysqli_fetch_array($query_max_id);
$maxid=$result['maxid'];
$uid="UID";
$no_urut=substr($maxid,-3);
$new_urut=$no_urut+1;
$id_lokasi=$uid.sprintf("%03s",$new_urut);
if(isset($_POST['tambah'])){
$provinsi	=$_POST['provinsi'];	
$kota		=$_POST['kota'];
$kecamatan	=$_POST['kecamatan'];
$kelurahan	=$_POST['kelurahan'];
$query_insert = "INSERT INTO lokasi (id,prov,kab,kec,kel)VALUES('$id_lokasi','$provinsi','$kota','$kecamatan','$kelurahan')";
$insert = mysqli_query($koneksi,$query_insert);
if($insert){
echo "<script language='JavaScript'>document.location ='index.php'</script>";}
else{
echo "<script language='javascript'>
window.alert('Proses penyimpanan gagal');javascript:history.back();</script>";}
}?>