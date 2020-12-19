<?php

$conn    =   mysqli_connect('localhost','root','','admindb');

$plan=$_POST['item_name_1'];
$email=$_GET['email'];

$query = "UPDATE USERSRC SET PLAN='$plan' WHERE EMAIL='$email'";
$set=mysqli_query($conn,$query);

if($plan==="Basic Plan"){
	header("Location:basic.php");
}else{
	header("Location:https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=".$_POST['cmd']."&upload=".$_POST['upload']."&business=".$_POST['business']."&item_name_1=".$_POST['item_name_1']."&amount_1=".$_POST['amount_1']."&quantity_1=".$_POST['quantity_1']."&return=".$_POST['return']."&rm=".$_POST['rm']."");
}


?>