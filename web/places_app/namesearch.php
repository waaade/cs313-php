<?php
session_start();
require "dbConnect.php";
$db = get_db();
?>
<!DOCTYPE html>
<html>
<head>
<title>Search by Name — Rexburg Places</title>
</head>
<body>
<?php
    $name = htmlspecialchars(trim($_POST['search']));
    foreach ($db->query("SELECT * FROM places WHERE name='$name'", PDO::FETCH_ASSOC) as $row)
    {
        echo $row['name'] . '<br>' . $row['address'] . '<br>' . 
        '<a href="seereviews.php?placeid=' . $row['places_id'] . '">See Reviews</a><br>';
    }
?>
</body>
</html>