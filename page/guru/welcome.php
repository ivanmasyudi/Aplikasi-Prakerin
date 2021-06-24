<div class="wood bg-white mt-4 mb-4 p-3">
    <div class="wood-body">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-sm-6 col-md-6">
                <h3 class="mb-4 text-purple">Selamat datang, <?php echo $_SESSION['nama_user'] ?></h3>
                <h6 class="text-secondary">Anda login sebagai <b><?php echo $_SESSION['level']; ?></b> selamat beranventure di aplikasi prakerin ini.</h6>
            </div>
            <div class="img-content col-sm-6 col-md-6 justify-content-end">
            <img src="../../img/undraw_design_components_9vy6.svg" alt="" class="img-fluid d-none d-md-block">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-6 col-md-6">
        <div class="wood text-white mb-4">
            <div class="wood-body">
                <div class="row">
                    <div class="col-sm-6 col-md-6 text-dark d-flex justify-content-start align-items-center">
                        <div class="d-flex flex-column justify-content-start align-items-start">
                            <span class="mb-0 font-weight-bold capt-h1">
                                <?php
                                $querybim = "SELECT * FROM tblperusahaan, tblguru, tblsiswa, tblpembimbing, tblgelombang, tblpenempatan
                                WHERE tblperusahaan.id_perusahaan = tblpenempatan.id_perusahaan
                                AND tblpenempatan.id_siswa = tblsiswa.id_siswa
                                AND tblpenempatan.id_gelombang = tblgelombang.id_gelombang
                                AND tblpenempatan.id_pembimbing = tblpembimbing.id_pembimbing
                                AND tblguru.id_guru = tblpembimbing.id_guru
                                AND tblguru.NIP = '$_SESSION[username]'";
                                $sql11 = $conn->query($querybim);
                                $result = $sql11->num_rows;
                                echo $result;
                                ?>
                            </span>
                            <span class="mt-0 pt-0 text-muted capt-h6">Siswa Bimbingan</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 text-dark d-flex justify-content-end align-items-center">
                        <div class="circle-icon d-flex justify-content-center align-items-center clr-red">
                            <span class=""><i class="fas fa-user"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-md-6">
        <div class="wood text-white mb-4">
            <div class="wood-body">
                <div class="row">
                    <div class="col-sm-6 col-md-6 text-dark d-flex justify-content-start align-items-center">
                        <div class="d-flex flex-column justify-content-start align-items-start">
                            <span class="mb-0 font-weight-bold capt-h1">
                                <?php
                                $queryni = "SELECT * FROM tblsiswa, tblguru, tblpenempatan, tblpembimbing
                                WHERE tblsiswa.id_siswa NOT IN (SELECT tblnilai.id_siswa FROM tblnilai)
                                AND tblpenempatan.id_pembimbing = tblpembimbing.id_pembimbing
                                AND tblguru.id_guru = tblpembimbing.id_guru
                                AND tblsiswa.id_siswa = tblpenempatan.id_siswa
                                AND tblguru.NIP = '$_SESSION[username]'";
                                $sql12 = $conn->query($queryni);
                                $result12 = $sql12->num_rows;
                                echo $result12;
                                ?>
                            </span>
                            <span class="mt-0 pt-0 capt-h6">Siswa Belum dinilai</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 text-dark d-flex justify-content-end align-items-center">
                        <div class="circle-icon d-flex justify-content-center align-items-center clr-orange">
                            <span class=""><i class="fas fa-user"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>