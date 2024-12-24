<div class="modal fade" id="add-laptop-modal" tabindex="-1" aria-labelledby="add-laptop-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="add-laptop-modalLabel">Tambah Laptop</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="laptop-form" action="./process/input-laptop.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nama_laptop" class="form-label">Nama Laptop</label>
                        <input type="text" class="form-control" id="nama_laptop" name="nama_laptop" required>
                    </div>
                    <div class="mb-3">
                        <label for="baterai_laptop" class="form-label">Baterai</label>
                        <input type="text" class="form-control" id="baterai_laptop" name="baterai_laptop" required>
                    </div>
                    <div class="mb-3">
                        <label for="procesor_laptop" class="form-label">Processor</label>
                        <input type="text" class="form-control" id="procesor_laptop" name="procesor_laptop" required>
                    </div>
                    <div class="mb-3">
                        <label for="memori_laptop" class="form-label">Memory</label>
                        <input type="text" class="form-control" id="memori_laptop" name="memori_laptop" required>
                    </div>
                    <div class="mb-3">
                        <label for="penyimpanan_laptop" class="form-label">Penyimpanan</label>
                        <input type="text" class="form-control" id="penyimpanan_laptop" name="penyimpanan_laptop" required>
                    </div>
                    <div class="mb-3">
                        <label for="berat_laptop" class="form-label">Berat</label>
                        <input type="text" class="form-control" id="berat_laptop" name="berat_laptop" required>
                    </div>
                    <div class="mb-3">
                        <label for="image-upload" class="image-label">Upload Image</label>
                        <input type="file" id="image-upload" name="profile" class="input file-input" accept="image/*" onchange="previewImageAdd(event)" />
                        <div class="image-preview" id="image-preview">
                            <img src="" alt="Image Preview" id="image-preview-img" />
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