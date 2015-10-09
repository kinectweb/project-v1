<?php
session_start();
// print_r($_SESSION['id']);
  if($_SESSION['id'] == null){
  header('Location: LogIn.php');
}
?>
<!doctype html>
<html>
<head>
  <title>SearchwithVideo</title>

  <meta charset="utf-8" />
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js" ></script>


  <!-- scroll bar -->

    <link rel="stylesheet" href="plugin/style.css" />
    <link rel="stylesheet" href="plugin/prettify.css" />

    <script src="plugin/prettify.js"></script>
    <script src="plugin/jquery.js"></script>
    <script src="plugin/jquery.scrollbar.js"></script>

    <script src="plugin/scollerjsbase.js"></script>
    <link rel="stylesheet" href="plugin/cssbase.css" />
    <link rel="stylesheet" href="plugin/maccss.css" />

    <!-- DateTimePicker -->

    <!--<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/themes/hot-sneaks/jquery-ui.css" rel="stylesheet">-->
    <link href="jquery-ui.css" rel="stylesheet">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
    <link href='datetime/jquery-ui-timepicker-addon.css' rel='stylesheet'>
    <script type="text/javascript" src="datetime/jquery-ui-timepicker-addon.js"></script>
    <script type='text/javascript' src='datetime/jquery-ui-sliderAccess.js'></script>

    <!-- dropdown -->

    <link href='dropdown/style.css' rel='stylesheet'>
    <script type="text/javascript" src="dropdown/function.js"></script>



</head>

    <style>
    body{
      font-size:15px;
      /*background-color:#EAEAEA;*/
      background: url(background.jpg);
      background-repeat: no-repeat;
    }

    #topbarborder{
      width:1400px;
      height:50px;
      /*margin-left: 3rem;*/
      /*background-color:#FEFEFE;*/
    }

    #logout{
     float:left;
     margin-right:5%;
     /*margin-top:12px;*/
     color:white;
     background: url(./button/logout.jpg);
     background-repeat: no-repeat;
     width: 7rem;
     height: 100%;
     cursor: pointer;
    }

    #logout:hover{
      background: url(./button/logoutafterpressed.jpg);
      background-repeat: no-repeat;
    }


    #topbar{
       padding-top:10px;
       height:50px;
       /*width:895px;*/
       /*background-color:#3D3D45;*/
       /*padding:0;*/
       /*margin-top:20px;*/
       /*margin-left:auto;
       margin-right:auto;*/
       margin-left: 14rem;
       float:left;
    }

    #topbar label{
      color:white;

    }

    #topbar input{
      margin-right:10px;
      border-radius: 6px;
    }

    #topbar select{
      margin-right:10px;
      border-radius: 6px;
      border:1px solid transparent;
    }

    #topbar input[type="number"]{
      width:50px;
      height:20px;
      border:1px solid transparent;

    }

    #topbar input[type="text"]{
      height:20px;
      border:1px solid transparent;

    }

    #topbar input[type='submit']{
      margin-right:20px;
      /*background-color:#198d98;
      border: 3px outset #198d98;*/
      font-size:15px;
      width:7rem;
      color:white;
      /*background: url(./button/search.jpg);
      background-repeat: no-repeat;*/
      /*border: none;*/
      /*height:50px;*/
      /*padding-bottom: 2rem;*/
      width: 7rem;
      height: 30px;
      background: -webkit-gradient(linear, left top, left bottom,
                  color-stop(0%,rgb(134,42,190)),
                  color-stop(60%,rgb(179,110,216)),
                  color-stop(100%,rgb(179,110,216)));
      border-radius: 10px;
      border: none;
      box-shadow: 0px 0px 1px rgb(20,20,20), 0px -2px 4px rgb(40,40,40) inset;
    }

