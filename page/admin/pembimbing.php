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
    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
    <li class="breadcrumb-item active">Data Pembimbing</li>
</ol>
<div class="wood mb-4">
    <div class="wood-header">
        Data Pembimbing
        <a href="index.php?page=add_pembimbing" class="btn btn-primary float-md-right">Tambah</a>
    </div>
    <div class="wood-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Query Tampil Data
                    $sql = "SELECT * FROM tblpembimbing, tblguru WHERE tblpembimbing.id_guru = tblguru.id_guru";
                    $result = $conn->query($sql);
                    $no = 1;
                    if ($result->num_rows > 0) {
                        while ($data = $result->fetch_assoc()) {
                    ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['nama_guru']; ?></td>
                                <td><?php echo $data['jabatan']; ?></td>
                                <td style="width:15%;">
                                    <a data-toggle="modal" data-target="#exampleModal<?php echo $data['id_pembimbing']; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                    <a data-toggle="modal" data-target="#deleteModal<?php echo $data['id_pembimbing']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                    <?php
                            // Modal Delete Siswa
                            include "del_pembimbing.php";
                            // Modal Update Guru
                            include "edit_pembimbing.php";
                        }
                    } else {
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>