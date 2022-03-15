<?php
include('link.php');
include('header1.php');
require('connection.php');

$id = $_SESSION['id'];
$fname = $lname = $email = $gender = '';
$sql = "SELECT * FROM tbluser WHERE ID = '$id'";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $fname = $row["Firstname"];
		$lname = $row["Lastname"];
		$email = $row["Email"];
		$gender = $row["Gender"];
    }
}
?>

<div class="jumbotron">
    <center>
        <h2>Welcome <?php echo $fname.''.$lname; ?> </h2>
    </center>
</div>