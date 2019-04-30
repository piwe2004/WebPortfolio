<?
include_once('./_common.php');
include_once('./head.sub.php');
?>
<style>
@media (min-width:1000px){
body{overflow-y: hidden;}
  .win_box {width:100%; margin:0 auto; overflow-y: hidden;}
  .intro1 {width:100%; height:100%; margin:0 auto; text-align:center;top:0; left:0; background:#000; position:absolute; z-index:4;}
  .intro_logo {width:15.76%; position:absolute; top:50%; margin-top:-9%; left:50%; margin-left:-8%;}
  .intro2{position:absolute; z-index:6; width:100%; height:100%; top:0; left:0; background:#fff; background:#000; display:none; text-align:center;}
  .intro2 iframe{margin:2.2% auto;}
  .show_logo{position:absolute; width:3%; z-index:7; left:1%; top:1%; }
  .ytp-title-text {display: none !important;}
}
@media (max-width:999px){
  body{overflow: hidden;}
    .win_box {width:100%; margin:0 auto; overflow-y: hidden;}
    .intro1 {width:100%; height:100%; margin:0 auto; text-align:center;top:0; left:0; background:#000; position:absolute; z-index:4;}
    .intro_logo {width:30%; position:absolute; top:50%; margin-top:-13%; left:50%; margin-left:-15%;}
    .intro2{position:absolute; z-index:6; width:100%; height:100%; top:0; left:0; background:#fff; background:#000; display:none; text-align:center;}
    .intro2 iframe{margin:2.7% auto;}
    .show_logo{position:absolute; width:7%; z-index:7; left:4%; top:3%; }
    .ytp-title-text {display: none !important;}
}
</style>
<script>
  $(document).ready(function(){
    $(".intro_logo").css({'display':'block', 'opacity':'0'}).animate({'opacity':'1'},3000).fadeOut(1500);
    $(".intro2").delay(4000).fadeIn(3000);
  });

  	var tag = document.createElement('script');

			tag.src = "https://www.youtube.com/iframe_api";
			var firstScriptTag = document.getElementsByTagName('script')[0];
			firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

			var player;
			function onYouTubeIframeAPIReady() {
        setTimeout(function() {
				player = new YT.Player('movie', {
					height: '90%',
					width: '90%',
          margin: '2.5% auto',
					videoId: 'F5A7BjPY0N0',
					playerVars: {
						rel:0,
						controls: 0,
						showinfo: 0,
						modestbranding: 1,
						loop: 0,
						hd: 1,
            autoplay:1,
						fs: 0,
						autohide: 0
					}
				});
			}, 4000);
    }

			function onPlayerReady(event) {
				setTimeout(function() {
					$('.intro_movie').css({'display':'block', 'opacity':'0'}).animate({'opacity':'1'}, 2000);
					$('.after').css({'display':'block', 'opacity':'0'});
				}, 2500);

			}

</script>

<div class="win_box">
  <div class="intro1">
    <img src="/img/intro_logo.png" alt="브라더스솔루션로고" class="intro_logo">
  </div>
  <div class="intro2">
    <img src="/img/bs_logo.png" alt="브라더스로고솔루션" class="show_logo">
			<div class="intro_movie" id="movie"></div>
  </div>
</div>
<?
include_once('./tail.sub.php');
?>
