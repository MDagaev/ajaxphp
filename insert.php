<?php

require_once ("database.php");

$query = "INSERT INTO news (title, text)  VALUE ('" . $_POST['title'] . "', '" . $_POST['text'] . "')";
$result = mysqli_query($link, $query);

if (!$result){
    die(mysqli_error($link));
}

//var_dump($_POST);
//echo $_POST['title'] . ", " . $_POST['text'];
