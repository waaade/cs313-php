<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<body>
<?php
foreach ($_SESSION['cart'] as $value) {
    echo $value, '<br>';
}
?>
</body>
</html>