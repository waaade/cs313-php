<?php
session_start();
//Add item to cart array. 
$name = $_POST['data'];
$_SESSION[$name] = 1;
?>