<?php
if (isset($_POST["Mathamatics"])) {

}
?>
<?php
include("nav.html");
?>

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
                margin: 60px auto;
                border: 2px solid black;
                background-color: rgba(0, 0, 0, 0.9);
                color: #fff;
                width: 800px;
                border-radius: 20px;
        }

        input {
                margin: 7px 5px;
        }

        .next {
                padding: 10px 70px;
                color: white;
                background-color: #0170e7;
                border-radius: 10px;
        }
</style>

<body>
        <div class="form-elem">
                <form action="" method="post" class="first">
                        <h1>Basic Question's</h1><br><br>
                        <label>Are You are good at Matha<b>matics?</label><br><br>
                        </b> <input type="radio" name="Mathamatics" value="vgood" />
                        <label>Very Good</label><br>
                        <input type="radio" name="Mathamatics" value="good" />
                        <label>Good</label><br>
                        <input type="radio" name="Mathamatics" value="avrg" />
                        <label>Avrage</label><br>
                        <input type="radio" name="Mathamatics" value="Not" />
                        <label>Not</label>
                        <br><br>
                        <label><b>Are You are good at Biology?</b></label><br><br>
                        <input type="radio" name="Biology" value="vgood" />
                        <label>Very Good</label><br>
                        <input type="radio" name="Biology" value="good" />
                        <label>Good</label><br>
                        <input type="radio" name="Biology" value="avrg" />
                        <label>Avrage</label><br>
                        <input type="radio" name="Biology" value="Not" />
                        <label>Not</label>
                        <br><br>
                        <label><b>Are You are good at Physics?</b></label><br><br>
                        <input type="radio" name="Physics" value="vgood" />
                        <label>Very Good</label><br>
                        <input type="radio" name="Physics" value="good" />
                        <label>Good</label><br>
                        <input type="radio" name="Physics" value="avrg" />
                        <label>Avrage</label><br>
                        <input type="radio" name="Physics" value="Not" />
                        <label>Not</label>
                        <br><br>
                        <label><b>Are You are good at History?</b></label><br><br>
                        <input type="radio" name="History" value="vgood" />
                        <label>Very Good</label><br>
                        <input type="radio" name="History" value="good" />
                        <label>Good</label><br>
                        <input type="radio" name="History" value="avrg" />
                        <label>Avrage</label><br>
                        <input type="radio" name="History" value="Not" />
                        <label>Not</label>
                        <br><br>
                        <label><b>Are You are good at Chemistry?</b></label><br><br>
                        <input type="radio" name="Chemistry" value="vgood" />
                        <label>Very Good</label><br>
                        <input type="radio" name="Chemistry" value="good" />
                        <label>Good</label><br>
                        <input type="radio" name="Chemistry" value="avrg" />
                        <label>Avrage</label><br>
                        <input type="radio" name="Chemistry" value="Not" />
                        <label>Not</label>
                        <br><br>
                        <label><b>Are You are good at Physiqal?</b></label><br><br>
                        <input type="radio" name="Physiqal" value="vgood" />
                        <label>Very Good</label><br>
                        <input type="radio" name="Physiqal" value="good" />
                        <label>Good</label><br>
                        <input type="radio" name="Physiqal" value="avrg" />
                        <label>Avrage</label><br>
                        <input type="radio" name="Physiqal" value="Not" />
                        <label>Not</label>
                        <br><br>
                        <label><b>Are You are good at Art?</b></label><br><br>
                        <input type="radio" name="Art" value="vgood" />
                        <label>Very Good</label><br>
                        <input type="radio" name="Art" value="good" />
                        <label>Good</label><br>
                        <input type="radio" name="Art" value="avrg" />
                        <label>Avrage</label><br>
                        <input type="radio" name="Art" value="Not" />
                        <label>Not</label><br><br>
                        <input type="submit" value="Next" class="next" name="next" />
                </form>
        </div>
        <?php
        if (isset($_POST["next"])) {
                $math = $_POST['Mathamatics'];

                if ($math = 'vgood') {
                        $file = fopen('Mathamatics.php', 'r');
                        if ($file) {
                                while (!feof($file)) {
                                        // echo fgets($file); // Output file content or perform other operations
                                }
                                fclose($file);
                        } else {
                                echo 'failed to open Mathamatics.php';
                        }
                } elseif ($math = 'good') {
                        $file = fopen('biology.php', 'r');
                }
        }
        ?>
</body>

</html>

<?php
include("footer.html");
?>