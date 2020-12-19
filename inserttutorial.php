<?php


$con    =   mysqli_connect('localhost','root','','admindb');

if (isset($_POST['id'])) {
    $smallfile = addslashes(file_get_contents($_FILES['file1']['tmp_name']));

    $smalltype=$_FILES['file1']['type'];

    $description = $_POST['desc'];
    $link = $_POST['link'];
}

$query="insert into tutorials(description,link,picture,picture_type) values('$description','$link','$smallfile','$smalltype')";
$data=mysqli_query($con,$query);

header("Location:dashboard.php");

?>