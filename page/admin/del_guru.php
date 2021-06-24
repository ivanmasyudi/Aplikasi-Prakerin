<!-- Modal -->
<div class="modal fade" id="deleteModal<?php echo $data['id_guru']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title" id="exampleModalLabel">Delete Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="proses_del_guru.php" method="POST">
                <div class="modal-body">
                <input type="hidden" name="id" value="<?php echo $data['id_guru']; ?>">
                <h5>Apakah anda yakin ingin menghapus data siswa bernama <b><?php echo $data['nama_guru']; ?></b>?</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                    <input type="submit" name="submit" value="Iya" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>