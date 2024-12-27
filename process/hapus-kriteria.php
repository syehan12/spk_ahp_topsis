<?php
session_start();
include 'koneksi.php';

if (isset($_GET['id_kiteria'])) {
    $id_kiteria = $_GET['id_kiteria'];
    $result = mysqli_query($connect, "DELETE FROM kriteria WHERE id_kiteria = '$id_kiteria'");

    if ($result) {
        echo "<script>
                alert('Berhasil Menghapus Data');
                window.location.href = '../kriteria-page.php';
              </script>";
    } else {
        echo "<script>alert('Gagal Menghapus');</script>";
    }
} else {
    echo "<h1>!!!</h1>";
}
