<?php
session_start();
include "../../koneksi.php";
if (isset($_POST['submit'])) {
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jekel = $_POST['jekel'];
    $agama = $_POST['agama'];
    $jabatan = $_POST['jabatan'];
    // login
    $user = $_POST['nip'];
    $pass = md5($_POST['nip']);
    $level = 'guru';

    $sqladd = $conn->query("INSERT INTO tblguru VALUES(NULL,'$nip','$nama','$alamat','$tmp_lahir','$tgl_lahir','$jekel','$agama','$jabatan')");

    $sqluser = $conn->query("INSERT INTO tbllogin VALUES(NULL,'$nama','$user','$pass','$level')");
    $_SESSION['pesan'] = 'Data berhasil datambahkan ke database';
    echo '<script>window.location="index.php?page=guru"</script>';
}
?>