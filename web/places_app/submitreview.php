<?php
require "dbConnect.php";
$db = get_db();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $score = (is_numeric($_POST["rating"]) ? (int)$_POST["rating"] : 0);
    $comment = $_POST["content"];
    $place = $_POST["name"];
    var_dump($_POST);
    var_dump ($score);
    $username = 'johnny';

    $stmt = $db->prepare('SELECT places_id FROM places WHERE name = :place');
    $stmt->bindValue(':place', $place);
    $stmt->execute();

    $placeId = $stmt->fetchAll();

    $stmt = $db->prepare('SELECT users_id FROM users WHERE name = :username'); 
    $stmt->bindValue(':username', $username);
    $stmt->execute();

    $userId = $stmt->fetchAll();

    $sql = 'INSERT INTO reviews(place, reviews_date, reviews_user, score, comment) 
    VALUES (
        :place, 
        (SELECT CURRENT_DATE),
        :username
        :score,
        :comment)';

    $stmt = $this->pdo->prepare($sql);
    
    $stmt->bindValue(':place', $placeId);
    
    $stmt->bindValue(':username', $userId);
    $stmt->bindValue(':score', $score);
    $stmt->bindValue(':comment', $comment);
    
    $stmt->execute();

}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
    <title>Reviews — Rexburg Places</title>
</head>
<body>
    <h1>Rexburg Places</h1>
</body>
</html>