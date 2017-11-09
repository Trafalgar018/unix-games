<?php

function dameDato($dato){
    echo '<pre>';
    print_r($dato);
    echo '</pre>';
    die();
}


function assignValue($array){
    $array['date'] = ['date'];
    $array['description'] = htmlspecialchars(trim($_POST['description']));
    $array['developer'] = htmlspecialchars(trim($_POST['developer']));
    $array['genre'] = htmlspecialchars(trim($_POST['genre']));
    $array['image'] = htmlspecialchars(trim($_POST['image']));
    $array['name'] = htmlspecialchars(trim($_POST['name']));
    $array['online'] = htmlspecialchars(trim($_POST['online']));

    return $array;
}

function checkErrors($array){
    $errors = array();
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

}