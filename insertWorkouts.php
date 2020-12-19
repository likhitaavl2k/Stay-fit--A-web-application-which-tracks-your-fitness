<?php


$con    =   mysqli_connect('localhost','root','','admindb');

if($con){
    echo "success";
}

if (isset($_POST['add'])) {
    $large=$_FILES['largefile'];
    $largefile = addslashes(file_get_contents($_FILES['largefile']['tmp_name']));
    $smallfile = addslashes(file_get_contents($_FILES['file1']['tmp_name']));

    $smalltype=$_FILES['file1']['type'];
    $largetype=$_FILES['largefile']['type'];

    $weight = $_POST['weight'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $workoutname = $_POST['workoutname'];
}
print_r($large);
$s="select * from workoutstable where name= '$workoutname'";

$result=mysqli_query($con,$s);

$num=mysqli_num_rows($result);

if($num == 1){
    echo "<script>
    alert('This workout already exist');
    </script>";
    header("Location:dashboard.php");
}else{
    // $query="insert into workoutstable(name,description,weight,small_pic,small_type,large_pic,large_type) values('$workoutname','$description',$weight,'$smallfile','$smalltype','$largefile','$largetype')";
    $query="insert into workoutstable(name, description, weight, category, small_pic, small_type, large_pic, large_type ) values('$workoutname','$description',$weight,'$category','$smallfile','$smalltype','$largefile','$largetype')";
    $data=mysqli_query($con,$query);
    if($data){
        echo "inserted";
    }
    
    header("Location:dashboard.php");
}


?>
