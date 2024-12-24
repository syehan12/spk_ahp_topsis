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
               <a href="#add-laptop-modal" type="button" class="btn btn-primary" data-bs-toggle="modal" class="btn d-inline-flex btn-sm btn-success mx-1">
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
                  <h5 class="mb-0">Table Laptop</h5>
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
                              <td><?php echo $data['baterai_laptop']; ?></td>
                              <td>
                                 <p class="text-heading font-semibold">
                                    <?php echo $data['procesor_laptop']; ?>
                                 </p>
                              </td>
                              <td><?php echo $data['memori_laptop']; ?></td>
                              <td>
                                 <?php echo $data['penyimpanan_laptop']; ?>
                              </td>
                              <td>
                                 <?php echo $data['berat_laptop']; ?>
                              </td>
                              <td class="text-end">
                                 <a href="#edit-laptop-modal<?php echo $data['laptop_id']; ?>" type="button" class="btn btn-sm btn-outline-warning" data-bs-toggle="modal"><i class="bi bi-pencil-square"></i></a>
                                 <a href="./process/hapus-laptop.php?laptop_id=<?php echo $data['laptop_id']; ?>" type="button" class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                 </a>
                                 <?php
                                 include './componen/modal-laptop-edit.php';
                                 ?>
                              </td>
                              <!-- <td>
                                 <a href="#modal-edit-karyawan<?php echo $data['karyawan_id']; ?>" class="status edit">
                                    <i class="bx bx-edit"></i>
                                 </a>
                                 <a href="./process/hapus-karyawan.php?karyawan_id=<?php echo $data['karyawan_id']; ?>" class="status delete">
                                    <i class="bx bx-trash"></i>
                                 </a>
                              </td> -->
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