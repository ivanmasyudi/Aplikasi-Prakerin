<?php
session_start();
include "../../koneksi.php";
if ($_SESSION['level'] != 'guru' || empty($_SESSION['login'])) {
    header("location:../../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<?php include "head.php"; ?>

<body>
    <!-- Navbar -->
    <?php include "navbar.php"; ?>
    <!-- Container -->
    <div class="wrapper">
        <div class="container">
            <!-- Content -->
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
    </div>
    <!-- Footer -->
    <footer class="py-4 bg-dark mt-auto sticky-bottom">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Ivan Masyudi 2020</p>
        </div>
        <!-- /.container -->
    </footer>
    <!-- Javascript -->
    <?php include "footer.php"; ?>
</body>

</html>