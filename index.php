<?php

$con    =   mysqli_connect('localhost', 'root', '', 'admindb');
$query = "SELECT * FROM FEEDBACK";
$data = mysqli_query($con, $query);
$links = mysqli_fetch_all($data, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" initial-scale=1.0>
	<title>Stay fit</title>
	<link rel="stylesheet" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<header>
		<a href="#" class="logo"><span style="color: #ff0157;font-weight: 700;font-size: 1.5em; ">S</span>tay fit<span>.</span></a>
		<ul class="navigation">
			<li><a href="#banner">Home</a></li>
			<li><a href="#features">Features</a></li>
			<li><a href="#reviews">Reviews</a></li>
			<li><a href="#about">About!</a></li>
			<li><a href="#expert">Follow Us!</a></li>
			<li><a href="#contact">Contact</a></li>
			<li><a href="adminLogin.html">ADMIN</a></li>
		</ul>
	</header>

	<section class="banner" id="banner">
		<div class="content">
			<h2>Get fit with STAY FIT</h2>
			<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p> -->
			<a href="exerciseportal.html" class="btn">Exercise Portal</a>
			<a href="access.html" class="btn">Recommendations </a>
		</div>
	</section>

	<section class="features " id="features">
		<div class="title">
			<h2 class="titleText">Our <span>F</span>eatures:</h2>
			<!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
		</div>
		<div class="row featuresrow">
			<div class="content">
				<div class="box">
					<div class="imgBx">
						<img src="images/muscles.png">
					</div>
					<div class="text">
						<h3>Names of the muscles effected</h3>
					</div>
				</div>
			</div>
			<div class="content">
				<div class="box">
					<div class="imgBx">
						<img src="images/animations.png">
					</div>
					<div class="text">
						<h3>Muscular Visualization using anterior and posterior svg forms.</h3>
					</div>
				</div>
			</div>
			<div class="content">
				<div class="box">
					<div class="imgBx">
						<img src="images/bargraph2.png">
					</div>
					<div class="text">
						<h3>No of sets, reps in form of bar graphs</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="row featuresrow">
			<div class="content">
				<div class="box">
					<div class="imgBx">
						<img src="images/plans.png">
					</div>
					<div class="text">
						<h3>Subscriptions plans for recommendation</h3>
					</div>
				</div>
			</div>
			<div class="content">
				<div class="box">
					<div class="imgBx">
						<img src="images/menu2.jpg">
					</div>
					<div class="text">
						<h3>Food Recommendations</h3>
					</div>
				</div>
			</div>
			<div class="content">
				<div class="box">
					<div class="imgBx">
						<img src="images/pic23.jpg">
					</div>
					<div class="text">
						<h3>Workout Recommendations</h3>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="title">		
			<a href="#" class="btn">View All </a>
		</div> -->
	</section>

	<section class="reviews" id="reviews">
		<div class="title white">
			<h2 class="titleText">They <span>S</span>aid about Us!</h2>
			<p>Reviews of our users.</p>
		</div>
		<div class="content">
			<?php foreach ($links as $link) { ?>
			<div class="box">
				<div class="imgBx">
					<?php if(!empty($link['picture'])){ ?>
					<img src="data:<?php echo $link['picture_type'] ?>;base64,<?php echo base64_encode($link['picture']); ?>">
					<?php }
					else{ ?>
					<img src="images/default2.png">
					<?php } ?>
				</div>
				<div class="text">
					<h3><?php echo $link['stars'] ?> stars</h3>
					<p><?php echo $link['message'] ?></p>
					<h3><?php echo $link['name'] ?></h3>
				</div>
			</div>
			<?php } ?>
			<!-- <div class="box">
				<div class="imgBx">
					<img src="images/testi1.jpg">
				</div>
				<div class="text">
					<h3>4 stars</h3>
					<p>Stay fit fitness and nutrition advice aims to help you get the body you dream of from the comfort of your own home. What’s more, it’s flexible, allowing you to eat and exercise to suit your build, lifestyle and goals.  The system is relatively simple, with no major surprises at its core.</p>
					<h3>Sneha</h3>
				</div>
			</div>
			<div class="box">
				<div class="imgBx">
					<img src="images/testi2.jpg">
				</div>
				<div class="text">
					<h3>4.5 stars</h3>
					<p>Stay fit offers a great range of free fitness videos and information. Some of its programs cost money, they’re not expensive or compulsory. Members have a lot of useful information to explore, and some everying is really interesting. Signing up is simple. Once you’ve become a member, you can begin your regime.</p>
					<h3>Hrithik</h3>
				</div>
			</div>
			<div class="box">
				<div class="imgBx">
					<img src="images/testi3.jpg">
				</div>
				<div class="text">
					<h3>5 stars</h3>
					<p>With an effective diet and fitness plan which fits into your lifestyle, Stay fit has a lot to offer you if you’re struggling to lose weight. I got sick of all the sleazy fitness scams and was very happy with this kind of fitness app.</p>
					<h3>Emily</h3>
				</div>
			</div> -->
		</div>
	</section>

	<section class="about" id="about">
		<div class="row">
			<div class="col50">
				<h2 class="titleText"><span>A</span>bout!</h2>
				<p>Adults should move more and sit less throughout the day. Some physical activity is better than none. Adults who sit less and do any amount of moderate-to-vigorous intensity physical activity gain some health benefits.So this is the concept of our web application.<br><br><b>STAY FIT</b> is a fitness tracking web application for analyzing and logging strength training and body building data.Stay fit workouts portal has no server and works completely offline using IndexedDB.There is no need of internet.<br><br>So to help the user in loosing weight or staying fit, we provide some workouts as well as food recommendations which makes the process easy! </p>
			</div>
			<div class="col50">
				<div class="imgBx">
					<img src="images/workoutmain.jpg">
				</div>
			</div>
		</div>
	</section>

	<section class="expert" id="expert">
		<div class="title">
			<h2 class="titleText"><span>F</span>ollow Us!</h2>
			<p>Do follow us on social media.</p>
		</div>
		<div class="row">
			<div class="content">
				<div class="box">
					<div class="imgBx">
						<img src="images/instagram.jpg">	
					</div>
					<div class="text">
						<h3>www.instagram.com/stayfit</h3>
					</div>
				</div>
			</div>
			<div class="content">
				<div class="box">
					<div class="imgBx">
						<img src="images/Facebook.png">	
					</div>
					<div class="text">
						<h3>www.facebook.com/stayfit</h3>
					</div>
				</div>
			</div>
			<div class="content">
				<div class="box">
					<div class="imgBx">
						<img src="images/twitter.png">	
					</div>
					<div class="text">
						<h3>www.twitter.com/stayfit</h3>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="contact" id="contact">
		<div class="title">
			<h2 class="titleText"><span>C</span>ontact Us!</h2>
			<p>Tell us your queries</p>
		</div>
		<div class="contactForm">
			<!-- <h3>Send Messages</h3>
			<div class="inputBox">
				<input type="text" name="name" placeholder="Name">
			</div>
			<div class="inputBox">
				<input type="email" name="email" placeholder="Email">
			</div>
			<div class="inputBox">
				<textarea placeholder="Message"></textarea>
			</div>
			<div class="inputBox">
				<input type="submit" name="submit" value="Send">
			</div> -->
			<h2 class="titleText"><span>C</span>ontact Us!</h2>
		<div>
			<i class="fa fa-envelope fa-2x"></i><h3 style="display: inline-block;">: stayfitadmin@gmail.com</h3>
		</div>
		<div>
			<i class="fa fa-phone fa-2x"></i><h3 style="display: inline-block;">: +91 8897976476</h3>
		</div>
		<div>
			<i class="fa fa-address-card fa-2x"></i><h3 style="display: inline-block;font-size: 17px;">: Stay fit block,Road No 5,Banjara hills,</h3>
			<h3 style="font-size: 17px;">Hyderabad - 500034</h3>
		</div>
		</div>
	</section>
	
	<!-- <div class="contactForm2">
		<h2 class="titleText"><span>C</span>ontact Us!</h2>
		<div>
			<i class="fa fa-envelope fa-2x"></i><h3 style="display: inline-block;">: stayfitadmin@gmail.com</h3>
		</div>
		<div>
			<i class="fa fa-phone fa-2x"></i><h3 style="display: inline-block;">: +91 8897976476</h3>
		</div>
		<div>
			<i class="fa fa-address-card fa-2x"></i><h3 style="display: inline-block;font-size: 17px;">: Stay fit block,Road No 5,Banjara hills,</h3>
			<h3 style="font-size: 17px;">Hyderabad</h3>
		</div>
	</div> -->

</div>
<br>
<div class="copyrightText">
	<p>Copyright 2020. A.V.L.Likhita & D.Sai Hashitha. All Rights Reserved</p>
</div>
<script type="text/javascript">
	window.addEventListener('scroll',function(){
		const header = document.querySelector('header');
		header.classList.toggle("sticky",window.scrollY > 0);
	});
</script>

</body>
</html>