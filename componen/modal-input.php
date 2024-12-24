<div class="modal fade" id="input-modal<?php echo $data['laptop_id']; ?>" tabindex="-1" aria-labelledby="input-modal-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="input-modal-modalLabel">Nilai Laptop</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="text-align: start;">
                <form id="laptop-form" action="../process/input-nilai-nilai.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="laptop_id" value="<?php echo $data['laptop_id']; ?>">

                    <div class="mb-3">
                        <label for="nama_laptop" class="form-label">Nama Laptop</label>
                        <input type="text" class="form-control" id="nama_laptop" name="nama_laptop" value="<?php echo $data['nama_laptop']; ?>" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="bat" class="form-label">Baterai</label>
                        <input type="number" class="form-control" id="bat" name="bat" value="<?php echo $data['bat']; ?>" required max="100" oninput="validateInput(this)">
                    </div>

                    <div class="mb-3">
                        <label for="proc" class="form-label">Processor</label>
                        <input type="number" class="form-control" id="proc" name="proc" value="<?php echo $data['proc']; ?>" required max="100" oninput="validateInput(this)">
                    </div>

                    <div class="mb-3">
                        <label for="memo" class="form-label">Memory</label>
                        <input type="number" class="form-control" id="memo" name="memo" value="<?php echo $data['memo']; ?>" required max="100" oninput="validateInput(this)">
                    </div>

                    <div class="mb-3">
                        <label for="penyim" class="form-label">Penyimpanan</label>
                        <input type="number" class="form-control" id="penyim" name="penyim" value="<?php echo $data['penyim']; ?>" required max="100" oninput="validateInput(this)">
                    </div>

                    <div class="mb-3">
                        <label for="berat" class="form-label">Berat</label>
                        <input type="number" class="form-control" id="berat" name="berat" value="<?php echo $data['berat']; ?>" required max="100" oninput="validateInput(this)">
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