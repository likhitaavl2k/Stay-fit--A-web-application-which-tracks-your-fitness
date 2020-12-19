<?php

require_once("dummy.php");

$conn    =   mysqli_connect('localhost','root','','admindb');


if (isset($_POST['signup'])) {

	$email = $_POST['email'];
	$password = $_POST['password'];
}

$query="SELECT * FROM USERSRC WHERE EMAIL='$email'";
$data=mysqli_query($conn,$query);
$num=mysqli_num_rows($data);

$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);

// $exp = preg_match("/^[A-Z][a-zA-z0-9]*[0-9]+/", $password);

if($num == 1){
	echo "<script>
	swal({ 
		title: 'Email already exist!',
		text: 'Do register using other email ID',
		type: 'error' 
		},
		function(){
			window.location.href = 'userlogin.php';
			});
			</script>";
		}else{
			if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
  				echo "<script>
						swal({ 
							title: 'Weak Password!',
							text: 'The password must contain at least 1 number, at least one uppercase character, at least one lowercase character and length must be minimum of 8 characters',
							type: 'error' 
							},
							function(){
								window.location.href = 'userlogin.php';
								});
								</script>";
			}
			else{
				$hashpassword = md5($password);
				$query1="insert into usersrc(email,password) values('$email','$hashpassword')";
				$data1=mysqli_query($conn,$query1);


				echo "<script>
				swal({ 
					title: 'successful!',
					text: 'Welcome User',
					type: 'success' 
					},
					function(){
						window.location.href = 'plans.php?email=".$email."';
						});
						</script>";
			}
	}

?>

