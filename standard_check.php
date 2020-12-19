<?php

session_start();

if(isset($_COOKIE['weight'])){
	echo "<script>location.href='workoutrecom_stand.php'</script>";
}
else{
	echo "<script>location.href='workoutmain-weightStand.php'</script>";
}

?>