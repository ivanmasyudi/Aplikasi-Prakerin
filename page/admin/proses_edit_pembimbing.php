<?php
session_start();
include "../../koneksi.php";
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $id_guru = $_POST['id_guru'];
    $sqlcek = $conn->query("SELECT id_guru FROM tblpembimbing WHERE id_pembimbing='$id'");
    $data = $sqlcek->fetch_array();
    if ($id_guru == $data['id_guru']) {
        $_SESSION['pesan'] = 'Nama guru yang dipilih sudah menjadi pembimbing';
        echo '<script>window.location="index.php?page=pembimbing"</script>';
    } else {
        $sqledit = $conn->query("UPDATE tblpembimbing SET id_guru='$id_guru' WHERE id_pembimbing='$id'");
        $_SESSION['pesan'] = 'Data Pembimbing berhasil diupdate';
        echo '<script>window.location="index.php?page=pembimbing"</script>';
    }
}
?>