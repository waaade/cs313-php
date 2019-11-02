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
            echo '<h3>Reviews for ' . $row['name'] . '</h3>';
        }

        $stmt = $db->prepare('SELECT * FROM reviews WHERE place=:id');
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $stmt2 = $db->prepare('SELECT name FROM users WHERE users_id = :userId');

        $reviews = $stmt->fetchAll();
        
        foreach ($reviews as $row) {
            echo '<hr><h5>' . $row['reviews_date'] . '</h5>Score: ' . $row['score'] . '/5<p>' . $row['comment'] . '</p>';
            $stmt2->bindValue(':userId', $row['reviews_user']);
            $stmt2->execute();
            $user = $stmt2->fetch();
            echo '<p>Review by: ' . $user["name"] . '</p>';
        }
    if ($_SESSION['loggedin'])
    {
        echo '<h4><a href="leavereview.php?placeid=' . $id . '">Leave a review</a></h4>';
    }
    else
    {
        echo '<p><a href="login.php">Log in to submit a review</a></p>';
    }
    
    ?>
    <a href="home.php">Back</a>
    </div>
</body>
</html>