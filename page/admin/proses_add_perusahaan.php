<?php
session_start();
include "../../koneksi.php";
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $fax = $_POST['fax'];

    $sqladd = $conn->query("INSERT INTO tblperusahaan VALUES(NULL,'$nama','$alamat','$telepon','$fax')");
    $_SESSION['pesan'] = 'Data berhasil datambahkan ke database';
    echo '<script>window.location="index.php?page=perusahaan"</script>';
}
?>