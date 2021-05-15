<?php
session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<?php
include "config.php";

if(isset($_POST['submit']))
{	
    $username = $_SESSION["username"];
    $name = $_POST['name'];
    $place = $_POST['place'];
    $price = $_POST['price'];

    $insert = mysqli_query($link,"INSERT INTO `houses`(`username`, `name`, `place`, `price`) VALUES ('$username','$name','$place','$price')");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
        mysqli_close($link); 
        header("location:profile.php");
        exit;
    }
}
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Examen 3</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Animated-Type-Heading.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Navbar---Logo-Up---Part-2-Image.css">
    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="assets/css/Products-UI.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form-1.css">
    <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body><nav class="navbar navbar-light navbar-expand-md custom-header">
    <div class="container-fluid">
        <div><a class="navbar-brand" href="#">Examen<span>3 </span></a><button data-toggle="collapse" data-target="#navbar-collapse" class="navbar-toggler"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav links">
                <li class="nav-item"><a class="nav-link" href="index.php">Home </a></li>
                <li class="nav-item"><a class="nav-link" href="SearchHouses.php">Houses </a></li>
                <li class="nav-item"><a class="nav-link" href="Profile.php"> Profile</a></li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown"><a data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle nav-link" href="#"><img class="dropdown-image" src="assets/img/avatar.jpg" /></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="Profile.php"><?php echo htmlspecialchars($_SESSION["username"]); ?></a>
                        <a class="dropdown-item" href="#">Settings </a>
                        <?php if(isset($_SESSION['id'])): ?>
                            <a class="dropdown-item" href="Logout.php">Logout </a>
                        <?php else: ?>
                            <a class="dropdown-item" href="Login.php">Login </a>
                        <?php endif; ?>
                        </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
        <div style="margin-bottom: 20em;"></div>
        <div class="col-md-8 offset-md-2">
            <form method="POST">
                <h1>Create listing</h1>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Name </label></div>
                    <div class="col-sm-6 input-column"><input type="text" name="name" placeholder="Enter name of the house" Required></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Place </label></div>
                    <div class="col-sm-6 input-column"><input type="text" name="place" placeholder="Enter name of the place" Required></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="name-input-field">Price </label></div>
                    <div class="col-sm-6 input-column"><input type="text" name="price" placeholder="Enter the price" Required></div>
                </div><input class="btn btn-light submit-button" type="submit" name="submit" value="Submit">
            </form>
        </div>
                <div style="margin-bottom: 35em;"></div>
        <footer id="footer">
    <div style= "background: black; text-align: center; margin: 0px; padding:10px">
        <p style= "color:grey; font-family: raleway">Copyright (c) 2017 HM-hub.co.in</p>
    </div>
</footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Animated-Type-Heading.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
    </body>
</html>