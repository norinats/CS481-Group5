<html>
<head>
    <title>?????</title>
    <link rel="stylesheet" href="styles.css">
</head>
<title><?php //echo $currentState; ?></title>

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

    function getCookie(cookie) {
        var name = cookie + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    var selected_state = getCookie("selected");
    document.getElementById("state-title").innerHTML = selected_state;
    </script>

</body>
</html>
