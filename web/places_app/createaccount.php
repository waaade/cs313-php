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
        <h3>Create Account</h3>
        <p>With an account, you'll be able to add places and reviews.</p>
        <form action="newaccount.php" method="POST">
        Your Email: <input type="text" name="email" required><br>
        Username: <input type="text" name="name" required><br>
        Password: <input type="text" name="password" required><br>
        <input type="submit" value="Submit">
        <br><a href="home.php">Back</a>
        </div>
    </body>
</html>