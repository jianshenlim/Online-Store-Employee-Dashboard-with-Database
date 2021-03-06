<?php ob_start();
session_start();
include ('connection.php');
/** @var PDO $dbh */
?>
<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Master of Wedding - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 m-lg-auto">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Employee Login</h1>
                                </div>
                                <?php

                                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                    if (!empty($_POST['username']) && !empty($_POST['password'])) {
                                        //Run some SQL query here to find that user
                                        $stmt = $dbh->prepare("SELECT * FROM `user` WHERE `user_name` = ? AND `user_pass` = ?");
                                        if ($stmt->execute([
                                                $_POST['username'],
                                                hash('sha256', $_POST['password'])
                                            ]) && $stmt->rowCount() > 0) {
                                            $row = $stmt->fetchObject();
                                            $_SESSION['user_id'] = $row->user_id;
                                            //Successfully logged in, redirect user to dashboard
                                            header("Location: index.php");
                                        } else {
                                            echo "<h1 class=\"h4 text-gray-900 mb-4\">Username or password is incorrect</h1>";
                                        }
                                    }
                                } else {
                                    if (isset($_SESSION['user_id'])) {
                                        $user_stmt = $dbh->prepare("SELECT * FROM `user` WHERE `user_id` = ?");
                                        if ($user_stmt->execute([$_SESSION['user_id']]) && $user_stmt->rowCount() == 1) {
                                            echo "You are already logged in";
                                            //User already logged in, redirect user to dashboard
                                            header("Location: index.php");
                                        } else {
                                            echo "<h1>Your account does not exist!</h1>";
                                        }
                                    }
                                }
                                ?>
                                <form method="post" class="user" action="login.php">
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control form-control-user"  placeholder="Enter User Id..." required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="password" class="form-control form-control-user"  placeholder="Password..." required>
                                    </div>
                                    <div class="form-group">

                                    </div>
                                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Login">
                                </form>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

</body>

</html>
