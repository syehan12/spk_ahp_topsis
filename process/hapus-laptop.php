<?php
session_start();
include 'koneksi.php';

if (isset($_GET['laptop_id'])) {
    $laptop_id = $_GET['laptop_id'];
    $result = mysqli_query($connect, "DELETE FROM laptop WHERE laptop_id = '$laptop_id'");

    if ($result) {
        echo "<script>
                alert('Berhasil Menghapus Data');
                window.location.href = '../laptop-page.php';
              </script>";
    } else {
        echo "<script>alert('Gagal Menghapus');</script>";
    }
} else {
    echo "<h1>NGAPAIN WOI</h1>";
}
