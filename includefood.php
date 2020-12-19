<?php
error_reporting(0);
include_once "fwListTemplate.php";
// include_once "sample.php";

$con    =   mysqli_connect('localhost','root','','admindb');
$query="SELECT * FROM FOODTABLE";
$data=mysqli_query($con,$query);
$total = mysqli_num_rows($data);

echo "<main id='form' role='main'  class='col-md-9 ml-sm-auto col-lg-10 px-md-4'>
<div class='d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom'>
<h1 class='h2'>Dashboard</h1>
</div>
<div>
<p style='font-family:cursive;font-size:30px;' > Total available food recommendations= $total</p>
<table id='foodtable' >
<tr>
<th style='position: sticky;top: 60px;z-index: 10;' >SNO</th>
<th style='position: sticky;top: 60px;z-index: 10;'>Image</th>
<th style='position: sticky;top: 60px;z-index: 10;'>Name</th>
<th style='position: sticky;top: 60px;z-index: 10;'>Description</th>
<th style='position: sticky;top: 60px;z-index: 10;'>Category</th>
<th style='position: sticky;top: 60px;z-index: 10;'>Weight</th>
<th style='position: sticky;top: 60px;z-index: 10;'>Actions<th>
</tr>
</div>
</main>";

$counter = 0;
while($result=mysqli_fetch_assoc($data)){
  
  echo"
  <tr>
  <td> ".++$counter." </td>
  <td> <a href='data:".$result['large_type'].";base64,".base64_encode($result['large_pic'])."' data-lightbox='mygallery' data-title='".$result['name']."'>
  <img src='data:".$result['small_type'].";base64,".base64_encode($result['small_pic'])."' style='max-width:30px;height: 20px' class='center'  </a></td> 
  <td><p style='max-width:55px;'> ".$result['name']." </p></td>
  <td><p style='max-width:250px;'>".$result['description']."</p></td>
  <td> ".$result['category']." </td>
  <td> ".$result['weight']." </td>
  <td><button type='button' class='btn btn-primary clickyButton' data-toggle='modal' data-id1='".$result['id']."' data-name='".$result['name']."' data-desc='".$result['description']."' data-weight='".$result['weight']."' data-category='".$result['category']."' data-target='#UpdateFoodPopup'  id='edit' style='padding:2px;'><img src='images/edit.svg' >Edit</button>
  <button type='button' class='btn btn-primary deleteButton' id='delete' data-toggle='modal' data-target='#modalConfirmDelete' data-id2='".$result['id']."' ><img src='images/trash.svg' >Delete</button></td>
  </tr>
  <html>
  <body>

  <div class='modal fade' id='UpdateFoodPopup' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'
  aria-hidden='true'>
  <div class='modal-dialog modal-xs' role='document'>
  <div class='modal-content'>
  <div class='modal-header' style='background-color: #5bc0de'>
  <h4 class='modal-title' id='myModalLabel'>Update Food Details</h4>
  <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
  <span aria-hidden='true'>×</span>
  </button>
  </div>
  <form action='editfood.php' method='POST' enctype='multipart/form-data'>

  <div class='modal-body'>
  <div class='form-group form-inline'>
  <label for='foodname' style='color:black;display:none'><b>ID:</b></label>
  <input type='text' class='form-control' name='id1' id='id1' style='width:20%;display:none' readonly>
  </div>
  <div class='form-group'>
  <label for='foodname' style='color: black'><b>Name:</b></label>
  <input type='text' class='form-control' name='name' id='foodid'  style=' width: 90%'>
  </div>

  <div class='form-group'>
  <label for='description' style='color: black'><b>Description:</b></label>
  <textarea class='form-control' name='description' id='descid' style=' width: 90%;'>
  </textarea>
  </div>

  <div class='form-group'>
  <label for='weight' style='color: black'><b>Weight:</b></label>
  <select class='form-control'  name='weight' id='weightid'  style=' width: 90%;' onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();'>
  <option value='main'>Select Weight</option>
  <option value='45'>45</option>
  <option value='46'>46</option>
  <option value='47'>47</option>
  <option value='48'>48</option>
  <option value='49'>49</option>
  <option value='50'>50</option>
  <option value='51'>51</option>
  <option value='52'>52</option>
  <option value='53'>53</option>
  <option value='54'>54</option>
  <option value='55'>55</option>
  <option value='56'>56</option>
  <option value='57'>57</option>
  <option value='58'>58</option>
  <option value='59'>59</option>
  <option value='60'>60</option>
  <option value='61'>61</option>
  <option value='62'>62</option>
  <option value='63'>63</option>
  <option value='64'>64</option>
  <option value='65'>65</option>
  <option value='66'>66</option>
  <option value='67'>67</option>
  <option value='68'>68</option>
  <option value='69'>69</option>
  <option value='70'>70</option>
  <option value='71'>71</option>
  <option value='72'>72</option>
  <option value='73'>73</option>
  <option value='74'>74</option>
  <option value='75'>75</option>
  <option value='76'>76</option>
  <option value='77'>77</option>
  <option value='78'>78</option>
  <option value='79'>79</option>
  <option value='80'>80</option>
  <option value='81'>81</option>
  <option value='82'>82</option>
  <option value='83'>83</option>
  <option value='84'>84</option>
  <option value='85'>85</option>
  <option value='86'>86</option>
  <option value='87'>87</option>
  <option value='88'>88</option>
  <option value='89'>89</option>
  <option value='90'>90</option>
  <option value='91'>91</option>
  <option value='92'>92</option>
  <option value='93'>93</option>
  <option value='94'>94</option>
  <option value='95'>95</option>
  <option value='96'>96</option>
  <option value='97'>97</option>
  <option value='98'>98</option>
  <option value='99'>99</option>
  <option value='100'>100</option>
  <option value='101'>101</option>
  <option value='102'>102</option>
  <option value='103'>103</option>
  <option value='104'>104</option>
  <option value='105'>105</option>
  <option value='106'>106</option>
  <option value='107'>107</option>
  <option value='108'>108</option>
  <option value='109'>109</option>
  <option value='110'>110</option>
  </select>
  <label for='category' style='color: black;'><b>Category:</b></label>
  <select class='form-control'  name='category' id='categoryid' onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();' style='width: 90%;' >
  <option value='main'>Select Category</option>
  <option value='breakfast'>breakfast</option>
  <option value='lunch'>lunch</option>
  <option value='dinner'>dinner</option>
  </select>
  </div>

  <div class='form-group '>
  <img src='images/upload.svg'>
  <label for='file1' style='color: black'><b>Upload small picture:</b></label>
  <input type='file' class='form-control-file' name='file1' accept='image/png, image/jpeg'>
  <img src='images/upload.svg' style='position: absolute;left: 50%;top: 80%;'>
  <label for='file2' style='color: black;position: absolute;left: 56%;top: 80%'><b>Upload large picture:</b></label>
  <input type='file' class='form-control-file' name='file2' accept='image/png, image/jpeg' style='position: absolute;left: 50%;top: 87%'>
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
  <form action='deleteFood.php' method='post'>
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
    var desc = $(this).data('desc');
    var weight = $(this).data('weight');  
    var category = $(this).data('category');  

    $('#id1').val(id1);
    $('#foodid').val(name);
    $('#weightid').val(weight);
    $('#categoryid').val(category);
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