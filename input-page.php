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
                  <h5 class="mb-0">Table Bobot Nilai Laptop</h5>
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
                           <th scope="col">Aksi</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                        $no = 1;
                        $select = mysqli_query($connect, "SELECT * FROM laptop");
                        while ($data = mysqli_fetch_array($select)) {
                        ?>
                           <tr>
                              <td>
                                 <img alt="..." src="./images/laptop/<?php echo $data['profile']; ?>" class="avatar avatar-sm rounded-sm me-2" />
                                 <a class="text-heading font-semibold" href="#">
                                    <?php echo $data['nama_laptop']; ?>
                                 </a>
                              </td>
                              <td>
                                 <?php
                                 $value = $data['bat_nilai'];

                                 if ($value < 1 && $value > 0) {
                                    $inverse = round(1 / $value, 2);
                                    if (fmod($inverse, 1) == 0) {
                                       $fraction = '1/' . round($inverse);
                                       echo $fraction;
                                    } else {
                                       echo $value;
                                    }
                                 } else {
                                    echo $value;
                                 }
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 $value = $data['proc_nilai'];

                                 if ($value < 1 && $value > 0) {
                                    $inverse = round(1 / $value, 2);
                                    if (fmod($inverse, 1) == 0) {
                                       $fraction = '1/' . round($inverse);
                                       echo $fraction;
                                    } else {
                                       echo $value;
                                    }
                                 } else {
                                    echo $value;
                                 }
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 $value = $data['memo_nilai'];

                                 if ($value < 1 && $value > 0) {
                                    $inverse = round(1 / $value, 2);
                                    if (fmod($inverse, 1) == 0) {
                                       $fraction = '1/' . round($inverse);
                                       echo $fraction;
                                    } else {
                                       echo $value;
                                    }
                                 } else {
                                    echo $value;
                                 }
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 $value = $data['penyim_nilai'];

                                 if ($value < 1 && $value > 0) {
                                    $inverse = round(1 / $value, 2);
                                    if (fmod($inverse, 1) == 0) {
                                       $fraction = '1/' . round($inverse);
                                       echo $fraction;
                                    } else {
                                       echo $value;
                                    }
                                 } else {
                                    echo $value;
                                 }
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 $value = $data['berat_nilai'];

                                 if ($value < 1 && $value > 0) {
                                    $inverse = round(1 / $value, 2);
                                    if (fmod($inverse, 1) == 0) {
                                       $fraction = '1/' . round($inverse);
                                       echo $fraction;
                                    } else {
                                       echo $value;
                                    }
                                 } else {
                                    echo $value;
                                 }
                                 ?>
                              </td>
                              <td>
                                 <?php
                                 $total_nilai = $data['bat_nilai'] + $data['proc_nilai'] + $data['memo_nilai'] + $data['penyim_nilai'] + $data['berat_nilai'];

                                 $update_query_total = "UPDATE laptop SET total_nilai = '$total_nilai' WHERE laptop_id = '{$data['laptop_id']}'";
                                 mysqli_query($connect, $update_query_total);
                                 echo $data['total_nilai'];
                                 ?>
                              </td>
                              <td class="text-end">
                                 <a href="#nilai-laptop-modal<?php echo $data['laptop_id']; ?>" type="button" class="btn btn-sm btn-outline-success" data-bs-toggle="modal"><i class="bi bi-plus-square"></i></a>
                                 <?php
                                 include './componen/modal-nilai-laptop.php';
                                 ?>
                              </td>
                           </tr>
                        <?php $no++;
                        } ?>
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