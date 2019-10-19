<?php
session_start();
require "dbConnect.php";
$db = get_db();
?>
<!DOCTYPE html>
<html>
<head>
<title>Category Search</title>
</head>
<body>
<?php
    $type = htmlspecialchars(trim($_POST['type']));
    foreach ($db->query("SELECT * FROM places 
    WHERE places_type=(SELECT types_id FROM types WHERE name='$type')", PDO::FETCH_ASSOC) as $row)
    {
        echo $row['name'] . '<br>' . $row['address'] . '<br>' . 
        '<a href="seereviews.php?placeid=' . $row['places_id'] . '">See Reviews</a><br>';
    }
?>
</body>
</html>