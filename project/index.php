<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="materialize/sass/materialize.css"  media="screen,projection"/>
     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <!-- for icon -->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- myStyleSheet -->
     <link type="text/css" rel="stylesheet" href="css/myStyleSheet.css"  media="screen,projection"/>
     <!-- dateTime -->
     <!-- <link href = "jqueryUI/jquery-ui.min.css" rel="stylesheet"> -->
     <!-- <link href = "datetime/jquery-ui-timepicker-addon.css" rel="stylesheet"> -->
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>



  <body >
    <?php include 'database.php';?>

    <!-- whole nav bar: top and left -->
    <nav class="deep-purple darken-2">
       <!-- top nav -->
       <a href="#" class="brand-logo .center" id="myLogo">HDV</a>
       <ul id="nav-mobile" class="right ">
         <li id="iconList"><i class="small material-icons" id="setIcon">settings</i></li>
       </ul>
       <!-- left nav -->
        <ul id="slide-out" class="side-nav fixed">
          <!-- return all data -->
          <form method = "post" id="myForm">
            <!-- building -->
            <li class="no-padding">
              <ul class="collapsible collapsible-accordion">
                <li>
                  <a class="collapsible-header" id="building">Building<i class="mdi-navigation-arrow-drop-down"></i></a>
                  <div class="collapsible-body">
                    <ul class="subGroup">
                      <li>
                      <input class="with-gap" name="bn" type="radio" id="test1" value="1"/>
                      <label for="test1">One</label>
                      </li>
                      <li>
                        <input class="with-gap" name="bn" type="radio" id="test2" value="2"/>
                        <label for="test2">Two</label>
                      </li>
                      <li>
                        <input class="with-gap" name="bn" type="radio" id="test3"  value="3"/>
                        <label for="test3">Three</label>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </li>

            <!-- room -->
            <li class="no-padding">
              <ul class="collapsible collapsible-accordion">
                <li>
                  <a class="collapsible-header" id="room">Room<i class="mdi-navigation-arrow-drop-down"></i></a>
                  <div class="collapsible-body">
                    <ul class="subGroup">
                      <li>
                      <input class="with-gap" name="rn" type="radio" id="rn1" value="1"/>
                      <label for="rn1">One</label>
                      </li>
                      <li>
                        <input class="with-gap" name="rn" type="radio" id="rn2" value="2"/>
                        <label for="rn2">Two</label>
                      </li>
                      <li>
                        <input class="with-gap" name="rn" type="radio" id="rn3"  value="3"/>
                        <label for="rn3">Three</label>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </li>

            <!-- Kinect  -->
            <li class="no-padding">
              <ul class="collapsible collapsible-accordion">
                <li>
                  <a class="collapsible-header" id="kinect">Kinect<i class="mdi-navigation-arrow-drop-down"></i></a>
                  <div class="collapsible-body">
                    <ul class="subGroup">
                      <li>
                      <input class="with-gap" name="kn" type="radio" id="kn1" value="1"/>
                      <label for="kn1">One</label>
                      </li>
                      <li>
                        <input class="with-gap" name="kn" type="radio" id="kn2" value="2"/>
                        <label for="kn2">Two</label>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </li>


            <!-- time -->
            <li class="no-padding">
              <ul class="collapsible collapsible-accordion">
                <li>
                  <a class="collapsible-header" id="time">TimeRange<i class="mdi-navigation-arrow-drop-down"></i></a>
                  <div class="collapsible-body">
                    <ul class="subGroup">
                      <!-- From -->
                      <li>
                        <div class="input-field">
                          <input placeholder="Date" name="fromDate" id="fromDate" type="text" class="datepicker">
                          <label for="fromInput">From: </label>
                        </div>
                      </li>

                      <li>
                        <!-- <div class="input-field"> -->
                          <input placeholder="Time" name="fromTime" id="fromTime" type="time" step="1" class="timePicker" style ="width:80%;">
                          <!-- <label for="fromInput">From: </label> -->
                        <!-- </div> -->
                      </li>
                      <!-- To -->
                      <li>
                        <div class="input-field">
                          <input placeholder="Date" name="toDate" id="toInput" type="text" class="datepicker">
                          <label for="fromInput">To: </label>
                        </div>
                      </li>

                      <li>
                        <!-- <div class="input-field"> -->
                          <input placeholder="Time" name="toTime" id="toTime" type="time" step="1" class="timePicker" style ="width:80%;">
                          <!-- <label for="fromInput">From: </label> -->
                        <!-- </div> -->
                      </li>

                    </ul>
                  </div>
                </li>
              </ul>
            </li>



            <!-- search -->
            <button class="btn waves-effect waves-light" type="submit" name="mySubmit" id="search">Search
              <i class="material-icons right">send</i>
            </button>
          </form>
        </ul>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    </nav>

    <div id = "contentWrapper">
      <div class="container">
        <!-- offset if we use id the offset will not working -->
        <div class="row">
          <!-- <video width="320" height="240" autoplay>
            <source src="movie.mp4" type="video/mp4">
            <source src="movie.ogg" type="video/ogg">
          </video> -->
          <div class="col s12 m8 l8 videoFrame">
            <video width="100%" height="100%"  controls poster="" id="myVideo">
              <source src="./video/glacier.mp4" type="video/mp4" id="source">
              <!-- <source src="movie.ogg" type="video/ogg"> -->
            </video>
          </div>
          <div class="col s12 m4 l4 videoList" id="videoListId">
            <p class="flow-text">s12 m4 l4</p>
            <p class="flow-text">s12 m4 l4</p>
            <p class="flow-text">s12 m4 l4</p>
            <p class="flow-text">s12 m4 l4</p>
            <p class="flow-text">s12 m4 l4</p>
            <p class="flow-text">s12 m4 l4</p>
            <p class="flow-text">s12 m4 l4</p>
            <p class="flow-text">s12 m4 l4</p>
            <p class="flow-text">s12 m4 l4</p>
            <p class="flow-text">s12 m4 l4</p>
            <p class="flow-text">s12 m4 l4</p>
            <p class="flow-text">s12 m4 l4</p>
            <p class="flow-text">s12 m4 l4</p>
            <p class="flow-text">s12 m4 l4</p>
            <p class="flow-text">s12 m4 l4</p>
            <p class="flow-text">s12 m4 l4</p>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m8 l8 evetFrame"><span class="flow-text">s12 m8 l8</span></div>
          <div class="col s12 m4 l4 evetList"><span class="flow-text">s12 m4 l4</span></div>
        </div>
        </div>
      </div>
    </div>


    <!--Import jQuery before materialize.js-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="jqueryUI/jquery-ui.js"></script>
    <!-- dateTime -->
    <!-- <script type="text/javascript" src="datetime/jquery-ui-timepicker-addon.js"></script> -->
    <!-- <script type='text/javascript' src='datetime/jquery-ui-sliderAccess.js'></script> -->
    <!-- materialize -->
    <script type="text/javascript" src="materialize/js/bin/materialize.min.js"></script>
    <script type="text/javascript">var qVResult =<?php echo json_encode($qVResult) ?>;</script>
    <script src="js/myScript.js"></script>



  </body>
</html>
