<?php
include("fct/item.php");
include("fct/request.php");
include("config/app.php");
include("config/db.php"); 
include("connection.php"); 

$id = get('item');

$query = 'UPDATE todo SET checked = 1 - checked WHERE id = :id';
$stmt = $pdo->prepare($query);

$stmt->bindParam(':id', $id, PDO::PARAM_INT); // Assurez-vous que l'ID est un entier
$stmt->execute();

if ($stmt->rowCount()) {
    echo 'Update successful';
} else {
    echo 'Update failed';
}

// Redirection
header('Location: index.php');