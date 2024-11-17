<!DOCTYPE html>
<html lang="en">

<head>

<?php
include "include/include_header.php";
?>

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="assets/images/logo.png" alt="" style="max-width: 112px;">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <?php
            include "nav_bar.php";
            ?>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="caption header-text">
         
            <div class=""></div>
            <h4>Welcome to <em>The website for personalized food</em> surveys tailored <span>to your taste!</span>
            <style>
            em, h4, span {
            font-family: "Nerko One", cursive;
            font-weight: 400;
            font-style: normal;

        }
          </style>
          </h4>

            <div class="second-button"><a href="login.php">Start Quiz</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>

 

 


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <?php
  include "include/include_script.php";
  ?>


</body>

</html>