<!DOCTYPE php>
<html>
<head>
    <title>COVID TRACKER About</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div id="navbar">
        <li><h1>COVID TRACKER</h1></li>
        <li><a href="index.php">Home</a></li>
        <li><a class="active" href="about.php">About</a></li>
      </div>
    </header>
    <main>
    <div id="about">
      <h1><img src='img/about_img.PNG' height='40' alt=''>About</h1>
      <br><br><br>
      <h2><img src='img/qmark_img.PNG' height='40' alt=''>Who made this website?</h2>
      <h3>This site was created by Nori Natsuhara, Omar Gonzalez and Lam Nguyen from CS481 Group5 of
        Boise State University.</h3>
      <br><br><br><br><br>
      <h2><img src='img/source_img.PNG' height='40' alt=''>Sources</h2>
      <h3><u>https://covidtracking.com/data/api</h3>
      <h3>https://simplemaps.com/us</u></h3>
    </div>
    </main>


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
