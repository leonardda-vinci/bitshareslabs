<?php
include('front-end.php');
?>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" class="navbar-brand"> Login OTP-SMS</a>
        </div>
        <div class="dropdown navbar-right" id="right">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $email; ?>
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        </div>
    </div>
</nav>