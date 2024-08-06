<?php
include("fct/request.php");
include("config/app.php");
include("fct/item.php");
include("config/db.php"); 
include("connection.php"); 

$intitule = post('intitule');

$query ='INSERT INTO todo(intitule) VALUES (:intitule)';
$stmt = $pdo->prepare($query);

$stmt->bindParam('intitule',post('intitule'));
$stmt->execute();


header('Location:index.php');