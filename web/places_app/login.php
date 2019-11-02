<?php
session_start();
require "dbConnect.php";
$db = get_db();
?>
<!DOCTYPE HTML>
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
            if ($_SESSION["loggedin"]) {
                echo "<p>You are already logged in.</p><a href='home.php'>Back</a>";
            }
            else {

            ?>
        <h3>Login</h3>
        <form action="loginhandler.php" method="POST">
        Username: <input type="text" name="name" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" value="Login">
        </form>
        <p>Don't have an account? <a href="createaccount.php">Create one</a></p>
        <a href="home.php">Back</a>
        <?php
            }
            ?>
        </div>
    </body>
</html>