<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<body>
<?php
foreach ($_SESSION['cart'] as $value) {
    echo $value . "<br>";
}
echo $_SESSION['cart'][1];
?>
</body>
</html>