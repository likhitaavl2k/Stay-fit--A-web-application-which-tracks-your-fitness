<?php

session_start();

if(isset($_SESSION['email'])){
	session_unset();
	session_destroy();
	// echo "sessiondestroyed";
}
if (isset($_COOKIE['weight'])) {
    unset($_COOKIE['weight']);
    setcookie('weight', '', time() - 3600, '/'); // empty value and old timestamp
}

	
header("Location: exerciseportal.html");
// else{
// 	echo "<script>location.href='check.php'</script>";
// }

?>