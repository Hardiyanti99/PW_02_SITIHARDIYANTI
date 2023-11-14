<?php
$penghubung = mysqli_connect("localhost", "root", "", "akademik");

// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi Database Gagal: " . mysqli_connect_error();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari formulir
    $nama_mahasiswa = $_POST['nama'];
    $nim = $_POST["nim"];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $tlpn = $_POST['tlpn'];
    $agama = $_POST['agama'];

    // Query SQL untuk menyimpan data
    $query = "INSERT INTO mahasiswa (nama, nim, jenis_kelamin, alamat, tlpn, agama) VALUES ('$nama_mahasiswa', '$nim', '$jenis_kelamin', '$alamat','$tlpn','$agama')";

    if (mysqli_query($penghubung, $query)) {
        // Data berhasil disimpan, arahkan kembali ke halaman formulir
        header("Location: index.php");
        exit;
    } else {
        // Kesalahan saat menyimpan data
        echo "Terjadi kesalahan: " . mysqli_error($penghubung);
    }
}
?>
