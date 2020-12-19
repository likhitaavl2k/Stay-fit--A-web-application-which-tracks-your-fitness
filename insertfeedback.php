<?php

$con    =   mysqli_connect('localhost','root','','admindb');

if(isset($_POST['submit1'])){
	$name = $_POST['name'];
	$stars = $_POST['stars'];
	$feedback = $_POST['feedback'];

	$smallfile = addslashes(file_get_contents($_FILES['file1']['tmp_name']));
	$smalltype=$_FILES['file1']['type'];

	print_r($_FILES['file1']);
	$query="insert into feedback(name,stars, message, picture, picture_type) values('$name',$stars, '$feedback','$smallfile','$smalltype')";
    $data=mysqli_query($con,$query);

    header('Location:logout.php');
    
}
else if(isset($_POST['submit2'])){
	header('Location:logout.php');
}

?>