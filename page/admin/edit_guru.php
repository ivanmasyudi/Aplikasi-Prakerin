<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $data['id_guru']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="proses_edit_guru.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo $data['id_guru']; ?>">
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="text" name="nip" id="nip" class="form-control" value="<?php echo $data['NIP']; ?>" placeholder="Masukkan NIP anda" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $data['nama_guru']; ?>" placeholder="Masukkan Nama anda" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo $data['alamat_guru']; ?>" placeholder="Masukkan Alamat anda" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="tmp_lahir">Tempat Lahir</label>
                            <input type="text" name="tmp_lahir" id="tmp_lahir" class="form-control" value="<?php echo $data['tmpt_lahir']; ?>" placeholder="Masukkan Tempat Lahir anda" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" id="tgl_lahir" value="<?php echo $data['tgl_lahir']; ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div>
                            <label>Jenis Kelamin</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="iradio1" name="jekel" value="P" <?php if ($data['id_jk'] == 'P') { echo 'checked'; } ?>>
                            <label class="form-check-label" for="iradio1">Perempuan</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="iradio" name="jekel" value="L" <?php if ($data['id_jk'] == 'L') { echo 'checked'; } ?>>
                            <label class="form-check-label" for="iradio">Laki-Laki</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <select name="agama" id="agama" class="form-control">
                            <!-- Query Mengambil Data Agama -->
                            <?php
                            $sqlagama = "SELECT * FROM tblagama";
                            $resultag = $conn->query($sqlagama);
                            foreach ($resultag as $dataagama) {
                                if ($data['id_agama'] == $dataagama['id_agama']) {
                                    $s = "Selected";
                                } else {
                                    $s = "";
                                } ?>
                                <option value="<?php echo $dataagama['id_agama']; ?>" <?php echo $s; ?>><?php echo $dataagama['ketagama']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" name="jabatan" id="jabatan" class="form-control" value="<?php echo $data['jabatan']; ?>" placeholder="Masukkan jabatan anda" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="reset" value="reset" class="btn btn-danger">
                        <input type="submit" name="submit" value="submit" class="btn btn-success">
                    </div>
            </form>
        </div>
    </div>
</div>