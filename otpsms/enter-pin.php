<?php
 
session_start();
include('header.php');
include('front-end.php');
    if (isset($_POST["enter_pin"]))
    {
        $pin = $_POST["pin"];
        $user_id = $_SESSION["user"]->id;

        $conn = mysqli_connect("localhost", "root", "", "otp_sms");
        
        $sql = "SELECT * FROM users WHERE id = '$user_id' AND pin = '$pin'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0)
        {
            $sql = "UPDATE users SET pin = '' WHERE id = '$user_id'";
            mysqli_query($conn, $sql);

            $_SESSION["user"]->is_verified = true;
            header("Location: index.php");
        }
        else
        {
            echo "Wrong pin";
        }
    }
?>
<div id="frmRegistration">
    <form method="POST" action="enter-pin.php" class="form-horizontal">
    <div class="form-group">
            <label for="enter_pin" class="control-label col-sm-2">Pin code: </label>
                <div class="col-sm-6">
                    <input type="text" name="pin" class="form-control" id="firstname" placeholder="Code">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" name="enter_pin" class="btn btn-primary">
                </div>
            </div>
    </form>
</div>