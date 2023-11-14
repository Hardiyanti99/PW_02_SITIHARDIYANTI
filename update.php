<?php
include 'proses.php'; // Sertakan berkas koneksi database Anda

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $nim = $_POST['nim'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $tlpn = $_POST['tlpn'];
    $agama = $_POST['agama'];

    // Lakukan query UPDATE untuk mengubah data dalam tabel 'mahasiswa'
    $query = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', alamat = '$alamat', tlpn = '$tlpn' WHERE nim = '$id'";
    $result = mysqli_query($penghubung, $query);

    if ($result) {
        // Jika pengeditan berhasil, alihkan kembali ke halaman awal atau halaman lain yang diinginkan
        header('Location: index.php'); // Ganti index.php dengan halaman yang sesuai
        exit;
    } else {
        // Jika terjadi kesalahan saat mengedit
        echo "Error: " . mysqli_error($penghubung);
    }
} else {
    echo "Akses tidak sah.";
}
?>
