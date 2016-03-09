var link = <?php echo json_encode($VideoInProject); ?>;

document.write(link[0]);
//videospilleren
var player;

//start innhenting/klargjøring av YoutTube Iframe API
var yt_api_script = document.createElement("script");
yt_api_script.src = "https://www.youtube.com/iframe_api";
$("#yt_api").html(yt_api_script);
yt_api_script.onload = onYouTubeIframeAPIReady;
//-- end innhenting av YouTube API

//start konfigurering av videospiller       
//https://developers.google.com/youtube/iframe_api_reference
//https://developers.google.com/youtube/player_parameters?playerVersion=HTML5
var onYouTubeIframeAPIReady = function () {

    var videokonfigurasjon = {
        width: 640,
        height: 360,
        videoId: link ,
        events: {
            onReady: setVideoEvents
        },
        playerVars: {
            //controls: 0
        }
    }; //--- end videokonfigurasjon

    player = new YT.Player("youTubeVideo", videokonfigurasjon);

}; //--- end onYouTubeIframeAPIReady

var setVideoEvents = function () {
    $("#playVideoBtn").on("click", function () {
        player.playVideo();
    });

}; //--- end setVideoEvents