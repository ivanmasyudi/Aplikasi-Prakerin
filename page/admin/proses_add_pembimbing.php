<?php
session_start();
include "../../koneksi.php";
if (isset($_POST['submit'])) {
    $id_guru = $_POST['id_guru'];

    $sqladd = $conn->query("INSERT INTO tblpembimbing VALUES(NULL,'$id_guru')");
    $_SESSION['pesan'] = 'Data berhasil datambahkan ke database';
    echo '<script>window.location="index.php?page=pembimbing"</script>';
}
?>