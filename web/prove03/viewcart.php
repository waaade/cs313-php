<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    
    <title>Your Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div>
    <h1>The Soda Store</h1>
    <h2>Your Cart</h2>
    <?php
    foreach($_SESSION['cart'] as $value) {
        echo $value . "<br>";
    }
    ?>
    <a href="checkout.php">Checkout</a>
    </div>
    </body>
</html>