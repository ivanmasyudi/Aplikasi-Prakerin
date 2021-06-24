<?php
session_start();
include "../../koneksi.php";
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $sqldel = $conn->query("DELETE FROM tblpembimbing WHERE id_pembimbing='$id'");
    $_SESSION['pesan'] = 'Data berhasil dihapus';
    echo '<script>window.location="index.php?page=pembimbing"</script>';
}
?>