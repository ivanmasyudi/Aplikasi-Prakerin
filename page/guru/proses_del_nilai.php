<?php
session_start();
include "../../koneksi.php";
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $sqldel = $conn->query("DELETE FROM tblnilai WHERE id_nilai='$id'");
    $_SESSION['pesan'] = 'Data berhasil dihapus';
    echo '<script>window.location="index.php?page=nilai"</script>';
}
?>