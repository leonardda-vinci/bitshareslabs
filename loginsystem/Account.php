<?php
include('link.php');
include('header1.php');
?>

<div class="account">
    <div class="col-lg-6 com-sm-6">
        <div class="card hovercard">
            <div class="card-background">
                <img src="http://lorempixel.com/100/100/people/9/" alt="" class="card-bkimg">
            </div>
            <div class="useravatar">
                <img src="img/user.svg" alt="">
            </div>
            <div class="card-info"><span class="card-title"><?php echo $fname." ".$lname; ?></span>

        </div>
        </div>
        <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
            <div class="btn-group" role="group">
                <button type="button" id="stars" class="btn btn-primary" href="#tab1" data_toggle="tab">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                    <div class="hidden-xs">Profile</div>
                </button>
            </div>

        </div>

        <div class="well">
            <div class="tab-content">
                <div class="tab-pane fade in active" id="tab1">
                    <table class="table">
                    <tr>
          		        <td>First Name</td>
          		        <td><?php echo $fname; ?></td>
          	        </tr>
          	        <tr>
          		        <td>Last Name</td>
          		        <td><?php echo $lname; ?></td>
          	        </tr>
                      <tr>
          		        <td>Phone number</td>
          		        <td><?php echo $phone; ?></td>
          	        </tr>
          	        <tr>
          		        <td>Gender</td>
          		        <td><?php echo $gender; ?></td>
          	        </tr>
          	        <tr>
          		        <td>Email</td>
          		        <td><?php echo $email; ?></td>
          	        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>