/*    #conditionpart{

    }

    #searchpart{

    }
*/

    hr {
      border: 0; border-top: 2px solid #282830;
      margin-top:30px;
      margin-bottom:30px;
    }

    #roomlabel{
      margin-left:10px;
    }



    /*video player*/

      #video_player {
        margin-top:40px;
        display: table;
        line-height: 0;
        /*margin-left:auto;
        margin-right:auto;*/
        margin-left: 14rem;

        /*font-size: 0;*/
        /*background: #000;*/
        width:1101px;
        /*height:100px;*/
      }

      #video_player video{
        background-color: #282830;
        width: 100%;
        height:409px;
      }

      #video_player video,
      #video_player figcaption {
        display: table-cell;
        vertical-align: top;
      }

      /*display table liake a table*/
      /*display table-cell = <td>*/

      #video_player figcaption {
          /*background-color:red;*/
          width:501px;
          /*width:25%;*/
        }

      #video_player figcaption a {
        display: block;
        opacity: .5;
        transition: 0.5s opacity;
        /*background-color:red;*/
      }

      #video_player figcaption a:hover {
        opacity: 1;
        }

      #video_player figcaption a img{
        width:100%;
        height: 120px;
      }

      #videoScroll{
        width:200px;
        /*max-height: 570px;*/
      }

      #videoScroll a{
        color: purple;
      }


        #videoDemo{
        border : none;
        width:201px;
        height:357px;
        float:left;
        /*background-color:#F1F1F1;*/
        /*padding-right:px;*/
        border-right:1px solid gray;
        background-color:#FEFEFE;
        }


      /*date time picker*/
        div.ui-datepicker{
          font-size:12px;
        }

        /*event content*/
        #eventcontent{
          width:900px;
          /*background-color:#F1F1F1;*/
          background-color:#FEFEFE;
          height:130px;
          margin-left:auto;
          margin-right:auto;
        }

        #eventDemo{
          width:850px;
          height:110px;
          border : none;
          position:relative;
          bottom:10px;
          /*margin-bottom:30px;*/
        }

        #eventScroll{
          width:850px;
          height:110px;
          position:relative;
          bottom:10px;
          /*margin-bottom:30px;*/
        }

        /*event content2*/


        #eventDemo2{
          border : none;
          width:291px;
          height:357px;
          /*float:left;*/
          /*background-color:#F1F1F1;*/
          background-color:#FEFEFE;
        }

        #eventScroll2{
          width:290px;
        }

        #accordion{
            width:260px;
        }
        #container{
          /*width:100%;*/
          margin-left:auto;
          margin-right:auto;
        }

        .mutliSelect{
          width: 7rem;
        }

        #downmenu{
          width: 7rem;
        }


    </style>






    <body>

      <?php
            // $from = $_POST["year"].'-'.$_POST["month"].'-'.$_POST["date"].' '.$_POST["hour"].':'.$_POST["minute"].':'.$_POST["second"] ;

            // $to = $_POST["year2"].'-'.$_POST["month2"].'-'.$_POST["date2"].' '.$_POST["hour2"].':'.$_POST["minute2"].':'.$_POST["second2"] ;
            $from = $_POST['from'];
            $to = $_POST['to'];
            $room = $_POST['room'];
            $kinect =$_POST['kinect'];
            $functionType = $_POST['functionType'];
            $pathResult= array();
            $eventResult= array();
            $activityResult= array();

            $link = mysqli_connect("129.105.36.214", "root", "123456", "kinectdata");

            if (mysqli_connect_error()){

                die("Could not connect to Database");
            }

            // event table
            $query2 = "SELECT event,start_time,end_time,RoomNumber,kinect_number FROM KinectEvent
            WHERE start_time >= '$from'
            AND end_time <=  '$to'
            AND end_time != '0000-00-00 00:00:00'
            AND RoomNumber ='$room'";
            if($result2=mysqli_query($link,$query2)){
                while($row2 = mysqli_fetch_array($result2)){
                  array_push($eventResult,$row2);
                  // print_r($row2);
                }
                // print_r($row2);
            }else{
              echo "query not working";
            }

            // activity table
            $query3 = "SELECT activity,start_time,end_time,RoomNumber,kinect_number FROM KinectActivity
            WHERE start_time >= '$from'
            AND end_time <=  '$to'
            AND end_time != '0000-00-00 00:00:00'
            AND RoomNumber ='$room'";
            if($result3=mysqli_query($link,$query3)){
                while($row3 = mysqli_fetch_array($result3)){
                  array_push($eventResult,$row3);
                  // print_r($row2);
                }
                // print_r($row2);
            }else{
              echo "query not working2";
            }

              // -----------test -----------
            //  $a = '2015-02-23 07:59:00';
            //  $b ='2015-02-23 11:29:00';
             //
            //  $query = "SELECT FileName,VideoPath FROM webtest
            //  WHERE StartTime >= '$a'
            //  AND  EndTime <=  '$b'";


             // -----------test -----------
            //  if($functionType=="event"){
                // echo "event";
                //  $query = "SELECT RoomNumber,event,start_time,end_time FROM KinectEvent
                //  WHERE start_time >= '$from'
                //  AND end_time <=  '$to'
                //  AND end_time != '0000-00-00 00:00:00'
                //  AND RoomNumber ='$room'";
                //  if($result=mysqli_query($link,$query)){
                //      while($row = mysqli_fetch_array($result)){
                //       //  print_r($row);
                //        array_push($pathResult,$row);
                //      }
                //      function do_compare($item1, $item2) {
                //         $ts1 = strtotime($item1['start_time']);
                //         $ts2 = strtotime($item2['start_time']);
                //         return $ts1 - $ts2;
                //       }
                //       usort($pathResult, 'do_compare');
                //  }else{
                //    echo "query not working";
                //  }

            //  }else if($functionType =="video"){
                 $query = "SELECT * FROM KinectVideo
                 WHERE Start >= '$from'
                 AND end <=  '$to'
                 AND RoomID ='$room'
                 AND KinectID ='$kinect'";
                 if($result=mysqli_query($link,$query)){
                     while($row = mysqli_fetch_array($result)){
                       array_push($pathResult,$row);
                     }
                 }else{
                   echo "video query not working";
                 }
            //  }


      ?>

