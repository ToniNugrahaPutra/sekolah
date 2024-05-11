<?php
include("koneksi.php");    
// bukan id_loaksi tapi id, sesuai dari db karena awalnya seperti ini $query_max_id = mysqli_query($koneksi, "SELECT MAX(id_lokasi) as maxid FROM lokasi");
//kebanyakan error hanya kurang teliti
$query_max_id = mysqli_query($koneksi, "SELECT MAX(id) as maxid FROM lokasi");
$result = mysqli_fetch_array($query_max_id);
$maxid = $result['maxid'];
$uid = "UID";
$no_urut = substr($maxid, -3);
$new_urut = $no_urut + 1;
$id_lokasi = $uid . sprintf("%03s", $new_urut);

if(isset($_POST['tambah'])){
    $provinsi = $_POST['provinsi'];    
    $kota = $_POST['kota'];
    $kecamatan = $_POST['kecamatan'];
    $kelurahan = $_POST['kelurahan'];

    $query_insert = "INSERT INTO lokasi (id, prov, kab, kec, kel) VALUES ('$id_lokasi', '$provinsi', '$kota', '$kecamatan', '$kelurahan')";
    $insert = mysqli_query($koneksi, $query_insert);

    if ($insert) {
        header("Location: index.php"); // Pengalihan halaman jika penyimpanan berhasil
        exit; // Pastikan tidak ada output lain setelah header
    } else {
        echo "<script>alert('Proses penyimpanan gagal');</script>"; // Menampilkan pesan kesalahan jika penyimpanan gagal
        echo "<script>window.history.back();</script>"; // Kembali ke halaman sebelumnya jika penyimpanan gagal
        exit; // Pastikan tidak ada output lain setelah script
    }
}
?>
