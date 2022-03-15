<?php 
session_start();
include('header.php');
include('link.php');

if (isset($_POST["enter pin"])) {
    $pin = $_POST["pin"];
    $user_id =$_SESSION["user"] -> id;

    $conn = mysqli_connect("localhost", "root", "", "otp_sms");

    $sql = "SELECT * FROM users WHERE id = '$user_id' AND  pin = '$pin'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $sql = "UPDATE user SET pin = ''  WHERE id = '$user_id'";
        mysqli_query($conn, $sql);

        $_SESSION["user"]->is_verified = true;
        header("Location: welcome.php");
    }
    else {
        echo "Wrong pin";
    }
}
?>

<div id="frmRegistration">
    <form action="login_code.php" class="form-horizontal" method="POST">
        <h1>Login</h1>

        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Pin code: </label>
            <div class="col-sm-6">
                <input type="pin-code" class="form-control" name="pin-code" id="pin-code" placeholder="Pin code">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="login" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