<div id ="container">
      <div id="topbarborder">
        <div id="topbar">
          <form method = "post">

            <dl class="dropdown">
               <dt>
               <a href="#">
                 <span class="hida" id="choice">Building</span>
                 <p class="multiSel"></p>
               </a>
               </dt>

               <dd>
                   <div class="mutliSelect">
                       <ul id="downmenu">
                           <li>
                               <input type="radio" value="event" name="functionType" id="building1"/> building1</li>
                           <li>
                               <input type="radio" value="video" name="functionType" id="building2"/> building2</li>
                           <li>
                               <input type="radio" value="video" name="functionType" id="building3"/> building3</li>
                       </ul>
                   </div>
               </dd>
           </dl>
           <!--<div id="conditionpart">-->
            <label id="roomlabel" for="room">Room</label>
            <!--<input  id="room" type="number" name="room" />-->
            <?php
             /* $con=mysqli_connect("129.105.36.214", "root", "123456", "kinectdata");
              if(mysqli_connect_error())
              {
                echo "fail to connect to database: " . mysqli_connect_error();
              }*/
              $result5 = mysqli_query($link, "SELECT RoomNumber FROM KinectActivity GROUP BY RoomNumber");
              echo "<select name='room'>";
              echo "<option value=''>Select</option>";
              while($drop=mysqli_fetch_array($result5))
              {
                echo "<option value='".$drop['RoomNumber']."'>" . $drop['RoomNumber'] . "</option>";
              }
              echo "</select>";
              ?>
            <label for="kinect">Kinect</label>
            <!--<input  id="kinect" type="number" name="kinect" />-->
            <?php
             /* $con=mysqli_connect("129.105.36.214", "root", "123456", "kinectdata");
              if(mysqli_connect_error())
              {
                echo "fail to connect to database: " . mysqli_connect_error();
              }*/
              $result6 = mysqli_query($link, "SELECT kinect_number FROM KinectActivity GROUP BY kinect_number");
              echo "<select name='kinect'>";
              echo "<option value=''>Select</option>";
              while($drop=mysqli_fetch_array($result6))
              {
                echo "<option value='".$drop['kinect_number']."'>" . $drop['kinect_number'] . "</option>";
              }
              echo "</select>";
              ?>
            <label for="from">From</label>
            <input  id="from" type="text" name="from" />
            <label for="from">To</label>
            <input  id="to" type="text" name="to" />
            <!--</div>-->
            <!--<div id="searchpart">-->
            <input id="searchbutton" type = "submit" name="submit" value="Search" >
            <!--</div>-->
          </form>
        </div>
        <div id="logout"></div>
      </div>



      <!-- <hr width="80%"> -->

      <figure id="video_player">
          <video controls poster="">
              <source src="" type="video/webm" id="source">
          </video>
          <figcaption>
            <table  width="100%">
              <tr>
                <td><div class="content">
                    <div class="demo " id="videoDemo">
                        <!-- div for scrollbar -->
                        <div class="scrollbar-inner" id="videoScroll">
                        </div>
                    </div>
                </div></td>
                <td><div class="content" >
                    <div class="demo " id="eventDemo2">
                        <div class="scrollbar-inner" id="eventScroll2">

                              <div id="accordion">
