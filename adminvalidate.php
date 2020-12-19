<?php

require_once("dummy.php");

$conn    =   mysqli_connect('localhost','root','','admindb');


if (isset($_POST['login'])) {

	$username = $_POST['username'];
	$passcode = $_POST['password'];
}

$query="SELECT * FROM ADMINTABLE WHERE USERNAME='$username'";
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
			window.location.href = 'adminLogin.html';
			});
			</script>";
			
		}elseif ($passcode!== $result['password']) {
			echo "<script>
			swal({ 
				title: 'Password invalid!',
				text: 'Please check and try again',
				type: 'error' 
				},
				function(){
					window.location.href = 'adminLogin.html';
					});
					</script>";
				}

				else{
					echo "<script>
					swal({ 
						title: 'Login Successful!',
						text: 'Welcome Admin!!',
						type: 'success' 
						},
						function(){
							window.location.href = 'dashboard.php';
							});
							</script>";
						}

						?>