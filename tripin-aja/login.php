<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
    <link rel="stylesheet" href="styles/style.css" type="text/css">
    <title>Login</title>
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
                <?php if(isset($_SESSION['email'])){?>
                    <a href="process/logout_submit.php" class="btn btn-submit">Log Out</a>
                <?php }else{?>
                <form class="form-inline my-2 my-lg-0">
                    <a href="login.php" class="btn btn-primary mr-sm-2">Login</a>
                    <a href="register.php" class="btn btn-outline-primary my-2 my-sm-0">Register</a>
                </form>
                <?php }?>
            </div>
        </nav>
        <!--content login-->
        <div class="row">
            <div class="col-lg-6 login-left">
              <div class="hero-form">
                <img src="img/main_img_login.png" alt="">
              </div>  
            </div>

            <div class="col-lg-6 login-right">
                <div class="top">
                    <h3>Log in</h3><br>
                </div>
                <?php if(isset($error)) :?>
                    <p style="color:red;">username/password salah</p>
                <?php endif;?>
                <form action="process/login_submit.php" method="post" class="form">
                    <div class="input-group login-form">
                        <label for="" class="input-group-text"><i class="material-icons">email</i></label>
                        <input type="email" class="form-control" style="border: none;" placeholder="enter your email" name="email" required>
                    </div>
                    <div class="input-group login-form">
                        <label for="" class="input-group-text"><i class="material-icons">password</i></label>      
                        <input type="password" name="password" placeholder="enter your password" style="border:none;" class="form-control" required>
                    </div>
                    <div class="input-submit">
                        <input type="submit" value="login" name="login">
                    </div> 
                    <div class="line">
                        <hr><p>or</p><hr><br>
                    </div>
                    <div class="input-group btn btn-outline-primary log-google">
                        <img src="img/icon/google.png" alt="">
                        <p>Enter With Google</p>
                    </div>
                    <div class="input-group btn btn-outline-primary log-google">
                        <img src="img/icon/facebook.png" alt="">
                        <p>Enter With Facebook</p>
                    </div>
                </form>
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