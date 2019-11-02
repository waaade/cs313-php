<?php
session_start();
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
$_SESSION['loggedin'] = false;
$_SESSION['currentuser'] = "guest"; //Paranoid
?>
    <h1>Rexburg Places</h1>
    <div>
    <h3>You are now logged out. Come back soon!</h3>
    <a href=home.php>Back</a>
    </div>
</body>
</html>