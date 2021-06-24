<?php
?>
<ol class="breadcrumb mb-4 mt-4">
    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="index.php?page=guru">Data User</a></li>
    <li class="breadcrumb-item active">Tambah Data User</li>
</ol>
<div class="wood mb-4">
    <div class="wood-header">
        Tambah Data User
    </div>
    <div class="wood-body">
        <form action="proses_add_user.php" method="POST">
            <input type="hidden" name="id">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama" required>
            </div>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan Username" required>
            </div>
            <div class="form-group">
                <label for="pass">Password</label>
                <input type="text" name="pass" id="pass" class="form-control" placeholder="Masukkan Password" required>
            </div>
            <div class="form-group">
                <label for="level">Level</label>
                <input type="text" name="level" id="level" class="form-control" value="admin" readonly>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="submit" class="btn btn-success">
                <input type="reset" value="reset" class="btn btn-danger">
            </div>
        </form>
    </div>
</div>