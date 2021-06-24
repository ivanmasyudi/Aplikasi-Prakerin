<?php
session_start();
include "../../koneksi.php";
if (isset($_POST['submit'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jekel = $_POST['jekel'];
    $agama = $_POST['agama'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];
    // login
    $user = $_POST['nis'];
    $pass = md5($_POST['nis']);
    $level = 'siswa';

    // echo $id, $nis, $nama, $alamat, $tmp_lahir, $tgl_lahir, $jekel, $agama, $jurusan, $kelas;

    $sqladd = $conn->query("INSERT INTO tblsiswa VALUES(NULL,'$nis','$nama','$alamat','$tmp_lahir','$tgl_lahir','$jekel','$agama','$jurusan','$kelas')");

    $sqluser = $conn->query("INSERT INTO tbllogin VALUES(NULL,'$nama','$user','$pass','$level')");
    $_SESSION['pesan'] = 'Data berhasil datambahkan ke database';
    echo '<script>window.location="index.php?page=siswa"</script>';
}
?>