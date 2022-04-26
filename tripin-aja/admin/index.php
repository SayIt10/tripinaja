<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
    <link rel="stylesheet" href="../styles/admin.css" type="text/css">
</head>
<body>
    <div class="container">
        <div class="login">
            <form action="process/login_admin.php" method="post">
                <div class="form-group email">
                    <label for="exampleInputEmail1">email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                </div>
                <div class="form-group password">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <div class="form-group form-check">
                    <label class="form-check-label" for="exampleCheck1"><a href="register.php">Register</a></label>
                </div>
                <div class="sep">
                    <?php if(isset($_GET['error1'])){
                        echo "<p style='color:red; font-size:14px; text-align:center;'>sorry your username/ password is worng</p>";}
                        else if(isset($_GET['error2'])){
                        echo "<p style='color:red; font-size:14px; text-align:center;'>please login</p>";
                        }
                    ?>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script src="../js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
    <script src="../js/popper.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/ javascript"></script>
</body>
</html>