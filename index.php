<?php
include_once 'configurationDB/config.php';
include_once 'configurationDB/connectdb.php';

?>

<!DOCTYPE html>
<html>

<head>
    <title>Header</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/Header-Nightsky.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body id="bodyIndex">
<div class="header-nightsky">
    <nav class="navbar navbar-default" id="head">
        <div class="container">
            <a class="navbar-brand" href="index.php">UNIX GAMES</a>

            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="games.php">GAMES</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">OPTIONS<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="addGame.php">Add Game</a></li>
                            <li><a href="editGame.php">Edit Game</a></li>
                            <li><a href="deleteGame.php">Delete Game</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" name="text">
        <tr>
            <h2>Esta página cuenta con una base de datos de juegos, con la particularidad de que solo contiene juegos que son compatibles con linux</h2>
        </tr>
    </div>



</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>