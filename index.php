<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- bg-video -->
    <video autoplay muted loop id="bg-vid" class="video-container">
        <source src="video/bg-video.mkv" type="video/mp4">Your browser does not support HTML 5 Video
    </video>

    <!-- Contents -->
    <div id="shades">
    <!-- Navbar -->
        <div id="navs">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent nav-margin" id="lp">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span   span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">MYBRAND</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="main/homepage.php">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <ul class="navbar-nav mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="main/login.php">Log In<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
        </nav>
        </div>

        <!-- jumbotron -->
        <div class="landingPage">
            <div class="ctn">
                <h1>The Best Streaming Service</h1>
                <button type="button" class="btn btn-light">
                    <a class="nav-link bold" href="main/login.php"> JOIN NOW</a>
                </button>
                <p id="lp0">Thousands of Movies <span class="bold"> FOR YOU </span>in a palm of your hand. <span class="bold">JOIN NOW!</span>
                try it for FREE!</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>