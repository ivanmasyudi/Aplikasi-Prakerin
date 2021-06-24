<?php
?>
<ol class="breadcrumb mb-4 mt-4">
    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="index.php?page=siswa">Data Siswa</a></li>
    <li class="breadcrumb-item active">Tambah Data Siswa</li>
</ol>
<div class="wood mb-4">
    <div class="wood-header">
        Tambah Data Siswa
    </div>
    <div class="wood-body">
        <form action="proses_add_siswa.php" method="POST">
            <input type="hidden" name="id">
            <div class="form-group">
                <label for="nis">NIS</label>
                <input type="text" name="nis" id="nis" class="form-control" placeholder="Masukkan NIS anda" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama anda" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat anda" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tmp_lahir">Tempat Lahir</label>
                    <input type="text" name="tmp_lahir" id="tmp_lahir" class="form-control" placeholder="Masukkan Tempat Lahir anda" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin</label></br>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="customRadio" name="jekel" value="P" required>
                    <label class="custom-control-label" for="customRadio">Perempuan</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input type="radio" class="custom-control-input" id="customRadio2" name="jekel" value="L">
                    <label class="custom-control-label" for="customRadio2">Laki-Laki</label>
                </div>
            </div>
            <div class="form-group">
                <label for="agama">Agama</label>
                <select name="agama" id="agama" class="form-control">
                    <!-- Query Mengambil Data Agama -->
                    <?php
                    $sqlagama = "SELECT * FROM tblagama";
                    $resultag = $conn->query($sqlagama);
                    ?>
                    <?php foreach ($resultag as $dataagama) { ?>
                        <option value="<?php echo $dataagama['id_agama']; ?>"><?php echo $dataagama['ketagama']; ?></option>
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
                    foreach ($resuljur as $datajurusan) { ?>
                        <option value="<?php echo $datajurusan['id_jurusan']; ?>"><?php echo $datajurusan['ketjurusan']; ?></option>
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
                    foreach ($resulkel as $datakelas) { ?>
                        <option value="<?php echo $datakelas['id_kelas']; ?>"><?php echo $datakelas['ketkelas']; ?></option>
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