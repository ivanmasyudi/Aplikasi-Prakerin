<?php
session_start();
include "../../koneksi.php";
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $id_pembimbing = $_POST['id_pembimbing'];
    $id_siswa = $_POST['id_siswa'];
    $id_perusahaan = $_POST['id_perusahaan'];
    $id_gelombang = $_POST['id_gelombang'];

    $sqledit = $conn->query("UPDATE tblpenempatan SET id_pembimbing='$id_pembimbing', id_siswa='$id_siswa', id_perusahaan='$id_perusahaan', id_gelombang='$id_gelombang' WHERE id_penempatan='$id'");
    $_SESSION['pesan'] = 'Data Penempatan berhasil diupdate';
    echo '<script>window.location="index.php?page=penempatan"</script>';
}
?>