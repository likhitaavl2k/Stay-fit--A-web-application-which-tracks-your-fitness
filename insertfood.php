<?php
error_reporting(0);

$con    =   mysqli_connect('localhost','root','','admindb');

if (isset($_POST['id'])) {
    $largefile = addslashes(file_get_contents($_FILES['largefile']['tmp_name']));
    $smallfile = addslashes(file_get_contents($_FILES['file1']['tmp_name']));

    $smalltype=$_FILES['file1']['type'];
    $largetype=$_FILES['largefile']['type'];

    $weight = $_POST['weight'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $foodname = $_POST['foodname'];
}

$s="select * from foodtable where name= '$foodname'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num == 1){
    echo "This food already exist";
}else{
    $query="insert into foodtable(name,description,weight,category,small_pic,small_type,large_pic,large_type) values('$foodname','$description',$weight,'$category','$smallfile','$smalltype','$largefile','$largetype')";
    $data=mysqli_query($con,$query);
    
}

header("Location:dashboard.php");

?>