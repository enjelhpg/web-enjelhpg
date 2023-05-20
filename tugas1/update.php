<?php
include 'koneksi.php';

$id = $_POST['id'];
$nip = $_POST['nip'];
$nama = $_POST['nama'];
$no =  $_POST['no_hp'];
$email = $_POST['email'];

mysqli_query($koneksi, "UPDATE pegawai SET id='$id', nip='$nip',
nama='$nama', no_hp='$no', email='$email' where id='$id'");

header ("location:index.php");
?>