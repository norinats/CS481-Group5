<html>
<head>
    <title>???</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="profile.css">
</head>

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

  <h1 id="state-title"></h1>
  <div id="stats">
      <p id="test"></p>
      <table>
        <tr><td>Total Number Cases:</td><td id="positive"></td></tr>
        <tr><td>Total Number Deaths:</td><td id="deaths"></td></tr>
        <tr><td>Total Number Recovered:</td><td id="recovered"></td></tr>
      </table>
  </div>
  
</body>
</html>

<script src="js/jquery.min.js"></script>
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
<script src="js/update_profile.js"></script>

</body>
</html>
