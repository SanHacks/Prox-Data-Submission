<?php
declare(strict_types=1);

?>

<!--Create an HTML form with the following input fields to allow for the capturing of
data into a database:
Name, Surname, Id No, Date of Birth, POST button, CANCEL button
Create a database with a relevant schema to store the input fields in.
REQUIREMENTS:
• Save 3 records into the database without duplicating the Id No. The ability to
capture a duplicate Id No in the database table is an immediate fail.
• If a duplicate Id No is found up on capturing, the user must be informed about
this and the form repopulated. People do not like to input their information in
twice.
• Validate the Id No field to make sure it is a number and that it is only 13
characters long.
• Validate the Date of birth field to make sure that the input date is in the
format dd/mm/YYYY.
• There must be a valid data in the name and surname fields and no characters
that can cause a record not to be inputted into the database.-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ProxServer</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!--import fancy icons -->
    <script src="https://kit.fontawesome.com/6680624b05.js" crossorigin="anonymous"></script>
    <!--import jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta name="description" content="ProxServer , Save: Name, Surname, Id No, Date of Birth, POST button, CANCEL button">
    <meta name="keywords" content="Whatsapp, Manager, WhatsappMan">
    <meta name="author" content="Gundo">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="7 days">
    <meta name="language" content="English">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">

</head>

<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">ProxServer</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">About</a>
            <a class="nav-item nav-link" href="#">Contact</a>
            <a class="nav-item nav-link" href="#">Sign Up</a>
            <a class="nav-item nav-link" href="#">Login</a>
        </div>
    </div>
</nav>
<!-- end navbar -->

<!-- jumbotron -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-4">Welcome to Test 1</h1>
                <p class="lead">PHP Proficiency Test</p>
                <hr class="my-4">
                <p>"Talk Is Cheap, Show Me The Code..."</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Sign Up</h3>
                </div>
                <div class="card-body">
                    <form action="signup.php" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Enter your username">
                        </div>
                        <div class="form-group mt-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="form-group mt-3">
                            <label for="whatsapp">Whatsapp Number</label>
                            <input type="text" name="whatsapp" id="whatsapp" class="form-control" placeholder="Enter your whatsapp number">
                        </div>
                        <div class="form-group mt-3">
                            <label for="business">Business Name</label>
                            <input type="text" name="business" id="business" class="form-control" placeholder="Enter your business name">
                        </div>

                        <div class="form-group mt-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
                        </div>

                        <div class="form-group mt-3">
                            <label for="confirm_password">Confirm Password</label>
                            <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm your password">
                        </div>

                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>

<!-- end sign up form -->

<!-- footer -->
<?php include 'footer.php'; ?>
<!-- end footer -->

</body>
</html>