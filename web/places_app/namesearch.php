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
<title>Search by Name — Rexburg Places</title>
</head>
<body>
<h1>Rexburg Places</h1>
<div>
<h3>Results of your search</h3>
<?php
    $name = htmlspecialchars(trim($_POST['search']));
    foreach ($db->query("SELECT * FROM places WHERE name LIKE '$name'", PDO::FETCH_ASSOC) as $row)
    {
        echo '<h4>' . $row['name'] . '</h4>' . $row['address'] . '<br>' . $row['phone'] .
        '<br><a href="seereviews.php?placeid=' . $row['places_id'] . '">See Reviews</a><br>';
    }
?>
<p><a href="home.php">Back</a></p>
</div>
</body>
</html>