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
                  <h5 class="mb-0">Table Bobot Laptop dan Normalisasi</h5>
               </div>
               <div class="table-responsive">
                  <table class="table table-hover table-nowrap">
                     <thead class="thead-light">
                        <tr>
                           <th scope="col">Name</th>
                           <th></th>
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
                        $total_bat = 0;
                        $total_proc = 0;
                        $total_memo = 0;
                        $total_penyim = 0;
                        $total_berat = 0;

                        $no = 1;
                        $select = mysqli_query($connect, "SELECT * FROM laptop");

                        while ($data = mysqli_fetch_array($select)) {
                        ?>
                           <tr>
                              <td rowspan="2">
                                 <img alt="..." src="./images/laptop/<?php echo $data['profile']; ?>" class="avatar avatar-sm rounded-sm me-2" />
                                 <a class="text-heading font-semibold" href="#">
                                    <?php echo $data['nama_laptop']; ?>
                                 </a>
                              </td>
                              <td><strong>Normalisasi Nilai</strong></td>
                              <td>
                                 <?php
                                 echo round($data['normalized_bat'], 3);
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 echo round($data['normalized_proc'], 3);
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 echo round($data['normalized_memo'], 3);
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 echo round($data['normalized_penyim'], 3);
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 echo round($data['normalized_berat'], 3);
                                 ?>
                              </td>
                              <td rowspan="2">
                                 <?php
                                 $nilai_ranking = ($data['normalized_bat'] * $data['normalized_bat_nilai']) + ($data['normalized_proc'] * $data['normalized_proc_nilai']) + ($data['normalized_memo'] * $data['normalized_memo_nilai']) + ($data['normalized_penyim'] * $data['normalized_penyim_nilai']) + ($data['normalized_berat'] * $data['normalized_berat_nilai']);
                                 $update_query_nilai_ranking = "UPDATE laptop SET nilai_ranking = '$nilai_ranking' WHERE laptop_id = '{$data['laptop_id']}'";
                                 mysqli_query($connect, $update_query_nilai_ranking);
                                 echo round($data['nilai_ranking'], 3);
                                 ?>
                              </td>
                           </tr>
                           <tr>
                              <td><strong>Normalisasi Kriteria Bobot</strong></td>
                              <td>
                                 <?php
                                 echo round($data['normalized_bat_nilai'], 3);
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 echo round($data['normalized_proc_nilai'], 3);
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 echo round($data['normalized_memo_nilai'], 3);
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 echo round($data['normalized_penyim_nilai'], 3);
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 echo round($data['normalized_berat_nilai'], 3);
                                 ?>
                              </td>
                           </tr>
                        <?php
                           $no++;
                        }
                        ?>
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