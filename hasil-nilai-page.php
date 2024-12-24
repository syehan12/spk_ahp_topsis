<?php
include './componen/header.php';
include './process/koneksi.php';
?>
<!-- Dashboard -->
<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
   <!-- Vertical Navbar -->
   <?php include './componen/sidebar.php'; ?>

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
               <!-- Create button placeholder -->
            </div>
         </div>
         <div class="container-fluid">
            <!-- Card stats -->
            <div class="card shadow border-0 mb-7">
               <div class="card-header">
                  <h5 class="mb-0">Table Bobot Laptop dan Normalisasi</h5>
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
                        $total_bat = $total_proc = $total_memo = $total_penyim = $total_berat = 0;

                        // First loop to calculate totals
                        $select = mysqli_query($connect, "SELECT * FROM laptop");
                        while ($data = mysqli_fetch_array($select)) {
                           $total_bat += $data['bat'];
                           $total_proc += $data['proc'];
                           $total_memo += $data['memo'];
                           $total_penyim += $data['penyim'];
                           $total_berat += $data['berat'];
                        }

                        // Second loop to display and normalize
                        mysqli_data_seek($select, 0);
                        while ($data = mysqli_fetch_array($select)) {
                           $normalized_bat = $data['bat'] / $total_bat;
                           $normalized_proc = $data['proc'] / $total_proc;
                           $normalized_memo = $data['memo'] / $total_memo;
                           $normalized_penyim = $data['penyim'] / $total_penyim;
                           $normalized_berat = $data['berat'] / $total_berat;
                           $total_normalize = $normalized_bat + $normalized_proc + $normalized_memo + $normalized_penyim + $normalized_berat;

                           $update_query_v = "UPDATE laptop SET 
                              normalized_bat = '$normalized_bat', 
                              normalized_proc = '$normalized_proc',
                              normalized_memo = '$normalized_memo',
                              normalized_penyim = '$normalized_penyim',
                              normalized_berat = '$normalized_berat', 
                              total_normalize = '$total_normalize'
                           WHERE laptop_id = '{$data['laptop_id']}'";
                           mysqli_query($connect, $update_query_v);

                           // Display data and normalization
                           echo "<tr>
                                    <td>
                                       <img alt='...' src='./images/laptop/{$data['profile']}' class='avatar avatar-sm rounded-sm me-2' />
                                       <a class='text-heading font-semibold' href='#'>{$data['nama_laptop']}</a>
                                    </td>
                                    <td>" . round($data['bat'], 3) . "</td>
                                    <td>" . round($data['proc'], 3) . "</td>
                                    <td>" . round($data['memo'], 3) . "</td>
                                    <td>" . round($data['penyim'], 3) . "</td>
                                    <td>" . round($data['berat'], 3) . "</td>
                                    
                                 </tr>
                                 <tr>
                                    <td><strong>Normalisasi</strong></td>
                                    <td>" . round($normalized_bat, 3) . "</td>
                                    <td>" . round($normalized_proc, 3) . "</td>
                                    <td>" . round($normalized_memo, 3) . "</td>
                                    <td>" . round($normalized_penyim, 3) . "</td>
                                    <td>" . round($normalized_berat, 3) . "</td>
                                    <td>" . round($total_normalize, 3) . "</td>
                                 </tr>";
                        }
                        ?>
                        <tr>
                           <td><strong>Total:</strong></td>
                           <td><?php echo round($total_bat, 3); ?></td>
                           <td><?php echo round($total_proc, 3); ?></td>
                           <td><?php echo round($total_memo, 3); ?></td>
                           <td><?php echo round($total_penyim, 3); ?></td>
                           <td><?php echo round($total_berat, 3); ?></td>
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