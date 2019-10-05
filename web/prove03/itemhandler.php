<?php
session_start();
//Add item to cart array. 
$_SESSION['cart'][] = $_POST['data'];
?>