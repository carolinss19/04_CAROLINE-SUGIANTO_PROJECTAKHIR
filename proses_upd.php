<?php
include 'koneksi.php';

// Ambil data form
$id = $_POST['id'];
$nama = mysqli_real_escape_string($koneksi, $_POST['nama_lengkap']);
$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
$harga = mysqli_real_escape_string($koneksi, $_POST['harga']);
$no_telp = mysqli_real_escape_string($koneksi, $_POST['no_telp']);

// Cek apakah user memilih file baru
if(isset($_FILES['properti']) && $_FILES['properti']['name'] != "") {
    $properti = $_FILES['properti']['name'];
    $tmp_name = $_FILES['properti']['tmp_name'];

    // Pindahkan file baru
    move_uploaded_file($tmp_name, "gambar/".$properti);

    // Update database termasuk properti baru
    $sql = "UPDATE upload SET 
        nama_lengkap='$nama',
        email='$email',
        properti='$properti',
        alamat='$alamat',
        harga='$harga',
        no_telp='$no_telp'
        WHERE id='$id'";
} else {
    // Update tanpa mengubah properti (gambar lama tetap)
    $sql = "UPDATE upload SET 
        nama_lengkap='$nama',
        email='$email',
        alamat='$alamat',
        harga='$harga',
        no_telp='$no_telp'
        WHERE id='$id'";
}

// Jalankan query
mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));

// Redirect
header("location:display_upl.php");
?>
