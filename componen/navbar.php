<?php
function generate_breadcrumb()
{
    // Mendapatkan URL saat ini
    $current_url = basename($_SERVER['REQUEST_URI'], ".php");

    // Breadcrumb dasar
    $breadcrumb = '<ul class="nav nav-tabs mt-4 overflow-x border-0">';

    // Tambahkan breadcrumb sesuai dengan URL saat ini
    if ($current_url == 'hasil-page') {
        $breadcrumb .= '
        <li class="nav-item">
            <a href="./hasil-page.php" class="nav-link active">Normalisasi Kriteria</a>
        </li>
        <li class="nav-item">
            <a href="./hasil-nilai-page.php" class="nav-link font-regular">Normalisasi Nilai</a>
        </li>
        <li class="nav-item">
            <a href="./hasil-rangking-page.php" class="nav-link font-regular">Hitung Rangking</a>
        </li>
        ';
    } elseif ($current_url == 'hasil-nilai-page') {
        $breadcrumb .= '
        <li class="nav-item">
            <a href="./hasil-page.php" class="nav-link font-regular">Normalisasi Kriteria</a>
        </li>
        <li class="nav-item">
            <a href="./hasil-nilai-page.php" class="nav-link active">Normalisasi Nilai</a>
        </li>
        <li class="nav-item">
            <a href="./hasil-rangking-page.php" class="nav-link font-regular">Hitung Rangking</a>
        </li>
        ';
    } elseif ($current_url == 'hasil-rangking-page') {
        $breadcrumb .= '
        <li class="nav-item">
            <a href="./hasil-page.php" class="nav-link font-regular">Normalisasi Kriteria</a>
        </li>
        <li class="nav-item">
            <a href="../hasil-nilai-page.php" class="nav-link font-regular">Normalisasi Nilai</a>
        </li>
        <li class="nav-item">
            <a href="../hasil-rangking-page.php" class="nav-link active">Hitung Rangking</a>
        </li>
        ';
    } else {
        $breadcrumb .= '
        ';
    }

    $breadcrumb .= '</ul>';
    return $breadcrumb;
}
?>
<header class="bg-surface-primary border-bottom pt-6">
    <div class="container-fluid">
        <div class="mb-npx">
            <div class="row align-items-center">
                <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                    <!-- Title -->
                    <h1 class="h2 mb-0 ls-tight">Application</h1>
                </div>
                <!-- Actions -->
            </div>
            <!-- Nav -->
            <?php echo generate_breadcrumb(); ?>
        </div>
    </div>
</header>