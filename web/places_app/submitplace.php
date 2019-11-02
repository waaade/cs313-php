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
    <title>Rexburg Places</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $type = $_POST['type'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];

    $stmt = $db->prepare('SELECT types_id FROM types WHERE name = :type');
    $stmt->bindValue(':type', $type);
    $stmt->execute();

    $result = $stmt->fetch();
    $typesId = $result["types_id"];
    
    $stmt = $db->prepare("INSERT INTO places (places_type, phone, address, name) 
    VALUES (
        :typesId, 
        :phone,
        :address,
        :name
        )");
    
    $stmt->bindValue(':typesId', $typesId);
    $stmt->bindValue(':phone', $phone);
    $stmt->bindValue(':address', $address);
    $stmt->bindValue(':name', $name);
    
    $stmt->execute();

}
?>

    <h1>Rexburg Places</h1>
    <div>
    <h3>Thank you!</h3><p>You have added a place to the database. Now you and others can leave a review!</p>
    <a href=home.php>Back</a>
    </div>
</body>
</html>