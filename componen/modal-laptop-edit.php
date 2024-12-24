<div class="modal fade" id="edit-laptop-modal<?php echo $data['laptop_id']; ?>" tabindex="-1" aria-labelledby="edit-laptop-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="edit-laptop-modalLabel">Edit Laptop</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="text-align: start;">
                <form id="laptop-form" action="../process/edit-laptop.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="laptop_id" value="<?php echo $data['laptop_id']; ?>">

                    <div class="mb-3">
                        <label for="nama_laptop" class="form-label">Nama Laptop</label>
                        <input type="text" class="form-control" id="nama_laptop" name="nama_laptop" value="<?php echo $data['nama_laptop']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="baterai_laptop" class="form-label">Baterai</label>
                        <input type="text" class="form-control" id="baterai_laptop" name="baterai_laptop" value="<?php echo $data['baterai_laptop']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="procesor_laptop" class="form-label">Processor</label>
                        <input type="text" class="form-control" id="procesor_laptop" name="procesor_laptop" value="<?php echo $data['procesor_laptop']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="memori_laptop" class="form-label">Memory</label>
                        <input type="text" class="form-control" id="memori_laptop" name="memori_laptop" value="<?php echo $data['memori_laptop']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="penyimpanan_laptop" class="form-label">Penyimpanan</label>
                        <input type="text" class="form-control" id="penyimpanan_laptop" name="penyimpanan_laptop" value="<?php echo $data['penyimpanan_laptop']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="berat_laptop" class="form-label">Berat</label>
                        <input type="text" class="form-control" id="berat_laptop" name="berat_laptop" value="<?php echo $data['berat_laptop']; ?>" required>
                    </div>

                    <div class="mb-3">
                        <label for="image-upload<?php echo $data['laptop_id']; ?>" class="image-label">Upload Image</label>
                        <input type="file" id="image-upload<?php echo $data['laptop_id']; ?>" name="profile" class="form-control" accept="image/*" onchange="previewImageEdit(event, '<?php echo $data['laptop_id']; ?>')" />
                        <div class="image-preview" id="image-preview<?php echo $data['laptop_id']; ?>" style="display: <?php echo isset($data['profile']) && !empty($data['profile']) ? 'block' : 'none'; ?>;">
                            <img src="<?php echo isset($data['profile']) ? '../images/laptop/' . $data['profile'] : ''; ?>" alt="Image Preview" id="image-preview-img<?php echo $data['laptop_id']; ?>" style="margin-top:10px; width: 200px; border-radius:30px;" />
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>