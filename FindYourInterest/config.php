<?php

    session_start();
    $conn = new mysqli('localhost','root','Mysqldatabase','reglog');

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    if ($password == $cpassword && !empty($password)) {
        $query = "INSERT INTO tb_user VALUES('','$name','$username','$email','$password')";
        if (mysqli_query($conn, $query)) {
            echo "<script> alert('Registration successful')</script>";
        }
    } else {
        echo "<script> alert('Password does not match! or provide valid password')</script>";
    }
} else { }
?>