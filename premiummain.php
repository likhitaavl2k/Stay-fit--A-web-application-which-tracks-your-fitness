<?php
include('chatbot.php');
$conn    =   mysqli_connect('localhost','root','','admindb');
$query="SELECT * FROM FOODTABLE ";
$data=mysqli_query($conn,$query);
$total = mysqli_num_rows($data);

?>

<html >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>Stayfit</title>

  <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/"> -->

  <!-- Bootstrap core CSS -->
  <link href="bootstrap/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }

      .glow {
        font-size: 50px;
        color: #fff;
        text-align: center;
        -webkit-animation: glow 1s ease-in-out infinite alternate;
        -moz-animation: glow 1s ease-in-out infinite alternate;
        animation: glow 1s ease-in-out infinite alternate;
      }

      @-webkit-keyframes glow {
        from {
          text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
        }
        
        to {
          text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
        }
      }
    }
  </style>
  <!-- Custom styles for this template -->
  <link href="css/album.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="lightbox/lightbox.min.css">
</head>
<body>
  <header >
    <!-- <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">About</h4>
            <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Follow on Twitter</a></li>
              <li><a href="#" class="text-white">Like on Facebook</a></li>
              <li><a href="#" class="text-white">Email me</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div> -->
    <div class="navbar navbar-dark bg-dark shadow-sm"  style="position: sticky;">
      <div class="container d-flex justify-content-between">
        <a href="exerciseportal.html" class="navbar-brand d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
          <strong>Home</strong>
        </a>
      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      <a class="nav-link" href="feedback.html">
        <i class="fa fa-sign-out fa-2x" style="color: white; position: absolute;left: 1100px;"></i>
        <strong style="font-size: 20px;color: white">Sign out</strong>
      </a>
    </div>
  </div>
</header>

<main role="main">

  <section class="jumbotron text-center;" style="background-image: url(images/premium.jpg);height: 700px;background-repeat: no-repeat;background-size: cover;">
    
    <div class="container">
      <p class="glow" style="color: black;font-family: cursive;font-size: 55px;position: absolute;left: 25%;top: 12%;">Welcome to our Premium plan!!</p>
      <a href="basic_prem.php" style="color: black"><h1 style="position: absolute;top: 60%;left: 15%;font-family: cursive;"><b>Workout</b></h1></a>
      <a href="basic_prem.php" style="color: black"><h1 style="position: absolute;top: 70%;left: 15%;font-family: cursive;"><b>Tutorials</b></h1></a>

      <a href="premiumworkout_check.php" style="color: black"><h1 style="position: absolute;top: 58%;left: 45%;font-family: cursive;"><b>Workouts</b></h1></a>
      <a href="premiumworkout_check.php" style="color: black"><h1 style="position: absolute;top: 68%;left: 41%;font-family: cursive;font-size: 35px;"><b>Recommendations</b></h1></a>

      <a href="premiumfood_check.php" style="color: black"><h1 style="position: absolute;top: 58%;left: 75%;font-family: cursive;"><b>Food</b></h1></a>
      <a href="premiumfood_check.php" style="color: black"><h1 style="position: absolute;top: 68%;left: 70%;font-family: cursive;font-size: 35px;"><b>Recommendations</b></h1></a>

      <a href="http://google.com" style="color: black" class="glow"><h1 style="position: absolute;top: 90%;left: 60%;font-family: cursive;font-size: 35px;"><b>and a complementary book...</b></h1></a>
    </div>

  </section>
</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="standardmain.php">Back to top</a>
    </p>
    <p><b>&copy;Likhita AVL  &copy;Sai Hashitha</p>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</script><script src="bootstrap/bootstrap.bundle.min.js"></script>

<script src="lightbox/lightbox-plus-jquery.min.js"></script>
</body>
</html>