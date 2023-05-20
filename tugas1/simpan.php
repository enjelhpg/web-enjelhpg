<?php
include 'koneksi.php';

$id = $_POST['id'];
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$no = $_POST['no_hp'];
$email = $_POST['email'];

mysqli_query($koneksi, "INSERT INTO pegawai VALUES ('$id','$nip','$nama','$no','$email')");
header("location:index.php");
?>