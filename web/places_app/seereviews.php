<?php
require "dbConnect.php";
$db = get_db();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Reviews — Rexburg Places</title>
</head>
<body>
    <h1>Rexburg Places</h1>
    <h2>Reviews for selected location</h2>
    <?php
        $id = htmlspecialchars(trim($_GET['placeid']));
        $stmt = $db->prepare('SELECT * FROM reviews WHERE place=:id');
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $reviews = $stmt->fetchAll();
        
        foreach ($reviews as $row) {
            echo $row['reviews_date'] . '<br>Score: ' . $row['score'] . '/5<br><p>' . $row['comment'] . '<p><br>';
        }
    ?>
    <a href="home.php">Back</a>
</body>
</html>