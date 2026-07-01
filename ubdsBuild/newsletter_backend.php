<?php

include_once('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST['email']);

    // Validate Email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        header("Location: insights.php?newsletter=invalid");
        exit();

    }

    $email = mysqli_real_escape_string($coni, $email);
    $ip = $_SERVER['REMOTE_ADDR'];

    // Check if already exists
    $check = mysqli_query($coni, "SELECT id FROM newsletter_subscribers WHERE email='$email'");

    if(mysqli_num_rows($check) > 0){

        header("Location: insights.php?newsletter=exists");
        exit();

    }

    $query = "INSERT INTO newsletter_subscribers
    (email, ip_address)
    VALUES
    ('$email','$ip')";

    if(mysqli_query($coni,$query)){

        header("Location: blog.php?newsletter=success");
        exit();

    }else{

        header("Location: blog.php?newsletter=error");
        exit();

    }

}else{

    header("Location: blog.php");

}
?>