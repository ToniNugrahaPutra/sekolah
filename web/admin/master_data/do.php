<?php
include('../inc/koneksi.php');
error_reporting(0);
$kategori	=$_POST ['kat'];
$judul		=$_POST ['judul'];
$ket		=$_POST ['ket'];
$hrg		=$_POST ['hrg'];
$folder = "images/";
$upload_image = $_FILES['gambar']['name'];
// tentukan ukuran width yang diharapkan
$width_size = 1920;
// tentukan di mana image akan ditempatkan setelah diupload
$filesave = $folder . $upload_image;
move_uploaded_file($_FILES['gambar']['tmp_name'], $filesave);
// menentukan nama image setelah dibuat
$rename_image = "tnt_" . uniqid(rand()) . ".jpg";
$resize_image = $folder.$rename_image;
// mendapatkan ukuran width dan height dari image
list( $width, $height ) = getimagesize($filesave);
// mendapatkan nilai pembagi supaya ukuran skala image yang dihasilkan sesuai dengan aslinya
$k = $width / $width_size;
// menentukan width yang baru
$newwidth = $width / $k;
// menentukan height yang baru
$newheight = $height / $k;
// fungsi untuk membuat image yang baru
$thumb = imagecreatetruecolor($newwidth, $newheight);
$source = imagecreatefromjpeg($filesave);
// men-resize image yang baru
imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);
// menyimpan image yang baru
imagejpeg($thumb, $resize_image);
imagedestroy($thumb);
imagedestroy($source);
unlink($filesave);
//echo 'Image Asli : <img src="' . $filesave . '" /><br />';
//echo 'Image setelah di resize : <img src="' . $resize_image . '" />';
mysqli_query($koneksi, "INSERT INTO tabel_konten VALUES ('','$kategori','$judul','$rename_image','$ket','$hrg')");
?><script language="JavaScript">document.location='../?menu=home'</script>
