<?php
// Include koneksi database
include('koneksi.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve data from the POST request
    $kriteria_1 = mysqli_real_escape_string($connect, $_POST['kriteria_1']);
    $kriteria_2 = mysqli_real_escape_string($connect, $_POST['kriteria_2']);
    $kriteria_value = mysqli_real_escape_string($connect, $_POST['kriteria_value']);
    $description = mysqli_real_escape_string($connect, $_POST['description']);
    $id_kiteria = mysqli_real_escape_string($connect, $_POST['id_kiteria']); // ID Kriteria yang di-edit

    // SQL query to update the kriteria data
    $query = "UPDATE kriteria SET 
                kriteria_1 = '$kriteria_1', 
                kriteria_2 = '$kriteria_2', 
                kriteria_value = '$kriteria_value', 
                description = '$description' 
              WHERE id_kiteria = '$id_kiteria'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "<script>
                alert('Berhasil mengedit kriteria');
                window.location.href = '../edit-page.php';
              </script>";
    } else {
        echo "<script>alert('Gagal mengedit kriteria: " . mysqli_error($connect) . "'); window.location.href = '../form_page.php';</script>";
    }
} else {
    echo "<script>alert('Form Tidak disubmit dengan benar'); window.location.href = '../category.php';</script>";
}
