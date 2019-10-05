<?php
session_start();
//Add item to cart array. 
array_push($_SESSION['cart'], $_POST['data']);
?>