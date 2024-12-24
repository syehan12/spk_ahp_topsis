<?php
include './componen/header.php';
include './process/koneksi.php';
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
      include './componen/modal-laptop-add.php';
      ?>
      <!-- Main -->
      <main class="py-6 bg-surface-secondary">
         <div class="col-sm-6 mb-6 col-12 text-sm-end text-end">
            <div class="mx-n1">
               <!-- <a href="#add-laptop-modal" type="button" class="btn btn-primary" data-bs-toggle="modal" class="btn d-inline-flex btn-sm btn-success mx-1">
                  <span class="pe-2">
                     <i class="bi bi-plus"></i>
                  </span>
                  <span>Create</span>
               </a> -->
            </div>
         </div>
         <div class="container-fluid">
            <!-- Card stats -->
            <div class="card shadow border-0 mb-7">
               <div class="card-header">
                  <h5 class="mb-0">Table Nilai Laptop dan Normalisasi</h5>
               </div>
               <div class="table-responsive">
                  <table class="table table-hover table-nowrap">
                     <thead class="thead-light">
                        <tr>
                           <th scope="col">Name</th>
                           <th scope="col">Baterai</th>
                           <th scope="col">Processor</th>
                           <th scope="col">Memory</th>
                           <th scope="col">Penyimpanan</th>
                           <th scope="col">Berat</th>
                           <th scope="col">Total</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                        // Step 1: Fetch data and calculate total values in one loop
                        $totals = [
                           'bat_nilai' => 0,
                           'proc_nilai' => 0,
                           'memo_nilai' => 0,
                           'penyim_nilai' => 0,
                           'berat_nilai' => 0
                        ];

                        $laptops = [];
                        $select = mysqli_query($connect, "SELECT * FROM laptop");
                        while ($data = mysqli_fetch_array($select)) {
                           // Accumulate totals
                           foreach ($totals as $key => &$total) {
                              $total += $data[$key];
                           }
                           // Store fetched data for the second loop
                           $laptops[] = $data;
                        }

                        // Step 2: Display data and calculate normalized values
                        foreach ($laptops as $data) {
                        ?>
                           <tr>
                              <td>
                                 <img alt="..." src="./images/laptop/<?php echo $data['profile']; ?>" class="avatar avatar-sm rounded-sm me-2" />
                                 <a class="text-heading font-semibold" href="#">
                                    <?php echo $data['nama_laptop']; ?>
                                 </a>
                              </td>
                              <?php foreach ($totals as $key => $total) {
                                 $nilai = $data[$key];
                                 $normalized_key = 'normalized_' . $key;
                                 $normalized_value = $total > 0 ? $nilai / $total : 0;
                                 $data[$normalized_key] = $normalized_value;
                              ?>
                                 <td><?php echo round($nilai, 3); ?></td>
                              <?php } ?>
                              <td><?php echo round($data['total_nilai'], 3); ?></td>
                           </tr>
                           <tr>
                              <td><strong>Normalisasi</strong></td>
                              <?php foreach ($totals as $key => $total) {
                                 $normalized_key = 'normalized_' . $key;
                                 $normalized_value = $data[$normalized_key];
                                 // Update normalized values in the database
                                 $update_query = "UPDATE laptop SET $normalized_key = '$normalized_value' WHERE laptop_id = '{$data['laptop_id']}'";
                                 mysqli_query($connect, $update_query);
                              ?>
                                 <td><?php echo round($normalized_value, 3); ?></td>
                              <?php } ?>
                              <td>
                                 <?php
                                 $total_normalize_nilai = array_sum(array_map(function ($key) use ($data) {
                                    return $data['normalized_' . $key];
                                 }, array_keys($totals)));
                                 $update_query_total = "UPDATE laptop SET total_normalize_nilai = '$total_normalize_nilai' WHERE laptop_id = '{$data['laptop_id']}'";
                                 mysqli_query($connect, $update_query_total);
                                 echo round($total_normalize_nilai, 3);
                                 ?>
                              </td>
                           </tr>
                        <?php } ?>
                        <tr>
                           <td><strong>Total:</strong></td>
                           <?php foreach ($totals as $total) { ?>
                              <td><?php echo round($total, 3); ?></td>
                           <?php } ?>
                           <td>-</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </main>
   </div>
</div>

<?php
include './componen/script.php';
?>