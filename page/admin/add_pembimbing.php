<?php
?>
<ol class="breadcrumb mb-4 mt-4">
    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="index.php?page=guru">Data Pembimbing</a></li>
    <li class="breadcrumb-item active">Tambah Data Pembimbing</li>
</ol>
<div class="wood mb-4">
    <div class="wood-header">
        Tambah Data Pembimbing
    </div>
    <div class="wood-body">
        <form action="proses_add_pembimbing.php" method="POST">
            <input type="hidden" name="id">
            <div class="form-group">
                <label for="id_guru">Nama Guru</label>
                <select name="id_guru" id="id_guru" class="form-control">
                    <!-- Query Mengambil Data Agama -->
                    <?php
                    $sqlguru = "SELECT * FROM tblguru";
                    $resultag = $conn->query($sqlguru);
                    ?>
                    <?php foreach ($resultag as $dataguru) { ?>
                        <option value="<?php echo $dataguru['id_guru']; ?>"><?php echo $dataguru['nama_guru']; ?></option>
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