<!DOCTYPE php>
<html>
<head>
    <title>COVID TRACKER Homepage</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div id="navbar">
        <li><h1>COVID TRACKER</h1></li>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="#covidinfo">COVID-19 Info</a></li>
        <li><a href="about.php">About</a></li>
      </div>
    </header>
    <main>
    <div id="content">
        <script src="js/jquery.min.js"></script>
        <script src="js/mapdata.js"></script>
        <script src="js/usmap.js"></script>
        <script type="text/javascript" src="js/select.js"></script>

        <script type='text/javascript' src='http://code.jquery.com/jquery-1.11.1.min.js'></script>
        <link rel="stylesheet" href="css/chosen.css">
        <script type='text/javascript' src='js/chosen.jquery.min.js'></script>
        <select data-placeholder="Search for State..." id="state_list" style="width:350px;" tabindex="1">
          <option value=""></option>
        </select>
        <script src="js/search.js"></script>

        <script src="js/update_map.js"></script>
        <div id="map"></div>
    </div>
    </main>

<script>resetCookies();</script>

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
