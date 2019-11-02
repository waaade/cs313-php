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
        $_SESSION['currentuser'] = $username;
        echo "<h3>" . $username . ", you have succesfully logged in.</h3><p>Welcome back!</p>";
    }
    else
    {
        echo "<p>Incorrect username or password.</p><a href='login.php'>Try Again.</a>";
    }
    
    
}
?>

    
    <br><a href=home.php>Back to main page</a>
    </div>
</body>
</html>