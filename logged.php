<?php

session_start();

if(isset($_SESSION['email'])){
	echo "<script>location.href='movetorecom.php'</script>";
}
else{
	echo "<script>location.href='userlogin.php'</script>";
}

?>