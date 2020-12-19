<?php
include_once "includedashboard.php";
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Dashboard</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="css/dashboard.css" rel="stylesheet">


</head>
<body>
  <div class="container-fluid" >
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="sidebar-sticky pt-3">
          <ul class="nav flex-column">
            <li>
              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span style="color: white">DASHBOARD</span>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="dashboard.php">
                  <span data-feather="home"></span>
                  <label style="font-size: 20px;">Dashboard</label>
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="modal" href="#WorkoutsPopup">
                  <span data-feather="plus"></span>
                  <label style="font-size: 20px;">Add Workouts</label>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="modal" href="#FoodPopup" >
                  <span data-feather="plus"></span>
                  <label style="font-size: 20px;">Add Food</label>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="modal" href="#tutorial" >
                  <span data-feather="plus"></span>
                  <label style="font-size: 20px;">Add Tutorials</label>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="modal" href="#plan" >
                  <span data-feather="plus"></span>
                  <label style="font-size: 20px;">Add Plan</label>
                </a>
              </li>
              <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCart">Launch modal</button> -->
              <!-- href="javascript:hide()" -->
              <li class="nav-item">
                <a class="nav-link" href="includeworkouts.php" >
                  <span data-feather="list"></span>
                  <label style="font-size: 20px;" >Workouts List</label>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="includefood.php">
                  <span data-feather="list"></span>
                  <label style="font-size: 20px;">Food List</label>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="includetutorials.php">
                  <span data-feather="list"></span>
                  <label style="font-size: 20px;">Tutorials List</label>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="includeusers.php">
                  <span data-feather="users"></span>
                  <label style="font-size: 20px;">Users List</label>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="includeplans.php">
                  <span data-feather="list"></span>
                  <label style="font-size: 20px;">Plans List</label>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="includefeedback.php">
                  <span data-feather="bell"></span>
                  <label style="font-size: 20px;">User Feedback</label>
                </a>
              </li>
            </ul>

          </div>
        </nav>

        <div class="modal fade" id="plan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <!--Header-->
            <div class="modal-header" style="background-color: #5bc0de">
              <h4 class="modal-title" id="myModalLabel">Add Subscription plan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <!--Body-->
            <form action="insertplan.php" method="POST" enctype="multipart/form-data">

              <div class="modal-body">
                <div class="form-group">
                  <label for="desc" style="color: black"><b>Name:</b></label>
                  <input type="text" class="form-control" name="name"  placeholder="Enter Name of the plan" style=" width: 90%;">
                </div>

                <div class="form-group">
                  <label for="desc" style="color: black"><b>Cost:</b></label>
                  <input type="text" class="form-control" name="cost"  placeholder="Enter price of the plan" style=" width: 90%;">
                </div>

                <div class="form-group">
                  <label for="link" style="color: black"><b>Features:</b></label>
                  <input type="text" class="form-control" name="features" placeholder="Enter features in html format" style=" width: 90%;">
                </div>

                <div class="form-group">
                  <label for="link" style="color: black"><b>Redirect Link:</b></label>
                  <input type="text" class="form-control" name="link" placeholder="Enter Link" style=" width: 90%;">
                </div>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal" id="close">Close</button>
                <button  class="btn btn-primary"  name="id" id="id">ADD</button>
              </div>
            </form>
          </div>
        </div>
      </div>

        <div class="modal fade" id="tutorial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <!--Header-->
            <div class="modal-header" style="background-color: #5bc0de">
              <h4 class="modal-title" id="myModalLabel">Add Tutorial</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <!--Body-->
            <form action="inserttutorial.php" method="POST" enctype="multipart/form-data">

              <div class="modal-body">
                <div class="form-group">
                  <label for="desc" style="color: black"><b>Description:</b></label>
                  <input type="text" class="form-control" name="desc"  placeholder="Enter Description of tutorial" style=" width: 90%;">
                </div>

                <div class="form-group">
                  <label for="link" style="color: black"><b>Embedded Video:</b></label>
                  <input type="text" class="form-control" name="link" placeholder="Enter embedded link" style=" width: 90%;">
                </div>

                <div class="form-group ">
                  <img src="images/upload.svg">
                  <label for="file1" style="color: black"><b>Upload picture:</b></label>
                  <input type="file" class="form-control-file" name="file1" accept="image/png, image/jpeg">
                </div>

              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal" id="close">Close</button>
                <button  class="btn btn-primary"  name="id" id="id">ADD</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="modal fade" id="FoodPopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header" style="background-color: #5bc0de">
            <h4 class="modal-title" id="myModalLabel">Add Food</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <!--Body-->
          <form action="insertfood.php" method="POST" enctype="multipart/form-data">

            <div class="modal-body">
              <div class="form-group">
                <label for="foodname" style="color: black"><b>Name:</b></label>
                <input type="text" class="form-control" name="foodname"  placeholder="Enter name of the food" style=" width: 90%;">
              </div>

              <div class="form-group">
                <label for="description" style="color: black"><b>Description:</b></label>
                <input type="text" class="form-control" name="description" placeholder="Enter info about the food" style=" width: 90%;">
              </div>

              <div class="form-group">
                <label for="weight" style="color: black"><b>Weight:</b></label>
                <!-- <input type="text" class="form-control" id="weight" placeholder="Select weight"> -->
                <select class="form-control"  name="weight" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();' style=" width: 90%;">
                  <option value="main">Select Weight</option>
              <!-- <option value="35">35</option>
              <option value="36">36</option>
              <option value="37">37</option>
              <option value="38">38</option>
              <option value="39">39</option>
              <option value="40">40</option>
              <option value="41">41</option>
              <option value="42">42</option>
              <option value="43">43</option>
              <option value="44">44</option> -->
              <option value="45">45</option>
              <option value="46">46</option>
              <option value="47">47</option>
              <option value="48">48</option>
              <option value="49">49</option>
              <option value="50">50</option>
              <option value="51">51</option>
              <option value="52">52</option>
              <option value="53">53</option>
              <option value="54">54</option>
              <option value="55">55</option>
              <option value="56">56</option>
              <option value="57">57</option>
              <option value="58">58</option>
              <option value="59">59</option>
              <option value="60">60</option>
              <option value="61">61</option>
              <option value="62">62</option>
              <option value="63">63</option>
              <option value="64">64</option>
              <option value="65">65</option>
              <option value="66">66</option>
              <option value="67">67</option>
              <option value="68">68</option>
              <option value="69">69</option>
              <option value="70">70</option>
              <option value="71">71</option>
              <option value="72">72</option>
              <option value="73">73</option>
              <option value="74">74</option>
              <option value="75">75</option>
              <option value="76">76</option>
              <option value="77">77</option>
              <option value="78">78</option>
              <option value="79">79</option>
              <option value="80">80</option>
              <option value="81">81</option>
              <option value="82">82</option>
              <option value="83">83</option>
              <option value="84">84</option>
              <option value="85">85</option>
              <option value="86">86</option>
              <option value="87">87</option>
              <option value="88">88</option>
              <option value="89">89</option>
              <option value="90">90</option>
              <option value="91">91</option>
              <option value="92">92</option>
              <option value="93">93</option>
              <option value="94">94</option>
              <option value="95">95</option>
              <option value="96">96</option>
              <option value="97">97</option>
              <option value="98">98</option>
              <option value="99">99</option>
              <option value="100">100</option>
              <option value="101">101</option>
              <option value="102">102</option>
              <option value="103">103</option>
              <option value="104">104</option>
              <option value="105">105</option>
              <option value="106">106</option>
              <option value="107">107</option>
              <option value="108">108</option>
              <option value="109">109</option>
              <option value="110">110</option>
            </select>
            <label for="category" style="color: black;"><b>Category:</b></label>
            <select class="form-control"  name="category" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();' style=" width: 90%;">
              <option value="main">Select Category</option>
              <option value="breakfast">breakfast</option>
              <option value="lunch">lunch</option>
              <option value="dinner">dinner</option>
            </select>
          </div>

          <div class="form-group ">
            <img src="images/upload.svg">
            <label for="file1" style="color: black"><b>Upload small picture:</b></label>
            <input type="file" class="form-control-file" name="file1" accept="image/png, image/jpeg">
            <img src="images/upload.svg" style="position: absolute;left: 50%;top: 79%;">
            <label for="largefile" style="color: black;position: absolute;left: 56%;top: 79%"><b>Upload large picture:</b></label>
            <input type="file" class="form-control-file" name="largefile" accept="image/png, image/jpeg" style="position: absolute;left: 50%;top: 85%">
          </div>

        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-outline-primary" data-dismiss="modal" id="close">Close</button>
          <button  class="btn btn-primary"  name="id" id="id">ADD</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="WorkoutsPopup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <!--Header-->
    <div class="modal-header" style="background-color: #5bc0de">
      <h4 class="modal-title" id="myModalLabel">Add Workouts</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
    </div>
    <!--Body-->
    <form action="insertWorkouts.php" method="POST" enctype="multipart/form-data">

      <div class="modal-body" >
        <div class="form-group">
          <label for="workoutname" style="color: black"><b>Name:</b></label>
          <input type="text" class="form-control" name="workoutname"  placeholder="Enter name of the workout" style=" width: 90%;">
        </div>

        <div class="form-group">
          <label for="description" style="color: black"><b>Description:</b></label>
          <input type="text" class="form-control" name="description" placeholder="Enter info about the workout" style=" width: 90%;">
        </div>

        <div class="form-group">
          <label for="weight" style="color: black;"><b>Weight:</b></label>
          <!-- <input type="text" class="form-control" id="weight" placeholder="Select weight"> -->
          <select class="form-control"  name="weight" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();' style=" width: 90%;">
            <option value="main">Select Weight</option>
              <!-- <option value="35">35</option>
              <option value="36">36</option>
              <option value="37">37</option>
              <option value="38">38</option>
              <option value="39">39</option>
              <option value="40">40</option>
              <option value="41">41</option>
              <option value="42">42</option>
              <option value="43">43</option>
              <option value="44">44</option> -->
              <option value="45">45</option>
              <option value="46">46</option>
              <option value="47">47</option>
              <option value="48">48</option>
              <option value="49">49</option>
              <option value="50">50</option>
              <option value="51">51</option>
              <option value="52">52</option>
              <option value="53">53</option>
              <option value="54">54</option>
              <option value="55">55</option>
              <option value="56">56</option>
              <option value="57">57</option>
              <option value="58">58</option>
              <option value="59">59</option>
              <option value="60">60</option>
              <option value="61">61</option>
              <option value="62">62</option>
              <option value="63">63</option>
              <option value="64">64</option>
              <option value="65">65</option>
              <option value="66">66</option>
              <option value="67">67</option>
              <option value="68">68</option>
              <option value="69">69</option>
              <option value="70">70</option>
              <option value="71">71</option>
              <option value="72">72</option>
              <option value="73">73</option>
              <option value="74">74</option>
              <option value="75">75</option>
              <option value="76">76</option>
              <option value="77">77</option>
              <option value="78">78</option>
              <option value="79">79</option>
              <option value="80">80</option>
              <option value="81">81</option>
              <option value="82">82</option>
              <option value="83">83</option>
              <option value="84">84</option>
              <option value="85">85</option>
              <option value="86">86</option>
              <option value="87">87</option>
              <option value="88">88</option>
              <option value="89">89</option>
              <option value="90">90</option>
              <option value="91">91</option>
              <option value="92">92</option>
              <option value="93">93</option>
              <option value="94">94</option>
              <option value="95">95</option>
              <option value="96">96</option>
              <option value="97">97</option>
              <option value="98">98</option>
              <option value="99">99</option>
              <option value="100">100</option>
              <option value="101">101</option>
              <option value="102">102</option>
              <option value="103">103</option>
              <option value="104">104</option>
              <option value="105">105</option>
              <option value="106">106</option>
              <option value="107">107</option>
              <option value="108">108</option>
              <option value="109">109</option>
              <option value="110">110</option>
            </select>
            <label for="category" style="color: black;"><b>Category:</b></label>
            <select class="form-control"  name="category" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();' style=" width: 90%;">
              <option value="main">Select Category</option>
              <option value="neck">neck</option>
              <option value="shoulder">shoulder</option>
              <option value="upperarms">upperarms</option>
              <option value="forearms">forearms</option>
              <option value="back">back</option>
              <option value="chest">chest</option>
              <option value="waist">waist</option>
              <option value="hips">hips</option>
              <option value="thighs">thighs</option>
              <option value="calves">calves</option>
              <option value="other">other</option>
            </select>
          </div>

            <!--  <div class="form-group">
              <label for="category" style="color: black;position: absolute;left: 50%;top: 45%;"><b>Category:</b></label> -->
              <!-- style="color: black;position: absolute;left: 50%;top: 50%;" -->
              <!-- <select class="form-control"  name="weight" onfocus='this.size=5;' onblur='this.size=1;' onchange='this.size=1; this.blur();' style=" width: 35%;position: relative;left: 50%;top: 10%;"> -->
                <!-- style=" width: 35%;position: absolute;left: 50%;top: 60%;" -->
         <!--          <option value="main">Select Weight</option>
                  <option value="neck">Neck</option>
                  <option value="shoulder">Shoulder</option>
                  <option value="upperarms">Upper Arms</option>
                  <option value="forearms">Forearms</option>
                  <option value="back">Back</option>
                  <option value="chest">Chest</option>
                  <option value="waist">Waist</option>
                  <option value="hips">Hips</option>
                  <option value="thighs">Thighs</option>
                  <option value="calves">Calves</option>
                  <option value="other">Other</option>
                </select>
              </div> -->

              <div class="form-group ">
                <img src="images/upload.svg">
                <label for="file1" style="color: black"><b>Upload small picture:</b></label>
                <input type="file" class="form-control-file" name="file1" accept="image/png, image/jpeg">
                <img src="images/upload.svg" style="position: absolute;left: 50%;top: 79%;">
                <label for="largefile" style="color: black;position: absolute;left: 56%;top: 79%"><b>Upload GIF:</b></label>
                <input type="file" class="form-control-file" name="largefile" style="position: absolute;left: 50%;top: 87%">
              </div>

            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-outline-primary" data-dismiss="modal" id="close">Close</button>
              <button  class="btn btn-primary"  name="add" id="add">ADD</button>
            </div>
          </form>
        </div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="bootstrap/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="js/dashboard.js"></script></body>
    </html>
