<?php
if(isset($_GET['id'])) {
    include_once "koneksi.php";
    $id = $_GET['id'];
    $sql = "DELETE from jurusan WHERE id='$id'";
    $query = mysqli_query($koneksi, $sql);
    if ($query) {
        //var_dump($sql);
        header('Location: index.php?n=jurusan');
    } else {
        include 'index.php?n=jurusan';
        echo '<script language="JavaScript">';
        echo 'alert("Data gagal dihapus")';
        echo '<script>';
    } 
} else {
    echo '<script>window.history.back()</script>';
}