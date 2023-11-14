<?php
include 'proses.php';

$nama_mahasiswa = $_POST['nama']
$nim = $_POST['nim'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$tlp = $_POST['tlpn'];
$agama = $_POST['agama'];



mysqli_query($penghubung, "INSERT INTO mahasiswa VALUES ('$nama',' $nim,',$jenis_kelamin','$alamat','$tlpn $agama,',)");


header("location:index.php");