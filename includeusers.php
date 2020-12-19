<?php
error_reporting(0);
include_once "fwListTemplate.php";
// include_once "sample.php";

$con    =   mysqli_connect('localhost','root','','admindb');
$query="SELECT * FROM USERSRC";
$data=mysqli_query($con,$query);
$total = mysqli_num_rows($data);

echo "<main id='form' role='main'  class='col-md-9 ml-sm-auto col-lg-10 px-md-4'>
<div class='d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom'>
<h1 class='h2'>Dashboard</h1>
</div>
<div>
<p style='font-family:cursive;font-size:30px;' > Total no of users = $total</p>
<table id='foodtable' >
<tr>
<th style='position: sticky;top: 60px;z-index: 10;' >SNO</th>
<th style='position: sticky;top: 60px;z-index: 10;'>Email</th>
<th style='position: sticky;top: 60px;z-index: 10;'>Plan</th>
<th style='position: sticky;top: 60px;z-index: 10;'>Delete</th>
</div>
</main>";

$counter = 0;
while($result=mysqli_fetch_assoc($data)){

  echo"
  <tr>
  <td> ".++$counter." </td> 
  <td> ".$result['email']." </td>
  <td> ".$result['plan']." </td>
  <td ><button type='button' class='btn btn-primary deleteButton center' id='delete' data-toggle='modal' data-target='#modalConfirmDelete' data-id2='".$result['id']."' ><img src='images/trash.svg' >Remove</button></td>
  </tr>
  <html>
  <body>

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
  <form action='deleteuser.php' method='post'>
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