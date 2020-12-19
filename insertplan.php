<?php
error_reporting(0);

$con    =   mysqli_connect('localhost','root','','admindb');

if (isset($_POST['id'])) {

    $name = $_POST['name'];
    $cost = $_POST['cost'];
    $features = $_POST['features'];
    $link = $_POST['link'];
}

$s="select * from plans where name= '$name'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num == 1){
    echo "This plan already exist";
}else{
    $query="insert into plans(name,cost,features,redirect_link) values('$name',$cost,'$features','$link')";
    $data=mysqli_query($con,$query);
}

header("Location:dashboard.php");

?>