<!--
                                  <h3 id ="a1">SLEEP</h3>
                                  <div id ="SLEEP">
                                  </div>

                                  <h3>EAT</h3>
                                  <div id ="EAT">
                                  </div>

                                  <h3>WATCH</h3>
                                  <div id= "WATCH">
                                  </div>

                                  <h3>Do Nothing</h3>
                                  <div id="NONE">
                                  </div>

                                  <h3>Do Nothing</h3>
                                  <div id="NONE">
                                  </div>

                                  <h3>Do Nothing</h3>
                                  <div id="NONE">
                                  </div>

                                  <h3>Do Nothing</h3>
                                  <div id="NONE">
                                  </div>

                                  <h3>Do Nothing</h3>
                                  <div id="NONE">
                                  </div> -->



                              </div>

                        </div>
                    </div>
                </div></td>
              </tr>
            </table>
          </figcaption>
     </figure>

     <!-- <div class="content" id="eventcontent"> -->
          <!-- div for scrollbar -->
          <!-- <div class="demo" id="eventDemo">
             <div class="scrollbar-inner" id="eventScroll">
               <table border='1' width="100%" id="eventTable">
                 <tr>
                   <th>Room</th>
                   <th>Event</th>
                   <th>startTime</th>
                   <th>EndTime</th>
                  </tr>
                </table>
            </div>
          </div>
    </div> -->



