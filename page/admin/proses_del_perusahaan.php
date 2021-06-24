<?php
session_start();
include "../../koneksi.php";
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $sqldel = $conn->query("DELETE FROM tblperusahaan WHERE id_perusahaan='$id'");
    $_SESSION['pesan'] = 'Data berhasil dihapus';
    echo '<script>window.location="index.php?page=perusahaan"</script>';
}
?>