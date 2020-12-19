<?php
$conn    =   mysqli_connect('localhost','root','','admindb');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Sample page!</title>
  <link rel="stylesheet"  href="css/plans.css">
</head>
<body>
  <br>
  <br>
  <br>
  <br>
  <div id="price">
    <!--price tab-->
    <div class="plan basic">
      <div class="plan-inner">
        <div class="entry-title">
          <h3>Basic</h3>
          <div class="price">$0<span style="font-family: cursive;" id="span">FREE</span>
          </div>
        </div>
        <div class="entry-content">
          <ul>
            <li ><strong >1x</strong>  Free Workout tutorial </li>
          </ul>
        </div>

        <form action="updateuser.php?email=<?php  echo $_GET['email'];   ?>" method="post" >
          <div class="btn btn1">
            <input id="paypal1" type="submit" value="Book Now">
          </div>
          <input type="hidden" name="cmd" value="_cart">
          <input type="hidden" name="upload" value="1">
          <input type="hidden" name="business" value="stayfit@gmail.com">

          <input type="hidden" name="item_name_1" value="Basic Plan">
          <input type="hidden" name="amount_1" value="0">
          <input type="hidden" name="quantity_1" value="1">

          <input type="hidden" value=" http://333c0bd743a7.ngrok.io/final/dummyregister.php?email=<?php  echo $_GET['email'];?>" name="return">
          <input type="hidden" value="2" name="rm"> 
        </form>

      </div>
    </div>
    <!-- end of price tab-->
    <!--price tab-->
    <!-- end of price tab-->
    <!--price tab-->
    <div class="plan standard">
      <div class="plan-inner">
        <div class="entry-title">
          <h3>Standard</h3>
          <div class="price">$50<span ></span>
          </div>
        </div>
        <div class="entry-content">
          <ul>
            <li><strong>5x</strong> Free Workout tutorials</li>
            <li><strong>Custom</strong> Workout Recommendations</li>
          </ul>
        </div>
        <form action="updateuser.php?email=<?php  echo $_GET['email'];   ?>" method="post">
          <!-- https://www.sandbox.paypal.com/cgi-bin/webscr -->
          <div class="btn btn2">
           <input id="paypal1" type="submit" value="Book Now" style="background-color: #3772aa">
         </div>
         <input type="hidden" name="cmd" value="_cart">
         <input type="hidden" name="upload" value="1">
         <input type="hidden" name="business" value="stayfit@gmail.com">

         <input type="hidden" name="item_name_1" value="Standard">
         <input type="hidden" name="amount_1" value="50">
         <input type="hidden" name="quantity_1" value="1">

         <input type="hidden" value="http://333c0bd743a7.ngrok.io/final/dummyregister.php?email=<?php  echo $_GET['email'];?>" name="return">
         <input type="hidden" value="2" name="rm"> 
       </form>
     </div>
   </div>
   <!-- end of price tab-->
   <!--price tab-->
   <div class="plan ultimite">
    <div class="plan-inner">
      <!-- <div class="hot">  hot  </div> -->
      <img  src="images/fire.jpg" width="50" height="50">
      <div class="entry-title">
        <!-- <img  src="fire.jpg" width="50" height="30"> -->
        <h3>Premium</h3>
        <div class="price">$100<span></span>
        </div>
      </div>
      <div class="entry-content">
        <ul>
          <li><strong>5x</strong> Free Workout tutorials</li>
          <li><strong>Custom</strong> Workout Recommendations</li>
          <li><strong>Custom</strong> Food Recommendations</li>
          <li><strong>Free</strong> Complemtary Book</li>
        </ul>
      </div>
      <form action="updateuser.php?email=<?php  echo $_GET['email'];   ?>" method="post">
        <!-- https://www.sandbox.paypal.com/cgi-bin/webscr -->
        <div class="btn btn3">
         <input id="paypal1" type="submit" value="Book Now" style="background-color: #DD4B5E">
       </div>
       <input type="hidden" name="cmd" value="_cart">
       <input type="hidden" name="upload" value="1">
       <input type="hidden" name="business" value="stayfit@gmail.com">

       <input type="hidden" name="item_name_1" value="Premium">
       <input type="hidden" name="amount_1" value="100">
       <input type="hidden" name="quantity_1" value="1">

       <input type="hidden" value="http://333c0bd743a7.ngrok.io/final/dummyregister.php?email=<?php  echo $_GET['email'];?>" name="return">
       <input type="hidden" value="2" name="rm"> 
     </form>
   </div>
 </div>
 
  <?php  
 $query="SELECT * FROM PLANS";
 $data=mysqli_query($conn,$query);
 while($result=mysqli_fetch_assoc($data)){    ?>

   <div class="plan general" >
    <div class="plan-inner">
      <div class="entry-title" style="background-color: #00e07a">
        <h3 style="background-color: #00a65a"><?php echo $result['name'] ?></h3>
        <div class="price" style="background-color: #00a65a">$<?php echo $result['cost'] ?><span ></span>
        </div>
      </div>
      <div class="entry-content">
        <ul>
            <li><?php echo $result['features'] ?></li>
        </ul>
      </div>
      <form action="updateuser.php?email=<?php  echo $_GET['email'];   ?>" method="post">
        <!-- https://www.sandbox.paypal.com/cgi-bin/webscr -->
        <div class="btn btn2">
         <input id="paypal1" type="submit" value="Book Now" style="background-color: #00a65a">
       </div>
       <input type="hidden" name="cmd" value="_cart">
       <input type="hidden" name="upload" value="1">
       <input type="hidden" name="business" value="stayfit@gmail.com">

       <input type="hidden" name="item_name_1" value="<?php echo $result['name'] ?>">
       <input type="hidden" name="amount_1" value="<?php echo $result['cost'] ?>">
       <input type="hidden" name="quantity_1" value="1">

       <input type="hidden" value="http://333c0bd743a7.ngrok.io/final/dummyregister.php?email=<?php  echo $_GET['email'];?>" name="return">
       <input type="hidden" value="2" name="rm"> 
     </form>
   </div>
 </div>
<?php }  ?>

</div>
</body>
</html>