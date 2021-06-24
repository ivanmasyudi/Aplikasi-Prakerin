<!-- Modal -->
<div class="modal fade" id="deleteModal<?php echo $data['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title" id="exampleModalLabel">Delete Data User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="proses_del_user.php" method="POST">
                <div class="modal-body">
                <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                <h5>Apakah anda yakin ingin menghapus data ?</h5>
                <p class="text-muted">Data user yang dihapus akan menghapus data siswa yang bersangkutan.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                    <input type="submit" name="submit" value="Iya" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
</div>