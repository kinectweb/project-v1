 for(i=0 ; i<result.length ;i++){
   $("#videoScroll").append("<p><a href='" +result[i].VideoPath  + "'>" + result[i].FileName+"</a></p>");
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
