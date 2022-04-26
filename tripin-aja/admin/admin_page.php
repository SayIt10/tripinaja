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

    $sql = "SELECT * FROM  user_tbl";
    $sqlpckg = "SELECT * FROM gettrip_tbl";
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
    <h1 style="float:left;">table user</h1>
    <a href="process/logout_admin.php" class="btn btn-primary" style="float:right;">log out</a>
    <br><br>
    <div class="row">
        <div class="col-md-7">
            <form action="admin_page.php" method="post" >
            <div class="input-group mb-3">
                <input type="text" name="search" placeholder="search" class="form-control">
                <button class="btn btn-primary " style="width:50px; height:38px;"><i class="material-icons">search</i></button>
            </div>
            </form>
        </div>
    </div>
    <table>
	<tr>
        <th>id</th>
		<th>username</th>
		<th>email</th>
		<th>password</th>
		<th>gender</th>
		<th>phone_number</th>
		<th>address</th>
	</tr>
    <?php
    foreach ($db->query($sql) as $row) 
         {
  ?>
    <tr>
        
        <td> <?php print $row['id_user']?></td>
        <td> <?php print $row['username'] ?> </td>
        <td> <?php print $row['email'] ?> </td>		
        <td> <?php print $row['password'] ?> </td>
        <td> <?php print $row['gender'] ?> </td>
        <td> <?php print $row['phone_number'] ?> </td>
        <td> <?php print $row['address'] ?> </td>
        <td><button><a href="edit_user.php?id_user=<?php print $row['id_user'];?>">edit</a></button> <button><a href="process/delete.php?id_user=<?php print $row['id_user'];?>" onclick="return confirm('apakah anda yakin?')">delete</a></button></td>
    <?php   
        }
    ?>
    </table>
    
    <table>
    <tr>
        <th>id_gettrip</th>
        <th>packagename</th>
        <th>images</th>
        <th>facility</th>
        <th>description</th>
        <th>price</th>
    </tr>
    <br><br>
    <button class="btn btn-primary"><a href="add_package.php" style="text-decoration:none; color:white;">add package</a></button>
    <?php foreach($db->query($sqlpckg) as $rownews) {?>
    <tr>
        <td> <?php print $rownews['id_gettrip']?></td>
        <td> <?php print $rownews['package_name'] ?> </td>
        <td> <img style="width:50%;" src="../img/<?php print $rownews['images'];?>" /></td>		
        <td> <?php print $rownews['facility'] ?> </td>
        <td> <?php print $rownews['description'] ?> </td>
        <td> <?php print $rownews['price'] ?> </td>
        <td> <button><a href="edit_package.php?id_gettrip=<?php print $rownews['id_gettrip'];?>">edit</a></button> <button><a href="process/delete.php?id_gettrip=<?php print $rownews['id_gettrip'];?>" onclick="return confirm('apakah anda yakin?')">delete</a></button></td>
    </tr>
    <?php }?>
    </table>    
    </div>
    <script src="../js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
    <script src="../js/popper.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/ javascript"></script>
</body>
</html>