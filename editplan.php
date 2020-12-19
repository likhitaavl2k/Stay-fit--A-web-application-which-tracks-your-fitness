<?php

error_reporting(0);

$con    =   mysqli_connect('localhost','root','','admindb');

if (isset($_POST['id'])) {

	$id=$_POST['id1'];
	$name=$_POST['name'];
	$features=$_POST['features'];
	$cost=$_POST['cost'];
	$link=$_POST['link'];
}

$query = "UPDATE PLANS SET NAME='$name' ,FEATURES='$features',COST='$cost',REDIRECT_LINK='$link' WHERE ID='$id'";
$set=mysqli_query($con,$query);
?>

<META HTTP-EQUIV="Refresh" CONTENT="0; URL=includeplans.php">