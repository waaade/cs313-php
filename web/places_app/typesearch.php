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
<title>Category Search — Rexburg Places</title>
</head>
<body>
<h1>Rexburg Places</h1>
<h3>Results of your category search</h3>
<?php
    $type = htmlspecialchars(trim($_POST['type']));
    foreach ($db->query("SELECT * FROM places 
    WHERE places_type=(SELECT types_id FROM types WHERE name='$type')", PDO::FETCH_ASSOC) as $row)
    {
        echo '<h4>' . $row['name'] . '</h4>' . $row['address'] . '<br>' . $row['phone'] .
        '<br><a href="seereviews.php?placeid=' . $row['places_id'] . '">See Reviews</a><br>';
    }
?>
<p><a href="home.php">Back</a></p>
</body>
</html>