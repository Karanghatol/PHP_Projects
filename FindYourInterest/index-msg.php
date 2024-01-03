<?php
    include("nav.html");
?>
<br><br> 
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>Home Page</title>
</head>
<style>
    body {
        background: #fffff9;
    }

    .form_div {
        width: 700px;
        height: fit-content;
        padding: 10px;
        margin: auto;
        margin-top: 16px;
        border-radius: 7px;
        background: #ffffff;
        box-shadow: 5px 5px 31px #666666, -5px -5px 31px #000;
        margin-bottom: 20px;
    }

    @media (max-width: 600px) {

        .form_div {
            width: 100%;
            height: 600px;
            border: 3px solid #000;
        }

        form {
            width: 90%;
            height: max-content;
        }

        .mb-3 {
            width: auto;
            height: 30px;
            margin: 0;
            padding: 0;
        }
        .col-sm-4 {
            width: auto;
        }
    }

    header {
        background-color: navy;
        width: 100%;
        height: max-content;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 23px;
        padding: 10px;
        margin: auto;
        color: aliceblue;
        border-radius: 10px 20px 0 0;
    }

    .col-auto span {
        display: none;
    }

    .mb-3 {
        margin: 20px;
    }
</style>

<body>
    <form action="" method="post">
        <div class="form_div">
            <header>Send us a Message</header>
            <div class="mb-3 row">
                <label for="Name" class="col-sm-4 col-form-label"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                        height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                        <path
                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                    </svg> Enter Name</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="Name" placeholder="Name">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="email" class="col-sm-4 col-form-label">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-envelope" viewBox="0 0 16 16">
                        <path
                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                    </svg>
                    Enter email
                </label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Phone" class="col-sm-4 col-form-label">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-phone" viewBox="0 0 16 16">
                        <path
                            d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    </svg>
                    Enter Phone</label>
                <div class="col-sm-10">
                    <input type="number" name="phone" class="form-control" id="Phone" placeholder="Phone">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="webstie" class="col-sm-4 col-form-label">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-share" viewBox="0 0 16 16">
                        <path
                            d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z" />
                    </svg>
                    Enter webstie</label>
                <div class="col-sm-10">
                    <input type="text" name="website" class="form-control" id="websitwe" placeholder="enter website">
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-messenger" viewBox="0 0 16 16">
                        <path
                            d="M0 7.76C0 3.301 3.493 0 8 0s8 3.301 8 7.76-3.493 7.76-8 7.76c-.81 0-1.586-.107-2.316-.307a.639.639 0 0 0-.427.03l-1.588.702a.64.64 0 0 1-.898-.566l-.044-1.423a.639.639 0 0 0-.215-.456C.956 12.108 0 10.092 0 7.76zm5.546-1.459-2.35 3.728c-.225.358.214.761.551.506l2.525-1.916a.48.48 0 0 1 .578-.002l1.869 1.402a1.2 1.2 0 0 0 1.735-.32l2.35-3.728c.226-.358-.214-.761-.551-.506L9.728 7.381a.48.48 0 0 1-.578.002L7.281 5.98a1.2 1.2 0 0 0-1.735.32z" />
                    </svg> Enter Massege</label><br>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="massege"></textarea>
            </div>
            <br>
            <!-- <button type="submit" name="submit_">Send Massege</button> -->
            <input type="button" class="btn-primary" value="Submit" name="submit_">
        </div>
    </form>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <!-- <script src="script.js"></script> -->
</body>

</html>
<?php
include("footer.html");
?>