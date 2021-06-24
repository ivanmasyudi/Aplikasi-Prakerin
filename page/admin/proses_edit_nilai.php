<?php
session_start();
include "../../koneksi.php";
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
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

    $sqlnama = $conn->query("SELECT id_siswa FROM tblsiswa WHERE nama='$nama'");
    $data = $sqlnama->fetch_array();
    $id_siswa = $data['id_siswa'];

    $sqledit = $conn->query("UPDATE tblnilai SET id_siswa='$id_siswa', nilai_teknis='$nilaitks', nilai_nonteknis='$nilaintks', nilai_ratarata='$fiksrt', nilai_huruf='$fikshrf' WHERE id_nilai='$id'");
    $_SESSION['pesan'] = 'Data Penempatan berhasil diupdate';
    echo '<script>window.location="index.php?page=nilai"</script>';
}
?>