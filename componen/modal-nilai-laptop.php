<div class="modal fade" id="nilai-laptop-modal<?php echo $data['laptop_id']; ?>" tabindex="-1" aria-labelledby="nilai-laptop-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title fs-5" id="nilai-laptop-modalLabel">Bobot Nilai Laptop</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="text-align: start;">
                <form id="laptop-form" action="../process/input-nilai-bobot.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="laptop_id" value="<?php echo $data['laptop_id']; ?>">

                    <div class="mb-3">
                        <label for="nama_laptop" class="form-label">Nama Laptop</label>
                        <input type="text" class="form-control" id="nama_laptop" name="nama_laptop" value="<?php echo $data['nama_laptop']; ?>" readonly>
                    </div>

                    <!-- Baterai -->
                    <div class="mb-3">
                        <label for="bat_nilai" class="form-label">Baterai</label>
                        <select class="form-select" id="bat_nilai" name="bat_nilai" aria-label="Default select example" required>
                            <option value="">Pilih Nilai</option>
                            <?php
                            $query_bat = "SELECT * FROM kriteria WHERE kriteria_1='Baterai'";
                            $result_bat = mysqli_query($connect, $query_bat);
                            while ($row = mysqli_fetch_assoc($result_bat)) {
                                $value = $row['kriteria_value'];

                                if ($value < 1 && $value > 0) {
                                    $inverse = round(1 / $value, 2);
                                    $display_value = (fmod($inverse, 1) == 0) ? '1/' . round($inverse) : $value;
                                } else {
                                    $display_value = $value;
                                }

                                $selected = ($data['bat_nilai'] == $value) ? 'selected' : '';
                                echo "<option value='" . $value . "' $selected>" . $row['description'] . " Nilai = (" . $display_value . ")</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <!-- Processor -->
                    <div class="mb-3">
                        <label for="proc_nilai" class="form-label">Processor</label>
                        <select class="form-select" id="proc_nilai" name="proc_nilai" aria-label="Default select example" required>
                            <option value="">Pilih Nilai</option>
                            <?php
                            $query_proc = "SELECT * FROM kriteria WHERE kriteria_1='Processor'";
                            $result_proc = mysqli_query($connect, $query_proc);
                            while ($row = mysqli_fetch_assoc($result_proc)) {
                                $value = $row['kriteria_value'];

                                if ($value < 1 && $value > 0) {
                                    $inverse = round(1 / $value, 2);
                                    $display_value = (fmod($inverse, 1) == 0) ? '1/' . round($inverse) : $value;
                                } else {
                                    $display_value = $value;
                                }

                                $selected = ($data['proc_nilai'] == $value) ? 'selected' : '';
                                echo "<option value='" . $value . "' $selected>" . $row['description'] . " Nilai = (" . $display_value . ")</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <!-- Memory -->
                    <div class="mb-3">
                        <label for="memo_nilai" class="form-label">Memory</label>
                        <select class="form-select" id="memo_nilai" name="memo_nilai" aria-label="Default select example" required>
                            <option value="">Pilih Nilai</option>
                            <?php
                            $query_memo = "SELECT * FROM kriteria WHERE kriteria_1='Memory'";
                            $result_memo = mysqli_query($connect, $query_memo);
                            while ($row = mysqli_fetch_assoc($result_memo)) {
                                $value = $row['kriteria_value'];

                                if ($value < 1 && $value > 0) {
                                    $inverse = round(1 / $value, 2);
                                    $display_value = (fmod($inverse, 1) == 0) ? '1/' . round($inverse) : $value;
                                } else {
                                    $display_value = $value;
                                }

                                $selected = ($data['memo_nilai'] == $value) ? 'selected' : '';
                                echo "<option value='" . $value . "' $selected>" . $row['description'] . " Nilai = (" . $display_value . ")</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <!-- Penyimpanan -->
                    <div class="mb-3">
                        <label for="penyim_nilai" class="form-label">Penyimpanan</label>
                        <select class="form-select" id="penyim_nilai" name="penyim_nilai" aria-label="Default select example" required>
                            <option value="">Pilih Nilai</option>
                            <?php
                            $query_penyim = "SELECT * FROM kriteria WHERE kriteria_1='Penyimpanan'";
                            $result_penyim = mysqli_query($connect, $query_penyim);
                            while ($row = mysqli_fetch_assoc($result_penyim)) {
                                $value = $row['kriteria_value'];

                                if ($value < 1 && $value > 0) {
                                    $inverse = round(1 / $value, 2);
                                    $display_value = (fmod($inverse, 1) == 0) ? '1/' . round($inverse) : $value;
                                } else {
                                    $display_value = $value;
                                }

                                $selected = ($data['penyim_nilai'] == $value) ? 'selected' : '';
                                echo "<option value='" . $value . "' $selected>" . $row['description'] . " Nilai = (" . $display_value . ")</option>";
                            }
                            ?>
                        </select>
                    </div>

                    <!-- Berat -->
                    <div class="mb-3">
                        <label for="berat_nilai" class="form-label">Berat</label>
                        <select class="form-select" id="berat_nilai" name="berat_nilai" aria-label="Default select example" required>
                            <option value="">Pilih Nilai</option>
                            <?php
                            $query_berat = "SELECT * FROM kriteria WHERE kriteria_1='Berat'";
                            $result_berat = mysqli_query($connect, $query_berat);
                            while ($row = mysqli_fetch_assoc($result_berat)) {
                                $value = $row['kriteria_value'];

                                if ($value < 1 && $value > 0) {
                                    $inverse = round(1 / $value, 2);
                                    $display_value = (fmod($inverse, 1) == 0) ? '1/' . round($inverse) : $value;
                                } else {
                                    $display_value = $value;
                                }

                                $selected = ($data['berat_nilai'] == $value) ? 'selected' : '';
                                echo "<option value='" . $value . "' $selected>" . $row['description'] . " Nilai = (" . $display_value . ")</option>";
                            }
                            ?>
                        </select>
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