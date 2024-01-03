<?php include("nav.html"); ?>



<!DOCTYPE html>
<html>

<head>
    <title>Questionnaire</title>
</head>
<style>
    .first {
        margin: auto;
        width: max-content;
        color: #fff;
        padding: 2px 2px;
    }

    .form-elem {
        margin: 100px auto;
        border: 2px solid black;
        background-color: blueviolet;
        color: #fff;
        width: 800px;
        border-radius: 20px;
    }

    input {
        margin: 20px 0px;
        width: 30px;
        color: #fff;
        padding: 10px 0;
        background-color: transparent;
        border-top: none;
        border-left: none;
        border-color: #fff;
        border-radius: 20px;
    }
</style>

<body>
    <div class="form-elem">
        <form action="Mathamatics.php" method="post" class="first">
            <h1>Basic Question's</h1>
            <p>select what in You are good at?</p><br>
            <input type="radio" name="Mathamatics" value="Mathamatics" />
            <label>Very Good</label><br>
            <input type="radio" name="Mathamatics" value="Mathamatics" />
            <label>Good</label><br>
            <input type="radio" name="Mathamatics" value="Mathamatics" />
            <label>Avrage</label><br>
            <input type="radio" name="Mathamatics" value="Mathamatics" />
            <label>Not</label>
        </form>
        <form action="Mathamatics.php" method="post" class="first">
            <input type="submit" name="History" value="History" /><br>
        </form>
        <form action="Mathamatics.php" method="post" class="first">
            <input type="submit" name="Biology" value="Biology" /><br>
        </form>
        <form action="Mathamatics.php" method="post" class="first">
            <input type="submit" name="Chemistry" value="Chemistry" /><br>
        </form>
        <form action="Mathamatics.php" method="post" class="first">
            <input type="submit" name="Physics" value="Physics" /><br>
        </form>
        <form action="Mathamatics.php" method="post" class="first">
            <input type="submit" name="Physiqal" value="Physiqal" /><br>
        </form>
        <form action="Mathamatics.php" method="post" class="first">
            <input type="submit" name="Art" value="Art" /><br>
        </form>
    </div>
</body>

</html>



<?php include("footer.html"); ?>