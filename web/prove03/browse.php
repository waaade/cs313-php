<?php
session_start();
$myarray = array("Your cart:");
$_SESSION['cart'] = $myarray;
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>The Soda Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<script>
    function addItem(name, cost) {
        let dataString = name + ' ' + cost;
        request = $.ajax({
            url: "itemhandler.php",
            type: "post",
            data: dataString
        });

        request.done(function (response, textStatus, jqXHR){
            console.log("Request made");
        });
    }
</script>
<body>
    <div>
    <h1>The Soda Store</h1>
    <p>I will personally bring your order to your house.😉</p>
    <table>
        <tr>
            <td>Coke</td>
            <td>$1,000,000</td>
            <td><button onclick="addItem('Coca-Cola', '$2.00')">Add To Cart</button></td>
        </tr>
        <tr>
            <td>Sprite</td>
            <td>A million</td>
            <td><button onclick="addItem('Sprite', '$2.50')">Add To Cart</button></td>
        </tr>
        <tr>
            <td>Stuff</td>
            <td>I'm stuff</td>
            <td><button onclick="addItem('Diet Coke', '$2.00')">Your girlfriend's awesome</button></td>
        </tr>
        <tr>
            <td>Dr. Pepper</td>
            <td>$3.00</td>
            <td><button onclick="addItem('Dr. Pepper', '$3.00')">Add To Cart</button></td>
        </tr>
    </table>
    <a href="viewcart.php">View Cart</a>
    </div>
</body>
</html>