<?php
include('front-end.php');
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style>
    input[type="submit"] {
        border: 0;
        display: block;
        margin: 20px auto;
        text-align: center;
        border: 2px solid #265a88;
        padding: 14px 40px;
        outline: none;
        color: white;
        transition: 0.25s;
        cursor: pointer;
    }

    .box input[type="submit"]:focus {
        border-color: rgba(212, 172, 13, 1);
    }
    .box input[type="submit"]:hover {
        background: rgba(212, 172, 13, 1);
        border-radius: 24px;
    }
</style>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" class="navbar-brand">Login OTP-SMS</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="register.php">Sign Up</a></li>
            <li><a href="login.php">Sign In</a></li>
        </ul>
    </div>
</nav>