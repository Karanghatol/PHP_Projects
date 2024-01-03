<html>
    <a href="index-msg.php">
    <button>
        Back to Home
    </button>
</a>

</html>
<?php

if (isset($_POST['submit_'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $website = $_POST['website'];
    $massege = $_POST['massege'];
    if ($email == null && $name == null && $phone == null && $website == null && $massege == null) {
        echo "<script> alert('Fill empty fields')</script>";
    } else {

        $conn = new mysqli('localhost', 'root', '', 'massege');

        if ($conn) {
            $sql = "INSERT INTO msg_t1 VALUES ('', '$name', '$email', '$phone', '$website', '$massege')";
            if (mysqli_query($conn, $sql)) {
                echo "<h1>data inserted successfully</h1> ";
            } else {
                echo "check connection !!!";
            }
        } else {
            echo "check connection !!!";
        }
    }
}
?>
