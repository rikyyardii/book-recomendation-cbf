<?php
session_start();

// ... jika belum login, alihkan ke halaman login
if (!isset($_SESSION['admin_name'])) {
    header('location:..\..\login\login_form');
    exit();
}


include '../../../database/config.php';

$query = "SELECT * FROM kategori";

$hasil = mysqli_query($db, $query);

// ... menampung semua data kategori
$data_kategori = array();

// ... tiap baris dari hasil query dikumpulkan ke $data_kategori
while ($row = mysqli_fetch_assoc($hasil)) {
    $data_kategori[] = $row;
}


// ... lanjut di tampilan
