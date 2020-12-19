<?php

require_once("dummy.php");
session_start();

$conn    =   mysqli_connect('localhost','root','','admindb');

if (isset($_POST['login'])) {

	$email = $_POST['email'];
	$password = $_POST['password'];
}

$query="SELECT * FROM USERSRC WHERE EMAIL='$email'";
$data=mysqli_query($conn,$query);
$num=mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);


if($num===0){
	echo "<script>
	swal({ 
		title: 'Invalid Credentials!',
		text: 'Please check and try again',
		type: 'error' 
		},
		function(){
			window.location.href = 'userlogin.php';
			});
			</script>";
			
		}elseif ( (md5($password))!== $result['password']) {
			echo "<script>
			swal({ 
				title: 'Password invalid!',
				text: 'Please check and try again',
				type: 'error' 
				},
				function(){
					window.location.href = 'userlogin.php';
					});
					</script>";
				}

				else{
					$_SESSION['email']=$result['email'];
					// header("Location: recommendations.php");
					echo "<script>
					swal({ 
						title: 'Login Successful!',
						text: 'Welcome Admin!!',
						type: 'success' 
						},
						function(){
							window.location.href = 'movetorecom.php';
							});
							</script>";
						}
//idhi asala save cheyle ipdu chesi check karo
						?>

<!-- plans.html -->