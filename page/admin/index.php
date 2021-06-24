<?php
session_start();
include "../../koneksi.php";
if($_SESSION['level']!='admin' || empty($_SESSION['login'])){
    header("location:../../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<?php include "head.php"; ?>

<body class="sb-nav-fixed">
    <!-- Navbar -->
    <?php include "navbar.php"; ?>
    <div id="layoutSidenav">
        <!-- Sidenav -->
        <div id="layoutSidenav_nav">
            <?php include "sidenav.php"; ?>
        </div>
        <!-- Content -->
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <?php
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];

                        switch ($page) {
                            case 'siswa':
                                include "siswa.php";
                                break;
                            case 'guru':
                                include "guru.php";
                                break;
                            case 'perusahaan':
                                include "perusahaan.php";
                                break;
                            case 'pembimbing':
                                include "pembimbing.php";
                                break;
                            case 'penempatan':
                                include "penempatan.php";
                                break;
                            case 'nilai':
                                include "nilai.php";
                                break;
                            case 'user':
                                include "user.php";
                                break;
                            case 'add_siswa':
                                include "add_siswa.php";
                                break;
                            case 'add_guru':
                                include "add_guru.php";
                                break;
                            case 'add_perusahaan':
                                include "add_perusahaan.php";
                                break;
                            case 'add_pembimbing':
                                include "add_pembimbing.php";
                                break;
                            case 'add_penempatan':
                                include "add_penempatan.php";
                                break;
                            case 'add_nilai':
                                include "add_nilai.php";
                                break;
                            case 'add_user':
                                include "add_user.php";
                                break;
                            default:
                                include "404.php";
                                break;
                        }
                    } else {
                        include "welcome.php";
                    }
                    ?>
                </div>
            </main>
            <footer class="py-4 bg-white mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Ivan Masyudi 2020</div>
                        <!-- <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div> -->
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <?php include "footer.php"; ?>
</body>

</html>