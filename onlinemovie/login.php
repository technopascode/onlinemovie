<?php
session_start();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CinephileHub</title>
    <link rel="stylesheet" href="master.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
            <a href="login.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
            <span class="navbar-text">CinephileHub</span>

            <ul class="navbar-nav">
              <li class="nav-item"> <a href="#A" class="nav-link"> Services</a> </li>
              <li class="nav-item"> <a href="user-login.php" class="nav-link"> Sign In</a> </li>

            </ul>

        </nav>

        <div class="container">
          <div class="jumbotron">
            <h1>Watch Anywhere, <br> Watch Anytime... </h1> <br>
            <a href="test.php" type="button" class="btn btn-danger btn-block">Sign Up Now</a>
          </div>
        </div>
      </div>

      </header>



    <section class="features">
        <a href="#" name="A"></a>
        <h2>Our Services</h2>

        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <p class="arrange"><img src="images/mob.png" alt=""> <br> CinephileHub is a Free Movies streaming site with zero ads. We let you watch movies online without having to
        register or paying, with over 10000 movies and TV-Series. You can also Download full movies from HD Today and
        watch it later if you want.
              </p>
            </div><div class="col-md-4">
              <p class="arrange"><img src="images/mess.png" alt=""> <br> <ul>
        <li>Ads free</li>
        <li>Completely free and fast</li>
        <li>Registration free</li>
        <li>Streaming is just 1 click away</li>
        <li>Large content library: more than 400k movies and shows</li>
        <li>Real HD Quality</li>
      </ul>
              </p>
            </div>
              <div class="col-md-4">

                <p class="arrange">
                  <img src="images/desktop.jpg"> <br>   Don't waste your time anymore, bookmark CinephileHub website now and start watching movies and TV shows
       online for free with your friends on our website. Thank you!
                </p>
              </div>

            </div>

          </div>
          <h3></h3>

    </section>
    <footer class="page-footer font-small blue">

      <div class="footer-copyright text-center py-3">©2024 Copyright:
        <a href="">jair & Migi & Kayleigh</a>
      </div>

    </footer>
  </body>
</html>
