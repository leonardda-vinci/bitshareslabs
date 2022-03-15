<?php
include('header.php');
include('front-end.php');
    if(isset($_POST["register"])) {
        $fname = $_POST["firstname"];
        $lname = $_POST["lastname"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $password = $_POST["password"];
        $password = password_hash($password, PASSWORD_DEFAULT);

        $conn = mysqli_connect("localhost", "root", "", "otp_sms");

        $sql = "INSERT INTO users (firstname,lastname,email, phone, password, is_tfa_enabled, pin) VALUES ('$fname','$lname','$email', '$phone', '$password', 0, '')";
        mysqli_query($conn, $sql);

        header("Location: login.php");
    }
?>

<div id="frmRegistration">
    <form action="register.php" method="post" class="form-horizontal">
        <div class="form-group">
            <label for="firstname" class="control-label col-sm-2">Firstname: </label>
                <div class="col-sm-6">
                    <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Firstname" required>
                </div>
            </div>

            <div class="form-group">
                <label for="lastname" class="control-label col-sm-2">Lastname: </label>
                <div class="col-sm-6">
                    <input type="text" name="lastname" class="form-control" id="lasstname" placeholder="Lastname" required>
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="control-label col-sm-2">Email: </label>
                <div class="col-sm-6">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                </div>
            </div>

            <div class="form-group">
                <label for="phone" class="control-label col-sm-2">Phone (+63): </label>
                <div class="col-sm-6">
                    <input type="phone" name="phone" class="form-control" id="phone" placeholder="+639*********" required>
                </div>
            </div>

            <div class="form-group">
                <label for="password" class="control-label col-sm-2">Password: </label>
                <div class="col-sm-6">
                    <input type="password" name="password" class="form-control" id="pwd" placeholder="Password" required>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" name="register" class="btn btn-primary" value="Sign up">
                </div>
            </div>
</form>
</div>