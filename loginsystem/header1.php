    <?php
session_start();
include('link.php');
$email = $_SESSION['email'];
?>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#" class="navbar-brand">Login System</a>
        </div>
        <div class="dropdown navbar-right" id="right">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $email; ?>
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="welcome.php">Home</a></li>
                <li><a href="account.php">Account</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>