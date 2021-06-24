<?php
session_start();
include "../../koneksi.php";
if (isset($_POST['submit'])) {
    $id_pembimbing = $_POST['id_pembimbing'];
    $id_siswa = $_POST['id_siswa'];
    $id_perusahaan = $_POST['id_perusahaan'];
    $id_gelombang = $_POST['id_gelombang'];

    $sqladd = $conn->query("INSERT INTO tblpenempatan VALUES(NULL,'$id_pembimbing','$id_siswa','$id_perusahaan','$id_gelombang')");
    $_SESSION['pesan'] = 'Data berhasil datambahkan ke database';
    echo '<script>window.location="index.php?page=penempatan"</script>';
}
?>