<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $data['id_siswa']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="proses_edit_siswa.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo $data['id_siswa']; ?>">
                    <div class="form-group">
                        <label for="nis">NIS</label>
                        <input type="text" name="nis" id="nis" class="form-control" value="<?php echo $data['NIS']; ?>" placeholder="Masukkan NIS anda" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $data['nama']; ?>" placeholder="Masukkan Nama anda" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo $data['alamat']; ?>" placeholder="Masukkan Alamat anda" required>
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
                            <input type="radio" class="form-check-input" id="iradio1" name="jekel" value="P" <?php if ($data['id_jk'] == 'P') {echo 'checked'; } ?> >
                            <label class="form-check-label" for="iradio1">Perempuan</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="iradio" name="jekel" value="L" <?php if ($data['id_jk'] == 'L') {echo 'checked'; } ?> >
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
                        <label for="jurusan">Jurusan</label>
                        <select name="jurusan" id="jurusan" class="form-control">
                            <!-- Query Mengambil Data Jurusan -->
                            <?php
                            $sqljurusan = "SELECT * FROM tbljurusan";
                            $resuljur = $conn->query($sqljurusan);
                            foreach ($resuljur as $datajurusan) {
                                if ($data['id_jurusan'] == $datajurusan['id_jurusan']) {
                                    $s = "Selected";
                                } else {
                                    $s = "";
                                } ?>
                                <option value="<?php echo $datajurusan['id_jurusan']; ?>" <?php echo $s; ?>><?php echo $datajurusan['ketjurusan']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kelas">kelas</label>
                        <select name="kelas" id="kelas" class="form-control">
                            <!-- Query Mengambil Data Kelas-->
                            <?php
                            $sqlkelas = "SELECT * FROM tblkelas";
                            $resulkel = $conn->query($sqlkelas);
                            foreach ($resulkel as $datakelas) {
                                if ($data['id_kelas'] == $datakelas['id_kelas']) {
                                    $s = "Selected";
                                } else {
                                    $s = "";
                                } ?>
                                <option value="<?php echo $datakelas['id_kelas']; ?>" <?php echo $s; ?>><?php echo $datakelas['ketkelas']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
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