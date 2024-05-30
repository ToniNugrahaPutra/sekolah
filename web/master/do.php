<?php
include('../admin/inc/koneksi.php');
error_reporting(0);
// var_dump($_FILES);
// die();

$id_member = $_POST['id_member'];
$wkt_daftar = $_POST['wkt_daftar'];
$petugas = $_POST['petugas'];
$tingkat = $_POST['tingkat'];
$nm_member = $_POST['nm_member'];
$jk = $_POST['jk'];
$nisn = $_POST['nisn'];
$nik = $_POST['nik'];
$no_kk = $_POST['no_kk'];
$lahir = $_POST['lahir'];
$ttl = $_POST['ttl'];
$agama = $_POST['agama'];
$almt = $_POST['almt'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$kelurahan = $_POST['kelurahan'];
$kecamatan = $_POST['kecamatan'];
$kota_kab = $_POST['kota_kab'];
$warga = $_POST['warga'];
$anak_ke = $_POST['anak_ke'];
$jml_sdr = $_POST['jml_sdr'];
$tb = $_POST['tb'];
$bb = $_POST['bb'];
$hp = $_POST['hp'];
$ayah = $_POST['ayah'];
$ttl_ayah = $_POST['ttl_ayah'];
$nik_ayah = $_POST['nik_ayah'];
$kerja_ayah = $_POST['kerja_ayah'];
$gaji_ayah = $_POST['gaji_ayah'];
$almt_ayah = $_POST['almt_ayah'];
$hp_ayah = $_POST['hp_ayah'];
$ibu = $_POST['ibu'];
$ttl_ibu = $_POST['ttl_ibu'];
$nik_ibu = $_POST['nik_ibu'];
$kerja_ibu = $_POST['kerja_ibu'];
$gaji_ibu = $_POST['gaji_ibu'];
$almt_ibu = $_POST['almt_ibu'];
$hp_ibu = $_POST['hp_ibu'];
$wali = $_POST['wali'];
$ttl_wali = $_POST['ttl_wali'];
$nik_wali = $_POST['nik_wali'];
$kerja_wali = $_POST['kerja_wali'];
$gaji_wali = $_POST['gaji_wali'];
$almt_wali = $_POST['almt_wali'];
$hp_wali = $_POST['hp_wali'];
$tgl_daftar = $_POST['tgl_daftar'];
$asal_sekolah = $_POST['asal_sekolah'];
$lulus = $_POST['lulus'];
$no_ijasah = $_POST['no_ijasah'];
$skhun = $_POST['skhun'];
$file_ijasah = $_POST['file_ijasah'];
$file_skhun = $_POST['file_skhun'];
$file_kk = $_POST['file_kk'];
$file_ktp = $_POST['file_ktp'];
$file_akta_lahir = $_POST['file_akta_lahir'];
$file_ktp_ayah = $_POST['file_ktp_ayah'];
$file_ktp_ibu = $_POST['file_ktp_ibu'];

$ppdbijasah = "../admin/master_data/ppdb/ijasah";
$ppdbskhun = "../admin/master_data/ppdb/skhun";
$ppdbkk = "../admin/master_data/ppdb/kk";
$ppdbktp = "../admin/master_data/ppdb/ktp";
$ppdbakta_lahir = "../admin/master_data/ppdb/akta_lahir";
$ppdbktp_ayah = "../admin/master_data/ppdb/ktp_ayah";
$ppdbktp_ibu = "../admin/master_data/ppdb/ktp_ibu";

$upload_ijasah = $_FILES['file_ijasah']['name'];
$upload_skhun = $_FILES['file_skhun']['name'];
$upload_kk = $_FILES['file_kk']['name'];
$upload_ktp = $_FILES['file_ktp']['name'];
$upload_akta_lahir = $_FILES['file_akta_lahir']['name'];
$upload_ktp_ayah = $_FILES['file_ktp_ayah']['name'];
$upload_ktp_ibu = $_FILES['file_ktp_ibu']['name'];

// tentukan ukuran width yang diharapkan
$width_size = 720;
// Menyimpan file yang diunggah ke direktori yang ditentukan
move_uploaded_file($_FILES['file_ijasah']['tmp_name'], $ppdbijasah . "/" . $upload_ijasah);
move_uploaded_file($_FILES['file_skhun']['tmp_name'], $ppdbskhun . "/" . $upload_skhun);
move_uploaded_file($_FILES['file_kk']['tmp_name'], $ppdbkk . "/" . $upload_kk);
move_uploaded_file($_FILES['file_ktp']['tmp_name'], $ppdbktp . "/" . $upload_ktp);
move_uploaded_file($_FILES['file_akta_lahir']['tmp_name'], $ppdbakta_lahir . "/" . $upload_akta_lahir);
move_uploaded_file($_FILES['file_ktp_ayah']['tmp_name'], $ppdbktp_ayah . "/" . $upload_ktp_ayah);
move_uploaded_file($_FILES['file_ktp_ibu']['tmp_name'], $ppdbktp_ibu . "/" . $upload_ktp_ibu);

// Menentukan nama file gambar setelah dibuat
$rename_image_ijasah = "ijasah" . uniqid(rand()) . ".jpg";
$rename_image_skhun = "skhun" . uniqid(rand()) . ".jpg";
$rename_image_kk = "kk" . uniqid(rand()) . ".jpg";
$rename_image_ktp = "ktp" . uniqid(rand()) . ".jpg";
$rename_image_akta_lahir = "akta_lahir" . uniqid(rand()) . ".jpg";
$rename_image_ktp_ayah = "ktp_ayah" . uniqid(rand()) . ".jpg";
$rename_image_ktp_ibu = "ktp_ibu" . uniqid(rand()) . ".jpg";

// Menyiapkan path lengkap untuk file gambar baru
$resize_file_ijasah = $ppdbijasah . "/" . $rename_image_ijasah;
$resize_file_skhun = $ppdbskhun . "/" . $rename_image_skhun;
$resize_file_kk = $ppdbkk . "/" . $rename_image_kk;
$resize_file_ktp = $ppdbktp . "/" . $rename_image_ktp;
$resize_file_akta_lahir = $ppdbakta_lahir . "/" . $rename_image_akta_lahir;
$resize_file_ktp_ayah = $ppdbktp_ayah . "/" . $rename_image_ktp_ayah;
$resize_file_ktp_ibu = $ppdbktp_ibu . "/" . $rename_image_ktp_ibu;

// Memuat gambar sumber
$source_ijasah = imagecreatefromjpeg($ppdbijasah . "/" . $upload_ijasah);
$source_skhun = imagecreatefromjpeg($ppdbskhun . "/" . $upload_skhun);
$source_kk = imagecreatefromjpeg($ppdbkk . "/" . $upload_kk);
$source_ktp = imagecreatefromjpeg($ppdbktp . "/" . $upload_ktp);
$source_akta_lahir = imagecreatefromjpeg($ppdbakta_lahir . "/" . $upload_akta_lahir);
$source_ktp_ayah = imagecreatefromjpeg($ppdbktp_ayah . "/" . $upload_ktp_ayah);
$source_ktp_ibu = imagecreatefromjpeg($ppdbktp_ibu . "/" . $upload_ktp_ibu);

// var_dump($ppdbijasah);
// var_dump($upload_ijasah);
// var_dump($source_ijasah);
// die();
// Mendapatkan ukuran gambar sumber

$width_ijasah = imagesx($source_ijasah);
$height_ijasah = imagesy($source_ijasah);
$width_skhun = imagesx($source_skhun);
$height_skhun = imagesy($source_skhun);
$width_kk = imagesx($source_kk);
$height_kk = imagesy($source_kk);
$width_ktp = imagesx($source_ktp);
$height_ktp = imagesy($source_ktp);
$width_akta_lahir = imagesx($source_akta_lahir);
$height_akta_lahir = imagesy($source_akta_lahir);
$width_ktp_ayah = imagesx($source_ktp_ayah);
$height_ktp_ayah = imagesy($source_ktp_ayah);
$width_ktp_ibu = imagesx($source_ktp_ibu);
$height_ktp_ibu = imagesy($source_ktp_ibu);

// Membuat dan menghitung rasio untuk resize
$ratio_ijasah = $width_ijasah / $width_size;
$ratio_skhun = $width_skhun / $width_size;
$ratio_kk = $width_kk / $width_size;
$ratio_ktp = $width_ktp / $width_size;
$ratio_akta_lahir = $width_akta_lahir / $width_size;
$ratio_ktp_ayah = $width_ktp_ayah / $width_size;
$ratio_ktp_ibu = $width_ktp_ibu / $width_size;

$new_width_ijasah = $width_size;
$new_height_ijasah = $height_ijasah / $ratio_ijasah;
$new_width_skhun = $width_size;
$new_height_skhun = $height_skhun / $ratio_skhun;
$new_width_kk = $width_size;
$new_height_kk = $height_kk / $ratio_kk;
$new_width_ktp = $width_size;
$new_height_ktp = $height_ktp / $ratio_ktp;
$new_width_akta_lahir = $width_size;
$new_height_akta_lahir = $height_akta_lahir / $ratio_akta_lahir;
$new_width_ktp_ayah = $width_size;
$new_height_ktp_ayah = $height_ktp_ayah / $ratio_ktp_ayah;
$new_width_ktp_ibu = $width_size;
$new_height_ktp_ibu = $height_ktp_ibu / $ratio_ktp_ibu;

// Membuat gambar baru dengan ukuran yang diinginkan
$new_image_ijasah = imagecreatetruecolor($new_width_ijasah, $new_height_ijasah);
$new_image_skhun = imagecreatetruecolor($new_width_skhun, $new_height_skhun);
$new_image_kk = imagecreatetruecolor($new_width_kk, $new_height_kk);
$new_image_ktp = imagecreatetruecolor($new_width_ktp, $new_height_ktp);
$new_image_akta_lahir = imagecreatetruecolor($new_width_akta_lahir, $new_height_akta_lahir);
$new_image_ktp_ayah = imagecreatetruecolor($new_width_ktp_ayah, $new_height_ktp_ayah);
$new_image_ktp_ibu = imagecreatetruecolor($new_width_ktp_ibu, $new_height_ktp_ibu);

// Menyalin gambar sumber dan menyimpan gambar baru
imagecopyresampled($new_image_ijasah, $source_ijasah, 0, 0, 0, 0, $new_width_ijasah, $new_height_ijasah, $width_ijasah, $height_ijasah);
imagecopyresampled($new_image_skhun, $source_skhun, 0, 0, 0, 0, $new_width_skhun, $new_height_skhun, $width_skhun, $height_skhun);
imagecopyresampled($new_image_kk, $source_kk, 0, 0, 0, 0, $new_width_kk, $new_height_kk, $width_kk, $height_kk);
imagecopyresampled($new_image_ktp, $source_ktp, 0, 0, 0, 0, $new_width_ktp, $new_height_ktp, $width_ktp, $height_ktp);
imagecopyresampled($new_image_akta_lahir, $source_akta_lahir, 0, 0, 0, 0, $new_width_akta_lahir, $new_height_akta_lahir, $width_akta_lahir, $height_akta_lahir);
imagecopyresampled($new_image_ktp_ayah, $source_ktp_ayah, 0, 0, 0, 0, $new_width_ktp_ayah, $new_height_ktp_ayah, $width_ktp_ayah, $height_ktp_ayah);
imagecopyresampled($new_image_ktp_ibu, $source_ktp_ibu, 0, 0, 0, 0, $new_width_ktp_ibu, $new_height_ktp_ibu, $width_ktp_ibu, $height_ktp_ibu);

// Menyimpan gambar baru dalam format JPEG
imagejpeg($new_image_ijasah, $resize_file_ijasah);
imagejpeg($new_image_skhun, $resize_file_skhun);
imagejpeg($new_image_kk, $resize_file_kk);
imagejpeg($new_image_ktp, $resize_file_ktp);
imagejpeg($new_image_akta_lahir, $resize_file_akta_lahir);
imagejpeg($new_image_ktp_ayah, $resize_file_ktp_ayah);
imagejpeg($new_image_ktp_ibu, $resize_file_ktp_ibu);

// Membersihkan memori
imagedestroy($source_ijasah);
imagedestroy($source_skhun);
imagedestroy($source_kk);
imagedestroy($source_ktp);
imagedestroy($source_akta_lahir);
imagedestroy($source_ktp_ayah);
imagedestroy($source_ktp_ibu);
imagedestroy($new_image_ijasah);
imagedestroy($new_image_skhun);
imagedestroy($new_image_kk);
imagedestroy($new_image_ktp);
imagedestroy($new_image_akta_lahir);
imagedestroy($new_image_ktp_ayah);
imagedestroy($new_image_ktp_ibu);

// Menghapus file sumber setelah proses resize selesai
unlink($ppdbijasah . "/" . $upload_ijasah);
unlink($ppdbskhun . "/" . $upload_skhun);
unlink($ppdbkk . "/" . $upload_kk);
unlink($ppdbktp . "/" . $upload_ktp);
unlink($ppdbakta_lahir . "/" . $upload_akta_lahir);
unlink($ppdbktp_ayah . "/" . $upload_ktp_ayah);
unlink($ppdbktp_ibu . "/" . $upload_ktp_ibu);

// echo 'Image Asli : <img src="' . $source_ijasah . '" /><br />';
// echo 'Image setelah di resize : <img src="' . $new_image_ijasah . '" />';
// die();

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

// Query INSERT
$insert_1 = mysqli_query($koneksi, "INSERT INTO tabel_siswa_baru 
    (id_member, wkt_daftar, petugas, tingkat, nm_member, jk, nisn, nik, no_kk, lahir, ttl, agama, almt, rt, rw, kelurahan, kecamatan, kota_kab, warga, anak_ke, jml_sdr, tb, bb, hp, ayah, ttl_ayah, nik_ayah, kerja_ayah, gaji_ayah, almt_ayah, hp_ayah, ibu, ttl_ibu, nik_ibu, kerja_ibu, gaji_ibu, almt_ibu, hp_ibu, wali, ttl_wali, nik_wali, kerja_wali, gaji_wali, almt_wali, hp_wali, tgl_daftar, asal_sekolah, lulus, no_ijasah, skhun, file_ijasah, file_skhun, file_kk, file_ktp, file_akta_lahir, file_ktp_ayah, file_ktp_ibu) 
    VALUES ('$id_member', '$wkt_daftar', '$petugas', '$tingkat', '$nm_member', '$jk', '$nisn', '$nik', '$no_kk', '$lahir', '$ttl', '$agama', '$almt', '$rt', '$rw', '$kelurahan', '$kecamatan', '$kota_kab', '$warga', '$anak_ke', '$jml_sdr', '$tb', '$bb', '$hp', '$ayah', '$ttl_ayah', '$nik_ayah', '$kerja_ayah', '$gaji_ayah', '$almt_ayah', '$hp_ayah', '$ibu', '$ttl_ibu', '$nik_ibu', '$kerja_ibu', '$gaji_ibu', '$almt_ibu', '$hp_ibu', '$wali', '$ttl_wali', '$nik_wali', '$kerja_wali', '$gaji_wali', '$almt_wali', '$hp_wali', '$tgl_daftar', '$asal_sekolah', '$lulus', '$no_ijasah', '$skhun', '$file_ijasah', '$file_skhun', '$file_kk', '$file_ktp', '$file_akta_lahir', '$file_ktp_ayah', '$file_ktp_ibu')");

// Periksa keberhasilan operasi INSERT
if ($insert_1) {
    echo "Data berhasil disimpan.";
} else {
    echo "Error: " . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>
<script language="JavaScript">document.location='../?menu=ppdb'</script>
