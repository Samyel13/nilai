<?php
if(isset($_POST['simpan'])) {
    include_once "koneksi.php";
    $nama_siswa = $_POST['nama_siswa'];
    $kapasitas = $_POST['kapasitas'];
    $terisi = $_POST['terisi'];

    $sql = "INSERT INTO siswa SET 
    nama_siswa='$nama_siswa',
    kapasitas='$kapasitas',
    terisi='$terisi'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header('Location: index.php?n=siswa');
    } else {
        include 'index.php?n=siswa';
        echo '<script language="JavaScript">';
        echo 'alert("Data gagal ditambahkan")';
        echo '<script>';
    } 
} else {
    echo '<script>window.history.back()</script>';
}