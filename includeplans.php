<?php
error_reporting(0);
include_once "fwListTemplate.php";
// include_once "sample.php";

$con    =   mysqli_connect('localhost','root','','admindb');
$query="SELECT * FROM PLANS";
$data=mysqli_query($con,$query);
$total = mysqli_num_rows($data);
$sub = $total + 3;

echo "<main id='form' role='main'  class='col-md-9 ml-sm-auto col-lg-10 px-md-4'>
<div class='d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom'>
<h1 class='h2'>Dashboard</h1>
</div>
<div>
<p style='font-family:cursive;font-size:30px;' > Total available plans= $sub</p>
<table id='foodtable' >
<tr>
<th style='position: sticky;top: 60px;z-index: 10;' >SNO</th>
<th style='position: sticky;top: 60px;z-index: 10;'>Name</th>
<th style='position: sticky;top: 60px;z-index: 10;'>Features</th>
<th style='position: sticky;top: 60px;z-index: 10;'>Cost</th>
<th style='position: sticky;top: 60px;z-index: 10;'>Redirect Link</th>
<th style='position: sticky;top: 60px;z-index: 10;'>Actions</th>
</tr>
</div>
</main>";

$counter = 0;
while($result=mysqli_fetch_assoc($data)){
  
  echo"
  <tr>
  <td> ".++$counter." </td> 
  <td><p style='max-width:55px;'> ".$result['name']." </p></td>
  <td><p style='max-width:250px;'>".$result['features']."</p></td>
  <td> ".$result['cost']." </td>
  <td> ".$result['redirect_link']." </td>
  <td><button type='button' class='btn btn-primary clickyButton' data-toggle='modal' data-id1='".$result['id']."' data-name='".$result['name']."' data-features='".$result['features']."' data-cost='".$result['cost']."' data-link='".$result['redirect_link']."' data-target='#UpdatePlansPopup'  id='edit' style='padding:2px;'><img src='images/edit.svg' >Edit</button>
  <button type='button' class='btn btn-primary deleteButton' id='delete' data-toggle='modal' data-target='#modalConfirmDelete' data-id2='".$result['id']."' ><img src='images/trash.svg' >Delete</button></td>
  </tr>
  <html>
  <body>

  <div class='modal fade' id='UpdatePlansPopup' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'
  aria-hidden='true'>
  <div class='modal-dialog modal-xs' role='document'>
  <div class='modal-content'>
  <div class='modal-header' style='background-color: #5bc0de'>
  <h4 class='modal-title' id='myModalLabel'>Update Food Details</h4>
  <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
  <span aria-hidden='true'>×</span>
  </button>
  </div>
  <form action='editplan.php' method='POST' enctype='multipart/form-data'>

  <div class='modal-body'>
  <div class='form-group form-inline'>
  <label for='id1' style='color:black;display:none'><b>ID:</b></label>
  <input type='text' class='form-control' name='id1' id='id1' style='width:20%;display:none' readonly>
  </div>
  <div class='form-group'>
  <label for='name' style='color: black'><b>Name:</b></label>
  <input type='text' class='form-control' name='name' id='name'  style=' width: 90%'>
  </div>

  <div class='form-group'>
  <label for='features' style='color: black'><b>Features:</b></label>
  <textarea class='form-control' name='features' id='features' style=' width: 90%;'>
  </textarea>
  </div>

  <div class='form-group'>
  <label for='cost' style='color: black'><b>Cost:</b></label>
  <input type='text' class='form-control' name='cost' id='cost'  style=' width: 90%'>
  </div>

  <div class='form-group'>
  <label for='link' style='color: black'><b>Redirect Link:</b></label>
  <input type='text' class='form-control' name='link' id='link'  style=' width: 90%'>
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
  <form action='deleteplan.php' method='post'>
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
    var name = $(this).data('name');
    var features = $(this).data('features');
    var cost = $(this).data('cost');  
    var link = $(this).data('link');  

    $('#id1').val(id1);
    $('#name').val(name);
    $('#features').val(features);
    $('#cost').val(cost);
    $('#link').val(link);
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