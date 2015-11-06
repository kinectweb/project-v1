
<?php
  // for debuging
  function theconsole($data) {
    if(is_array($data) || is_object($data))
    {
      echo("<script>console.log('PHP: ".json_encode($data)."');</script>");
    } else {
      echo("<script>console.log('PHP: ".$data."');</script>");
    }
  }

  $bn = $_POST['bn'];
  $rn = $_POST['rn'];
  $kn = $_POST['kn'];
  $fd = $_POST['fromDate'];
  $ft = $_POST['fromTime'];
  $td = $_POST['toDate'];
  $tt = $_POST['toTime'];
  $from = $fd.' '.$ft;
  $to = $td.' '.$tt;
  $qVResult= array();

  // $link = mysqli_connect("129.105.36.182", "root", "123456", "kinectdata");
  $link = mysqli_connect("127.0.0.1", "root", "", "project");

  if (mysqli_connect_error()){
    //die('Could not connect: ' . mysql_error());
    theconsole("Could not connect to Database");
  }


  $query = "SELECT buildingId,roomId,kinectId,startTime, endTime, fileName FROM video
  WHERE buildingId = '$bn'
  AND roomId ='$rn'
  AND kinectId = '$kn'
  AND startTime >= '$from'
  AND endTime <=  '$to'
  AND endTime != '0000-00-00 00:00:00'";
  if($result=mysqli_query($link,$query)){
      while($row = mysqli_fetch_array($result)){
        // print_r($row);
        array_push($qVResult,$row);
      }
      function do_compare($item1, $item2) {
         $ts1 = strtotime($item1['start_time']);
         $ts2 = strtotime($item2['start_time']);
         return $ts1 - $ts2;
       }
       usort($qVResult, 'do_compare');
  }else{
    echo "query not working";
  }

  // print_r($qVResult[0]);
  // theconsole($qVResult);
  // theconsole($to);


?>
