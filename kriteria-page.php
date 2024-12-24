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
      include './componen/modal-kriteria-add.php';
      ?>
      <!-- Main -->
      <main class="py-6 bg-surface-secondary">
         <div class="col-sm-6 mb-6 col-12 text-sm-end text-end">
            <div class="mx-n1">
               <a href="#add-kriteria-modal" type="button" class="btn btn-primary" data-bs-toggle="modal" class="btn d-inline-flex btn-sm btn-success mx-1">
                  <span class="pe-2">
                     <i class="bi bi-plus"></i>
                  </span>
                  <span>Create</span>
               </a>
            </div>
         </div>
         <div class="container-fluid">
            <!-- Card stats -->
            <div class="card shadow border-0 mb-7">
               <div class="card-header">
                  <h5 class="mb-0">Table Kriteria</h5>
               </div>
               <div class="table-responsive">
                  <table class="table table-hover table-nowrap">
                     <thead class="thead-light">
                        <tr>
                           <th scope="col">Perbandingan 1</th>
                           <th scope="col">Perbandingan 2</th>
                           <th scope="col">Nilai</th>
                           <th scope="col">Deskripsi</th>
                           <th scope="col">Aksi</th>
                        </tr>
                     </thead>
                     <tbody>
                        <?php
                        $no = 1;
                        $select = mysqli_query($connect, "SELECT * FROM kriteria");
                        while ($data = mysqli_fetch_array($select)) {
                        ?>
                           <tr>
                              <td>
                                 <?php echo $data['kriteria_1']; ?>
                              </td>
                              <td>
                                 <?php echo $data['kriteria_2']; ?>
                              </td>
                              <td>
                                 <?php
                                 $value = $data['kriteria_value'];

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


                              <td><?php echo $data['description']; ?></td>
                              <td class="text-end">
                                 <a href="#edit-kriteria-modal<?php echo $data['id_kiteria']; ?>" type="button" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal"><i class="bi bi-pencil-square"></i></a>
                                 <?php
                                 include './componen/modal-kriteria-edit.php';
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