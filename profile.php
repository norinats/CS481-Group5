<html>
    <head>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="profile.css">
    </head>

    <body>

    <header>
        <ul>
        <li><h1>COVID TRACKER</h1></li>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="#news">News</a></li>
        <li><a href="#covidinfo">COVID-19 Info</a></li>
        <li><a href="#about">About</a></li>
      </ul>
    </header>

    <?php 
        //$state = $_GET['state_specific'];
        $state = "WA";
        $command = "get_api.py [$state]";
        $cmd = escapeshellcmd($command);
        $output = shell_exec($cmd);
        echo $output;
    ?>
    
    </body>
</html>