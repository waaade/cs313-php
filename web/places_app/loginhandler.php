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
<h1>Rexburg Places</h1>
    <div>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = $_POST["name"];
    $password = $_POST["password"];

    $stmt = $db->prepare('SELECT password FROM users WHERE name = :username');
    $stmt->bindValue(':username', $username);
    $stmt->execute();

    $result = $stmt->fetch();
    $hashed = $result["password"];
    $correct = password_verify($password, $hashed);

    if ($correct)
    {
        $_SESSION['loggedin'] = true;
        echo "<p>You have succesfully logged in.</p>";
    }
    else
    {
        echo "<p>Incorrect username or password.</p><a href='login.php'>Try Again.</a>";
    }
    
    
}
?>

    
    <a href=home.php>Back</a>
    </div>
</body>
</html>