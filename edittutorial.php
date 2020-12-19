<?php

error_reporting(0);

$con    =   mysqli_connect('localhost','root','','admindb');

if (isset($_POST['id'])) {

	$id=$_POST['id1'];
	$description=$_POST['description'];
	$link=$_POST['link'];

	$smallfile = addslashes(file_get_contents($_FILES['file1']['tmp_name']));

	$smalltype=$_FILES['file1']['type'];

}

$query = "UPDATE TUTORIALS SET DESCRIPTION='$description',LINK='$link' WHERE ID='$id'";
$set=mysqli_query($con,$query);

if(!empty($smallfile)){
	$query1 = "UPDATE TUTORIALS SET PICTURE='$smallfile',PICTURE_TYPE='$smalltype' WHERE ID='$id'";
	mysqli_query($con,$query1);
}


?>

<META HTTP-EQUIV="Refresh" CONTENT="0; URL=includetutorials.php">