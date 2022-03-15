<?php
include('header.php');
include('link.php');
?>

<div id="frmRegistration">
    <form action="registration_code.php" class="form-horizontal" method="POST">
        <h1>Sign Up</h1>

        <div class="form-group">
            <label for="firstname" class="control-label col-sm-2">Firstname: </label>
            <div class="col-sm-6">
                <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Firstname">
            </div>
        </div>

        <div class="form-group">
            <label for="lastname" class="control-label col-sm-2">Lastname: </label>
            <div class="col-sm-6">
                <input type="text" name="lastname" class="form-control" id="lasstname" placeholder="Lastname">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2" for="lastname">Gender:</label>
            <div class="col-sm-6">
            <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
	        <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
        </div>
     </div>

     <div class="form-group">
            <label for="phone" class="control-label col-sm-2">Phone: </label>
            <div class="col-sm-6">
                <input type="phone" name="phone" class="form-control" id="phone" placeholder="Phone">
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="control-label col-sm-2">Email: </label>
            <div class="col-sm-6">
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
            </div>
        </div>

        <div class="form-group">
            <label for="password" class="control-label col-sm-2">Password: </label>
            <div class="col-sm-6">
                <input type="password" name="password" class="form-control" id="pwd" placeholder="Password">
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" name="create" class="btn btn-primary">Sign Up</button>
            </div>  
        </div>  
    </form>
</div>