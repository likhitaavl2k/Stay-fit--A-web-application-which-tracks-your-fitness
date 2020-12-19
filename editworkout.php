<?php

error_reporting(0);

$con    =   mysqli_connect('localhost','root','','admindb');

if (isset($_POST['id'])) {

	$id=$_POST['id1'];
	$name=$_POST['name'];
	$description=$_POST['description'];
	$weight=$_POST['weight'];
	$category = $_POST['category'];

	$smallfile = addslashes(file_get_contents($_FILES['file1']['tmp_name']));
	$largefile = addslashes(file_get_contents($_FILES['file2']['tmp_name']));

	$smalltype=$_FILES['file1']['type'];
	$largetype=$_FILES['file2']['type'];

    // $smallfile=$_FILES['file1id']['tmp_name'];
    // $largefile=$_FILES['file2id']['temp_name'];

}

$query = "UPDATE WORKOUTSTABLE SET NAME='$name' ,DESCRIPTION='$description',WEIGHT='$weight',CATEGORY='$category' WHERE ID='$id'";
$set=mysqli_query($con,$query);

if(!empty($smallfile)){
	$query1 = "UPDATE WORKOUTSTABLE SET SMALL_PIC='$smallfile',SMALL_TYPE='$smalltype' WHERE ID='$id'";
	mysqli_query($con,$query1);
}

if(!empty($largefile)){
	$query2 = "UPDATE WORKOUTSTABLE SET LARGE_PIC='$largefile', LARGE_TYPE='$largetype' WHERE ID='$id'";
	mysqli_query($con,$query2);
}


?>

<META HTTP-EQUIV="Refresh" CONTENT="0; URL=includeworkouts.php">