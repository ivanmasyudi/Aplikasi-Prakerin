<?php
session_start();
include "../../koneksi.php";
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $pass = md5($_POST['pass']);
    $level = $_POST['level'];

    $sqladd = $conn->query("INSERT INTO tbllogin VALUES(NULL,'$nama','$username','$pass','$level')");
    $_SESSION['pesan'] = 'Data berhasil datambahkan ke database';
    echo '<script>window.location="index.php?page=user"</script>';
}
?>