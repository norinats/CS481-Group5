<!doctype html>
<html>
<head>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/profile.css">
</head>
<title><?php echo $_GET['title']; ?></title>

<body>
<div class="search-div">
<?php echo "<img src={$_GET['imgsrc']}>"; ?>
<h2><?php echo $_GET['title']; ?></h2>
<hr>
<strong>Overview: </strong><?php echo $_GET['plot']; ?><br>
<strong>Actors/Actresses: </strong><?php echo $_GET['actors']; ?>
</div>
</body>
</html>

<!-- We used $_GET to get the information we previously established on another page $_GET['variableName'] -->