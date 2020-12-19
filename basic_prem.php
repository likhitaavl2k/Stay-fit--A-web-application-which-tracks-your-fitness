<?php

$con    =   mysqli_connect('localhost', 'root', '', 'admindb');
$query = "SELECT * FROM TUTORIALS";
$data = mysqli_query($con, $query);
$links = mysqli_fetch_all($data, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youtube modal</title>
    <link rel="stylesheet" type="text/css" href="css/youtube.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
        }

        .row {
            position: relative;
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 5px 100px;
        }

        .featuresrow {
            /*background-image: url(images/bg2.jpg);*/
            background-size: cover;
        }

        .features .content {
            display: flex;
            justify-content: center;
            flex-direction: row-reverse;
            flex-wrap: wrap;
            margin-top: 40px;
        }

        .features .content .box {
            width: 340px;
            margin: 20px;
            border: 15px solid #fff;
            box-shadow: 0 5px 35px rgba(0, 0, 0, 0.5);
        }

        .features .content .box .imgBx {
            position: relative;
            width: 100%;
            height: 300px;
        }

        .features .content .box .imgBx img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .features .content .box .text {
            padding: 15px 0 5px;
        }

        .features .content .box .text h3 {
            font-size: 15px;
            font-weight: 200;
            color: #111;

        }
    </style>
</head>

<body>
    <header style="background-color: black;position: relative;">
        <a href="premiummain.php"><i class="fa fa-home fa-4x" style="position: relative;left: 0;top: 0;"></i></a>
        <a class="nav-link" href="feedback.html" style="display: inline-block;float: right;">
        <i class="fa fa-sign-out fa-2x" style="color: white; position: relative;"></i>
        <strong style="font-size: 23px;color: white">Sign out</strong>
      </a>
    </header>
    <div style="background-color: black;height: 250px;">
        <h1 style="color: white;position: absolute;top: 15%;left: 20%;" class="glow">Here are your free tutorials!</h1>
    </div>
    <br><br>
    <section class="features " id="features">
        <div class="title">
        </div>
        <div class="featuresrow ">
            <?php foreach ($links as $link) { ?>
                <div class="content " style="display: inline-block;padding-left: 40px;">
                    <div class="box">
                        <div class="imgBx">
                            <img style="height:300px;" src="data:<?php echo $link['picture_type'] ?>;base64,<?php echo base64_encode($link['picture']); ?>" class="card-img-top" alt="...">
                        </div>
                        <div class="text">
                            <h3 class="card-title"><?php echo $link['description'] ?></h3>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal<?php echo $link['id']; ?>">
                                
                                Video
                            </button>
                        </div>

                    </div>
                </div>
                <div class="modal fade" id="modal<?php echo $link['id']; ?>" tabindex="-1">
                    <div class="modal-dialog  modal-lg">
                        <div class="modal-content">

                            <div class="modal-body mb-0 p-0">
                                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                    <?php echo $link['link']; ?>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-center flex-column flex-md-row">
                                <span class="mr-4"><b>Spread the word!</b></span>
                                <div>
                                    <a href="#"><i class="fa fa-facebook"></i></a>&nbsp;
                                    <a href="#"><i class="fa fa-google"></i></a>&nbsp;
                                    <a href="#"><i class="fa fa-linkedin"></i></a>

                                </div>
                                <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>
    </section>


    </div>
    </div>






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9e2213edf0.js" crossorigin="anonymous"></script>
</body>

</html>