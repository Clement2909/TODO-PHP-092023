<?php
include("fct/request.php");
include("config/app.php");

$intitule = post('intituler');

// traitement de nouvel item 
if(!file_exists(FILE_NAME)){
    file_put_contents(FILE_NAME,serialize([]));
}

$items = unserialize(file_get_contents(FILE_NAME));
$items[] = [
    'checked' => false,
    'intitule'=> $intitule];
file_put_contents(FILE_NAME,serialize($items));


header('Location:index.php');