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
    echo $type;
    foreach ($db->query("SELECT * FROM places 
    WHERE places_type=(SELECT types_id FROM types WHERE name='$type')", PDO::FETCH_ASSOC) as $row)
    {
        echo '<p>' . $row['name'] . '</p>';
    }
?>
</body>
</html>