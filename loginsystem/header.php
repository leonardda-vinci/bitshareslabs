<?php
include('link.php');
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style>
    input[type = "submit"]{
                border:0;
                background: none;
                display: block;
                margin: 20px auto;
                text-align: center;
                border: 2px solid #D4AC0D;
                padding: 14px 40px;
                outline: none;
                color: white;
                transition: 0.25s;
                cursor: pointer;
            }
            
            .box input[type = "submit"]:focus{
                border-color: #D4AC0D;
            }
            
            .box input[type = "submit"]:hover{
                background: #D4AC0D;
                border-radius: 24px;
            }
            
</style>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" class="navbar-brand">Login System</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="registration.php">Registration</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </div>
</nav>