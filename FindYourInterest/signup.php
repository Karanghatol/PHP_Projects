<!-- registration page -->
<?php
require "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
 <style>
    label {
        text-shadow: 1px 1px 1px #878787;
        color: #1f1f1f;
    }

    .form_div {
        margin: 50px auto;
        padding: 30px;
        width: max-content;
        height: 600px;
        border-radius: 12px;
        border-radius: 12px;
        border-radius: 12px;
        background: #ebebeb;
        box-shadow: -8px 8px 16px #a09fbf,
            8px -8px 16px #f4f3ff;
    }

    .reg-here-h1 {
        background-color: blueviolet;
        width: 100%;
        height: 7vh;
        color: #f4f3ff;
        border-radius: 10px 20px 0 10px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        text-align: center;
    }

    .same-input-class {
        height: 25px;
        width: 600px;
        margin: 10px;
    }

    #btn {
        width: 400px;
        height: 7vh;
        padding: 10px 20px;
        background-color: #3498db;
        color: #fff;
        border: none;
        border-radius: 5px;
        font-size: 18px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    #btn:hover {
        background-color: #2980b9;
    }
</style> 
<?php
include "nav.html";
?>
<body>
    <div class="form_div">
        <h1 class="reg-here-h1">Register Here</h1>
        <form action="" method="post" autocomplete="on" class="rg-form">
            <label>Enter name : </label><br>
            <input type="text" class="same-input-class" name="name" id="name" /> <br>
            <label>Enter username : </label><br>
            <input type="text" class="same-input-class" name="username" id="username" /> <br>
            <label>Enter email : </label><br>
            <input type="email" class="same-input-class" name="email" id="email" /><br>
            <label>Enter password : </label><br>
            <input type="password" class="same-input-class" name="password" id="password" /> <br>
            <label>Confirom password : </label><br>
            <input type="password" class="same-input-class" name="cpassword" id="cpassword" /> <br>
            <input type="submit" class="same-input-class" id="btn" value="submit" name="submit" />
        </form>

    <a href="login.php">Click Here</a>To Login
<br><br>
    <a href="http://localhost/phpmyadmin/index.php?route=/sql&db=reglog&table=tb_user&pos=0">See Databases</a>
    </div>
</body>

</html>


<?php
include("footer.html");
?>