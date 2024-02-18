<?php
include('../inc/koneksi.php');
error_reporting(0);
if(isset($_POST['button_update'])){
$id_update			=$_POST['id_konten_update'];
$kat_update			=$_POST['kat_update'];
$judul_update		=$_POST['judul_update'];
$ket_update			=$_POST['ket_update'];

$query_update="UPDATE tabel_konten SET judul='".$judul_update."',ket='".$ket_update."',kat='".$kat_update."' WHERE id_konten='".$id_update."'";
$update=mysqli_query($koneksi, $query_update);
if($update){
echo "<script>document.location='../?menu=home'</script>";}
else{
echo "<script>window.history.go(-1);</script>";}
}
?>