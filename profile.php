<?php
$currentState =  $_COOKIE['selected'];
?>

<html>
<head>
    <title>?????</title>
    <link rel="stylesheet" href="styles.css">
</head>
<title><?php echo $_GET['title']; ?></title>

<body>
  <header>
    <div id="navbar">
    <li><h1>COVID TRACKER</h1></li>
    <li><a href="index.php">Home</a></li>
    <li><a href="#news">News</a></li>
    <li><a href="#covidinfo">COVID-19 Info</a></li>
    <li><a href="#about">About</a></li>
  </div>
  </header>


  <h1><?php echo $currentState ?></h1>
</body>
</html>


<!-- MAKE NAVBAR STICKY -->
    <script>
    window.onscroll = function() {myFunction()};

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
    </script>

</body>
</html>
