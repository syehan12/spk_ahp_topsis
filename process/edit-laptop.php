<?php
include('koneksi.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nama_laptop = mysqli_real_escape_string($connect, $_POST['nama_laptop']);
    $display_laptop = mysqli_real_escape_string($connect, $_POST['display_laptop']);
    $procesor_laptop = mysqli_real_escape_string($connect, $_POST['procesor_laptop']);
    $memori_laptop = mysqli_real_escape_string($connect, $_POST['memori_laptop']);
    $penyimpanan_laptop = mysqli_real_escape_string($connect, $_POST['penyimpanan_laptop']);
    $berat_laptop = mysqli_real_escape_string($connect, $_POST['berat_laptop']);
    $laptop_id = mysqli_real_escape_string($connect, $_POST['laptop_id']);


    // Proses upload file
    $query = "UPDATE laptop SET 
                nama_laptop = '$nama_laptop', 
                display_laptop = '$display_laptop', 
                procesor_laptop = '$procesor_laptop', 
                memori_laptop = '$memori_laptop', 
                penyimpanan_laptop = '$penyimpanan_laptop', 
                berat_laptop = '$berat_laptop'
                WHERE laptop_id = '$laptop_id'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "<script>
                alert('Berhasil mengedit alternatif laptop');
                window.location.href = '../laptop-page.php';
              </script>";
    } else {
        echo "<script>alert('Gagal mengedit alternatif laptop: " . mysqli_error($connect) . "'); window.location.href = '../form_page.php';</script>";
    }
} else {
    echo "<script>alert('Form Tidak disubmit dengan benar'); window.location.href = '../category.php';</script>";
}
