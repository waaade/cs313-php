<?php
require "dbConnect.php";
$db = get_db();
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
        $id = htmlspecialchars(trim($_GET['placeid']));
        $stmt = $db->prepare('SELECT * FROM reviews WHERE place=:id');
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $reviews = $stmt->fetchAll();

        foreach ($reviews as $row) {
            echo $reviews['reviews_date'] . '<br>Score: ' . $reviews['score'] . '<br><p>' . $reviews['comment'] . '<p><br>';
        }
    ?>
</body>
</html>