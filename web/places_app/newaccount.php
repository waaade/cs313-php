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
    <title>Reviews — Rexburg Places</title>
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $hashed = password_hash($password);
    
    $stmt = $db->prepare("INSERT INTO users (email, password, name) 
    VALUES (
        :email, 
        :pass,
        :username
        )");
    
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':password', $hashed);
    $stmt->bindValue(':username', $username);
    
    $stmt->execute();
    $_SESSION['loggedin'] = true;
}
?>

    <h1>Rexburg Places</h1>
    <div>
    <p>Thank you. Your account is now live and you are logged in.</p>
    <a href=home.php>Back</a>
    </div>
</body>
</html>