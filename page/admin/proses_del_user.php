<?php
session_start();
include "../../koneksi.php";
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $sqllog = $conn->query("SELECT * FROM tbllogin WHERE id='$id'");
    $datalog = $sqllog->fetch_array();
    if ($datalog['level'] == 'siswa') {
        $sqlsis = $conn->query("SELECT * FROM tblsiswa, tbllogin WHERE tblsiswa.NIS = tbllogin.user AND tbllogin.id='$id'");
        $data = $sqlsis->fetch_array();
        $idsis = $data['id_siswa'];
        $sqldelsis = $conn->query("DELETE FROM tblsiswa WHERE id_siswa='$idsis'");
        $sqldel = $conn->query("DELETE FROM tbllogin WHERE id='$id'");
        $_SESSION['pesan'] = 'Data berhasil dihapus';
        echo '<script>window.location="index.php?page=user"</script>';
    } elseif ($datalog['level'] == 'guru') {
        $sqlgur = $conn->query("SELECT * FROM tblguru, tbllogin WHERE tblguru.NIP = tbllogin.user AND tbllogin.id='$id'");
        $datagur = $sqlgur->fetch_array();
        $idgur = $datagur['id_guru'];
        echo $idgur;
        $sqldelsis = $conn->query("DELETE FROM tblguru WHERE id_guru='$idgur'");
        $sqldel = $conn->query("DELETE FROM tbllogin WHERE id='$id'");
        $_SESSION['pesan'] = 'Data berhasil dihapus';
        echo '<script>window.location="index.php?page=user"</script>';
    } else {
        $sqldel = $conn->query("DELETE FROM tbllogin WHERE id='$id'");
        $_SESSION['pesan'] = 'Data berhasil dihapus';
        echo '<script>window.location="index.php?page=user"</script>';
    }
}
?>