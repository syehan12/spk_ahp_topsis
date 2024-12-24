<?php
include('koneksi.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $laptop_id = $_POST['laptop_id'];
    $nama_laptop = mysqli_real_escape_string($connect, $_POST['nama_laptop']);
    $bat = mysqli_real_escape_string($connect, $_POST['bat']);
    $proc = mysqli_real_escape_string($connect, $_POST['proc']);
    $memo = mysqli_real_escape_string($connect, $_POST['memo']);
    $penyim = mysqli_real_escape_string($connect, $_POST['penyim']);
    $berat = mysqli_real_escape_string($connect, $_POST['berat']);


    $query = "UPDATE laptop SET nama_laptop = '$nama_laptop', bat = '$bat', proc = '$proc', memo = '$memo', penyim = '$penyim', berat = '$berat' WHERE laptop_id = '$laptop_id'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "<script>
                alert('Berhasil mengedit data');
                window.location.href = '../laptop-input-page.php';
              </script>";
    } else {
        echo "<script>alert('Gagal mengedit data: " . mysqli_error($connect) . "'); window.location.href = '../form_page.php';</script>";
    }
} else {
    echo "<script>alert('Form Tidak disubmit dengan benar'); window.location.href = '../category.php';</script>";
}
