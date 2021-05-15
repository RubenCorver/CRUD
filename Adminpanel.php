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
                            <a class="dropdown-item" href="Login.php">Login </a>
                        <?php else: ?>
                            <a class="dropdown-item" href="Logout.php">Logout </a>
                        <?php endif; ?>
                        </div>
                </li>
            </ul>
        </div>
    </div>
</nav><div class="contact-clean">
    <form method="post">
        <h2 class="text-center">Find User</h2>
        <div class="form-group"><input class="form-control" type="text" name="Username" placeholder="Username" /></div>
        <div class="form-group"><button class="btn btn-primary" type="submit">send </button></div>
    </form>
</div>
<div class="container profile profile-view" id="profile">
    <div class="row">
        <div class="col-md-12 alert-col relative">
            <div class="alert alert-info absolue center" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><span>Profile save with success</span></div>
        </div>
    </div>
    <form>
        <div class="form-row profile-row">
            <div class="col-md-4 relative">
                <div class="avatar">
                    <div class="avatar-bg center"></div>
                </div>
            </div>
            <div class="col-md-8">
                <h1>Username</h1>
                <hr />
                <div class="form-row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group"><label>Firstname </label><input class="form-control" type="text" name="firstname" /></div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group"><label>Lastname </label><input class="form-control" type="text" name="lastname" /></div>
                    </div>
                </div>
                <hr />
                <div class="form-row">
                    <div class="col-md-12 content-right"><button class="btn btn-danger form-btn" type="submit">DELETE </button><button class="btn btn-primary form-btn" type="submit">SAVE </button><button class="btn btn-danger form-btn" type="reset">CANCEL </button></div>
                </div>
            </div>
        </div>
    </form>
</div><h1 class="headerOmolds text-center"><span class="tituloProducto">Listings</span></h1>
    <div class="gift row gift--double no-border">
        <div class="shadow col-12 col-sm-6">
            <div class="gift__img col-12"><img src="assets/img/gift_01.jpg">
                <div class="gift__rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star fa-star-half-o"></i><i class="fa fa-star fa-star-o"></i><span class="gift__rating-number">921</span></div>
            </div>
            <div class="gift__info col-12">
                <h4 class="gift__name">Product</h4>
                <div class="gift__bottom row">
                    <div class="gift__price-wrap col-12">
                        <div class="gift__normal-price"><span>made by Vikas Kaliramna</span></div>
                        <div class="gift__today-price"><span class="gift__data">Free</span></div>
                    </div>
                    <div class="gift__cta-wrap col-12"><button class="btn btn-primary" type="button">Download</button></div>
                </div>
            </div>
        </div>
        <div class="shadow col-12 col-sm-6">
            <div class="gift__img col-12"><img src="assets/img/gift_01.jpg">
                <div class="gift__rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star fa-star-half-o"></i><i class="fa fa-star fa-star-o"></i><span class="gift__rating-number">921</span></div>
            </div>
            <div class="gift__info col-12">
                <h4 class="gift__name">Product</h4>
                <div class="gift__bottom row">
                    <div class="gift__price-wrap col-12">
                        <div class="gift__normal-price"><span>made by Vikas Kaliramna</span></div>
                        <div class="gift__today-price"><span class="gift__data">Free</span></div>
                    </div>
                    <div class="gift__cta-wrap col-12"><button class="btn btn-primary" type="button">Download</button></div>
                </div>
            </div>
        </div>
    </div>
    <div class="gift row gift--double no-border">
        <div class="shadow col-12 col-sm-6">
            <div class="gift__img col-12"><img src="assets/img/gift_01.jpg">
                <div class="gift__rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star fa-star-half-o"></i><i class="fa fa-star fa-star-o"></i><span class="gift__rating-number">921</span></div>
            </div>
            <div class="gift__info col-12">
                <h4 class="gift__name">Product</h4>
                <div class="gift__bottom row">
                    <div class="gift__price-wrap col-12">
                        <div class="gift__normal-price"><span>made by Vikas Kaliramna</span></div>
                        <div class="gift__today-price"><span class="gift__data">Free</span></div>
                    </div>
                    <div class="gift__cta-wrap col-12"><button class="btn btn-primary" type="button">Download</button></div>
                </div>
            </div>
        </div>
        <div class="shadow col-12 col-sm-6">
            <div class="gift__img col-12"><img src="assets/img/gift_01.jpg">
                <div class="gift__rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star fa-star-half-o"></i><i class="fa fa-star fa-star-o"></i><span class="gift__rating-number">921</span></div>
            </div>
            <div class="gift__info col-12">
                <h4 class="gift__name">Product</h4>
                <div class="gift__bottom row">
                    <div class="gift__price-wrap col-12">
                        <div class="gift__normal-price"><span>made by Vikas Kaliramna</span></div>
                        <div class="gift__today-price"><span class="gift__data">Free</span></div>
                    </div>
                    <div class="gift__cta-wrap col-12"><button class="btn btn-primary" type="button">Download</button></div>
                </div>
            </div>
        </div>
    </div><footer id="footer">
    
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