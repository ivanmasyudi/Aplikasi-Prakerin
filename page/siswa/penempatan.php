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
    <li class="breadcrumb-item active">Data Bimbingan</li>
</ol>
<div class="wood mb-4">
    <div class="wood-header">
        Data Penempatan Prakerin
    </div>
    <div class="wood-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Pembimbing</th>
                        <th>Nama Siswa</th>
                        <th>Perusahaan</th>
                        <th>Gelombang</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Query Tampil Data
                    $sql = "SELECT * FROM tblperusahaan, tblguru, tblsiswa, tblpembimbing, tblgelombang, tblpenempatan
                    WHERE tblperusahaan.id_perusahaan = tblpenempatan.id_perusahaan
                    AND tblpenempatan.id_siswa = tblsiswa.id_siswa
                    AND tblpenempatan.id_gelombang = tblgelombang.id_gelombang
                    AND tblpenempatan.id_pembimbing = tblpembimbing.id_pembimbing
                    AND tblguru.id_guru = tblpembimbing.id_guru
                    AND tblsiswa.NIS = '$_SESSION[username]'";
                    $result = $conn->query($sql);
                    $no = 1;
                    if ($result->num_rows > 0) {
                        while ($data = $result->fetch_assoc()) {
                    ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['nama_guru']; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['nama_perusahaan']; ?></td>
                                <td><?php echo $data['ketgelombang']; ?></td>
                            </tr>
                    <?php
                        }
                    } else {
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>