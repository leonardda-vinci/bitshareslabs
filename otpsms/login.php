<?php
session_start();
include('header.php');
include('front-end.php');
require_once "vendor/autoload.php";
use Twilio\Rest\Client;

$sid = "ACc2a2d399d5ae66750ca337d73209f023";
$token = "d3759c2ac6b08470d6232b4e1ff638b0";

if (isset($_POST["login"]))
{
    $email = $_POST["email"];
    $password = $_POST["password"];

    $conn = mysqli_connect("localhost", "root", "", "otp_sms");
     
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_object($result);
        if (password_verify($password, $row->password))
        {
            if ($row->is_tfa_enabled)
            {
                $row->is_verified = false;
                $_SESSION["user"] = $row;

                $pin = rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9) . rand(0, 9);
                 
                $sql = "UPDATE users SET pin = '$pin'  WHERE id = '" . $row->id . "'";
                mysqli_query($conn, $sql);

                $client = new Client($sid, $token);
                $client->messages->create(
                    $row->phone, array(
                        "from" => "+14022079755",
                        "body" => "If this was not you, please inform us. Pin code ". $pin
                    )
                );

                header("Location: enter-pin.php");
            }
            else
            {
                $row->is_verified = true;
                $_SESSION["user"] = $row;

                header("Location: index.php");
            }
        }
        else
        {
            echo "<p align=center><font color=red size='4pt'> Wrong password! </font>";
        }
    }
    else
    {
        echo "<p align=center><font color=red size='4pt'> Not Exist! </font></p>";
    }
}
?>

<div id="frmRegistration">
    <form action="login.php" method="post" class="form-horizontal">
        <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email: </label>
                    <div class="col-sm-6">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="pwd" class="control-label col-sm-2">Password: </label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" name="password" id="pwd" placeholder="Password" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" name="login" class="btn btn-primary" value="Sign in">
                    </div>
                </div>
    </form>
</div>