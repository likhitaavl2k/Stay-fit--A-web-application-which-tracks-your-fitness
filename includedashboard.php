<?php
$conn = new mysqli('localhost', 'root', '', 'admindb');
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Dashboard</title>

  <link href="bootstrap.min.css" rel="stylesheet">
  <style>
    .small-box {
      border-radius: 2px;
      position: relative;
      display: block;
      margin-bottom: 20px;
      box-shadow: 0 1px 1px rgba(0, 0, 0, 0.5);
    }
    .small-box > .inner {
      padding: 10px;
    }
    .small-box > .small-box-footer {
      position: relative;
      text-align: center;
      padding: 3px 0;
      color: #fff;
      color: rgba(255, 255, 255, 0.8);
      display: block;
      z-index: 10;
      background: rgba(0, 0, 0, 0.1);
      text-decoration: none;
    }
    .small-box > .small-box-footer:hover {
      color: #fff;
      background: rgba(0, 0, 0, 0.15);
    }
    .small-box h3 {
      font-size: 38px;
      font-weight: bold;
      margin: 0 0 5px 0;
      white-space: nowrap;
      padding: 0;
    }
    .small-box p {
      font-size: 15px;
    }
    .small-box p > small {
      display: block;
      color: #f9f9f9;
      font-size: 13px;
      margin-top: 5px;
    }
    .small-box h3,
    .small-box p {
      z-index: 5;
    }
    .small-box .icon {
      -webkit-transition: all 0.3s linear;
      -o-transition: all 0.3s linear;
      transition: all 0.3s linear;
      position: absolute;
      top: -10px;
      right: 10px;
      z-index: 0;
      font-size: 90px;
      color: rgba(0, 0, 0, 0.15);
    }
    .small-box:hover {
      text-decoration: none;
      color: #f9f9f9;
    }
    .small-box:hover .icon {
      font-size: 95px;
    }
    @media (max-width: 767px) {
      .small-box {
        text-align: center;
      }
      .small-box .icon {
        display: none;
      }
      .small-box p {
        font-size: 12px;
      }
    }
    .bg-aqua{
      background-color: #00c0ef !important;
    }
    .bg-yellow{
      background-color: #f39c12 !important;
    }
    .bg-red{
      background-color: #dd4b39 !important;
    }
    .bg-blue {
      background-color: #0073b7 !important;
    }
    .bg-green{
      background-color: #00a65a !important;
    }
  </style>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#" style="font-family: cursive;font-size: 25px;">STAY FIT</a>
    <ul class="navbar-nav px-3">
      <li class="nav-item text-nowrap">
      <!-- <span data-feather="log-out" style="color: grey"></span>
        <a class="nav-link" href="#" style="font-family: cursive;font-size: 20px;">Sign out</a> -->
        <a class="nav-link" href="access.html">
          <span data-feather="log-out" style="color: white"></span>
          <label style="font-size: 20px;color: white">Sign out</label>
        </a>
      </li>
    </ul>
  </nav>

  <main id="form" role="main"  class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Dashboard</h1>
    </div>
    <div style="position: relative;right: -80px;top:-15px;">
      <img src="images/welcome.png" width="750px">
    </div>
    <div class="row">
      <div class="col-lg-3 col-xs-6" style="margin-left: 0px;">
        <!-- small box -->
        <div class="small-box bg-aqua" >
          <div class="inner">
            <?php
            $conn = new mysqli('localhost', 'root', '', 'admindb');

            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM FOODTABLE";
            $query = $conn->query($sql);

            echo "<h3>".$query->num_rows."</h3>";
            ?>

            <p style="font-size: 20px;"><b>Total Food </b></p>
            <p style="font-size: 20px;"><b>recommendations</b></p>
          </div>
          <div class="icon" style="position: absolute;top: 30px;">
            <i class="fas fa-utensils"></i>
          </div>
          <a href="includefood.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6" style="margin-left: 0px;">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <?php
            $sql = "SELECT * FROM WORKOUTSTABLE";
            $query = $conn->query($sql);

            echo "<h3>".$query->num_rows."</h3>";
            ?>

            <p style="font-size: 20px;"><b>Total Workout </b></p>
            <p style="font-size: 20px;"><b>recommendations</b></p>
          </div>
          <div class="icon" style="position: absolute;top: 30px;">
            <i class="fas fa-dumbbell"></i>
          </div>
          <a href="includeworkouts.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6" style="margin-left: 0px;">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <?php
            $sql = "SELECT * FROM TUTORIALS";
            $query = $conn->query($sql);

            echo "<h3>".$query->num_rows."</h3>";
            ?>

            <p style="font-size: 20px;"><b>Total </b></p>
            <p style="font-size: 20px;"><b>Tutorials</b></p>
          </div>
          <div class="icon" style="position: absolute;top: 30px;">
            <i class="fab fa-youtube"></i>
          </div>
          <a href="includetutorials.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6" style="margin-left: -15px;">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <?php
            $sql = "SELECT * FROM PLANS ";
            $query = $conn->query($sql);
            $sub = $query->num_rows+3;
            echo "<h3>".$sub."</h3>";
            ?>

            <p style="font-size: 20px;"><b>Total no of</b></p>
            <p style="font-size: 20px;"><b>Plans</b></p>
          </div>
          <div class="icon" style="position: absolute;top: 30px;">
            <i class="fas fa-book"></i>
          </div>
          <a href="includeplans.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
    <div class="box-body">
      <div class="chart">
        <br>
        <div id="legend" class="text-center"></div>
        <canvas id="barChart" style="height:350px"></canvas>
      </div>
    </div>
  </div>
</div>
</div>
</main>
</div>
</div>

<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="bootstrap/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<script src="js/dashboard.js"></script></body>
</html>
