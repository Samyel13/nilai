<?php
if(isset($_POST['update'])) {
    include_once "koneksi.php";
    $id     =$_POST['id'];
    $nama_jurusan = $_POST['nama_jurusan'];
    $kapasitas = $_POST['kapasitas'];
    $terisi = $_POST['terisi'];

    $sql = "UPDATE jurusan SET 
    nama_jurusan='$nama_jurusan',
    kapasitas='$kapasitas',
    terisi='$terisi' WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        header('Location: index.php?n=jurusan');
    } else {
        include 'index.php?n=jurusan';
        echo '<script language="JavaScript">';
        echo 'alert("Data gagal ditambahkan")';
        echo '<script>';
    } 
} else {
    echo '<script>window.history.back()</script>';
}