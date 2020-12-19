<?php

session_start();

if(isset($_COOKIE['weight'])){
	echo "<script>location.href='workoutrecom_Premi.php'</script>";
}
else{
	echo "<script>location.href='workoutmain-weightPremi.php'</script>";
}

?>