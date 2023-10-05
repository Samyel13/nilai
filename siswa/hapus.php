<?php
if(isset($_GET['id'])) {
    include_once "koneksi.php";
    $id = $_GET['id'];
    $sql = "DELETE from siswa WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        //var_dump($sql);
        header('Location: index.php?n=siswa');
    } else {
        include 'index.php?n=siswa';
        echo '<script language="JavaScript">';
        echo 'alert("Data gagal dihapus")';
        echo '<script>';
    } 
} else {
    echo '<script>window.history.back()</script>';
}