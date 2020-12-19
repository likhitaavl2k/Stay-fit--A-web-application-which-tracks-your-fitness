<?php

session_start();

if(isset($_SESSION['email'])){
	session_unset();
	session_destroy();

	$conn    =   mysqli_connect('localhost','root','','admindb');

	$_SESSION['email'] = $_GET['email'];
	
	$query="SELECT * FROM USERSRC WHERE EMAIL='".$_GET['email']."'";
	$data=mysqli_query($conn,$query);
	$result=mysqli_fetch_assoc($data);

	if ($result['plan']==="Standard") {
		echo "<script>location.href='standardmain.php'</script>";
	}
	else if ($result['plan']==="Premium") {
		echo "<script>location.href='premiummain.php'</script>";
	}
	else{
		$query2="SELECT * FROM PLANS WHERE NAME='".$result['plan']."'";
		$data2=mysqli_query($conn,$query2);
		$result2=mysqli_fetch_assoc($data2);

		echo "<script>location.href='".$result2['redirect_link']."'</script>";
	}
}
else{
	$conn    =   mysqli_connect('localhost','root','','admindb');

	$_SESSION['email'] = $_GET['email'];

	$query="SELECT * FROM USERSRC WHERE EMAIL='".$_GET['email']."'";
	$data=mysqli_query($conn,$query);
	$result=mysqli_fetch_assoc($data);

	if ($result['plan']==="Standard") {
		echo "<script>location.href='standardmain.php'</script>";
	}
	else if ($result['plan']==="Premium") {
		echo "<script>location.href='premiummain.php'</script>";
	}
	else{
		$query2="SELECT * FROM PLANS WHERE NAME='".$result['plan']."'";
		$data2=mysqli_query($conn,$query2);
		$result2=mysqli_fetch_assoc($data2);

		echo "<script>location.href='".$result2['redirect_link']."'</script>";
	}
}

?>