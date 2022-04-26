<?php
    include "../config/config.php";
    session_start();

    $id = ($_GET["id_user"]);
    $data = pg_query($db, "SELECT * FROM user_tbl WHERE id_user = '$id'");
    
    if (isset($_POST['update']))
    {
        $query = ("UPDATE user_tbl SET
                    id_user = '$_POST[id_user]',    
                    username = '$_POST[username]',
                    email = '$_POST[email]', 
                    password = '$_POST[password]',
                    gender = '$_POST[gender]',
                    phone_number = '$_POST[phone_number]', 
                    address = '$_POST[address]'
                    WHERE id_user ='$id'");
    
        $result_update = pg_query($query); 
        if (!$result_update)
        {
            echo "Update failed!!";
        } else {
            echo "  <script>alert('Update Success !');
                    document.location.href= 'admin_page.php';
                    </script>";
        }
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
    <form name="update" action="" method="POST" >
    <table>
    <?php while ($row = pg_fetch_assoc($data)) { ?>
        <tr> 
            <th>id</th>
                <td>
                    <input type="number" name="id_user" value="<?php print($row['id_user']); ?>" placeholder="id_user"></input>
                </td>
        </tr>
        <tr> 
            <th>username</th>
                <td>
                    <input type="text" name="username" value="<?php print($row['username']); ?>" placeholder="username"></input>
                </td>
        </tr>
        <tr>
            <th>email</th>
                <td>
                    <input type="email" value="<?php print($row['email']); ?>" name="email" placeholder="email"></input>
                </td>
        </tr>
        <tr>
            <th>password</th>
                <td>
                    <input type="password" value="<?php print($row['password']); ?>" name="password"></input>
        </tr>
        <tr>
                <th>gender</th>
                <td>
                <div class="col-sm-3">
                <select name="gender" id="sex">
                        <option value="<?php print($row['gender']); ?>"><?php print($row['gender']); ?></option>
                        <option disabled>~~</option>
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                    </select>
                </td>
        </tr>
        <tr>
            <th>phone number</th>
            <td>
            <input type="tel" name="phone_number" class="form-control" id="phone" value="<?php print($row['phone_number']);?>">

            </td>
        </tr>
        <tr>
            <th>address</th>
                <td>
                    <input type="text" value="<?php print($row['address']); ?>" name="address" placeholder="Address"></input>
                </td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="2">
                <input type="submit" name="update" value="Edit">
            </td>
        </tr>
    </table>
    
    </div>
    <script src="../js/jquery-3.3.1.slim.min.js" type="text/javascript"></script>
    <script src="../js/popper.min.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/ javascript"></script>
</body>
</html>