<?php
if (isset($_POST['register'])) {
    $conn = new mysqli('localhost', 'root', '', 'dbcon_demo');
    if ($conn) {
        $sql = "SELECT MAX(id) FROM dbcon_t2";
        $result = mysqli_query($conn, $sql);

        if ($row = mysqli_fetch_assoc($result)) {
            $id = $row['fname'];
            $id++;
        } else {
            $id = 1;
        }

        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $lname = $_POST['lname'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $mob = $_POST['mob'];
        $add = $_POST['add'];
        $ch = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890/?@#_4$%&*";
        $p = substr(str_shuffle($ch), 0, 6);

        $query = "INSERT INTO `dbcon_t2` (`id`, `fname`, `mname`, `lname`, `dob`, `gender`, `email`, `mob`, `add`) VALUES ('','$fname','$mname','$lname','$dob','$gender','$email','$mob','$add')";

        if (mysqli_query($conn, $query)) {
            echo "<script>alert('registration successful') </script>";
        } else {
            echo "not registered!!!!!!";
        }
    } else {
        echo "not connected to connection -- -- - -- - -- !!!!!!";
    }
}
if(isset($_POST['clear'])){
    ob_end_clean();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form {
        margin: auto;
        padding: 5px;
        width: 550px;
        height: 650px;
        display: block;
        border: 2px solid black;
    }
    input {
        width: 97%;
        height: max-content;
        height: 30px;
        font-size: medium;
        border: 2px solid gray;
        margin: 5px;
        border-radius: 6px 6px 0px 6px;
        padding-left: 10px;
    }
    h1 {
        color: navy;
        background-color: whitesmoke;
        width: 100%;
        font-size: 63px;
    }

    #iradio {
        height: 15px;
        width: 15px;
    }
    .submit {
        background-color: blue;
        color: white;
        border: 2px solid gray;
        border-radius: 10px 10px 10px 10px;
        font-weight: bolder;
        font-size: 19px;
        height: 35px;
    }
</style>
<body>
    <form action="" method="post">
        <h1>Registration Form</h1>
        <input type="text" name="fname" id="" placeholder="first name"><br>
        <input type="text" name="mname" id="" placeholder="middel nname"><br>
        <input type="text" name="lname" id="" placeholder="first name"><br>
        <input type="date" name="dob" /><br>
        male
        <input type="radio" name="gender" value="m" id="iradio" />
        felmale
        <input type="radio" name="gender" value="f" id="iradio" />
        other
        <input type="radio" name="gender" value="o" id="iradio" />
        <input type="email" name="email" id="" placeholder="email"><br>
        <input type="text" name="mob" id="" placeholder="mobile number"><br>
        <input type="text" name="add" id="" placeholder="address"><br>
        <!-- <input type="password" name="p" id="" placeholder="autogenerated password"><br> --><br>
        <input type="submit" value="Register" name="register" class="submit" />
        <input type="submit" value="Clear" name="clear" class="submit" />
    </form>
</body>

</html>
