<?php
session_start();
if (isset($_SESSION["email"]) && isset($_SESSION["loggedIn"])) {

        header("Location: index.php");
        exit();
    }
if (isset($_POST["logIn"])) {
    $connection = new mysqli("localhost", "root", "Vanh2k02@", "casestudy");

    $email = $connection->real_escape_string($_POST["email"]);
    $password = sha1($connection->real_escape_string($_POST["password"]));
    $data = $connection->query("SELECT firstandlastname FROM User WHERE email='$email' AND password='$password'");

    if ($data->num_rows > 0) {
        $_SESSION["email"] = $email;
        $_SESSION["loggedIn"] = $password;
        if (empty($_SESSION["email"]) || empty($_SESSION["loggedIn"])) {
            echo '<p class="alert alert-danger" role="alert">Please check your inputs!</p>';
        } else {
            header("Location: index.php");
            exit();
        }
    }else{
        echo '<p class="alert alert-danger" role="alert">Please check your inputs!</p>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Template</title>
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet"
          href="../../CaseStudy_module2/urbanui-login-template-free-2-38baaa875b8e/assets/css/login.css">
</head>
<body>
<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
        <div class="card login-card">
            <div class="row no-gutters">
                <div class="col-md-5">
                    <img src="../../CaseStudy_module2/urbanui-login-template-free-2-38baaa875b8e/assets/images/logo_nen.png"
                         width="650px"
                         height="600px">
                </div>
                <div class="col-md-7" style="position: relative;left: 150px">
                    <div class="card-body">
                        <div class="brand-wrapper">
                            <img src="../../CaseStudy_module2/urbanui-login-template-free-2-38baaa875b8e/assets/images/logo.jpeg"
                                 style="width: 150px;height: 100px"
                                 alt="logo"
                                 class="logo">
                        </div>
                        <p class="login-card-description">Sign into your account</p>
                        <form method="post" action="login.php">
                            <div class="form-group">
                                <label for="email" class="sr-only">Email</label>
                                <input type="text" name="email" id="email" class="form-control"
                                       placeholder="Email">
                            </div>
                            <div class="form-group mb-4">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" name="password" id="password" class="form-control"
                                       placeholder="***********">
                            </div>
                            <input name="logIn" id="login" class="btn btn-block login-btn mb-4" type="submit"
                                   value="Login">

                            <a href="#!" class="forgot-password-link">Forgot password?</a>
                            <br>
                            <span class="login-card-footer-text">Don't have an account?
                                <a href="register.php">Register here
                            </span>
                        </form>
                        <nav class="login-card-footer-nav">
                            <a href="#!">Terms of use.</a>
                            <a href="#!">Privacy policy</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>

