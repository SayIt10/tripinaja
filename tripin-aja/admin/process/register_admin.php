<?php
     include "../../config/config.php";

    session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO admin_tbl (admin_email, admin_password) VALUES ('$email','$password')";

    $qadmin = pg_query($db,$sql);

    header('location:../index.php')
?>