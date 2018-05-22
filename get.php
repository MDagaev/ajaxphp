<?php
    require_once ("database.php");

    $query = "SELECT * FROM news ORDER BY id DESC LIMIT 3";
    $result = mysqli_query($link, $query);

    $news = array();

    while($row = mysqli_fetch_assoc($result)){
        $news[] = $row;
    }

    $news = array_reverse($news);
    echo json_encode($news);


