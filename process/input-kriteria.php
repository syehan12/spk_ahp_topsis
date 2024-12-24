<?php
include('koneksi.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get and sanitize the form inputs
    $kriteria_1 = mysqli_real_escape_string($connect, $_POST['kriteria_1']);
    $kriteria_2 = mysqli_real_escape_string($connect, $_POST['kriteria_2']);
    $kriteria_value = mysqli_real_escape_string($connect, $_POST['kriteria_value']);
    $description = mysqli_real_escape_string($connect, $_POST['description']);

    // Convert fractional strings to their decimal equivalents
    switch ($kriteria_value) {
        case '1/3':
            $kriteria_value = 1 / 3;
            break;
        case '1/5':
            $kriteria_value = 1 / 5;
            break;
        case '1/7':
            $kriteria_value = 1 / 7;
            break;
        case '1/9':
            $kriteria_value = 1 / 9;
            break;
        case '1/2':
            $kriteria_value = 1 / 2;
            break;
        default:
            // Ensure the value is numeric for other cases
            $kriteria_value = is_numeric($kriteria_value) ? $kriteria_value : 0;
            break;
    }

    // Check if kriteria_1 and kriteria_2 are the same
    if ($kriteria_1 === $kriteria_2) {
        echo "<script>
                alert('Kriteria 1 dan Kriteria 2 tidak boleh sama.');
                window.location.href = '../form_page.php';
              </script>";
        exit;
    }

    // Insert the data into the database
    $query = "INSERT INTO kriteria (kriteria_1, kriteria_2, kriteria_value, description) 
              VALUES ('$kriteria_1', '$kriteria_2', '$kriteria_value', '$description')";
    $result = mysqli_query($connect, $query);

    // Check if the query was successful
    if ($result) {
        echo "<script>
                alert('Berhasil menambahkan kriteria.');
                window.location.href = '../kriteria-page.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal menambahkan kriteria: " . mysqli_error($connect) . "');
                window.location.href = '../kriteria-page.php';
              </script>";
    }
} else {
    echo "<script>
            alert('Form tidak disubmit dengan benar.');
            window.location.href = '../kriteria-page.php';
          </script>";
}
