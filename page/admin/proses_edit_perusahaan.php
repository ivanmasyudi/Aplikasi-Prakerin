<?php
session_start();
include "../../koneksi.php";
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $fax = $_POST['fax'];

    $sqledit = $conn->query("UPDATE tblperusahaan SET nama_perusahaan='$nama', alamat_perusahaan='$alamat', telepon='$telepon', fax='$fax' WHERE id_perusahaan='$id'");
    $_SESSION['pesan'] = 'Data Perusahaan dengan nama <b>'.$nama.'</b> berhasil diupdate';
    echo '<script>window.location="index.php?page=perusahaan"</script>';
}
?>