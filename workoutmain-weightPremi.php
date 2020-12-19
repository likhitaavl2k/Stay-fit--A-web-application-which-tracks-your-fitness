<?php 
session_start();

if(!isset($_SESSION['email']))
{
  header("Location: userlogin.php");
}
// $cookie = $_COOKIE['weight'];
include('chatbot.php'); 
$conn    =   mysqli_connect('localhost','root','','admindb');
  $query="SELECT * FROM WORKOUTSTABLE ";
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
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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

      .gallery img:hover {
          filter: grayscale(100%);
          transform: scale(1.1);
        }
      .polaroid{
        box-shadow: 0 8px 10px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/album.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="lightbox/lightbox.min.css">
  </head>
  <body>
    <header >
  <div class="collapse bg-dark" id="navbarHeader">
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
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm"  style="position: sticky;">
    <div class="container d-flex justify-content-between">
      <a href="premiummain.php" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Home</strong>
      </a>
      <!-- <a href="foodmain-weight.php" class="navbar-brand d-flex align-items-center">
        <i class="fa fa-list-ul" aria-hidden="true" style="position: absolute;left: 230px;"></i>
        <strong style="position: absolute;left: 260px;">Category wise</strong>
      </a>
      <a href="foodmain-weight.php" class="navbar-brand d-flex align-items-center">
        <i class="fa fa-file-image-o" aria-hidden="true" style="position: absolute;left: 410px;"></i>
        <strong style="position: absolute;left: 430px;">Display all</strong>
      </a> -->
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

  <section class="jumbotron text-center;" style="background-image: url(tempimg/pic7.jpg);height: 400px;background-repeat: no-repeat;background-size: cover;">
    <!-- <div class="container">
      <p style="color: white;font-family: cursive;font-size: 50px;position: absolute;left: 15%;">Welcome to our food recommendations!!</p>
    </div>
 -->  </section>

    <div style="position: absolute;left: 20%;top: 80%;">
      <form action="StoreWeightInCookie_Premiwork.php" method="post">
        <label style="font-size: 20px;"><b>Enter Weight:</b></label>
        <input type="text" name="Weight" >
        <br>
        <input type="submit" class="btn btn-primary" name="submitweight" style="position: absolute;left: 50%;top: 130%;font-size: 20px;" value="Search">
      </form>
    </div>
</main>
<br><br><br><br><br><br><br>
<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <!-- <a href="workoutmain-weight.php">Back to top</a> -->
      <!-- <button class="open-button" onclick="openForm()">Chat</button> -->
    </p>
    <p><b>&copy;Likhita AVL  &copy;Sai Hashitha</p>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      </script><script src="bootstrap/bootstrap.bundle.min.js"></script>

      <script src="lightbox/lightbox-plus-jquery.min.js"></script>
  </body>
</html>