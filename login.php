<?php

require 'config.php';

function register() {
    $email = $_POST['register_email'];
    $first_name = $_POST['register_first_name'];
    $last_name = $_POST['register_last_name'];
    $password = $_POST['register_password'];

    $sql = pg_query("INSERT INTO users (email, first_name, last_name, password) VALUES ('$email', '$first_name', '$last_name', '$password')");

    if ($sql) {
        echo "registration successful";
        header('location: home.php');
    }
}

function login() {
    $email = $_POST['login_email'];
    $password = $_POST['login_password'];

    $query = pg_query("SELECT * FROM users WHERE email = '$email' LIMIT 1");
    $result = pg_fetch_assoc($query);

    if ($result) {
        $_SESSION['email'] = $result['email'];
    
        echo "Login success";
        header('location: home.php');

    } else {
       echo "Account not found";
       header('location: index.php');
    }    
}

//register
if (isset($_POST['btn_register'])) {
    return register();
}

// login
if (isset($_POST['btn_login'])) {
    return login();
}


if (isset($_POST['logout'])) {
    unset($_SESSION['email']);
    header('location: index.php');
}


?>