<?php
error_reporting(0);
include_once "fwListTemplate.php";
// include_once "sample.php";

$con    =   mysqli_connect('localhost','root','','admindb');
$query="SELECT * FROM TUTORIALS";
$data=mysqli_query($con,$query);
$total = mysqli_num_rows($data);

echo "<main id='form' role='main'  class='col-md-9 ml-sm-auto col-lg-10 px-md-4'>
<div class='d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom'>
<h1 class='h2'>Dashboard</h1>
</div>
<div>
<p style='font-family:cursive;font-size:30px;' > Total available Tutorials= $total</p>
<table id='foodtable' >
<tr>
<th style='position: sticky;top: 60px;z-index: 10;' >SNO</th>
<th style='position: sticky;top: 60px;z-index: 10;'>Image</th>
<th style='position: sticky;top: 60px;z-index: 10;'>Description</th>
<th style='position: sticky;top: 60px;z-index: 10;'>Youtube Video</th>
<th style='position: sticky;top: 60px;z-index: 10;'>Actions<th>
</tr>
</div>
</main>";

$counter = 0;
while($result=mysqli_fetch_assoc($data)){
  
  echo"
  <tr>
  <td> ".++$counter." </td>
  <td ><img src='data:".$result['picture_type'].";base64,".base64_encode($result['picture'])."' style='width: 100px;height: 100px;' class='center'></td> 
  <td ><p style='max-width:50px;'>".$result['description']."</p></td>
  <td ><p style='width:33%'> ".$result['link']." </p></td>
  
  <td><button type='button' class='btn btn-primary clickyButton' data-toggle='modal' data-id1='".$result['id']."' data-desc='".$result['description']."' data-link='".$result['link']."' data-target='#UpdateTutorial'  id='edit' style='padding:2px;'><img src='images/edit.svg' >Edit</button>

  <button type='button' class='btn btn-primary deleteButton' id='delete' data-toggle='modal' data-target='#modalConfirmDelete' data-id2='".$result['id']."' ><img src='images/trash.svg' >Delete</button></td>
  </tr>
  <html>
  <body>

  <div class='modal fade' id='UpdateTutorial' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'
  aria-hidden='true'>
  <div class='modal-dialog modal-xs' role='document'>
  <div class='modal-content'>
  <div class='modal-header' style='background-color: #5bc0de'>
  <h4 class='modal-title' id='myModalLabel'>Update Tutorial</h4>
  <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
  <span aria-hidden='true'>×</span>
  </button>
  </div>
  <form action='edittutorial.php' method='POST' enctype='multipart/form-data'>

  <div class='modal-body'>
  <div class='form-group form-inline'>
  <label for='foodname' style='color:black;display:none'><b>ID:</b></label>
  <input type='text' class='form-control' name='id1' id='id1' style='width:20%;display:none' readonly>
  </div>

  <div class='form-group'>
  <label for='description' style='color: black'><b>Description:</b></label>
  <textarea class='form-control' name='description' id='descid' style=' width: 90%;'>
  </textarea>
  </div>

  <div class='form-group'>
  <label for='link' style='color: black'><b>Embedded Link:</b></label>
  <textarea class='form-control' name='link' id='link' style=' width: 90%;'>
  </textarea>
  </div>

  <div class='form-group '>
  <img src='images/upload.svg'>
  <label for='file1' style='color: black'><b>Upload picture:</b></label>
  <input type='file' class='form-control-file' name='file1' accept='image/png, image/jpeg'>
  </div>

  </div>

  <div class='modal-footer'>
  <button type='button' class='btn btn-outline-primary' data-dismiss='modal' id='close'>Close</button>
  <button  class='btn btn-primary'  name='id' id='add'>UPDATE</button>
  </div>
  </form>
  </div>
  </div>
  </div>
  

  <div class='modal fade' id='modalConfirmDelete' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'
  aria-hidden='true'>
  <div class='modal-dialog modal-sm modal-notify modal-danger' role='document'>
  <div class='modal-content text-center'>
  <div class='modal-header d-flex justify-content-center'>
  <p class='heading' style='font-size:20px;'><b>Are you sure?</b></p>
  </div>

  <div class='modal-body'>
  <img src='images/cross.jpg' style='width:20%'>
  </div>
  <form action='deletetutorial.php' method='post'>
  <label style='display:none' >ID:</label>
  <input type='text' class='form-control' name='id2' id='id2' style='display:none' >
  <div class='modal-footer flex-center'>
  <button class='btn  btn-outline-danger' style='width:30%'>Yes</button>
  <button type='button' class='btn  btn-danger waves-effect' id='no' style='width:30%;' data-dismiss='modal'>No</button>
  </div>
  </form>
  </div>
  </div>
  </div>


  <script>
  $(document).ready(function(){

   $('.clickyButton').click(function(){
    var id1 = $(this).data('id1'); 
    var desc = $(this).data('desc');
    var link = $(this).data('link');    

    $('#id1').val(id1);
    $('#link').val(link);
    $('#descid').val(desc);
    });

    });
    </script>

    <script>
    $(document).ready(function(){

     $('.deleteButton').click(function(){
      var id2 = $(this).data('id2');    

      $('#id2').val(id2);
      });

      });
      </script>

      </body>
      </html>

      ";

    }

    ?>

<!-- <img src='images/upload.svg'>
              <label for='file2' style='color: black;'><b>Upload large picture:</b></label>
              <input type='file' class='form-control-file' name='file2' accept='image/png, image/jpeg'> -->