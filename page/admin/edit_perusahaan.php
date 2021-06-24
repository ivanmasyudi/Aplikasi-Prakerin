<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $data['id_perusahaan']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Perusahaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="proses_edit_perusahaan.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo $data['id_perusahaan']; ?>">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $data['nama_perusahaan']; ?>" placeholder="Masukkan Nama Perusahaan" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat Perusahaan" required><?php echo $data['alamat_perusahaan']; ?></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="telepon">No.Telepon</label>
                            <input type="text" name="telepon" id="telepon" class="form-control" value="<?php echo $data['telepon']; ?>" placeholder="Masukkan No Telepon Perusahaan" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fax">Fax</label>
                            <input type="text" name="fax" id="fax" class="form-control" value="<?php echo $data['fax']; ?>" placeholder="Masukkan No Fax Perusahaan" required>
                        </div>
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