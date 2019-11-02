<?php
session_start();
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
        <p id="desc">Know the best places to eat, shop, and have fun in and around Rexburg, Idaho. Help out the community.</p>
        <div>
        <h2>See Places in these categories:</h2>
        <form action="typesearch.php" method="post">
            <input type="radio" name="type" value="Restaurants">Restaurants
            <input type="radio" name="type" value="Parks/Trails">Parks/Trails<br>
            <input type="radio" name="type" value="Recreation">Recreation
            <input type="radio" name="type" value="Stores">Stores<br>
            <input type="submit" value="Go">
        </form>
        <br>
        <h2>Search for a Place by name</h2>
        <form action="namesearch.php" method="post">
            Enter name: <input type="text" name="search">
            <input type="submit" value="Go">
        </form>
        <h2>Create an Account and Add Places</h2>
        <p>Want to leave your thoughts on a place? Is there a place you know about that isn't in our database? 
        <a href="createaccount.php">Create an account</a> and start contributing today!</p>
        <a href="login.php">Login to your account</a>
        </div>
    </body>
</html>