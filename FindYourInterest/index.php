<!-- HOME Page of website -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FindYourInterest</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
    header {

        margin-top: 2vh;
        width: 85%;
        height: 100vh;
        background-image: url("images/pixels (2).jpg");
        background-attachment: fixed;
        background-size: cover;
        background-repeat: no-repeat;
        border-radius: 0 0 12px 12px;
        box-shadow: inset 0px 0px 20px #fff,
            inset -35px -35px 120px #323232;
    }

    .header-description {
        height: fit-content;
        width: 600px;
        background-color: rgba(0, 0, 0, 0.2);
        /**/
        /* Semi-transparent background color for the description */
        padding: 20px;
        border-radius: 5px 10px 60px 0;
        color: #fff;
        margin: 15px 16px;
    }

    .description {
        line-height: 1.6;
        font-style: normal;
        font-size: 13px;
        font-family: sans-serif;
    }

    .learn-more {
        text-decoration: none;
        color: #fff;
        background-color: #3498db;
        padding: 10px 20px;
        border-radius: 5px;
        display: inline-block;
        margin-top: 10px;
    }

    /* Hover effect for the "Learn More" button */
    .learn-more:hover {
        background-color: #2980b9;
    }

    /* header button ---------------------------  */

    .button-container {
        text-align: center;
    }

    .large-button {
        margin-top: 8vh;
        padding: 10px 200px;
        /* Adjust the padding to make the button larger */
        font-size: 18px;
        /* Adjust the font size for a larger button text */
        color: #fff;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s ease;
        /* Add animation to background-color change */
        border-radius: 13px;
        border: 1px solid navy;
        background-color: #00ff00;
        box-shadow: 4px 4px 4px #0c0c0c,
            -4px -4px 4px #323232;
        /* animation */
        animation: btn-anim 1.6s infinite;
        width: 500px;
    }

    @keyframes btn-anim {
        50% {
            margin-top: 7vh;
            width: 460px;
            padding: 10px;
            /* margin: 20px 40px; */
            background-color: rgba(0, 130, 0, 0.9);
        }
    }

    .large-button:hover {
        background-color: rgba(0, 250, 0, 0.6);
        /* New background color on hover */
    }

    .centered-div {
        text-align: center;
        background-color: rgba(250, 250, 250, 0.3);
        padding: 1px;
        border: 1px 10px 10px solid #ccc;
        border-radius: 0px 0px 10px 10px;
        width: max-content;
        margin: auto;
    }

    .btn-desc {
        margin-top: 10px;
        width: fit-content;
        color: #00000f;
        font-size: 10px;
        padding: 2px;
    }

    /* aside ---------------------- */
    aside {
        float: right;
        width: 15%;
        background-color: #02020f;
        height: 100vh;
        color: #fff;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

    /* card start ----------------------------------------------------------------*/

    .card {
        margin-top: 100px;
        width: 100%;
        height: 42vh;
        border-radius: 27px;
        background: gainsboro;
        box-shadow: 5px 5px 10px #fff,
            -5px 5px 10px #fff;
    }

    .flip-card {
        width: 23%;
        height: 250px;
        perspective: 1000px;
        /* Perspective for 3D effect */
        margin: 10px;
        float: left;
    }

    .flip-card-inner {
        width: 100%;
        height: 100%;
        transition: transform 0.5s;
        transform-style: preserve-3d;
        /* Preserve 3D effect */
    }

    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
        /* Flip on hover */
    }

    .flip-card-front,
    .flip-card-back {
        width: 100%;
        height: 100%;
        position: absolute;
        backface-visibility: hidden;
        /* Hide the back of the card */
    }

    .flip-card-front {
        background-color: #f2f2f2;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .flip-card-back {
        background-color: #3498db;
        color: white;
        transform: rotateY(180deg);
        /* Initially hidden */
        display: flex;
        flex-direction: column;
        padding: 10px;
    }

    .flip-card img {
        max-width: 100%;
        max-height: 100%;
    }

    /* card end */

    .professions-list {
        margin-left: 200px;
        padding: 20px;
    }
</style>

<body>
    <?php include("nav.html"); ?>
    <aside>
        <blockquote>
            <p>Design is not just what it looks like and feels like. Design is how it works.</p>
            <cite>Steve Jobs</cite>
        </blockquote><br>
        <blockquote>
            <p>Design is not just what it looks like and feels like. Design is how it works.</p>
            <cite>Steve Jobs</cite>
        </blockquote><br>
        <blockquote>
            <p>Design is not just what it looks like and feels like. Design is how it works.</p>
            <cite>Steve Jobs</cite>
        </blockquote><br>
        <blockquote>
            <p>Design is not just what it looks like and feels like. Design is how it works.</p>
            <cite>Steve Jobs</cite>
        </blockquote>
    </aside>
    <header>

        <br><br><br>
        <!-- <picture>
            <source media="(200)" srcset="">
            <img src="images/car.jpg" alt="">
        </picture> -->
        <div class="header-description">
            <p class="description">
                "Welcome to our testing website, your one-stop destination for hands-on experiments and trial runs.
                Whether you're an aspiring coder, quality assurance enthusiast, or simply curious about the world of
                testing, we offer a safe and interactive platform to explore, practice, and refine your skills. Dive
                into our sandbox of software, web applications, and cutting-edge technology to experiment, learn, and
                improve. Join us on a journey of discovery, bug-squashing, and continuous improvement. Happy testing!"
            </p>
            <a href="learn_more.txt" class="learn-more">Learn More</a>
        </div><br><br><br>

        <br><br>
        <div class="button-container">
            <a href="start_test.php">
                <button type="submit" class="large-button">Start Test</button>
            </a>
        </div>
        <div class="centered-div">
            <p class="btn-desc">Start the test and see. <br>Let us know your interest by checking your interest.</p>
        </div>
    </header>
    <!-- card start -->
    <div class="card">
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="images/bgimg.jpg" alt="Image 1">
                </div>
                <div class="flip-card-back">
                    <h3>Card 1 Title</h3>
                    <p>Content for card 1 goes here.</p>
                </div>
            </div>
        </div>

        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="images/college.jpg" alt="Image 2">
                </div>
                <div class="flip-card-back">
                    <h3>Card 2 Title</h3>
                    <p>Content for card 2 goes here.</p>
                </div>
            </div>
        </div>

        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="images/pixels.jpg" alt="Image 3">
                </div>
                <div class="flip-card-back">
                    <h3>Card 3 Title</h3>
                    <p>Content for card 3 goes here.</p>
                </div>
            </div>
        </div>

        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="images/car.jpg" alt="Image 4">
                </div>
                <div class="flip-card-back">
                    <h3>Card 4 Title</h3>
                    <p>Content for card 4 goes here.</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php include("footer.html"); ?>