<!-- Modal -->
<div class="modal fade" id="exampleModal<?php echo $data['id_pembimbing']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h5 class="modal-title" id="exampleModalLabel">Edit Data Pembimbing</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="proses_edit_pembimbing.php" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?php echo $data['id_pembimbing']; ?>">
                    <div class="form-group">
                        <label for="id_guru">Nama Guru</label>
                        <select name="id_guru" id="id_guru" class="form-control">
                            <!-- Query Mengambil Data Pembimbing -->
                            <?php
                            $sqlguru = "SELECT * FROM tblguru";
                            $resultguru = $conn->query($sqlguru);
                            foreach ($resultguru as $dataguru) {
                                if ($data['id_guru'] == $dataguru['id_guru']) {
                                    $s = "Selected";
                                } else {
                                    $s = "";
                                } ?>
                                <option value="<?php echo $dataguru['id_guru']; ?>" <?php echo $s; ?>><?php echo $dataguru['nama_guru']; ?></option>
                            <?php } ?>
                        </select> 
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