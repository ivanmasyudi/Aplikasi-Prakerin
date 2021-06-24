<?php
session_start();
include "../../koneksi.php";
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $sqldel = $conn->query("DELETE FROM tblpenempatan WHERE id_penempatan='$id'");
    $_SESSION['pesan'] = 'Data berhasil dihapus';
    echo '<script>window.location="index.php?page=penempatan"</script>';
}
?>