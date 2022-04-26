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
    <link rel="stylesheet" href="css/intlTelInput.css" type="text/css">
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
                        <a class="nav-link" href="index.php"><h5>Home</h5><span class="sr-only">(current)</span></a>
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
            <div class="col-lg-6 login-left">
                <div class="hero-form">
                  <img src="img/main_img_login.png" alt="">
                </div>  
              </div>

              <div class="col-lg-6 register-right">
                <div class="top">
                    <h3>Register</h3>
                </div>
                <br>
                <form action="process/register_submit.php" method="post">
                <?php if(isset($_GET['error'])){?>
                                <div class="alert alert-warning">
                                    <p>Email Already taken!</p>
                                </div>
                <?php }?>
                <?php if(isset($_GET['success'])){?>
                                <div class="alert alert-warning">
                                    <p>selamat anda berhasil registrasi</p>
                                </div>
                <?php }?>
                    <div class="input-group register">
                        <label for="" class="col-sm-2">your id</label>
                        <div class="col-sm-10">
                            <input type="number" name="idcard" class="form-control" autocomplete="off">
                        </div>
                   </div> 
                   <div class="input-group register">
                        <label for="" class="col-sm-2">username</label>
                        <div class="col-sm-10">
                            <input type="text" name="username" class="form-control" autocomplete="off">
                        </div>
                   </div> 
                   <div class="input-group register">
                        <label for="" class="col-sm-2">email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" autocomplete="off">
                            
                        </div>
                    </div>
                    <div class="input-group register">
                        <label for="" class="col-sm-2">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="password" class="form-control" autocomplete="off">
                        </div>
                    </div>
                    <div class="input-group register">
                        <label for="" class="col-sm-2">Gender</label>
                        <div class="col-sm-10">
                        <input class="form-control " list="datalistOptions" id="exampleDataList" placeholder="gender" name="gender" style="border: #1988e5 1px solid; border-radius:5px">
                        <datalist id="datalistOptions">
                            <option value="male">
                            <option value="female">
                        </datalist>
                        </div>
                    </div>
                    <div class="input-group register">
                        <label for="" class="col-sm-2">Phone Number</label>
                        <div class="col-sm-10">
                            <input type="tel" name="phone" class="form-control" id="phone">
                        </div>
                    </div>
                    <div class="input-group register">
                        <label for="" class="col-sm-2">address</label>
                        <div class="col-sm-10">
                            <textarea name="address"></textarea>
                        </div>
                    </div>
                    <div class="register-submit">
                        <input type="submit" class="btn btn-primary" name="submit">
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
    <script src="js/intlTelInput.js"></script>
    <script>
        var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "build/js/utils.js",
    });
    </script>
</body>
</html>