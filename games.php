<?php
include_once 'configurationDB/config.php';
include_once 'configurationDB/connectdb.php';

$queryResult = $pdo->query("SELECT * from juegos");

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

<body>
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
</div>


<div class="container" name="text">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Genre</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        <?php while( $row = $queryResult->fetch(PDO::FETCH_ASSOC) ): ?>
            <tr>
                <td><a href="details.php?id=<?=$row['id']?>"><img src="<?=$row['image']?>"></td>
                <td><?=$row['name']?></td>
                <td><?=$row['genre']?></td>
                <td><?=$row['date']?></td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>

</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>