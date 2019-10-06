<?php
session_start();
//Add item to cart array. 
$_SESSION[$_POST['data']] = 1;
?>