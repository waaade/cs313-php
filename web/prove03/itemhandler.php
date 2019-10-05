<?php
session_start();
console.log($_POST["data"]);
//Add item to cart array. 
$_SESSION["cart"][] = $_POST["data"];
?>