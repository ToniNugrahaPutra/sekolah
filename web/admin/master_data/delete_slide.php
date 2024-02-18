<?php
include('../inc/koneksi.php');
//if(isset($_GET['id_konten']) && isset($_GET['gbr'])){
if(isset($_GET['gbr'])){	
//$id_konten=$_GET['id_konten'];
$gbr_konten=$_GET['gbr'];
$target='images/$gbr_konten';
//$query_delete="DELETE FROM tabel_konten WHERE id_konten='".$id_konten."'";	
$query_delete="DELETE FROM tabel_konten WHERE gbr='".$gbr_konten."'";	
$delete=mysqli_query($koneksi, $query_delete);
//if($delete){
//header("location:../?menu=home");}
if (unlink($target)){
echo ("$target gagal dihapus"); 
//header("location:../?menu=home");	
}
else{
header("location:../?menu=home");}

}
?>
