<?php
session_start();
//Add item to cart array. 
$name = $_REQUEST["q"];
$_SESSION['cart'][] = $name;
?>