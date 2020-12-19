<?php

session_start();

$cookie_name = "weight";
$cookie_value = $_POST['Weight'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

echo "<script>location.href='workoutrecom_Premi.php'</script>";

?>