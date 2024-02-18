<?php
include('../admin/inc/koneksi.php');
error_reporting(0);
$nama		=$_POST ['nama'];
$kotalahir	=$_POST ['kota_lahir'];
$ttl		=$_POST ['ttl'];
$jk			=$_POST ['jk'];
$no_induk	=$_POST ['no_induk'];
$asal		=$_POST ['asal'];
$angkatan	=$_POST ['angkatan'];
$jurusan	=$_POST ['jurusan'];
$hp			=$_POST ['hp'];
$alamat		=$_POST ['alamat'];

$folder = "../admin/master_data/anggota/";
$folder2 = "../admin/master_data/anggota/";
$folder3 = "../admin/master_data/anggota/";
$upload_image = $_FILES['foto']['name'];
$upload_image2 = $_FILES['pictures']['name'];
$upload_image3 = $_FILES['gambar']['name'];
// tentukan ukuran width yang diharapkan
$width_size = 720;
// tentukan di mana image akan ditempatkan setelah diupload
$filesave = $folder . $upload_image;
$filesave2 = $folder2 . $upload_image2;
$filesave3 = $folder3 . $upload_image3;
move_uploaded_file($_FILES['foto']['tmp_name'], $filesave);
move_uploaded_file($_FILES['pictures']['tmp_name'], $filesave2);
move_uploaded_file($_FILES['gambar']['tmp_name'], $filesave3);
// menentukan nama image setelah dibuat
$rename_image = "foto_$no_induk_" .uniqid(rand()).".jpg";
$rename_image2 = "KTP_$no_induk_" .uniqid(rand()).".jpg";
$rename_image3 = "AKTA_$no_induk_" .uniqid(rand()).".jpg";

$resize_image = $folder.$rename_image;
$resize_image2 = $folder.$rename_image2;
$resize_image3 = $folder.$rename_image3;
// mendapatkan ukuran width dan height dari image
list( $width, $height ) = getimagesize($filesave);
list( $width2, $height2 ) = getimagesize($filesave2);
list( $width3, $height3 ) = getimagesize($filesave3);
// mendapatkan nilai pembagi supaya ukuran skala image yang dihasilkan sesuai dengan aslinya
$k = $width / $width_size;
$k2 = $width2 / $width_size;
$k3 = $width3 / $width_size;
// menentukan width yang baru
$newwidth = $width / $k;
$newwidth2 = $width2 / $k2;
$newwidth3 = $width3 / $k3;
// menentukan height yang baru
$newheight = $height / $k;
$newheight2 = $height2 / $k2;
$newheight3 = $height3 / $k3;
// fungsi untuk membuat image yang baru
$thumb = imagecreatetruecolor($newwidth, $newheight);
$thumb2 = imagecreatetruecolor($newwidth2, $newheight2);
$thumb3 = imagecreatetruecolor($newwidth3, $newheight3);

$source = imagecreatefromjpeg($filesave);
$source2 = imagecreatefromjpeg($filesave2);
$source3 = imagecreatefromjpeg($filesave3);
// men-resize image yang baru
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
imagecopyresized($thumb2, $source2, 0, 0, 0, 0, $newwidth2, $newheight2, $width2, $height2);
imagecopyresized($thumb3, $source3, 0, 0, 0, 0, $newwidth3, $newheight3, $width3, $height3);
// menyimpan image yang baru
imagejpeg($thumb, $resize_image);
imagejpeg($thumb2, $resize_image2);
imagejpeg($thumb3, $resize_image3);

imagedestroy($thumb);
imagedestroy($thumb2);
imagedestroy($thumb3);

imagedestroy($source);
imagedestroy($source2);
imagedestroy($source3);

unlink($filesave);
unlink($filesave2);
unlink($filesave3);
//echo 'Image Asli : <img src="' . $filesave . '" /><br />';
//echo 'Image setelah di resize : <img src="' . $resize_image . '" />';
$insert_1=mysqli_query($koneksi, "INSERT INTO tabel_anggota VALUES ('','ppdb','$no_induk','$angkatan','$nama','','','$kotalahir','$ttl','$jk','$jurusan','$asal')");
$insert_2=mysqli_query($koneksi, "INSERT INTO tabel_alamat VALUES ('','$no_induk','$alamat','','','','','$hp','','','','','','')");
$insert_3=mysqli_query($koneksi, "INSERT INTO tabel_data_anggota VALUES ('','$no_induk','$rename_image','','','$rename_image2','$rename_image3','','','')");
?><script language="JavaScript">document.location='../?menu=ppdb'</script>
