<!DOCTYPE php>
<html>
<head>
    <title>COVID TRACKER mainpage</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>COVID TRACKER
            <hr>
        </h1>
    </header>
    <main>
    <div id="content">
        <div id="lobbytitle">
            <h2>US MAP</h2>
            <p>Click on a state to see their COVID statistics:</p><br>
        </div>
        <div id="lobbyform">
            <form id="createGame" method="POST" action="game.php">
              <script src="mapdata.js"></script>
              <script src="usmap.js"></script>
        			<div id="map"></div>
            </form>
        </div>
    </div>
    </main>
