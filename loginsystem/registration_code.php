<?php
require('connection.php');
$fname = $lname = $phone = $gender = $email = $password = $pwd = $pin = '';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$pin = $_POST['pin'];
$password = password_hash($pwd, PASSWORD_DEFAULT);

$sql = "INSERT INTO tbluser (Firstname,Lastname,Phone,Gender,Email,Password,pin) VALUES ('$fname','$lname', '$phone','$gender','$email','$password','')";
$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location: login.php");
}
else {
    echo "Error:".$sql;
}
?>