<!doctype html>
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
    <li><a class="active" href="index.php">Home</a></li>
    <li><a href="#news">News</a></li>
    <li><a href="#covidinfo">COVID-19 Info</a></li>
    <li><a href="#about">About</a></li>
  </div>
  </header>
  <a type="button" href="index.php">Back</a>
<div class="search-div">
<?php echo "<img src={$_GET['imgsrc']}>"; ?>
<h2><?php echo $_GET['title']; ?></h2>
<strong>Overview: </strong><?php echo $_GET['plot']; ?><br>
<strong>Actors/Actresses: </strong><?php echo $_GET['actors']; ?>
</div>
</body>
</html>

<!-- We used $_GET to get the information we previously established on another page $_GET['variableName'] -->
