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
        <h3>Add Place</h3>
        <?php
        if ($_SESSION['loggedin'])
        {

        ?>
        <p>To add a Rexburg place, you'll need to provide a name and a category. You can also add an
        address and phone number. Once a place has been added, you and others can write reviews.</p>
        <form action="submitplace.php" method="POST">
        Name of Place (somewhere in or near Rexburg you've been!): <input type="text" name="name" required><br>
        Type:<br>
        <input type="radio" name="type" value="Restaurants" required>Restaurants
        <input type="radio" name="type" value="Parks/Trails" required>Parks/Trails<br>
        <input type="radio" name="type" value="Recreation" required>Recreation
        <input type="radio" name="type" value="Stores" required>Stores<br>
        Address: (optional)<input type="text" name="address">
        Phone: (optional)<input type="phone" name="phone">

        <input type="submit" value="Submit">
        <?php
        }
        else
        {
            echo "<p>You need to be logged in to add a place.</p><a href=login.php>Log in now</a>";
        }
        ?>
        </div>
    </body>
</html>