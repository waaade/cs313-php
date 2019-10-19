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

        <title>Rexburg Places</title>
    </head>
    <body>
        <h1>Rexburg Places</h1>
        <p>Know the best places to eat, shop, and have fun in and around Rexburg, Idaho. Help out the community.</p>
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
            Type Name: <input type="text" name="search">
            <input type="submit" value="Go">
        </div>
    </body>
</html>