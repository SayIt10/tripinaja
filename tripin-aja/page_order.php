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
    <link rel="stylesheet" href="css/intlTelInput.css" type="text/css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.php">
                <img src="img/logo_tripinaja.svg" alt="" style="width: 108px; height: 80px;">
                </a>
            <div class="collapse navbar-collapse col-sm navigation-pageorder" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item">
                        <a class="nav-link" href="page_order.php"><h5>1.Order</h5><span class="sr-only">(current)</span></a>                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><h5>2.Checkout</h5></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><h5>3.Done</h5></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 pageorder-button">
                    <a href="login.php" class="btn btn-primary mr-sm-2">Login</a>
                    <a href="register.php" class="btn btn-outline-primary my-2 my-sm-0">Register</a>
                </form>
            </div>
        </nav>

        <div class="row">
            <div class="col-lg-8">
                <div class="hero-form-pageorder">
                    <form action="process/" method="post">
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <h4>Details Mesengger</h4> 
                        </div>

                        <div class="form-group col-md-4">
                          <select id="inputState" class="form-control">
                            <option selected>Title</option>
                            <option>mr</option>
                            <option>ms</option>
                            <option>other</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6">
                          <input type="text" value="name" id="name" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                          <input type="email" value="email" id="email" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                          <input type="tel" name="phone" class="form-control" id="phone">
                        </div>
                      </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
              <div class="confirm-order">
                  <h4>Open Trip</h4>
                  <h6>to Gunung Bromo</h6>
                  <p>nasknalnalsnnasnaklsnkanskankasklannkansklan</p>
                  <P class="total">total</P>
                  <P class="price">IDR 8.000.000</P>
                  <input type="submit" name="choose" value="choose">
              </div>
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