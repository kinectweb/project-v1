<?php
// echo "test";
$eventResult2 = array();
$room = $_POST['room'];
$kinect =$_POST['kinect'];
$from = $_POST['from'];
$tmp = strtotime($from);
$to = $tmp +(60*15);
$to = date("Y-m-d H:i:s", $to);
// echo $from.$to;

$link = mysqli_connect("129.105.36.214", "root", "123456", "kinectdata");

if (mysqli_connect_error()){

    die("Could not connect to Database");
}

$query2 = "SELECT event,start_time,end_time,RoomNumber,kinect_number FROM KinectEvent
WHERE start_time >= '$from'
AND end_time <=  '$to'
AND end_time != '0000-00-00 00:00:00'
AND RoomNumber ='$room'";
if($result2=mysqli_query($link,$query2)){
    while($row2 = mysqli_fetch_array($result2)){
      array_push($eventResult2,$row2);

    }

}else{
  echo "query not working";
}


$query3 = "SELECT activity,start_time,end_time,RoomNumber,kinect_number FROM KinectActivity
WHERE start_time >= '$from'
AND end_time <=  '$to'
AND end_time != '0000-00-00 00:00:00'
AND RoomNumber ='$room'";
if($result3=mysqli_query($link,$query3)){
    while($row3 = mysqli_fetch_array($result3)){
      array_push($eventResult2,$row3);
    }
    echo json_encode($eventResult2);
}else{
  echo "query not working2";
}




?>
