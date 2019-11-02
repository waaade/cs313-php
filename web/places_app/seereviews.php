<?php
session_start();
require "dbConnect.php";
$db = get_db();
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
    <div>
    <?php
        $id = htmlspecialchars(trim($_GET['placeid']));

        $stmt = $db->prepare('SELECT name FROM places WHERE places_id=:id');
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $name = "";

        $name= $stmt->fetchAll();
        foreach ($name as $row) {
            echo '<h3>Reviews for ' . $row['name'] . '</h3><br>';
        }

        $stmt = $db->prepare('SELECT * FROM reviews WHERE place=:id');
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $reviews = $stmt->fetchAll();
        
        foreach ($reviews as $row) {
            echo $row['reviews_date'] . '<br>Score: ' . $row['score'] . '/5<p>' . $row['comment'] . '</p><br>';
        }
    ?>
    <a href="home.php">Back</a>
    <?php
    if ($_SESSION['loggedin'])
    {
        echo '<p><a href="leavereview.php?placeid=' . $id . '">Leave a review</a></p>';
    }
    else
    {
        echo '<p><a href="login.php">Login to submit a review</a></p>';
    }
    
    ?>
    </div>
</body>
</html>