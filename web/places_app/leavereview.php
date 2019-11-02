<?php
require "dbConnect.php";
$db = get_db();
//TODO: Make it so you can only leave a review if you're logged in
?>
<!DOCTYPE HTML>
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
        <title>Rexburg Places</title>
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
            echo '<h3>Leave Review for ' . $row['name'] . '</h3>';
            $theName = $row['name'];
        }
        ?>
        
        <form action="submitreview.php" method="POST">
        <?php echo 'Place: <input type="text" name="name" value="' . $theName . '" readonly><br>';?>
        Enter a rating (between 1 and 5):<br>
        <input type="number" name="rating" min="1" max="5" required><br>
        Leave your thoughts:<br><textarea name="content" id="content" required></textarea><br>
        <input type="submit" value="Submit">
        </form>
        </div>
    </body>
</html>