</div>

    </body>



    <script  type="text/javascript">
    var functionType = <?php echo json_encode($functionType) ?>;
    var result = <?php echo json_encode($pathResult) ?>;
    var eventResult = <?php echo json_encode($eventResult) ?>;
    var activityResult = <?php echo json_encode($activityResult) ?>;
    var room =  <?php echo json_encode($room ) ?>;
    var kinect =  <?php echo json_encode($kinect) ?>;
    // console.log(room);
    // console.log(kinect);
    $('#accordion div').remove();
    $('#accordion h3').remove();

    // console.log(eventResult);
    // Scroll bar
      // if(functionType == "video"){
          // $("#videoScroll").html("<p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p>");
           for(i=0 ; i<result.length ;i++){
             $("#videoScroll").append("<p><a  href='" + 'http://129.105.36.214/webfile/testvideo/Upload/' +result[i].FilePath  + "'>" + result[i].Start+"</a></p>");
           }
          //  video player
          var video_player = document.getElementById("video_player");
          var links = video_player.getElementsByTagName('a');
            for (var i=0; i<links.length; i++) {
                links[i].onclick = handler;
              }
              function handler(e) {
                // prevent the full screen play video
                e.preventDefault();
                videotarget = this.getAttribute("href");
                filename = videotarget.substr(0, videotarget.lastIndexOf('.')) || videotarget;

                video = document.querySelector("#video_player video");

                video.removeAttribute("poster");
                source = document.querySelectorAll("#video_player video source");
                source.src = filename + ".mp4";

                // if(filename == "video/allen" || filename =="video/bb"){
                //   source.src = filename + ".mp4";
                // }
                document.getElementById("source").setAttribute("src",source.src ) ;
                video.load();
                video.play();
              }


              $('a').click(function(){
                  for(var j=0 ; j<events.length; j++){
                     $("#"+ events[j] + " p").remove();
                 }


                $.ajax({
                  url: 'secondSearch.php',
                  type: 'post',
                  data: { "from": $(this).html() , "room": room , "kinect":kinect},
                  // dataType:"json",
                  success: function(response) {
                    var data = JSON.parse(response);
                    console.log(data);

                      for(var i=0 ; i<data.length; i++){
                        for(var j=0 ; j<events.length; j++){

                         if(data[i][0] == events[j]){
                           $("#"+ events[j]).append("<p>" +data[i].start_time  + '-' + data[i].end_time+ "</p>" );
                         }
                       }
                      }
                    }
                    // dataType:"json"
                });
                // console.log(Date.parse($(this).html()));
              });
      // }else if(functionType == "event"){
      //     // $("#eventScroll").html("<p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p><p>SpanSpace</p>");
      //     // $("#eventScroll").append("<table border='1'><tr><th>Room</th><th>Event</th><th>startTime</th><th>EndTime</th></tr>");
      //     for(i=0 ; i<result.length ;i++){
      //       $("#eventTable").append("<tr>"+"<td>"+result[i].RoomNumber+"</td>"+"<td>"+result[i].event+"</td>"+"<td>"+result[i].start_time+"</td>"+"<td>"+result[i].end_time+"</td>"+"</tr>");
      //     }
      //     // $("#eventScroll").append("</table>");
      //   }

      // console.log(eventResult);

      var events = [];
      var tmpLength = events.length;
      var count = 0;
      for(var i=0 ; i<eventResult.length; i++){
        for(var j=0 ; j<=tmpLength; j++){
          if(eventResult[i][0] == events[j]){
            count = 1;
          }
        }
        if(count==0){
          events.push(eventResult[i][0]);
        }
        // console.log(events.length);
        tmpLength = events.length;
        count=0;
      }
      // console.log(events);

      for(i=0 ; i < events.length; i++){
        if(events[i] != ""){
          $("#accordion").append( "<h3 id =" + "h"+events[i] + ">"  + events[i] + "</h3>" + "<div id =" +  events[i]  +">" + "</div>");
        }else{
          $("#accordion").append( "<h3 id =" + "h"+ 'Do Nothing' + ">"  + 'Do Nothing' + "</h3>" + "<div id =" + ' Do Nothing ' +">" + "</div>");
        }
      }


      // accordion
        // for(i=0 ; i<eventResult.length; i++){
        //    if(eventResult[i].event == "SLEEP"){
        //      $("#SLEEP").append("<p>" +eventResult[i].start_time  + '-' + eventResult[i].end_time+ "</p>" );
        //    }else if(eventResult[i].event == "EAT"){
        //      $("#EAT").append("<p>" +eventResult[i].start_time  + '-' + eventResult[i].end_time+ "</p>" );
        //    }else if(eventResult[i].event == "WATCH"){
        //      $("#WATCH").append("<p>" +eventResult[i].start_time  + '-' + eventResult[i].end_time+ "</p>" );
        //    }else if(eventResult[i].event == "NONE"){
        //      $("#NONE").append("<p>" +eventResult[i].start_time  + '-' + eventResult[i].end_time+ "</p>" );
        //    }
        //
        // }
        // console.log(eventResult);
        for(var i=0 ; i<eventResult.length; i++){
          for(var j=0 ; j<events.length; j++){
           if(eventResult[i][0] == events[j]){
             $("#"+ events[j]).append("<p>" +eventResult[i].start_time  + '-' + eventResult[i].end_time+ "</p>" );
           }
         }
        }



      // console.log(activityResult);
      // var activities = [];
      // var tmpaLength = activities.length;
      // var count = 0;
      // for(var i=0 ; i<activityResult.length; i++){
      //   for(var j=0 ; j<=tmpaLength; j++){
      //     if(activityResult[i].activity == activities[j]){
      //       count = 1;
      //     }
      //   }
      //   if(count==0){
      //     activities.push(activityResult[i].activity);
      //   }
      //   tmpaLength = activities.length;
      //   count=0;
      // }
      //
      // console.log(activities);


    // initialize scrollbar
    jQuery(document).ready(function(){
        jQuery('.scrollbar-macosx').scrollbar();
    });



    // datetime picker
    $(document).ready(function(){

      var opt1={
         defaultDate: '2015-03-01',
          dateFormat: 'yy-mm-dd',
          showSecond: true,
          timeFormat: 'HH:mm:ss',
          addSliderAccess:true,
          sliderAccessArgs:{touchonly:false}};

          $('#from').datetimepicker(opt1);
      });

    $(document).ready(function(){

      var opt2={
          dateFormat: 'yy-mm-dd',
          showSecond: true,
          timeFormat: 'HH:mm:ss',
          addSliderAccess:true,
          sliderAccessArgs:{touchonly:false}};

          $('#to').datetimepicker(opt2);
      });


      // logout
      $('#logout').click(function (){
        window.location.href = "LogOut.php";
      });

      $(function() {
        $( "#accordion" ).accordion({
          collapsible: true,
          active: false
        });
      });

    </script>



</html>
