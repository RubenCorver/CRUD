<?php
session_start();
?>
<!DOCTYPE html>
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
    <h1 style="text-align: center;margin-top: 30px;">New arrivals</h1>
    <div class="gift row gift--double no-border">
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "examen3";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT username, name, place, price, created_at FROM houses order by id DESC LIMIT 6";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<div class="shadow col-12 col-sm-6">';
            echo '<div class="gift__img col-12"><img src="assets/img/gift_01.jpg"></div>';
            echo '<div class="gift__info col-12">';
            echo '<h4 class="gift__name">' . $row["name"].'</h4>';
            echo '<div class="gift__bottom row">';
            echo '<div class="gift__price-wrap col-12">';
            echo '<div class="gift__normal-price"><span>Plaats: ' . $row["place"].'</span></div>';
            echo '<div class="gift__normal-price"><span>user: ' . $row["username"].'</span></div>';
            echo '<div class="gift__normal-price"><span>geplaatst: ' . $row["created_at"].'</span></div>';
            echo '<div class="gift__today-price"><span class="gift__data">$' . $row["price"].'</span></div>';
            echo '</div>';
            echo '<div class="gift__cta-wrap col-12"><button class="btn btn-primary" type="button">Contact</button></div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        }
        $conn->close();
        ?>     
    </div>
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