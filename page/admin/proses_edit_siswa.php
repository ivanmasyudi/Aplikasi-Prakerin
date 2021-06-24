<?php
session_start();
include "../../koneksi.php";
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jekel = $_POST['jekel'];
    $agama = $_POST['agama'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];

    $sqledit = $conn->query("UPDATE tblsiswa SET NIS='$nis', nama='$nama', alamat='$alamat', tmpt_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', id_jk='$jekel', id_agama='$agama', id_jurusan='$jurusan', id_kelas='$kelas' WHERE id_siswa='$id'");
    $_SESSION['pesan'] = 'Data siswa dengan nama <b>'.$nama.'</b> berhasil diupdate';
    echo '<script>window.location="index.php?page=siswa"</script>';
}
?>