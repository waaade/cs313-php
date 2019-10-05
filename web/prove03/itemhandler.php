<?php
session_start();
//Add item to cart array. 
$_SESSION["cart"][$_SESSION["count"]] = $_POST["data"];
$_SESSION["count"] += 1;
?>