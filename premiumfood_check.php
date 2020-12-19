<?php

session_start();

if(isset($_COOKIE['weight'])){
	echo "<script>location.href='foodrecom-Premi.php'</script>";
}
else{
	echo "<script>location.href='foodmain-weightPremi.php'</script>";
}

?>