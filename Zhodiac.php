<!-- html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zhodiac Sign</title>
</head>

<style>
    body{
        margin: 10px;
        padding: 10px;
        align-items: center;
        text-align: center;
        background-color: black;
    }
    label{
        color: darkgrey;
        text-shadow: 1px 1px rgba(0, 0, 0, 0.2);
        font-size: 22px;margin: 10px;
    }
    input{
        width: 200px;
        height: 28px;margin: 10px;
    }
    #btn{
        background-color: yellow;
        width: 100px;
        height: 35px;
    }
    form{
        margin: 10px;
        margin-left: 300px;
        width: 550px;
        height: 250px;
        text-align: center;
        padding: 10px;
        border: 1px solid darkblue;
        background-color: navy;
        border-radius: 20px;
        box-shadow: 3px 0px 3px blue;
    }
</style>
<body>
<form method="post">
    <label>Enter your date : &nbsp;&nbsp;&nbsp;</label>
    <input type="number" name="date" /><br>
    <label>Enter your month : </label>
    <input type="number" name="month" /><br>
    <input type="submit" name="submit" value="Submit" id="btn" />
</form>
</body>
</html>
<!-- html close -->

<!-- php -->
<?php

header( "refresh:20;url=Zhodiac.php" );// auto clear output after 5 seconds
echo "<h2 style='color: red;text-shadow: 1px 1px 1px #000;'>Your output will be Cleared Within <b>20</b> seconds <br></h2>";
if (isset($_POST['submit'])) {
    $date = $_POST['date'];
    $month = $_POST['month'];
    echo "<h2 style='color: green;text-shadow: 1px 1px 1px yellow;'>Your Zhodiac Sign : </h2>";

    if (($month == 12 && $date >= 22) || ($month == 01 && $date <= 19)) {
        print("<b><h1 style='color: #fff;'>मकर / Capricorn</h1></b>");
    } elseif(($month == null && $date == null) || ($month == 0 && $date == 0)){
        print("<b><h1 style='color: #fff;'>Invalid Date Or Month</h1></b>");
    } elseif (($month == 1 && $date >= 2) || ($month == 2 && $date <= 18)) {
        print("<b><h1 style='color: #fff;'>Aquarius / कुंभ</h1></b>");
    } else if (($month == 2 && $date >= 19) || ($month == 3 && $date <= 20)) {
        print("<b><h1 style='color: #fff;'>मीन / Pisces</h1></b>");
    } elseif (($month == 3 && $date >= 21) || ($month == 4 && $date <= 19)) {
        print("<b><h1 style='color: #fff;'>मेष / Aries</h1></b>");
    } elseif (($month == 4 && $date >= 20) || ($month == 5 && $date <= 20)) {
        print("<b><h1 style='color: #fff;'>Taurus / वृषभ</h1></b>");
    } elseif (($month == 5 && $date >= 21) || ($month == 6 && $date <= 20)) {
        print("<b><h1 style='color: #fff;'>Gemini / मिथुन</h1></b>");
    } elseif (($month == 6 && $date >= 21) || ($month == 7 && $date <= 22)) {
        print("<b><h1 style='color: #fff;'>cancer / कर्क</h1></b>");
    } elseif (($month == 7 && $date >= 23) || ($month == 8 && $date <= 22)) {
        print("<b><h1 style='color: #fff;'>Leo / सिंह</h1></b>");
    } elseif (($month == 8 && $date >= 23) || ($month == 9 && $date <= 22)) {
        print("<b><h1 style='color: #fff;'>Virgo / कन्या</h1></b>");
    } elseif (($month == 9 && $date >= 23) || ($month == 10 && $date <= 22)) {
        print("<b><h1 style='color: #fff;'>Libra / तूळ</h1></b>");
    } elseif (($month == 10 && $date >= 23) || ($month == 11 && $date <= 21)) {
        print("<b><h1 style='color: #fff;'>Scorpio / वृश्चिक</h1></b>");
    } elseif (($month == 11 && $date >= 22) || ($month == 12 && $date <= 21)) {
        print("<b><h1 style='color: #fff;'>Sagittarius / धनु</h1></b>");
    }
}
?>