<?php
?>
<ol class="breadcrumb mb-4 mt-4">
    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="index.php?page=guru">Data Guru</a></li>
    <li class="breadcrumb-item active">Tambah Data Guru</li>
</ol>
<div class="wood mb-4">
    <div class="wood-header">
        Tambah Data Guru
    </div>
    <div class="wood-body">
        <form action="proses_add_guru.php" method="POST">
            <input type="hidden" name="id">
            <div class="form-group">
                <label for="nip">NIP</label>
                <input type="text" name="nip" id="nip" class="form-control" placeholder="Masukkan NIP anda" required>
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
                <label for="jabatan">Jabatan</label>
                <input type="text" name="jabatan" id="jabatan" class="form-control" placeholder="Masukkan jabatan anda" required>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="submit" class="btn btn-success">
                <input type="reset" value="reset" class="btn btn-danger">
            </div>
        </form>
    </div>
</div>