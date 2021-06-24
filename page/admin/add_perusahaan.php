<?php
?>
<ol class="breadcrumb mb-4 mt-4">
    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="index.php?page=guru">Data Perusahaan</a></li>
    <li class="breadcrumb-item active">Tambah Data Perusahaan</li>
</ol>
<div class="wood mb-4">
    <div class="wood-header">
        Tambah Data Perusahaan
    </div>
    <div class="wood-body">
        <form action="proses_add_perusahaan.php" method="POST">
            <input type="hidden" name="id">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Perusahaan" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat Perusahaan" required></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="telepon">No.Telepon</label>
                    <input type="text" name="telepon" id="telepon" class="form-control" placeholder="Masukkan No Telepon Perusahaan" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="fax">Fax</label>
                    <input type="text" name="fax" id="fax" class="form-control" placeholder="Masukkan No Fax Perusahaan" required>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="submit" class="btn btn-success">
                <input type="reset" value="reset" class="btn btn-danger">
            </div>
        </form>
    </div>
</div>