<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $data['id_nilai']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Nilai</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="proses_edit_nilai.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo $data['id_nilai']; ?>">
                    <div class="form-group">
                        <label for="nama">Nama Siswa</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $data['nama']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nilaitks">Nilai Teknis</label>
                        <input type="text" name="nilaitks" id="nilaitks" class="form-control" value="<?php echo $data['nilai_teknis']; ?>" placeholder="Masukkan Nilai Teknis" required>
                    </div>
                    <div class="form-group">
                        <label for="nilaintks">Nilai NonTeknis</label>
                        <input type="text" name="nilaintks" id="nilaintks" class="form-control" value="<?php echo $data['nilai_nonteknis']; ?>" placeholder="Masukkan Nilai NonTeknis" required>
                    </div>
                    <div class="form-group">
                        <label for="nilairt">Nilai Rata-Rata</label>
                        <input type="text" name="nilairt" id="nilairt" class="form-control" value="<?php echo $data['nilai_ratarata']; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="nilaihrf">Nilai Huruf</label>
                        <input type="text" name="nilaihrf" id="nilaihrf" class="form-control" value="<?php echo $data['nilai_huruf']; ?>" disabled>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="reset" value="reset" class="btn btn-danger">
                        <input type="submit" name="submit" value="submit" class="btn btn-success">
                    </div>
            </form>
        </div>
    </div>
</div>