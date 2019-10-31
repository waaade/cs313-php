<?php
require "dbConnect.php";
$db = get_db();
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

        $name= $stmt->fetchAll();
        foreach ($name as $row) {
            echo 'Leave Review for ' . $row['name'] . '<br>';
        }
        ?>
        <form action="submitreview.php" method="POST">
        Select a rating:<br>
        <input type="radio" name="rating" value="1" required>1
        <input type="radio" name="rating" value="2" required>2
        <input type="radio" name="rating" value="3" required>3
        <input type="radio" name="rating" value="4" required>4
        <input type="radio" name="rating" value="5" required>5<br>
        Leave your thoughts:<br><textarea name="content" id="content" required>
        
      

        </textarea><br>
        <input type="submit" value="Submit">
        </form>
        </div>
    </body>
</html>