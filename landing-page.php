<?php
include './componen/header.php';
include './process/koneksi.php'
?>
<?php
// Fetch total customers
$result = mysqli_query($connect, "SELECT COUNT(*) AS count FROM laptop");
$row = mysqli_fetch_assoc($result);
$total_laptop = $row['count'];
?>

<?php
// Fetch total customers
$result_1 = mysqli_query($connect, "SELECT COUNT(*) AS count FROM kriteria");
$row_1 = mysqli_fetch_assoc($result_1);
$total_kriteria = $row_1['count'];
?>
<!-- Dashboard -->
<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
   <!-- Vertical Navbar -->
   <?php
   include './componen/sidebar.php';
   ?>
   <!-- Main content -->
   <div class="h-screen flex-grow-1 overflow-y-lg-auto">
      <!-- Header -->
      <?php
      include './componen/navbar.php';
      ?>
      <!-- Main -->
      <main class="py-6 bg-surface-secondary">
         <div class="container-fluid">
            <!-- Card stats -->
            <div class="row g-6 mb-6">
               <div class="col-xl-3 col-sm-6 col-12">
                  <div class="card shadow border-0">
                     <div class="card-body">
                        <div class="row">
                           <div class="col">
                              <span class="h6 font-semibold text-muted text-sm d-block mb-2">Total Laptop</span>
                              <span class="h3 font-bold mb-0"><?php echo $total_laptop ?></span>
                           </div>
                           <div class="col-auto">
                              <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle">
                                 <i class="bi bi-laptop"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-sm-6 col-12">
                  <div class="card shadow border-0">
                     <div class="card-body">
                        <div class="row">
                           <div class="col">
                              <span class="h6 font-semibold text-muted text-sm d-block mb-2">Total Kriteria</span>
                              <span class="h3 font-bold mb-0"><?php echo $total_kriteria ?></span>
                           </div>
                           <div class="col-auto">
                              <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                                 <i class="bi bi-card-checklist"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-sm-6 col-12">
                  <div class="card shadow border-0">
                     <div class="card-body">
                        <div class="row">
                           <div class="col">
                              <span class="h6 font-semibold text-muted text-sm d-block mb-2">Total Normalisasi Kriteria</span>
                              <span class="h3 font-bold mb-0">1.169</span>
                           </div>
                           <div class="col-auto">
                              <div class="icon icon-shape bg-info text-white text-lg rounded-circle">
                                 <i class="bi bi-clock-history"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-sm-6 col-12">
                  <div class="card shadow border-0">
                     <div class="card-body">
                        <div class="row">
                           <div class="col">
                              <span class="h6 font-semibold text-muted text-sm d-block mb-2">Total Normalisasi Nilai</span>
                              <span class="h3 font-bold mb-0">45.894</span>
                           </div>
                           <div class="col-auto">
                              <div class="icon icon-shape bg-warning text-white text-lg rounded-circle">
                                 <i class="bi bi-minecart-loaded"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card shadow border-0 mb-7">
               <div class="card-header">
                  <h5 class="mb-0">About</h5>
               </div>
               <div class="card-body d-flex align-items-center">
                  <div class="me-4">
                     <img src="./images/about.jpg" alt="About Us" style="border-radius: 50%; width: 300px;">
                  </div>
                  <div>
                     <h2>User Name</h2>
                     <h4>213123123</h4>
                     <p>aasdadd</p>
                  </div>
               </div>
            </div>
         </div>
      </main>
   </div>
</div>
<?php
include './componen/script.php';
?>