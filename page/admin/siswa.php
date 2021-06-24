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
    <li class="breadcrumb-item active">Data Siswa</li>
</ol>
<div class="wood mb-4">
    <div class="wood-header">
        Data Siswa
        <a href="index.php?page=add_siswa" class="btn btn-primary float-md-right">Tambah</a>
    </div>
    <div class="wood-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Jurusan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Query Tampil Data
                    $sql = "SELECT * FROM tblsiswa,tbljurusan,tblagama,tbljk,tblkelas WHERE tbljk.id_jk = tblsiswa.id_jk AND tblsiswa.id_agama = tblagama.id_agama AND tblsiswa.id_jurusan = tbljurusan.id_jurusan AND tblsiswa.id_kelas = tblkelas.id_kelas";
                    $result = $conn->query($sql);
                    $no = 1;
                    if ($result->num_rows > 0) {
                        while ($data = $result->fetch_assoc()) {
                    ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['NIS']; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['ketjk']; ?></td>
                                <td><?php echo $data['ketjurusan']; ?></td>
                                <td>
                                    <a data-toggle="modal" data-target="#exampleModal<?php echo $data['id_siswa']; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                    <a data-toggle="modal" data-target="#deleteModal<?php echo $data['id_siswa']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                    <?php
                            //  Modal Update Siswa
                            include "edit_siswa.php";
                            // Modal Delete Siswa
                            include "del_siswa.php";
                        }
                    } else {
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
