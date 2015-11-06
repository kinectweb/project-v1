// Initialize collapse button
// $(".button-collapse").sideNav();
$('.button-collapse').sideNav({
  menuWidth: 240, // Default is 240
});



// sideNav title number
$('input[name=bn]').click(function() {
  $('#building').html("Building: #" + $('input[name=bn]:checked').val()+  "<i class='mdi-navigation-arrow-drop-down'></i>")
});

$('input[name=rn]').click(function() {
  $('#room').html("Romm: #" + $('input[name=rn]:checked').val()+  "<i class='mdi-navigation-arrow-drop-down'></i>")
});

$('input[name=kn]').click(function() {
  // alert("test");
  // console.log($('#kinect').html());
  $('#kinect').html("Kinect: #" + $('input[name=kn]:checked').val()+  "<i class='mdi-navigation-arrow-drop-down'></i>")
});



// date picker
$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year
    format: 'yyyy-mm-dd'
  });


// timepicker
$('.timePicker').trigger('autoresize');



// qVResult
console.log(qVResult);
for(i=0 ; i<qVResult.length ;i++){
  $(".videoList").append("<p><a href='" +'./video/' + qVResult[i].fileName+ "'>" + qVResult[i].fileName+"</a></p>");
}
var playerList = document.getElementById("videoListId");
var links = playerList.getElementsByTagName('a');
for (var i=0; i<links.length; i++) {
    links[i].onclick = handler;
}
function handler(e) {
  // prevent the full screen play video
  e.preventDefault();
  videoPath = this.getAttribute("href");
  video = document.querySelector("video");
  video.removeAttribute("poster");
  source = document.querySelectorAll("video source");
  source.src =   videoPath+ ".mp4";
  document.getElementById("source").setAttribute("src",source.src ) ;
  video.load();
  video.play();
}
