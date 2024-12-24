<?php
include('koneksi.php');
require '../vendor/autoload.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;
// instantiate and use the dompdf class
$dompdf = new Dompdf();

// Encode images to base64
$logo1_path = '../images/logo.png'; // Ubah path ini sesuai lokasi gambar

if (file_exists($logo1_path)) {
    $logo1 = base64_encode(file_get_contents($logo1_path));
} else {
    die('Gambar tidak ditemukan. Pastikan path gambar benar.');
}

// Generate HTML content
$html = '
<center>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
    .header {
        width: 100%;
        margin-bottom: 20px;
        border-bottom: 1px solid black;
        padding-bottom: 10px;
        text-align: center;
    }

    .header img {
        width: 100px;
    }

    .info {
        text-align: center;
    }

    .info h1 {
        font-size: 20px;
    }

    .info h2 {
        font-size: 19px;
    }

    .info p {
        margin: 5px 0;
        font-size: 13px;
    }

    .table-container {
        margin-top: 20px;
        width: 100%;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        font-size: 10px; /* Mengubah ukuran font pada tabel */
    }

    .table-header {
        border: none;
    }

    .table-header td {
        border: none;
    }

    th, td {
        padding: 8px;
        text-align: center;
        vertical-align: middle;
    }

    .signature {
        width: 100%;
        display: flex;
        justify-content: flex-end;
        margin-top: 40px;
        margin-left: 250px;
    }

    .signature div {
        left:20px;
    }

    .table-data tr, th, td {
        border: 1px solid black;
    }
</style>
</head>
<body>
    <div class="header">
        <table class="table-header">
            <tr>
                <td><img src="data:image/png;base64,' . $logo1 . '" style="height: 70px; width: 70px;" alt="Logo 1"></td>
                <td class="info">
                    <h1>Sistem Pakar Laptop</h1>
                </td>
                <td><img src="data:image/png;base64,' . $logo1 . '" style="visibility: hidden; widht: 10px;" alt="Logo 1"></td>
            </tr>
        </table>
    </div>

    <div class="table-container">
        <table class="table" style="margin-right=30px">
            <thead>
                <tr class="bg-light">
                    <th style="width: 20%;">Nama <br>Karyawan</th>
                    <th>Rangking</th>
                    <th>Nilai <br>Kerajinan</th>
                    <th>Nilai <br>Kerja Sama</th>
                    <th>Nilai <br>Tanggung Jawab</th>
                    <th>Nilai <br>Disiplin</th>
                    <th>Nilai <br>Ketelitian</th>
                    <th>Vector S</th>
                    <th>Vector V</th>
                </tr>
            </thead>
            <tbody>
';
$no = 1;
$select = mysqli_query($connect, "SELECT * FROM laptop ORDER BY nilai_ranking DESC");

while ($data = mysqli_fetch_array($select)) {
    $laptop_image_path = '../images/laptop/5Lenovo IdeaPad Flex 5.png';
    $laptop_image_path = '../images/laptop/' . $data['profile'];
    if (file_exists($laptop_image_path)) {
        $laptop_image = base64_encode(file_get_contents($laptop_image_path));
    } else {
        $laptop_image = ''; // Handle missing image case
    }
    $html .= '
                <tr class="table-data">
                    <td rowspan="2">
                        <p>
                        ' . $data['nama_laptop'] . ' 
                        </p>
                    </td>
                    <td rowspan="2">' . $no . '</td>
                    <td><strong>Normalisasi Nilai</strong></td>
                    <td>' . round($data['normalized_bat'], 3) . '</td>
                    <td>' . round($data['normalized_proc'], 3) . '</td>
                    <td>' . round($data['normalized_memo'], 3) . '</td>
                    <td>' . round($data['normalized_penyim'], 3) . '</td>
                    <td>' . round($data['normalized_berat'], 3) . '</td>
                    <td rowspan="2">' . round($data['nilai_ranking'], 3) . '</td>
                </tr>
                <tr class="table-data">
                    <td><strong>Normalisasi Kriteria Bobot</strong></td>
                    <td>' . round($data['normalized_bat_nilai'], 3) . '</td>
                    <td>' . round($data['normalized_proc_nilai'], 3) . '</td>
                    <td>' . round($data['normalized_memo_nilai'], 3) . '</td>
                    <td>' . round($data['normalized_penyim_nilai'], 3) . '</td>
                    <td>' . round($data['normalized_berat_nilai'], 3) . '</td>
                </tr>
            ';
    $no++;
}

$html .= '
        </tbody>
    </table>
</div>
<div class="signature">
        <p>Bogor, ' . date("d M Y") . '</p>
        <p style="margin-top: 80px;">_________________________</p>
        <p style="margin-top: 10px;">(.............................................)</p>
</div>

</body>
</html>
</center>
';

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'potrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("PErangkingan_Laptop.pdf", array("Attachment" => false));
exit(0);
