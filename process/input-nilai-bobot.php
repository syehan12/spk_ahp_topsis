<?php
include('koneksi.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $laptop_id = $_POST['laptop_id'];
    $nama_laptop = mysqli_real_escape_string($connect, $_POST['nama_laptop']);
    $display_nilai = mysqli_real_escape_string($connect, $_POST['display_nilai']);
    $proc_nilai = mysqli_real_escape_string($connect, $_POST['proc_nilai']);
    $memo_nilai = mysqli_real_escape_string($connect, $_POST['memo_nilai']);
    $penyim_nilai = mysqli_real_escape_string($connect, $_POST['penyim_nilai']);
    $berat_nilai = mysqli_real_escape_string($connect, $_POST['berat_nilai']);


    $query = "UPDATE laptop SET nama_laptop = '$nama_laptop', display_nilai = '$display_nilai', proc_nilai = '$proc_nilai', memo_nilai = '$memo_nilai', penyim_nilai = '$penyim_nilai', berat_nilai = '$berat_nilai' WHERE laptop_id = '$laptop_id'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "<script>
                alert('Berhasil mengedit data');
                window.location.href = '../input-page.php';
              </script>";
    } else {
        echo "<script>alert('Gagal mengedit data: " . mysqli_error($connect) . "'); window.location.href = '../form_page.php';</script>";
    }
} else {
    echo "<script>alert('Form Tidak disubmit dengan benar'); window.location.href = '../category.php';</script>";
}
