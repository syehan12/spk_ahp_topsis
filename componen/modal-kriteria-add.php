<div class="modal fade" id="add-kriteria-modal" tabindex="-1" aria-labelledby="add-kriteria-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="add-kriteria-modalLabel">Tambah Kriteri</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="kriteria-form" action="../process/input-kriteria.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="kriteria_1" class="form-label">Kriteria 1</label>
                        <select class="form-select" id="kriteria_1" name="kriteria_1" aria-label="Default select example" required>
                            <option value="">Pilih Nilai</option>
                            <option value="Baterai">Baterai</option>
                            <option value="Processor">Processor</option>
                            <option value="Memory">Memory</option>
                            <option value="Penyimpanan">Penyimpanan</option>
                            <option value="Berat">Berat</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kriteria_2" class="form-label">Kriteria 2</label>
                        <select class="form-select" id="kriteria_2" name="kriteria_2" aria-label="Default select example" required>
                            <option value="">Pilih Nilai</option>
                            <option value="Baterai">Baterai</option>
                            <option value="Processor">Processor</option>
                            <option value="Memory">Memory</option>
                            <option value="Penyimpanan">Penyimpanan</option>
                            <option value="Berat">Berat</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kriteria_value" class="form-label">Nilai</label>
                        <select class="form-select" id="kriteria_value" name="kriteria_value" aria-label="Default select example" required>
                            <option value="">Pilih Nilai</option>
                            <option value="1">Sama Penting (Nilai = 1)</option>
                            <option value="3">Sedikit Lebih Penting (Nilai = 3)</option>
                            <option value="5">Lebih Penting (Nilai = 5)</option>
                            <option value="7">Lebih Mutlak Pentinng (Nilai = 7)</option>
                            <option value="9">Mutlak Penting (Nilai = 9)</option>
                            <option value="2">Nilai Berdekatan (Nilai = 2)</option>
                            <option value="1/3">Sedikit Lebih Penting (Nilai = 1/3)</option>
                            <option value="1/5">Lebih Penting (Nilai = 1/5)</option>
                            <option value="1/7">Lebih Mutlak Penting (Nilai = 1/7)</option>
                            <option value="1/9">Mutlak Penting (Nilai = 1/9)</option>
                            <option value="1/2">Nilai Berdekatan (Nilai = 1/2)</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea name="description" id="description" class="form-control" required></textarea>
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