<?php
include 'koneksi.php';

// menyimpan data kedalam variabel
$nim    = $POST['nim'];
$nama    = $POST['nama'];
$jurusan    = $POST['jurusan'];
$jenis_kelamin    = $POST['jenis_kelamin'];
$alamat    = $POST['alamat'];

// query SQL untuk insert data 
$query="INSERT INTO mahasiswa SET nim='$nim',nama='$nama',jurusan='$jurusan',jenis_kelamin='$jenis_kelamin',alamat='$alamat'";
mysqli_query($koneksi, $query);

// mengalihkan ke halaman tampildata.php
header("location:tampildata.php");
?>