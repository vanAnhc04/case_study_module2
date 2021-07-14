<?php
if (isset($_POST["register"])) {
    $connection = new mysqli("localhost", "root", "Vanh2k02@", "casestudy");
    $firstAndLastName = $connection->real_escape_string($_POST["firstAndLastName"]);
    $dateOfBirth = $connection->real_escape_string($_POST["dateOfBirth"]);
    $userName = $connection->real_escape_string($_POST["userName"]);
    $passWord = sha1($connection->real_escape_string($_POST["passWord"]));
    $phone = $connection->real_escape_string($_POST["phone"]);
    $email = $connection->real_escape_string($_POST["email"]);
    $area = $connection->real_escape_string($_POST["area"]);
    $data = $connection->query("INSERT INTO User (`firstandlastname`, `dateofbirth`, `username`, `password`, `phone`, `email`, `area`) VALUES ('$firstAndLastName', '$dateOfBirth', '$userName', '$passWord','$phone','$email','$area')");
    if ($data === false) {
        echo "Connection error!";
    } else {
        header('location: login.php');
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form method="post" id="commentForm">
        <div class="form-group">
            <label for="exampleInputEmail1">First And Last Name</label>
            <input type="text" name="firstAndLastName" class="form-control" id="exampleInputEmail1"
                   aria-describedby="emailHelp"
                   placeholder="first And Last Name" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Date Of Birth</label>
            <input type="date" name="dateOfBirth" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">User Name</label>
            <input type="text" name="userName" class="form-control" id="exampleInputEmail1"
                   aria-describedby="emailHelp"
                   placeholder="User Name" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="passWord" class="form-control" id="exampleInputPassword1"
                   placeholder="Password" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <input type="number" name="phone" class="form-control" id="exampleInputEmail1"
                   aria-describedby="emailHelp"
                   placeholder="Phone" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                   aria-describedby="emailHelp"
                   placeholder="Enter email" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Area</label>
            <input type="text" name="area" class="form-control" id="exampleInputEmail1"
                   aria-describedby="emailHelp"
                   placeholder="Area" required>
        </div>
        <button type="submit" name="register" class="btn btn-primary">Submit</button>
    </form>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>
</html>