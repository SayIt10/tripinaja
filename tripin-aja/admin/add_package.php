<?php
    try {
        $dbuser = 'postgres';
        $dbpass = 'adnan2002';
        $dbhost = 'localhost';
        $dbname='tripin-aja';
        $db = new PDO("pgsql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    }catch (PDOException $e) 
    {
        echo "Error : " . $e->getMessage() . "<br/>";
        die();
    }
    session_start();

    $idget = $_POST['id_gettrip'];
    $idadmin = $_POST['id_admin'];
    $pckgname = $_POST['package_name'];
    $facility = $_POST['facility'];
    $desc = $_POST['description'];
    $price = $_POST['price'];
    $images = $_FILES['images']['name'];

    move_uploaded_file($_FILES ['images']['tmp_name'],'../../img/car/'.$images);

    $sql = "INSERT INTO gettrip_tbl (id_gettrip, id_admin, package_name, images, facility, description, price, join_date) VALUES ('$idget','$idadmin','$pckgname','$images','$facility','$desc','$price',now())";
    $quser = pg_query($sql);

    if (!$quser)
        {
            echo "add content failed!!";
        } else {
            echo "  <script>alert('anda berhasil menambahkan data !');
                    document.location.href= 'admin_page.php';
                    </script>";
        }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> 
    <link rel="stylesheet" href="../styles/admin.css" type="text/css">
    <style>
		table {
		  border-collapse: collapse;
		  width: 100%;
		}

		th, td {
		  text-align: left;
		  padding: 8px;
		}

		tr:nth-child(even) {background-color: #f2f2f2;}
	</style>
</head>
<body>
    <div class="container">
            <form action="" method="post" enctype="multipart/form-data" name="add">
            <div class="input-group register" enctype="multipart/form-data" method="post">
                        <label for="" class="col-sm-2">id_gettrip</label>
                        <div class="col-sm-10">
                            <input type="number" name="id_gettrip" class="form-control" autocomplete="off">
                        </div>
                   </div> 
                   <div class="input-group register">
                        <label for="" class="col-sm-2">id_admin</label>
                        <div class="col-sm-10">
                            <input type="text" name="id_admin" class="form-control" autocomplete="off">
                        </div>
                   </div> 
                   <div class="input-group register">
                        <label for="" class="col-sm-2">packagename</label>
                        <div class="col-sm-10">
                            <input type="email" name="package_name" class="form-control" autocomplete="off">
                            
                        </div>
                    </div>
                    <div class="input-group register">
                        <label for="" class="col-sm-2">images</label>
                        <div class="col-sm-10">
                            <input type="file" name="images" class="form-control" autocomplete="off">
                        </div>
                    </div>
                    <div class="input-group register">
                        <label for="" class="col-sm-2">facility</label>
                        <div class="col-sm-10">
                        <input class="form-control " list="datalistOptions" id="exampleDataList" placeholder="gender" name="gender" style="border: #1988e5 1px solid; border-radius:5px">
                        <datalist id="datalistOptions">
                            <option value="male">
                            <option value="female">
                        </datalist>
                        </div>
                    </div>
                    <div class="input-group register">
                        <label for="" class="col-sm-2">description</label>
                        <div class="col-sm-10">
                            <textarea name="description"></textarea>
                        </div>
                    </div>
                    <div class="input-group register">
                        <label for="" class="col-sm-2">price IDR</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="price">
                        </div>
                    </div>
                    <div class="register-submit">
                        <input type="submit" class="btn btn-primary" name="submit">
                    </div>
            </form>
    </div>

    <!-- js -->
    <script src="../js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
    <script src="../js/popper.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/ javascript"></script>
</body>
</html>