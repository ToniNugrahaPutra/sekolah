<?php
session_start();
unset($_SESSION['nm_user']); unset($_SESSION['akses']);
unset($_SESSION['nm_toko']); unset($_SESSION['status']);
session_destroy(); header('location:../../?menu=home');
?>