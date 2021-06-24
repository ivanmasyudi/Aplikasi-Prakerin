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
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item active">Data Nilai</li>
</ol>
<div class="wood mb-4">
    <div class="wood-header">
        Data Nilai Siswa Bimbingan
        <a href="index.php?page=add_nilai" class="btn btn-primary float-md-right">Tambah</a>
    </div>
    <div class="wood-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Nilai Teknis</th>
                        <th>Nilai NonTeknis</th>
                        <th>Rata-Rata</th>
                        <th>Nilai Huruf</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Query Tampil Data
                    $sql = "SELECT * FROM tblnilai, tblsiswa, tblpembimbing, tblpenempatan, tblguru
                    WHERE tblsiswa.id_siswa = tblnilai.id_siswa
                    AND tblguru.id_guru = tblpembimbing.id_guru
                    AND tblsiswa.id_siswa = tblpenempatan.id_siswa
                    AND tblpembimbing.id_pembimbing = tblpenempatan.id_pembimbing
                    AND tblguru.NIP = '$_SESSION[username]'";
                    $result = $conn->query($sql);
                    $no = 1;
                    if ($result->num_rows > 0) {
                        while ($data = $result->fetch_assoc()) {
                    ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['nilai_teknis']; ?></td>
                                <td><?php echo $data['nilai_nonteknis']; ?></td>
                                <td><?php echo $data['nilai_ratarata']; ?></td>
                                <td><?php echo $data['nilai_huruf']; ?></td>
                                <td style="width: 12%;">
                                    <a data-toggle="modal" data-target="#exampleModal<?php echo $data['id_nilai']; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                    <a data-toggle="modal" data-target="#deleteModal<?php echo $data['id_nilai']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                    <?php
                            // Modal Delete Siswa
                            include "del_nilai.php";
                            // Modal Update Guru
                            include "edit_nilai.php";
                        }
                    } else {
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>