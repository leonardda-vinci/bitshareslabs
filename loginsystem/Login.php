<?php
include('header.php');
include('link.php');

?>

<div id="frmRegistration">
    <form action="login_code.php" class="form-horizontal" method="POST">
        <h1>Login</h1>

        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email: </label>
            <div class="col-sm-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
        </div>
        <div class="form-group">
            <label for="pwd" class="control-label col-sm-2">Password: </label>
            <div class="col-sm-6">
                <input type="password" class="form-control" name="password" id="pwd" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="login" class="btn btn-primary">Login</button>
            </div>
        </div>
    </form>
</div>