<?php


//get the data from the form
$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$msg = $_POST["message"];

//Cocat data
$emailBody = "From:" . $fname . " " . $lname . "\n" . $msg;

// use wordwrap() if lines are longer than 70 characters
$email = wordwrap($msg,70);

// send email
//$status = mail("support@yourtapapp.com","Contact from website",$emailBody);

$myfile = file_put_contents('logs.txt', $emailBody.PHP_EOL , FILE_APPEND | LOCK_EX);
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--(Bootstrap) The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Tap</title>
        <link rel=icon href=assets/logo.png>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Roboto CSS -->
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/contact.css">
        <link rel="stylesheet" href="css/responsive.css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div>
                        <a class="left-pull"  href="#">
                            <img id="logo" src="assets/logo.png" >
                        </a>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="https://tapblog.tumblr.com/" target="_blank">Blog</a></li>
                        <li><a href="legal.html">Legal</a></li>
                        <li><a id="current-page" href="contact.html">Contact</a></li>

                        <li class="hidden-xs">
                            <a href="#"><img class="nav-store-icon" src="assets/apple.png"></a>
                        </li>

                        <li class="hidden-xs">
                            <p id="plus-sign">+</p>
                        </li>

                        <li class="hidden-xs">
                            <a href="#"><img class="nav-store-icon" src="assets/droid.png"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="main-container">
            <p> Submission Sent </p>
            <!-- jQuery -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

            <!-- Bootstrap JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        </div>
    </body>

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

</html>
