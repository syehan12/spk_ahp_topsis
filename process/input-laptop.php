<?php
include("koneksi.php");

if (isset($_POST['submit'])) {
    // Mengambil data dari form
    $nama_laptop = $_POST['nama_laptop'];
    $display_laptop = $_POST['display_laptop'];
    $procesor_laptop = $_POST['procesor_laptop'];
    $memori_laptop = $_POST['memori_laptop'];
    $penyimpanan_laptop = $_POST['penyimpanan_laptop'];
    $berat_laptop = $_POST['berat_laptop'];

    // Proses upload file
    $target_dir = "../images/laptop/";
    $profile_name = basename($_FILES["profile"]["name"]);
    $target_file = $target_dir . $profile_name;
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check for upload errors
    if ($_FILES["profile"]["error"] != 0) {
        echo "Sorry, there was an error uploading your file.";
        $uploadOk = 0;
    }

    // Check if image file is an actual image or fake image
    $check = getimagesize($_FILES["profile"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["profile"]["size"] > 50000000) { // 50MB limit
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file)) {
            // File berhasil diupload
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // Generate ID laptop secara acak
    $random_number = mt_rand(10, 100); // Generate a random number between 10 and 100
    $laptop_id = 'LAP' . $random_number;

    // Query untuk memasukkan data ke dalam tabel laptop
    $sql = "INSERT INTO laptop (laptop_id, nama_laptop, display_laptop, procesor_laptop, memori_laptop, penyimpanan_laptop, berat_laptop, profile) 
            VALUES ('$laptop_id', '$nama_laptop', '$display_laptop', '$procesor_laptop', '$memori_laptop', '$penyimpanan_laptop', '$berat_laptop', '$profile_name')";

    $query = mysqli_query($connect, $sql);

    if ($query) {
        echo "<script>
                alert('Berhasil Tambah Data');
                window.location.href = '../laptop-page.php';
              </script>";
    } else {
        echo "Gagal memasukkan data: " . mysqli_error($connect);
    }

    mysqli_close($connect);
} else {
    echo "Form tidak disubmit dengan benar";
}
