<?php
session_start();
include "../../koneksi.php";
if (isset($_POST['submit'])) {
    $id_siswa = $_POST['id_siswa'];
    $nilaitks = $_POST['nilaitks'];
    $nilaintks = $_POST['nilaintks'];
    $fiksrt = ($nilaitks + $nilaintks) / 2;
    if ($fiksrt <= 100 AND $fiksrt >= 85) {
        $fikshrf = "A";
    } else if ($fiksrt < 85 AND $fiksrt >= 80) {
        $fikshrf = "A-";
    } else if ($fiksrt < 80 AND $fiksrt >= 75) {
        $fikshrf = "B+";
    } else if ($fiksrt < 75 AND $fiksrt >= 70) {
        $fikshrf = "B";
    } else if ($fiksrt < 70 AND $fiksrt >= 65) {
        $fikshrf = "B-";
    } else if ($fiksrt < 65 AND $fiksrt >= 60) {
        $fikshrf = "C+";
    } else if ($fiksrt < 60 AND $fiksrt >= 55) {
        $fikshrf = "C";
    } else if ($fiksrt < 55 AND $fiksrt >= 40) {
        $fikshrf = "D";
    } else {
        $fikshrf = "E";
    }

    $sqladd = $conn->query("INSERT INTO tblnilai VALUES(NULL,'$id_siswa','$nilaitks','$nilaintks','$fiksrt','$fikshrf')");
    $_SESSION['pesan'] = 'Data berhasil datambahkan ke database';
    echo '<script>window.location="index.php?page=nilai"</script>';
}
?>