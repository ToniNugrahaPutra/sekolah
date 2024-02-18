<?php
session_start();
include('../inc/koneksi.php');
if (isset($_POST['button_login'])) {
    $nm_user = $_POST['nm_user'];
    $password_digunakan = $_POST['password'];
    $query_cek_user = "SELECT * FROM tabel_user WHERE nm_user='" . $nm_user . "'";
    $cek_user = mysqli_query($koneksi, $query_cek_user);
    $count = mysqli_num_rows($cek_user);
    if ($count > 0) {
        $user = mysqli_fetch_array($cek_user);
        $nm_user = $user['nm_user'];
        $tipe = $user['tipe'];
        $password_database = $user['password'];
        if ($password_database == md5($password_digunakan)) {
            $_SESSION['nm_user'] = $nm_user;
            $_SESSION['akses'] = $akses;
            header('location:../?menu=home');
        } else {
            header('location:login.php');
        }
    } else {
        header('location:login.php');
    }
} else {
    header('location:login.php');
}
