<?php
$n = (isset($_GET['s'])) ? $_GET['s'] : 'tampil';
switch ($n) {
    case 'tampil';
    default;
        include 'siswa/tampil.php';
        break;
    case 'tambah';
        include 'siswa/tambah.php';
        break;
    case 'simpan';
        include 'siswa/simpan.php';
        break;
    case 'edit';
        include 'edit.php';
        break;
    case 'update';
        include 'update.php';
        break;
    case 'hapus';
        include 'hapus.php';
        break;
}
