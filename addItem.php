<?php
include("fct/request.php");
include("config/app.php");
include("fct/item.php");

$intitule = post('intitule');

$items = getItem();
$items[uniqid()] = [
    'checked' => false,
    'intitule'=> $intitule
    ];
saveItems($items);


header('Location:index.php');