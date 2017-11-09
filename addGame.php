<?php
include_once 'configurationDB/config.php';
include_once 'configurationDB/connectdb.php';
include_once 'helpers.php';

$errors = [];

//Validamos el formulario

if (!empty($_POST)) {
    $date = $_POST['date'];
    $description = $_POST['description'];
    $developer = $_POST['developer'];
    $genre = $_POST['genre'];
    $image = $_POST['image'];
    $name = $_POST['name'];
    $online = $_POST['online'];

    if (empty($name)) {
        $errors['name']['empty_name'] = 'No name found';
    }

    if (empty($developer)) {
        $errors['developer']['empty_developer'] = 'No developer found';
    }

    if (empty($image)) {
        $errors['image']['empty_image'] = 'No image found';
    }

    if (empty($description)) {
        $errors['description']['empty_description'] = 'No description found';
    }


    if (empty($errors)) {

        $sql = " INSERT INTO juegos ( date, description, developer, genre, image, name, online)
          VALUES (:date, :description, :developer, :genre, :image, :name, :online)";

        $result = $pdo->prepare($sql);

        $result->execute([

            'date' => $date,
            'description' => $description,
            'developer' => $developer,
            'genre' => $genre,
            'image' => $image,
            'name' => $name,
            'online' => $online
        ]);

        header('Location: index.php');

    }
}


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

<body id="bodyAdd">
<div class="header-nightsky">
    <nav class="navbar navbar-default" id="head">
        <div class="container">
            <a class="navbar-brand" href="index.php">UNIX GAMES</a>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="games.php">GAMES</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">OPTIONS<span
                                    class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="addGame.php">Add Game</a></li>
                            <li><a href="">Edit Game</a></li>
                            <li><a href="deleteGame.php">Delete Game</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" name="text">

        <h3>Add new game</h3>
        <br>
        <form action="" method="post">

            <!-- INPUT NAME -->

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Game Name">
            </div>

            <!-- INPUT GENRE -->

            <div class="form-group">
                <label for="genre">Genre</label>
                <select class="form-control" name="genre">
                    <option value="Action">Action</option>
                    <option value="Adventure">Adventure</option>
                    <option value="Casual">Casual</option>
                    <option value="MMO">MMO</option>
                    <option value="Racing">Racing</option>
                    <option value="RPG">RPG</option>
                    <option value="Simulation">Simulation</option>
                    <option value="Shooter">Shooter</option>
                    <option value="Sports">Sports</option>
                    <option value="Strategy">Strategy</option>
                </select>
            </div>

            <!-- INPUT IMAGE -->

            <div class="form-group">
                <label for="image">Image</label>
                <input type="text" class="form-control" id="image" name="image" placeholder="Image URL">
            </div>

            <!-- INPUT DESCRIPTION -->

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" rows="5"></textarea>
            </div>

            <!-- INPUT DATE -->

            <div class="form-group">
                <label for="date">Date of Publication</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>

            <!-- INPUT DEVELOPER -->

            <div class="form-group">
                <label for="developer">Developer</label>
                <input type="text" class="form-control" id="developer" name="developer" placeholder="Developer">
            </div>

            <!-- INPUT ONLINE -->

            <div class="form-group">
                <label for="online">Online</label>
                <select class="form-control" name="online">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>

</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>