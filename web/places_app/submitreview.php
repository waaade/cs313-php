<?php
require "dbConnect.php";
$db = get_db();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $score = $_POST["rating"];
    $comment = $_POST["content"];
    

    $db->query("INSERT INTO reviews (reviews_date, reviews_user, score, comment) VALUES
    ( CURRENT_DATE
    , 'Defaulticus'
    , '$score'
    , '$comment'
    )");
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