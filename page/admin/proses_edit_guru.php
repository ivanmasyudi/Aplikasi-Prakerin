<?php
session_start();
include "../../koneksi.php";
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jekel = $_POST['jekel'];
    $agama = $_POST['agama'];
    $jabatan = $_POST['jabatan'];

    $sqledit = $conn->query("UPDATE tblguru SET NIP='$nip', nama_guru='$nama', alamat_guru='$alamat', tmpt_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', id_jk='$jekel', id_agama='$agama', jabatan='$jabatan' WHERE id_guru='$id'");
    $_SESSION['pesan'] = 'Data siswa dengan nama <b>'.$nama.'</b> berhasil diupdate';
    echo '<script>window.location="index.php?page=guru"</script>';
}
?>