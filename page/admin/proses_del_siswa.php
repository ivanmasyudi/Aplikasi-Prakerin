<?php
session_start();
include "../../koneksi.php";
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $sqlacc = $conn->query("SELECT NIS FROM tblsiswa WHERE id_siswa='$id'");
    $data = $sqlacc->fetch_array();
    $nis = $data['NIS'];

    $sqldel = $conn->query("DELETE FROM tblsiswa WHERE id_siswa='$id'");
    $sqluser = $conn->query("DELETE FROM tbllogin WHERE user='$nis'");
    $_SESSION['pesan'] = 'Data berhasil dihapus';
    echo '<script>window.location="index.php?page=siswa"</script>';
}
?>