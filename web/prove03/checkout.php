<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Enter Address</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
    <h1>The Soda Store</h1>
    <h2>Complete Your Order</h2>
    <body>
    <div>
        <form action="confirmation.php">
        Name: <input type="text" name="name"><br>
        Address: <input type="text" name="address"><br>
        State: <input type="text" name="website"><br>
        Zip: <input type="number" name="zip"><br>
        <input type="submit" value="Submit"><br>
        </form>
    </div>
    </body>
</html>
