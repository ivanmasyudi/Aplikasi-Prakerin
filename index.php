<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Prakerin</title>
    <style>
        html,
        body,
        .container,
        .row {
            height: 100%;
        }

        body {
            background: rgb(250, 234, 237) !important;
        }
    </style>
    <link rel="stylesheet" href="assets/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center d-flex justify-content-between">
            <div class="col-md-5">
                <img src="img/Saly-1.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
                <h2>Login With Your Account</h2>
                <p class="font-italic text-muted mb-0">Nikmati memanagemen kegiatan prakerin dengan cara yang mudah.</p>
                <p class="font-italic text-muted">Si Prakerin by Ivan Masyudi </p>
            </div>
            <div class="col-md-5">
                <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "gagal") {
                        echo "<div class='alert alert-danger'>
                        <i class='fas fa-exclamation-circle'></i>
                        Username dan Password tidak sesuai !
                        </div>";
                    }
                }
                ?>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-4">
                            <h5 class="font-weight-bold text-danger text-center">Form Login</h5>
                        </div>
                        <form action="proslogin.php" method="POST">
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <div>
                                <input type="submit" name="submit" value="Login" class="btn btn-danger btn-block">
                            </div>
                        </form>
                    </div>
                </div>
                </>
            </div>
        </div>
      </div>
        <script src="assets/js/jquery-3.5.1.slim.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script>
            window.setTimeout(function() {
                $(".alert").fadeOut("slow");
            }, 5000);
        </script>
</body>

</html>
