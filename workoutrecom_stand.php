<?php 
session_start();

if(!isset($_SESSION['email']))
{
  header("Location: userlogin.php");
}
$cookie = $_COOKIE['weight'];
include('chatbot.php'); 

?>
<html >
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <title>Stayfit</title>

  <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/"> -->

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
      /*#myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: red;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
      }

      #myBtn:hover {
        background-color: #555;
        }*/
        #top {
          display: inline-block;
          position: fixed;
          bottom: 20px;
          right: 120px;
          z-index: 99;
          font-size: 18px;
          border: none;
          outline: none;
          background-color: red;
          color: white;
          cursor: pointer;
          padding: 15px;
          border-radius: 4px;
        }

        #top:hover {
          background-color: #555;
        }
      </style>
      <!-- Custom styles for this template -->
      <link href="css/album.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="lightbox/lightbox.min.css">
      <script src="https://unpkg.com/feather-icons"></script>
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
      <a href="standardmain.php" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Home</strong>
      </a>
      <a href="javascript:show1()" class="navbar-brand d-flex align-items-center">
        <i class="fa fa-list-ul" aria-hidden="true" style="position: absolute;left: 230px;"></i>
        <strong style="position: absolute;left: 260px;">Category wise</strong>
      </a>
      <a href="javascript:show2()" class="navbar-brand d-flex align-items-center">
        <i class="fa fa-file-image-o" aria-hidden="true" style="position: absolute;left: 410px;"></i>
        <strong style="position: absolute;left: 430px;">Display all</strong>
      </a>
      <a href="workoutmain-weightStand.php" class="navbar-brand d-flex align-items-center">
        <i class="fa fa-dumbbell" aria-hidden="true" style="color: white; position: absolute;left: 650px;"></i>
        <strong style="position: absolute;left: 650px;">Try with a different weight??</strong>
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
  <section class="jumbotron text-center;" style="background-image: url(tempimg/pic10.png);height: 600px;background-size: cover;">
    <div class="container">
      <p style="color: black;font-family: cursive;font-size: 40px;position: absolute;left: 5%;top: 12%;">‘What hurts today makes you stronger </p>
      <p style="color: black;font-family: cursive;font-size: 40px;position: absolute;left: 5%;top: 19%;">tomorrow.’</p>
      <p style="color: black;font-family: cursive;font-size: 40px;position: absolute;left: 5%;top: 29%;">   — Jay Cutler</p>
      <br>
      <p style="position: absolute;left: 5%;top: 40%;"><button class="btn btn-primary my-2" type="submit" style="color: black;font-family: cursive;font-size: 25px;font-weight: 550;" onclick="location.href='exerciseportal.html'">Start Exercising!!</button></p>
    </div>
  </section>

  <div class="album py-5 bg-light display" id="display">
    <div class="container">
      <div class="row">
        <?php  
        $conn    =   mysqli_connect('localhost','root','','admindb');
        $weight = $cookie;
        $query="SELECT * FROM WORKOUTSTABLE WHERE WEIGHT BETWEEN $weight-10 AND $weight";
        $data=mysqli_query($conn,$query);
        while($result=mysqli_fetch_assoc($data)){    ?>

          <div class="col-md-4 gallery ">
            <div class="card mb-4 shadow-sm " >
              <a href="<?php echo 'data:'.$result['large_type'].';base64,'.base64_encode($result['large_pic'])  ?>" data-lightbox="mygallery" data-title="<?php  echo $result['name']  ?>">
                <img src="<?php echo 'data:'.$result['small_type'].';base64,'.base64_encode($result['small_pic'])  ?>" style="width: 348px;height: 240px;" ></a>

                <div class="card-body polaroid">
                  <p class="card-text"><b><?php echo $result['name']; ?></b></p>
                  <p class="card-text"><?php echo $result['description']; ?></p>
                  
                </div>

              </div>
            </div>
          <?php   }    ?>
          
        </div> 
      </div>
    </div>

    <div id="list" class="list">
      <br><br>
      <div>
        <table id='cattable'>
          <tr style="font-size: 40px;position: absolute;left: 50px;">
            <th>CATEGORIES:</th>
          </tr>   
        </table>
      </div>      
      <br><br><br>
      <div>
        <ul>
         <li style="position: relative;left: 3%;top: 40%;font-family: cursive;"><a href="javascript:neck()" style="color: #2101be;font-size: 30px;border: none;">Neck</a></li>
         <li style="position: relative;left: 3%;top: 40%;font-family: cursive;"><a href="javascript:shoulder()" style="color: #2101be;font-size: 30px;border: none;">Shoulders</a></li>
         <li style="position: relative;left: 3%;top: 40%;font-family: cursive;"><a href="javascript:upperarms()" style="color: #2101be;font-size: 30px;border: none;">Upper Arms</a></li>
         <li style="position: relative;left: 3%;top: 40%;font-family: cursive;"><a href="javascript:forearms()" style="color: #2101be;font-size: 30px;border: none;">Forearms</a></li>
         <li style="position: relative;left: 3%;top: 40%;font-family: cursive;"><a href="javascript:back()" style="color: #2101be;font-size: 30px;border: none;">Back</a></li>
         <li style="position: relative;left: 3%;top: 40%;font-family: cursive;"><a href="javascript:chest()" style="color: #2101be;font-size: 30px;border: none;">Chest</a></li>
         <li style="position: relative;left: 3%;top: 40%;font-family: cursive;"><a href="javascript:waist()" style="color: #2101be;font-size: 30px;border: none;">Waist</a></li>
         <li style="position: relative;left: 3%;top: 40%;font-family: cursive;"><a href="javascript:hips()" style="color: #2101be;font-size: 30px;border: none;">Hips</a></li>
         <li style="position: relative;left: 3%;top: 40%;font-family: cursive;"><a href="javascript:thighs()" style="color: #2101be;font-size: 30px;border: none;">Thighs</a></li>
         <li style="position: relative;left: 3%;top: 40%;font-family: cursive;"><a href="javascript:calves()" style="color: #2101be;font-size: 30px;border: none;">Calves</a></li>
         <li style="position: relative;left: 3%;top: 40%;font-family: cursive;"><a href="javascript:other()" style="color: #2101be;font-size: 30px;border: none;">Other Exercises</a></li>
       </ul>
     </div>             
     
   </div>

   <div class="album py-5 bg-light neck" id="neck">
    <div>
      <table id='cattable'>
        <tr style="font-size: 40px;position: absolute;left: 100px;">
          <th>NECK WORKOUTS:</th>
        </tr>   
      </table>
    </div>
    <br><br><br>
    <div class="container">
      <div class="row">
        <?php  
        $conn    =   mysqli_connect('localhost','root','','admindb');
        $weight = $cookie;
        $category = "neck";
        $query="SELECT * FROM WORKOUTSTABLE WHERE WEIGHT BETWEEN $weight-10 AND $weight  &&  CATEGORY='$category'";
        $data=mysqli_query($conn,$query);
        while($result=mysqli_fetch_assoc($data)){    ?>

          <div class="col-md-4 gallery ">
            <div class="card mb-4 shadow-sm " >
              <a href="<?php echo 'data:'.$result['large_type'].';base64,'.base64_encode($result['large_pic'])  ?>" data-lightbox="mygallery" data-title="<?php  echo $result['name']  ?>">
                <img src="<?php echo 'data:'.$result['small_type'].';base64,'.base64_encode($result['small_pic'])  ?>" style="width: 348px;height: 240px;" ></a>

                <div class="card-body polaroid">
                  <p class="card-text"><b><?php echo $result['name']; ?></b></p>
                  <p class="card-text"><?php echo $result['description']; ?></p>
                  
                </div>

              </div>
            </div>
          <?php   }    ?>
          
        </div> 
      </div>
    </div>

    <div class="album py-5 bg-light shoulder" id="shoulder">
      <div>
        <table id='cattable'>
          <tr style="font-size: 40px;position: absolute;left: 100px;">
            <th>SHOULDER WORKOUTS:</th>
          </tr>   
        </table>
      </div>
      <br><br><br>
      <div class="container">
        <div class="row">
          <?php  
          $conn    =   mysqli_connect('localhost','root','','admindb');
          $weight = $cookie;
          $category = "shoulder";
          $query="SELECT * FROM WORKOUTSTABLE WHERE WEIGHT BETWEEN $weight-10 AND $weight  &&  CATEGORY='$category'";
          $data=mysqli_query($conn,$query);
          while($result=mysqli_fetch_assoc($data)){    ?>

            <div class="col-md-4 gallery ">
              <div class="card mb-4 shadow-sm " >
                <a href="<?php echo 'data:'.$result['large_type'].';base64,'.base64_encode($result['large_pic'])  ?>" data-lightbox="mygallery" data-title="<?php  echo $result['name']  ?>">
                  <img src="<?php echo 'data:'.$result['small_type'].';base64,'.base64_encode($result['small_pic'])  ?>" style="width: 348px;height: 240px;" ></a>

                  <div class="card-body polaroid">
                    <p class="card-text"><b><?php echo $result['name']; ?></b></p>
                    <p class="card-text"><?php echo $result['description']; ?></p>
                    
                  </div>

                </div>
              </div>
            <?php   }    ?>
            
          </div> 
        </div>
      </div>

      <div class="album py-5 bg-light upperarms" id="upperarms">
        <div>
          <table id='cattable'>
            <tr style="font-size: 40px;position: absolute;left: 100px;">
              <th>UPPER ARM WORKOUTS:</th>
            </tr>   
          </table>
        </div>
        <br><br><br>
        <div class="container">
          <div class="row">
            <?php  
            $conn    =   mysqli_connect('localhost','root','','admindb');
            $weight = $cookie;
            $category = "upperarms";
            $query="SELECT * FROM WORKOUTSTABLE WHERE WEIGHT BETWEEN $weight-10 AND $weight  &&  CATEGORY='$category'";
            $data=mysqli_query($conn,$query);
            while($result=mysqli_fetch_assoc($data)){    ?>

              <div class="col-md-4 gallery ">
                <div class="card mb-4 shadow-sm " >
                  <a href="<?php echo 'data:'.$result['large_type'].';base64,'.base64_encode($result['large_pic'])  ?>" data-lightbox="mygallery" data-title="<?php  echo $result['name']  ?>">
                    <img src="<?php echo 'data:'.$result['small_type'].';base64,'.base64_encode($result['small_pic'])  ?>" style="width: 348px;height: 240px;" ></a>

                    <div class="card-body polaroid">
                      <p class="card-text"><b><?php echo $result['name']; ?></b></p>
                      <p class="card-text"><?php echo $result['description']; ?></p>
                      
                    </div>

                  </div>
                </div>
              <?php   }    ?>
              
            </div> 
          </div>
        </div>

        <div class="album py-5 bg-light forearms" id="forearms">
          <div>
            <table id='cattable'>
              <tr style="font-size: 40px;position: absolute;left: 100px;">
                <th>FORE ARM WORKOUTS:</th>
              </tr>   
            </table>
          </div>
          <br><br><br>
          <div class="container">
            <div class="row">
              <?php  
              $conn    =   mysqli_connect('localhost','root','','admindb');
              $weight = $cookie;
              $category = "forearms";
              $query="SELECT * FROM WORKOUTSTABLE WHERE WEIGHT BETWEEN $weight-10 AND $weight  &&  CATEGORY='$category'";
              $data=mysqli_query($conn,$query);
              while($result=mysqli_fetch_assoc($data)){    ?>

                <div class="col-md-4 gallery ">
                  <div class="card mb-4 shadow-sm " >
                    <a href="<?php echo 'data:'.$result['large_type'].';base64,'.base64_encode($result['large_pic'])  ?>" data-lightbox="mygallery" data-title="<?php  echo $result['name']  ?>">
                      <img src="<?php echo 'data:'.$result['small_type'].';base64,'.base64_encode($result['small_pic'])  ?>" style="width: 348px;height: 240px;" ></a>

                      <div class="card-body polaroid">
                        <p class="card-text"><b><?php echo $result['name']; ?></b></p>
                        <p class="card-text"><?php echo $result['description']; ?></p>
                        
                      </div>

                    </div>
                  </div>
                <?php   }    ?>
                
              </div> 
            </div>
          </div>

          <div class="album py-5 bg-light back" id="back">
            <div>
              <table id='cattable'>
                <tr style="font-size: 40px;position: absolute;left: 100px;">
                  <th>BACK WORKOUTS:</th>
                </tr>   
              </table>
            </div>
            <br><br><br>
            <div class="container">
              <div class="row">
                <?php  
                $conn    =   mysqli_connect('localhost','root','','admindb');
                $weight = $cookie;
                $category = "back";
                $query="SELECT * FROM WORKOUTSTABLE WHERE WEIGHT BETWEEN $weight-10 AND $weight  &&  CATEGORY='$category'";
                $data=mysqli_query($conn,$query);
                while($result=mysqli_fetch_assoc($data)){    ?>

                  <div class="col-md-4 gallery ">
                    <div class="card mb-4 shadow-sm " >
                      <a href="<?php echo 'data:'.$result['large_type'].';base64,'.base64_encode($result['large_pic'])  ?>" data-lightbox="mygallery" data-title="<?php  echo $result['name']  ?>">
                        <img src="<?php echo 'data:'.$result['small_type'].';base64,'.base64_encode($result['small_pic'])  ?>" style="width: 348px;height: 240px;" ></a>

                        <div class="card-body polaroid">
                          <p class="card-text"><b><?php echo $result['name']; ?></b></p>
                          <p class="card-text"><?php echo $result['description']; ?></p>
                          
                        </div>

                      </div>
                    </div>
                  <?php   }    ?>
                  
                </div> 
              </div>
            </div>

            <div class="album py-5 bg-light chest" id="chest">
              <div>
                <table id='cattable'>
                  <tr style="font-size: 40px;position: absolute;left: 100px;">
                    <th>CHEST WORKOUTS:</th>
                  </tr>   
                </table>
              </div>
              <br><br><br>
              <div class="container">
                <div class="row">
                  <?php  
                  $conn    =   mysqli_connect('localhost','root','','admindb');
                  $weight = $cookie;
                  $category = "chest";
                  $query="SELECT * FROM WORKOUTSTABLE WHERE WEIGHT BETWEEN $weight-10 AND $weight  &&  CATEGORY='$category'";
                  $data=mysqli_query($conn,$query);
                  while($result=mysqli_fetch_assoc($data)){    ?>

                    <div class="col-md-4 gallery ">
                      <div class="card mb-4 shadow-sm " >
                        <a href="<?php echo 'data:'.$result['large_type'].';base64,'.base64_encode($result['large_pic'])  ?>" data-lightbox="mygallery" data-title="<?php  echo $result['name']  ?>">
                          <img src="<?php echo 'data:'.$result['small_type'].';base64,'.base64_encode($result['small_pic'])  ?>" style="width: 348px;height: 240px;" ></a>

                          <div class="card-body polaroid">
                            <p class="card-text"><b><?php echo $result['name']; ?></b></p>
                            <p class="card-text"><?php echo $result['description']; ?></p>
                            
                          </div>

                        </div>
                      </div>
                    <?php   }    ?>
                    
                  </div> 
                </div>
              </div>

              <div class="album py-5 bg-light waist" id="waist">
                <div>
                  <table id='cattable'>
                    <tr style="font-size: 40px;position: absolute;left: 100px;">
                      <th>WAIST WORKOUTS:</th>
                    </tr>   
                  </table>
                </div>
                <br><br><br>
                <div class="container">
                  <div class="row">
                    <?php  
                    $conn    =   mysqli_connect('localhost','root','','admindb');
                    $weight = $cookie;
                    $category = "waist";
                    $query="SELECT * FROM WORKOUTSTABLE WHERE WEIGHT BETWEEN $weight-10 AND $weight  &&  CATEGORY='$category'";
                    $data=mysqli_query($conn,$query);
                    while($result=mysqli_fetch_assoc($data)){    ?>

                      <div class="col-md-4 gallery ">
                        <div class="card mb-4 shadow-sm " >
                          <a href="<?php echo 'data:'.$result['large_type'].';base64,'.base64_encode($result['large_pic'])  ?>" data-lightbox="mygallery" data-title="<?php  echo $result['name']  ?>">
                            <img src="<?php echo 'data:'.$result['small_type'].';base64,'.base64_encode($result['small_pic'])  ?>" style="width: 348px;height: 240px;" ></a>

                            <div class="card-body polaroid">
                              <p class="card-text"><b><?php echo $result['name']; ?></b></p>
                              <p class="card-text"><?php echo $result['description']; ?></p>
                              
                            </div>

                          </div>
                        </div>
                      <?php   }    ?>
                      
                    </div> 
                  </div>
                </div>

                <div class="album py-5 bg-light hips" id="hips">
                  <div>
                    <table id='cattable'>
                      <tr style="font-size: 40px;position: absolute;left: 100px;">
                        <th>HIPS WORKOUTS:</th>
                      </tr>   
                    </table>
                  </div>
                  <br><br><br>
                  <div class="container">
                    <div class="row">
                      <?php  
                      $conn    =   mysqli_connect('localhost','root','','admindb');
                      $weight = $cookie;
                      $category = "hips";
                      $query="SELECT * FROM WORKOUTSTABLE WHERE WEIGHT BETWEEN $weight-10 AND $weight  &&  CATEGORY='$category'";
                      $data=mysqli_query($conn,$query);
                      while($result=mysqli_fetch_assoc($data)){    ?>

                        <div class="col-md-4 gallery ">
                          <div class="card mb-4 shadow-sm " >
                            <a href="<?php echo 'data:'.$result['large_type'].';base64,'.base64_encode($result['large_pic'])  ?>" data-lightbox="mygallery" data-title="<?php  echo $result['name']  ?>">
                              <img src="<?php echo 'data:'.$result['small_type'].';base64,'.base64_encode($result['small_pic'])  ?>" style="width: 348px;height: 240px;" ></a>

                              <div class="card-body polaroid">
                                <p class="card-text"><b><?php echo $result['name']; ?></b></p>
                                <p class="card-text"><?php echo $result['description']; ?></p>
                                
                              </div>

                            </div>
                          </div>
                        <?php   }    ?>
                        
                      </div> 
                    </div>
                  </div>

                  <div class="album py-5 bg-light thighs" id="thighs">
                    <div>
                      <table id='cattable'>
                        <tr style="font-size: 40px;position: absolute;left: 100px;">
                          <th>THIGHS WORKOUTS:</th>
                        </tr>   
                      </table>
                    </div>
                    <br><br><br>
                    <div class="container">
                      <div class="row">
                        <?php  
                        $conn    =   mysqli_connect('localhost','root','','admindb');
                        $weight = $cookie;
                        $category = "thighs";
                        $query="SELECT * FROM WORKOUTSTABLE WHERE WEIGHT BETWEEN $weight-10 AND $weight  &&  CATEGORY='$category'";
                        $data=mysqli_query($conn,$query);
                        while($result=mysqli_fetch_assoc($data)){    ?>

                          <div class="col-md-4 gallery ">
                            <div class="card mb-4 shadow-sm " >
                              <a href="<?php echo 'data:'.$result['large_type'].';base64,'.base64_encode($result['large_pic'])  ?>" data-lightbox="mygallery" data-title="<?php  echo $result['name']  ?>">
                                <img src="<?php echo 'data:'.$result['small_type'].';base64,'.base64_encode($result['small_pic'])  ?>" style="width: 348px;height: 240px;" ></a>

                                <div class="card-body polaroid">
                                  <p class="card-text"><b><?php echo $result['name']; ?></b></p>
                                  <p class="card-text"><?php echo $result['description']; ?></p>
                                  
                                </div>

                              </div>
                            </div>
                          <?php   }    ?>
                          
                        </div> 
                      </div>
                    </div>

                    <div class="album py-5 bg-light calves" id="calves">
                      <div>
                        <table id='cattable'>
                          <tr style="font-size: 40px;position: absolute;left: 100px;">
                            <th>CALVES WORKOUTS:</th>
                          </tr>   
                        </table>
                      </div>
                      <br><br><br>
                      <div class="container">
                        <div class="row">
                          <?php  
                          $conn    =   mysqli_connect('localhost','root','','admindb');
                          $weight = $cookie;
                          $category = "calves";
                          $query="SELECT * FROM WORKOUTSTABLE WHERE WEIGHT BETWEEN $weight-10 AND $weight  &&  CATEGORY='$category'";
                          $data=mysqli_query($conn,$query);
                          while($result=mysqli_fetch_assoc($data)){    ?>

                            <div class="col-md-4 gallery ">
                              <div class="card mb-4 shadow-sm " >
                                <a href="<?php echo 'data:'.$result['large_type'].';base64,'.base64_encode($result['large_pic'])  ?>" data-lightbox="mygallery" data-title="<?php  echo $result['name']  ?>">
                                  <img src="<?php echo 'data:'.$result['small_type'].';base64,'.base64_encode($result['small_pic'])  ?>" style="width: 348px;height: 240px;" ></a>

                                  <div class="card-body polaroid">
                                    <p class="card-text"><b><?php echo $result['name']; ?></b></p>
                                    <p class="card-text"><?php echo $result['description']; ?></p>
                                    
                                  </div>

                                </div>
                              </div>
                            <?php   }    ?>
                            
                          </div> 
                        </div>
                      </div>

                      <div class="album py-5 bg-light other" id="other">
                        <div>
                          <table id='cattable'>
                            <tr style="font-size: 40px;position: absolute;left: 100px;">
                              <th>OTHER WORKOUTS:</th>
                            </tr>   
                          </table>
                        </div>
                        <br><br><br>
                        <div class="container">
                          <div class="row">
                            <?php  
                            $conn    =   mysqli_connect('localhost','root','','admindb');
                            $weight = $cookie;
                            $category = "other";
                            $query="SELECT * FROM WORKOUTSTABLE WHERE WEIGHT BETWEEN $weight-10 AND $weight  &&  CATEGORY='$category'";
                            $data=mysqli_query($conn,$query);
                            while($result=mysqli_fetch_assoc($data)){    ?>

                              <div class="col-md-4 gallery ">
                                <div class="card mb-4 shadow-sm " >
                                  <a href="<?php echo 'data:'.$result['large_type'].';base64,'.base64_encode($result['large_pic'])  ?>" data-lightbox="mygallery" data-title="<?php  echo $result['name']  ?>">
                                    <img src="<?php echo 'data:'.$result['small_type'].';base64,'.base64_encode($result['small_pic'])  ?>" style="width: 348px;height: 240px;" ></a>

                                    <div class="card-body polaroid">
                                      <p class="card-text"><b><?php echo $result['name']; ?></b></p>
                                      <p class="card-text"><?php echo $result['description']; ?></p>
                                      
                                    </div>

                                  </div>
                                </div>
                              <?php   }    ?>
                              
                            </div> 
                          </div>
                        </div>
                      </main>

                      <br><br>
                      <footer class="text-muted">
                        <div class="container">
                          <p class="float-right">
                            <!-- <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> -->
                            <button onclick="topFunction()" id="top" title="Go to top" style="position: fixed;bottom: 30px;right: 100px;">Top</button>
                          </p>
                          <p><b>&copy;Likhita AVL  &copy;Sai Hashitha</p>
                          </div>
                        </footer>

                        <script >
                          window.onload = function(){
                            document.getElementById("list").style.display='none';
                            document.getElementById("display").style.display='none';
                            document.getElementById("neck").style.display='none';
                            document.getElementById("shoulder").style.display='none';
                            document.getElementById("upperarms").style.display='none';
                            document.getElementById("forearms").style.display='none';
                            document.getElementById("back").style.display='none';
                            document.getElementById("chest").style.display='none';
                            document.getElementById("waist").style.display='none';
                            document.getElementById("hips").style.display='none';
                            document.getElementById("thighs").style.display='none';
                            document.getElementById("calves").style.display='none';
                            document.getElementById("other").style.display='none';
                          };
                        </script>

                        <script >
                          function show1(){
                            document.getElementById('display').style.display='none';
                            document.getElementById('list').style.display='block';
                            document.getElementById("neck").style.display='none';
                            document.getElementById("shoulder").style.display='none';
                            document.getElementById("upperarms").style.display='none';
                            document.getElementById("forearms").style.display='none';
                            document.getElementById("back").style.display='none';
                            document.getElementById("chest").style.display='none';
                            document.getElementById("waist").style.display='none';
                            document.getElementById("hips").style.display='none';
                            document.getElementById("thighs").style.display='none';
                            document.getElementById("calves").style.display='none';
                            document.getElementById("other").style.display='none';
                            $('html,body').animate({
                              scrollTop: $(".list").offset().top},
                              'slow');
                          }
                        </script>

                        <script >
                          function show2(){
                            document.getElementById('list').style.display='none';
                            document.getElementById('display').style.display='block';
                            document.getElementById("neck").style.display='none';
                            document.getElementById("shoulder").style.display='none';
                            document.getElementById("upperarms").style.display='none';
                            document.getElementById("forearms").style.display='none';
                            document.getElementById("back").style.display='none';
                            document.getElementById("chest").style.display='none';
                            document.getElementById("waist").style.display='none';
                            document.getElementById("hips").style.display='none';
                            document.getElementById("thighs").style.display='none';
                            document.getElementById("calves").style.display='none';
                            document.getElementById("other").style.display='none';
                            $('html,body').animate({
                              scrollTop: $(".display").offset().top},
                              'slow');
                          }  
                        </script>

                        <script >
                          function neck(){
                            document.getElementById('list').style.display='none';
                            document.getElementById('display').style.display='none';
                            document.getElementById('neck').style.display='block';
                            document.getElementById("shoulder").style.display='none';
                            document.getElementById("upperarms").style.display='none';
                            document.getElementById("forearms").style.display='none';
                            document.getElementById("back").style.display='none';
                            document.getElementById("chest").style.display='none';
                            document.getElementById("waist").style.display='none';
                            document.getElementById("hips").style.display='none';
                            document.getElementById("thighs").style.display='none';
                            document.getElementById("calves").style.display='none';
                            document.getElementById("other").style.display='none';

                            $('html,body').animate({
                              scrollTop: $(".neck").offset().top},
                              'slow');
                          }
                        </script>

                        <script >
                          function shoulder(){
                            document.getElementById('list').style.display='none';
                            document.getElementById("display").style.display='none';
                            document.getElementById('shoulder').style.display='block';
                            document.getElementById("neck").style.display='none';
                            document.getElementById("upperarms").style.display='none';
                            document.getElementById("forearms").style.display='none';
                            document.getElementById("back").style.display='none';
                            document.getElementById("chest").style.display='none';
                            document.getElementById("waist").style.display='none';
                            document.getElementById("hips").style.display='none';
                            document.getElementById("thighs").style.display='none';
                            document.getElementById("calves").style.display='none';
                            document.getElementById("other").style.display='none';

                            $('html,body').animate({
                              scrollTop: $(".shoulder").offset().top},
                              'slow');
                          }
                        </script>

                        <script >
                          function upperarms(){
                            document.getElementById('list').style.display='none';
                            document.getElementById("display").style.display='none';
                            document.getElementById('upperarms').style.display='block';
                            document.getElementById("neck").style.display='none';
                            document.getElementById("shoulder").style.display='none';
                            document.getElementById("forearms").style.display='none';
                            document.getElementById("back").style.display='none';
                            document.getElementById("chest").style.display='none';
                            document.getElementById("waist").style.display='none';
                            document.getElementById("hips").style.display='none';
                            document.getElementById("thighs").style.display='none';
                            document.getElementById("calves").style.display='none';
                            document.getElementById("other").style.display='none';

                            $('html,body').animate({
                              scrollTop: $(".upperarms").offset().top},
                              'slow');
                          }
                        </script>

                        <script >
                          function forearms(){
                            document.getElementById('list').style.display='none';
                            document.getElementById("display").style.display='none';
                            document.getElementById('forearms').style.display='block';
                            document.getElementById("neck").style.display='none';
                            document.getElementById("shoulder").style.display='none';
                            document.getElementById("upperarms").style.display='none';
                            document.getElementById("back").style.display='none';
                            document.getElementById("chest").style.display='none';
                            document.getElementById("waist").style.display='none';
                            document.getElementById("hips").style.display='none';
                            document.getElementById("thighs").style.display='none';
                            document.getElementById("calves").style.display='none';
                            document.getElementById("other").style.display='none';

                            $('html,body').animate({
                              scrollTop: $(".forearms").offset().top},
                              'slow');
                          }
                        </script>

                        <script >
                          function back(){
                            document.getElementById('list').style.display='none';
                            document.getElementById("display").style.display='none';
                            document.getElementById('back').style.display='block';
                            document.getElementById("neck").style.display='none';
                            document.getElementById("shoulder").style.display='none';
                            document.getElementById("upperarms").style.display='none';
                            document.getElementById("forearms").style.display='none';
                            document.getElementById("chest").style.display='none';
                            document.getElementById("waist").style.display='none';
                            document.getElementById("hips").style.display='none';
                            document.getElementById("thighs").style.display='none';
                            document.getElementById("calves").style.display='none';
                            document.getElementById("other").style.display='none';

                            $('html,body').animate({
                              scrollTop: $(".back").offset().top},
                              'slow');
                          }
                        </script>

                        <script >
                          function chest(){
                            document.getElementById('list').style.display='none';
                            document.getElementById("display").style.display='none';
                            document.getElementById('chest').style.display='block';
                            document.getElementById("neck").style.display='none';
                            document.getElementById("shoulder").style.display='none';
                            document.getElementById("upperarms").style.display='none';
                            document.getElementById("forearms").style.display='none';
                            document.getElementById("back").style.display='none';
                            document.getElementById("waist").style.display='none';
                            document.getElementById("hips").style.display='none';
                            document.getElementById("thighs").style.display='none';
                            document.getElementById("calves").style.display='none';
                            document.getElementById("other").style.display='none';

                            $('html,body').animate({
                              scrollTop: $(".chest").offset().top},
                              'slow');
                          }
                        </script>

                        <script >
                          function waist(){
                            document.getElementById('list').style.display='none';
                            document.getElementById("display").style.display='none';
                            document.getElementById('waist').style.display='block';
                            document.getElementById("neck").style.display='none';
                            document.getElementById("shoulder").style.display='none';
                            document.getElementById("upperarms").style.display='none';
                            document.getElementById("forearms").style.display='none';
                            document.getElementById("back").style.display='none';
                            document.getElementById("chest").style.display='none';
                            document.getElementById("hips").style.display='none';
                            document.getElementById("thighs").style.display='none';
                            document.getElementById("calves").style.display='none';
                            document.getElementById("other").style.display='none';

                            $('html,body').animate({
                              scrollTop: $(".waist").offset().top},
                              'slow');
                          }
                        </script>

                        <script >
                          function hips(){
                            document.getElementById('list').style.display='none';
                            document.getElementById("display").style.display='none';
                            document.getElementById('hips').style.display='block';
                            document.getElementById("neck").style.display='none';
                            document.getElementById("shoulder").style.display='none';
                            document.getElementById("upperarms").style.display='none';
                            document.getElementById("forearms").style.display='none';
                            document.getElementById("back").style.display='none';
                            document.getElementById("chest").style.display='none';
                            document.getElementById("waist").style.display='none';
                            document.getElementById("thighs").style.display='none';
                            document.getElementById("calves").style.display='none';
                            document.getElementById("other").style.display='none';

                            $('html,body').animate({
                              scrollTop: $(".hips").offset().top},
                              'slow');
                          }
                        </script>

                        <script >
                          function thighs(){
                            document.getElementById('list').style.display='none';
                            document.getElementById("display").style.display='none';
                            document.getElementById('thighs').style.display='block';
                            document.getElementById("neck").style.display='none';
                            document.getElementById("shoulder").style.display='none';
                            document.getElementById("upperarms").style.display='none';
                            document.getElementById("forearms").style.display='none';
                            document.getElementById("back").style.display='none';
                            document.getElementById("chest").style.display='none';
                            document.getElementById("waist").style.display='none';
                            document.getElementById("hips").style.display='none';
                            document.getElementById("calves").style.display='none';
                            document.getElementById("other").style.display='none';

                            $('html,body').animate({
                              scrollTop: $(".thighs").offset().top},
                              'slow');
                          }
                        </script>

                        <script >
                          function calves(){
                            document.getElementById('list').style.display='none';
                            document.getElementById("display").style.display='none';
                            document.getElementById('calves').style.display='block';
                            document.getElementById("neck").style.display='none';
                            document.getElementById("shoulder").style.display='none';
                            document.getElementById("upperarms").style.display='none';
                            document.getElementById("forearms").style.display='none';
                            document.getElementById("back").style.display='none';
                            document.getElementById("chest").style.display='none';
                            document.getElementById("waist").style.display='none';
                            document.getElementById("hips").style.display='none';
                            document.getElementById("thighs").style.display='none';
                            document.getElementById("other").style.display='none';

                            $('html,body').animate({
                              scrollTop: $(".calves").offset().top},
                              'slow');
                          }
                        </script>

                        <script >
                          function other(){
                            document.getElementById('list').style.display='none';
                            document.getElementById("display").style.display='none';
                            document.getElementById('other').style.display='block';
                            document.getElementById("neck").style.display='none';
                            document.getElementById("shoulder").style.display='none';
                            document.getElementById("upperarms").style.display='none';
                            document.getElementById("forearms").style.display='none';
                            document.getElementById("back").style.display='none';
                            document.getElementById("chest").style.display='none';
                            document.getElementById("waist").style.display='none';
                            document.getElementById("hips").style.display='none';
                            document.getElementById("thighs").style.display='none';
                            document.getElementById("calves").style.display='none';

                            $('html,body').animate({
                              scrollTop: $(".other").offset().top},
                              'slow');
                          }
                        </script>

                        <script>
                          var mybutton = document.getElementById("top");
                          window.onscroll = function() {scrollFunction()};

                          function scrollFunction() {
                            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                              mybutton.style.display = "block";
                            } else {
                              mybutton.style.display = "none";
                            }
                          }
                          function topFunction() {
                            document.body.scrollTop = 0;
                            document.documentElement.scrollTop = 0;
                          }
                        </script>


                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                      </script><script src="bootstrap/bootstrap.bundle.min.js"></script>

                      <script src="lightbox/lightbox-plus-jquery.min.js"></script>
                    </body>

                    </html>


