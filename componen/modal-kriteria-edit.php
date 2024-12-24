<div class="modal fade" id="edit-kriteria-modal<?php echo $data['id_kiteria']; ?>" tabindex="-1" aria-labelledby="edit-kriteria-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="edit-kriteria-modalLabel">Edit Kriteria</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="text-align: start;">
                <form id="kriteria-form" action="./process/edit-kriteria.php" method="POST" enctype="multipart/form-data">
                    <!-- Hidden field -->
                    <input type="hidden" name="id_kiteria" value="<?php echo $data['id_kiteria']; ?>">

                    <!-- Kriteria 1 -->
                    <div class="mb-3">
                        <label for="kriteria_1" class="form-label">Kriteria 1</label>
                        <select class="form-select" id="kriteria_1" name="kriteria_1" required>
                            <option value="">Pilih Kriteria</option>
                            <option value="Baterai" <?php echo ($data['kriteria_1'] == 'Baterai') ? 'selected' : ''; ?>>Baterai</option>
                            <option value="Processor" <?php echo ($data['kriteria_1'] == 'Processor') ? 'selected' : ''; ?>>Processor</option>
                            <option value="Memory" <?php echo ($data['kriteria_1'] == 'Memory') ? 'selected' : ''; ?>>Memory</option>
                            <option value="Penyimpanan" <?php echo ($data['kriteria_1'] == 'Penyimpanan') ? 'selected' : ''; ?>>Penyimpanan</option>
                            <option value="Berat" <?php echo ($data['kriteria_1'] == 'Berat') ? 'selected' : ''; ?>>Berat</option>
                        </select>
                    </div>

                    <!-- Kriteria 2 -->
                    <div class="mb-3">
                        <label for="kriteria_2" class="form-label">Kriteria 2</label>
                        <select class="form-select" id="kriteria_2" name="kriteria_2" required>
                            <option value="">Pilih Kriteria</option>
                            <option value="Baterai" <?php echo ($data['kriteria_2'] == 'Baterai') ? 'selected' : ''; ?>>Baterai</option>
                            <option value="Processor" <?php echo ($data['kriteria_2'] == 'Processor') ? 'selected' : ''; ?>>Processor</option>
                            <option value="Memory" <?php echo ($data['kriteria_2'] == 'Memory') ? 'selected' : ''; ?>>Memory</option>
                            <option value="Penyimpanan" <?php echo ($data['kriteria_2'] == 'Penyimpanan') ? 'selected' : ''; ?>>Penyimpanan</option>
                            <option value="Berat" <?php echo ($data['kriteria_2'] == 'Berat') ? 'selected' : ''; ?>>Berat</option>
                        </select>
                    </div>

                    <!-- Nilai -->
                    <div class="mb-3">
                        <label for="kriteria_value" class="form-label">Nilai</label>
                        <select class="form-select" id="kriteria_value" name="kriteria_value" aria-label="Default select example" required>
                            <option value="">Pilih Nilai</option>
                            <option value="1" <?php echo ($data['kriteria_value'] == '1') ? 'selected' : ''; ?>>Sama Penting (Nilai = 1)</option>
                            <option value="3" <?php echo ($data['kriteria_value'] == '3') ? 'selected' : ''; ?>>Sedikit Lebih Penting (Nilai = 3)</option>
                            <option value="5" <?php echo ($data['kriteria_value'] == '5') ? 'selected' : ''; ?>>Lebih Penting (Nilai = 5)</option>
                            <option value="7" <?php echo ($data['kriteria_value'] == '7') ? 'selected' : ''; ?>>Lebih Mutlak Penting (Nilai = 7)</option>
                            <option value="9" <?php echo ($data['kriteria_value'] == '9') ? 'selected' : ''; ?>>Mutlak Penting (Nilai = 9)</option>
                            <option value="2" <?php echo ($data['kriteria_value'] == '2') ? 'selected' : ''; ?>>Nilai Berdekatan (Nilai = 2)</option>
                            <option value="0.333333" <?php echo ($data['kriteria_value'] == '0.333333') ? 'selected' : ''; ?>>Sedikit Lebih Penting (Nilai = 1/3)</option>
                            <option value="0.2" <?php echo ($data['kriteria_value'] == '0.2') ? 'selected' : ''; ?>>Lebih Penting (Nilai = 1/5)</option>
                            <option value="0.142857" <?php echo ($data['kriteria_value'] == '0.142857') ? 'selected' : ''; ?>>Lebih Mutlak Penting (Nilai = 1/7)</option>
                            <option value="0.111111" <?php echo ($data['kriteria_value'] == '0.111111') ? 'selected' : ''; ?>>Mutlak Penting (Nilai = 1/9)</option>
                            <option value="0.5" <?php echo ($data['kriteria_value'] == '0.5') ? 'selected' : ''; ?>>Nilai Berdekatan (Nilai = 1/2)</option>
                        </select>
                    </div>

                    <!-- Deskripsi -->
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea name="description" id="description" class="form-control" required><?php echo $data['description']; ?></textarea>
                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>