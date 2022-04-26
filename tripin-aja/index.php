<?php 

    session_start();
    
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
    <link rel="stylesheet" href="styles/style.css" type="text/css">

    <title>Hello, world!</title>
  </head>
  <body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="#">
                        <img src="img/logo_tripinaja.svg" alt="" style="width: 108px; height: 80px;">
                        </a>
                    <div class="collapse navbar-collapse col-sm navigation" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto ">
                            <li class="nav-item">
                                <a class="nav-link" href="#"><h5>Home</h5><span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><h5>Order</h5></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#"><h5>Chat</h5></a>
                            </li>
                        </ul>
                <?php if(isset($_SESSION['email'])){?>
                    <p class="welcome">
                        <a href="process/logout_submit.php" class="btn btn-primary">Log Out</a>
                    </p>
                <?php }else{?>
                <form class="form-inline my-2 my-lg-0">
                    <a href="login.php" class="btn btn-primary mr-sm-2">Login</a>
                    <a href="register.php" class="btn btn-outline-primary my-2 my-sm-0">Register</a>
                </form>
                <?php }?>
                    </div>
            </nav>
            <div class="row">
                <div class="col-lg-6 content_left">
                    <div class="hero-image">
                        <img src="img/home-img-1.png" alt="">
                        <div class="photo-bg"></div>
                    </div>
                </div>
                <div class="col-lg-4 content_right" >
                    <div class="hero-form">
                        <form action="gettrip.php" method="post">
                            <div class="form-group form-row">
                                <div class="input-group mb-3 col-sm-11">
                                    <label class="input-group-text"><i class="material-icons">place</i></label>
                                    <input type="location" placeholder="set your location" class="form-control" style="border: none;" name="location">
                                </div>
                                <div class="input-group mb-3 col-sm-11">
                                    <label class="input-group-text"><i class="material-icons">near_me</i></label>
                                    <input type="location" placeholder="search destination" class="form-control" style="border: none;" name="setloc">
                                </div>
                                <div class="input-group mb-3 col-sm-11">
                                    <label class="input-group-text"><i class="material-icons">people</i></label>
                                    <input type="number" placeholder="1 people" class="form-control" style="border: none;" name="people">
                                </div>
                                <div class="input-group mb-3 col-sm-5">
                                    <div class="btn-group" data-toogle="buttons">
                                        <label class="btn btn-transparent ">
                                            <input type="radio" name="option" id="option2" autocomplete="off">
                                            <label for="" style="margin-left: 40px; color: lightgrey;">Open Trip</label> 
                                        </label>
                                    </div>
                                </div>
                                <div class="input-group mb-3 col-sm-5" style="margin-left: 40px;">
                                    <div class="btn-group" data-toogle="buttons">
                                        <label class="btn btn-transparent ">
                                            <input type="radio" name="option" id="option1" autocomplete="off" checked>
                                            <label for="" style="margin-left: 40px; color: lightgrey;">Private Trip</label>
                                        </label>
                                    </div>
                                </div>
                                <div class="input-group col-sm-5">
                                    <div class="btn-group" data-toogle="buttons">
                                        <label class="input-group-text">
                                            <i class="material-icons">event</i>
                                        </label>
                                        <input type="date" class="form-control" name="date">
                                    </div>
                                </div>
                                <div class="input-group col-sm-5" style="margin-left: 40px;">
                                    <div class="btn-group" data-toogle="buttons">
                                        <label class="input-group-text">
                                        <i class="material-icons">nightlight_round</i>
                                        </label>
                                        <input type="number" class="form-control " placeholder="1 Day Trip">
                                    </div>
                                </div>
                                <div class="submit col-sm-5">
                                    <a href="gettrip.php"><input type="submit" name="gettrip" value="get trip!" class="btn col-sm-12"></a>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
     <script src="js/popper.min.js" type="text/javascript"></script>
     <script src="js/bootstrap.min.js" type="text/ javascript"></script>
  </body>
</html>