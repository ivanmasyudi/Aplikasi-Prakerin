<div class="row">
    <div class="col-md-12">
        <div class="mt-4">
            <?php
            //        menampilkan pesan jika ada pesan
            if (isset($_SESSION['pesan']) && $_SESSION['pesan'] != '') {
                echo '<div class="alert alert-success">' . $_SESSION['pesan'] . '</div>';
            } else {
            }
            //        mengatur session pesan menjadi kosong
            $_SESSION['pesan'] = '';
            ?>
        </div>
        <ol class="breadcrumb mb-4 mt-4 bg-white">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Data User</li>
        </ol>
    </div>
    <div class="col-md-6">
        <div class="wood mb-4">
            <div class="wood-header">
                Data User
            </div>
            <div class="wood-body">
                <?php
                // Query Tampil Data
                $sql = "SELECT * FROM tblsiswa,tbljurusan,tblagama,tbljk,tblkelas
                        WHERE tbljk.id_jk = tblsiswa.id_jk
                        AND tblsiswa.id_agama = tblagama.id_agama
                        AND tblsiswa.id_jurusan = tbljurusan.id_jurusan
                        AND tblsiswa.id_kelas = tblkelas.id_kelas
                        AND tblsiswa.NIS = '$_SESSION[username]'";
                $result = $conn->query($sql);
                $no = 1;
                if ($result->num_rows > 0) {
                    while ($data = $result->fetch_assoc()) {
                ?>
                        <form>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label font-weight-bold">NIS</label>
                                <div class="col-sm-9">
                                    <label class="col-form-label"><?php echo $data['NIS']; ?></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label font-weight-bold">Nama</label>
                                <div class="col-sm-9">
                                    <label class="col-form-label"><?php echo $data['nama']; ?></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label font-weight-bold">Alamat</label>
                                <div class="col-sm-9">
                                    <label class="col-form-label"><?php echo $data['alamat']; ?></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label font-weight-bold">Tempat Lahir</label>
                                <div class="col-sm-9">
                                    <label class="col-form-label"><?php echo $data['tmpt_lahir']; ?></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label font-weight-bold">Tanggal Lahir</label>
                                <div class="col-sm-9">
                                    <label class="col-form-label"><?php echo $data['tgl_lahir']; ?></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label font-weight-bold">Jenis Kelamin</label>
                                <div class="col-sm-9">
                                    <label class="col-form-label"><?php echo $data['ketjk']; ?></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label font-weight-bold">Agama</label>
                                <div class="col-sm-9">
                                    <label class="col-form-label"><?php echo $data['ketagama']; ?></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label font-weight-bold">Jurusan</label>
                                <div class="col-sm-9">
                                    <label class="col-form-label"><?php echo $data['ketjurusan']; ?></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label font-weight-bold">Kelas</label>
                                <div class="col-sm-9">
                                    <label class="col-form-label"><?php echo $data['ketkelas']; ?></label>
                                </div>
                            </div>
                        </form>
                <?php }
                } ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="wood mb-4">
            <div class="wood-header">
                Data Akun
            </div>
            <div class="wood-body">
                <?php
                // Query Tampil Data
                $sql = "SELECT * FROM tbllogin WHERE user='$_SESSION[username]'";
                $result = $conn->query($sql);
                $no = 1;
                if ($result->num_rows > 0) {
                    while ($data = $result->fetch_assoc()) {
                ?>
                        <form>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label font-weight-bold">Nama</label>
                                <div class="col-sm-9">
                                    <label class="col-form-label"><?php echo $data['nama_user']; ?></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label font-weight-bold">Username</label>
                                <div class="col-sm-9">
                                    <label class="col-form-label"><?php echo $data['user']; ?></label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-3 col-form-label font-weight-bold">Level</label>
                                <div class="col-sm-9">
                                    <label class="col-form-label"><?php echo $data['level']; ?></label>
                                </div>
                            </div>
                        </form>
                <?php }
                } ?>
            </div>
        </div>
    </div>
</div>