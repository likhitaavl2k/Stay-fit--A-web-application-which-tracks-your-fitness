<?php

$con    =   mysqli_connect('localhost','root','','admindb');

$id = $_POST['id2'];
echo $id;
$query  =   "DELETE FROM FEEDBACK WHERE ID='$id'";
mysqli_query($con,$query);

?>

<META  HTTP-EQUIV="Refresh" CONTENT="0; URL=includefeedback.php">