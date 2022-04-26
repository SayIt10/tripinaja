<?php 

    include "../config/config.php";
    session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user_tbl WHERE email = '$email' and password = '$password'";
    $quser = pg_query($db,$sql);
    $rowuser = pg_fetch_assoc($quser);

    if(!empty($rowuser)){
        $_SESSION['email'] = $email;

        header("location:../index.php");
    }else{
        echo "email atau password yang anda masukan salah<br>
        <a href='../login.php'>kembali ke home</a>atau silahkan <a href='../register.php'>registrasi</a>";
    }


?>