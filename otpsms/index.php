<?php
session_start();
include('header.php');
include('front-end.php');
$conn = mysqli_connect("localhost", "root", "", "otp_sms");

if (isset($_SESSION["user"]) && $_SESSION["user"]->is_verified) {
    $user_id = $_SESSION["user"]->id;

    if(isset($_POST['toggle_tfa'])) {
        $is_tfa_enabled = $_POST["is_tfa_enabled"];

        $sql = "UPDATE users SET is_tfa_enabled =  '$is_tfa_enabled' WHERE id = '$user_id'";
        mysqli_query($conn, $sql);

        echo "Settings changed";
    }

    $sql = "SELECT * FROM users WHERE id = '$user_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_object($result);

    ?>

    <form action="index.php" method="POST">
        <h1>Enable TFA</h1>

        <input type="radio" name="is_tfa_enabled" value="1" <?php echo $row->is_tfa_enabled ? "checked" : ""; ?>> Yes
        <input type="radio" name="is_tfa_enabled" value="0" <?php echo $row->is_tfa_enabled ? "checked" : ""; ?>> No

        <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" name="toggle_tfa" class="btn btn-primary" value="Submit">
                    </div>
                </div>
    </form>

    <a href="logout.php">Logout</a>

    <?php
} else {
    header("Location: login.php");
}