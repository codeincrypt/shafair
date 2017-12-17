<?php
include "admin/function.php";
$connection = new dbconnect();
$login = new login();
session_start();
    if(isset($_SESSION['shafair'])){
        header ("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login | epurnea.com</title>
    <?php include "include/links.php"; ?>
</head>

<body class="bg-faded">
    <div class="col-lg-12 row mt-5">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 card p-5 m-4">
            <form action="login.php" method="post">
                <div class="form-group text-center bg-inverse p-3">
                   <img src="Image/logo.png" alt="">
                    <h5 class="text-white p-2">Admin Panel</h5>
                    <p class="text-white">Please enter your user information</p>
                </div>
                <div class="form-group text-center">
                    <label for="Username" class="text-center">Username</label>
                    <input type="email" class="form-control form-control-sm" id="smFormGroupInput" placeholder="Email" name="username">
                </div>
                <div class="form-group text-center">
                   <label for="Password" class="text-center">Password</label>
                    <input type="password" class="form-control form-control-sm" id="smFormGroupInput" placeholder="Password" name="password">
                </div>
                <button class="btn btn-primary btn-block btn-sm" name="login">Login</button>
            </form>
                <div class="form-group text-center bg-inverse p-4 mt-3">
                    <a href="index.php" class="btn btn-info btn-sm">Back to Home</a>
                </div>
            <?php if(isset($_POST['login'])){ $login->admin(); } ?>
        </div>
        <div class="col-lg-3"></div>
    </div>
</body>

</html>
