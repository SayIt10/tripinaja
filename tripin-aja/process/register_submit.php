<?php
    include "../config/config.php";

    session_start();
    $idcard = $_POST['idcard'];
    $username = $_POST['username']; //echo $username; exit;
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $phone= $_POST['phone'];
    $address = $_POST['address'];

    $sql_username = "SELECT * FROM user_tbl WHERE username = '$username'"; 
    $res_u = pg_query($db, $sql_username);

    if(pg_num_rows($res_u)>0){
        // echo "<script>alert('maaf username sudah di gunakan')</script>";
        echo '<script>window.location="../register.php?error=already-taken"</script>';
    }else{ 
    $sql = "INSERT INTO user_tbl (id_user,username,email,password,gender,phone_number,address,join_date)
    VALUES ('$idcard','$username','$email','$password','$gender','$phone','$address',now())";

    $qmember = pg_query($db, $sql);

    echo '<script>window.location="../register.php?success=registration-complete"</script>';
    }
    // header('location:../register.php');
?>