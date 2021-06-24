<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $data['id_penempatan']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Perusahaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="proses_edit_penempatan.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo $data['id_penempatan']; ?>">
                    <div class="form-group">
                        <label for="id_pembimbing">Pembimbing</label>
                        <select name="id_pembimbing" id="id_pembimbing" class="form-control">
                            <!-- Query Mengambil pembimbing-->
                            <?php
                            $sqlpemb = "SELECT * FROM tblpembimbing, tblguru WHERE tblpembimbing.id_guru = tblguru.id_guru";
                            $resulpemb = $conn->query($sqlpemb);
                            foreach ($resulpemb as $datapemb) {
                                if ($data['id_guru'] == $datapemb['id_guru']) {
                                    $s = "Selected";
                                } else {
                                    $s = "";
                                } ?>
                                <option value="<?php echo $datapemb['id_pembimbing']; ?>" <?php echo $s; ?>><?php echo $datapemb['nama_guru']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="id_siswa">Nama Siswa</label>
                        <select name="id_siswa" id="id_siswa" class="form-control">
                            <!-- Query Mengambil pembimbing-->
                            <?php
                            $sqlsis = "SELECT * FROM tblsiswa";
                            $resulsis = $conn->query($sqlsis);
                            foreach ($resulsis as $datasis) {
                                if ($data['id_siswa'] == $datasis['id_siswa']) {
                                    $s = "Selected";
                                } else {
                                    $s = "";
                                } ?>
                                <option value="<?php echo $datasis['id_siswa']; ?>" <?php echo $s; ?>><?php echo $datasis['nama']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="id_perusahaan">Perusahaan</label>
                        <select name="id_perusahaan" id="id_perusahaan" class="form-control">
                            <!-- Query Mengambil pembimbing-->
                            <?php
                            $sqldudi = "SELECT * FROM tblperusahaan";
                            $resuldudi = $conn->query($sqldudi);
                            foreach ($resuldudi as $datadudi) {
                                if ($data['id_perusahaan'] == $datadudi['id_perusahaan']) {
                                    $s = "Selected";
                                } else {
                                    $s = "";
                                } ?>
                                <option value="<?php echo $datadudi['id_perusahaan']; ?>" <?php echo $s; ?>><?php echo $datadudi['nama_perusahaan']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="id_gelombang">Gelombang</label>
                        <select name="id_gelombang" id="id_gelombang" class="form-control">
                            <!-- Query Mengambil pembimbing-->
                            <?php
                            $sqlgel = "SELECT * FROM tblgelombang";
                            $resulgel = $conn->query($sqlgel);
                            foreach ($resulgel as $datagel) {
                                if ($data['id_gelombang'] == $datagel['id_gelombang']) {
                                    $s = "Selected";
                                } else {
                                    $s = "";
                                } ?>
                                <option value="<?php echo $datagel['id_gelombang']; ?>" <?php echo $s; ?>><?php echo $datagel['ketgelombang']; ?></option>
                            <?php } ?>
                        </select>
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