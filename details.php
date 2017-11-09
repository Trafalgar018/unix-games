<?php
include_once 'configurationDB/config.php';
include_once 'configurationDB/connectdb.php';


$id = $_REQUEST['id'];

$queryResult = $pdo->prepare("SELECT * from juegos WHERE id = :id");
$queryResult->execute([
    'id' => $id
]);


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
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">OPTIONS<span
                                    class="caret"></span></a>
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
    <table>
        <br>
        <tbody>
        <?php while ($row = $queryResult->fetch(PDO::FETCH_ASSOC)): ?>

            <td>

                <tr>
                    <img src="<?= $row['image'] ?>" width="500px">
                </tr>
            <td>

                <br>
                <br>
            <td>

            <td>
                <tr>
                    <th>Name:</th>
                    <td><?= $row['name'] ?></td>
                </tr>

                <tr>
                    <th>Genre:</th>
                    <td><?= $row['genre'] ?></td>
                </tr>

                <tr>
                    <th>Date:</th>
                    <td><?= $row['date'] ?></td>
                </tr>

                <tr>
                    <th>Developer:</th>
                    <td><?= $row['developer'] ?></td>
                </tr>

                <tr>
                    <th>Online:</th>
                    <td><?= $row['online'] ?></td>
                </tr>

                <tr>
                    <th>Description: </th>
                    <td><?= $row['description'] ?></td>
                </tr>



            </td>
            </td>


        <?php endwhile; ?>
        </tbody>
    </table>

</div>

</body>
</html>


<!--

<tr>

    <td><img src="<?= $row['image'] ?>"></td>

    <td>
    <td>
    <th>Name: </th><?= $row['name'] ?></td>
    <td><?= $row['name'] ?></td>
    </td>

    <td>
    <th>Genre </th></td>
    <td><?= $row['genre'] ?></td>
    </td>
    </td>
</tr>

-->