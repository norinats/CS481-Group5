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
        $command = escapeshellcmd('get_api.py WA');
        $output = shell_exec($command);
        echo $output;
    ?>
    
    </body>
</html>