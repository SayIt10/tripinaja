<?php
    session_start();
    include "config/config.php";

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Trip!</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
    <link rel="stylesheet" href="styles/style.css" type="text/css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.html">
                <img src="img/logo_tripinaja.svg" alt="" style="width: 108px; height: 80px;">
                </a>
            <div class="collapse navbar-collapse col-sm navigation" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html"><h5>Home</h5><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><h5>Order</h5></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><h5>Chat</h5></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a href="login.html" class="btn btn-primary mr-sm-2">Login</a>
                    <a href="register.html" class="btn btn-outline-primary my-2 my-sm-0">Register</a>
                </form>
            </div>
        </nav>

        <div class="row">
            <div class="col-md-11 judul">
                <div class="mb-3 pesanan">
                    <i class="material-icons">near_me</i>
                    <h5>jakarta selatan</h5>
                    <h5>-</h5>
                    <h5>gunung bromo</h5>
                    <ul>
                        <li><h5>start 20 des 2021</h5></li>
                        <li><h5>3 days</h5></li>
                        <li><h5>1 people</h5></li>
                        <li><h5>Private trip</h5></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 trip-left">
                <div class="content-trip-left">
                    <form action="" method="get">
                        <h4>Facility</h4>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Free Meal <img src="img/icon/free-meal.png" alt="">
                            </label>
                        </div> 
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Free Pick-up <img src="img/icon/free-pickup.png" alt="">
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Entertaiment <img src="img/icon/entertaiment.png" alt="">
                            </label>
                        </div>
                        <hr>
                        <h4>Range price</h4>
                        <input type="range" class="form-range" min="0" max="10000000"  step="0.5" id="customRange3">    
                    </form>
                </div>
            </div>
            <div class="col-md-7 col-sm-12 trip-right">
              <?php 
                include "config/config.php";
                $sql = "SELECT * FROM gettrip_tbl";

                $qnews = pg_query($db,$sql);
                $rownews = pg_fetch_assoc($qnews);

                do{
              ?>
                <div class="trip-content">
                    <h5><?php echo $rownews['package_name']?></h5>
                    <img src="img/car/<?php echo $rownews['images']?>" alt="">
                    <h6 class="text-left">Fasilitias</h6>
                    <div class="facility">
                        <ul>
                          <li><img src="img/icon/free-meal.png" alt=""></li>
                          <li><img src="img/icon/free-pickup.png" alt=""></li>
                          <li><img src="img/icon/entertaiment.png" alt=""></li>
                        </ul>
                  </div><br>
                  <div class="deskripsi">
                      <p><?php echo substr($rownews['description'],0,75);?></p>
                  </div>
                  <div class="price">
                    <p>IDR <?php echo $rownews['price']?>/Pack</p>
                  </div>
                  <div class="bottom-content">
                    <a href="">see details</a>
                    <a href="">term & conditions</a>
                    <a href="page_order.php"><input type="submit" name="choose" value="choose" class="btn btn-primary"></a>  
                  </div>
                </div>
                <?php }while ($rownews = pg_fetch_assoc($qnews));?>
            </div>
        </div>
        <!--footer-->
        <div class="footer">
            <hr>
            <div class="row">
                <div class="col">
                  <div class="logo-img">
                    <a href="index.php"><img src="img/logo_tripinaja.svg" alt=""></a>
                  </div>
                  <br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                  </p><br>
                  <div class="img">
                    <p>Follow Us</p>
                    <a href=""><img src="img/icon/instagram.png" alt=""></a>
                    <a href=""><img src="img/icon/tiktok.png" alt=""></a>
                  </div>
                </div>
                <div class="col">
                  <h3>Tripinaja</h3><br>
                  <a href="#">Career</a><br>
                  <a href="#">About</a>
                </div>
                <div class="col">
                  <h3>Help</h3><br>
                  <a href="#">Term & Condition</a><br>
                  <a href="#">Privacy & Policy</a>
                </div>
                <div class="col">
                  <h3>Office</h3><br>
                  <a href="https://goo.gl/maps/b2ZenkhjsJi97cUH6">Kirana 2 Tower Level 10-A
                    Jl. Boulevard Timur No.88, Kel. Pegangsaan Dua, Kec. Kelapa Gading, Kota Adm. Jakarta Utara,
                    Prov DKI Jakarta
                    </a><br><br><br>
                    <p>081373464744 <br>
                      support@tripinaja.co.id</p>
                </div>
            </div>
          </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
    <script src="js/popper.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/ javascript"></script>
</body>
</html>