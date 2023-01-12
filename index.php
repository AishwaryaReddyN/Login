<?php
include "db.php";
include "retrieve.php";
include "logic.php"

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

    <title>User Management Project</title>
</head>

<body class="bg-black">
    <div class="container text-white text-center p-5 margin">
        <em><u>
                <h3 class="text-white">User Management Project</h3>
            </u></em>
    </div>

    <?php if ($registered) { ?>
        <div class="container alert alert-success alert-dismissible fade show" role="alert">
            <strong>Registered User Successfully</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>


    <div class="container text-white rounded p-3 ">
        <h3 class="text-warning text-center p-3">REGISTER</h3>
        <form method="POST">
            <h5 class="form-label">Username</h5>
            <input type="text" name="username" required class="form-control">
            <h5 class="form-label mt-3">Email</h5>
            <input type="email" name="email" required class="form-control">
            <h5 class="form-label mt-3">Password</h5>
            <input type="password" name="password" required class="form-control">
            <h5 class="form-label mt-3">Re-Type Password</h5>
            <input type="password" name="confirmPassword" required class="form-control">
            <button type="submit" name="register" class="btn btn-outline-warning mt-3">Register</button>
        </form>
    </div>

    <h3 class="text-warning text-center p-3">LOGIN</h3>
    <div class="container text-white rounded p-3">
        <form method="POST">
            <h5 class="form-label">Username</h5>
            <input type="text" name="username" required class="form-control">
            <h5 class="form-label mt-3">Password</h5>
            <input type="password" name="password" required class="form-control">
            <button type="submit" name="login" class="btn btn-outline-warning mt-3">Login</button>
        </form>
    </div>
</body>

</html>