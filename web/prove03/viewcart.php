<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Your Cart</title>
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