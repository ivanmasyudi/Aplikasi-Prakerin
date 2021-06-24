<?php
?>
<ol class="breadcrumb mb-4 mt-4">
    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="index.php?page=guru">Data Penempatan</a></li>
    <li class="breadcrumb-item active">Tambah Data Penempatan</li>
</ol>
<div class="wood mb-4">
    <div class="wood-header">
        Tambah Data Penempatan
    </div>
    <div class="wood-body">
        <form action="proses_add_penempatan.php" method="POST">
            <input type="hidden" name="id">
            <div class="form-group">
                <label for="id_pembimbing">Pembimbing</label>
                <select name="id_pembimbing" id="id_pembimbing" class="form-control">
                    <!-- Query Mengambil pembimbing-->
                    <?php
                    $sqlpemb = "SELECT * FROM tblpembimbing, tblguru WHERE tblpembimbing.id_guru = tblguru.id_guru";
                    $resulpemb = $conn->query($sqlpemb);
                    foreach ($resulpemb as $datapemb) { ?>
                        <option value="<?php echo $datapemb['id_pembimbing']; ?>"><?php echo $datapemb['nama_guru']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="id_siswa">Nama Siswa</label>
                <select name="id_siswa" id="id_siswa" class="form-control">
                    <!-- Query Mengambil pembimbing-->
                    <?php
                    $sqlsis = "SELECT * FROM tblsiswa WHERE tblsiswa.id_siswa
                    NOT IN (SELECT tblpenempatan.id_siswa FROM tblpenempatan)";
                    $resulsis = $conn->query($sqlsis);
                    foreach ($resulsis as $datasis) { ?>
                        <option value="<?php echo $datasis['id_siswa']; ?>"><?php echo $datasis['nama']; ?></option>
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
                    foreach ($resuldudi as $datadudi) { ?>
                        <option value="<?php echo $datadudi['id_perusahaan']; ?>"><?php echo $datadudi['nama_perusahaan']; ?></option>
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
                    foreach ($resulgel as $datagel) { ?>
                        <option value="<?php echo $datagel['id_gelombang']; ?>"><?php echo $datagel['ketgelombang']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="submit" class="btn btn-success">
                <input type="reset" value="reset" class="btn btn-danger">
            </div>
        </form>
    </div>
</div>