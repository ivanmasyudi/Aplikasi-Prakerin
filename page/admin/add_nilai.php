<?php
?>
<ol class="breadcrumb mb-4 mt-4">
    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="index.php?page=guru">Data Nilai</a></li>
    <li class="breadcrumb-item active">Tambah Data Nilai</li>
</ol>
<div class="wood mb-4">
    <div class="wood-header">
        Tambah Data Nilai
    </div>
    <div class="wood-body">
        <form action="proses_add_nilai.php" method="POST">
            <input type="hidden" name="id">
            <div class="form-group">
                <label for="id_siswa">Nama Siswa</label>
                <select name="id_siswa" id="id_siswa" class="form-control">
                    <!-- Query Mengambil pembimbing-->
                    <?php
                    $sqlsis = "SELECT * FROM tblsiswa WHERE tblsiswa.id_siswa
                    NOT IN (SELECT tblnilai.id_siswa FROM tblnilai)";
                    $resulsis = $conn->query($sqlsis);
                    foreach ($resulsis as $datasis) { ?>
                        <option value="<?php echo $datasis['id_siswa']; ?>"><?php echo $datasis['nama']; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="nilaitks">Nilai Teknis</label>
                <input type="text" name="nilaitks" id="nilaitks" class="form-control" placeholder="Masukkan Nilai Teknis" required>
            </div>
            <div class="form-group">
                <label for="nilaintks">Nilai NonTeknis</label>
                <input type="text" name="nilaintks" id="nilaintks" class="form-control" placeholder="Masukkan Nilai NonTeknis" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="submit" class="btn btn-success">
                <input type="reset" value="reset" class="btn btn-danger">
            </div>
        </form>
    </div>
</div>