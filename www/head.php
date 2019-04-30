<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
  require_once(G5_THEME_PATH.'/head.php');
   return;
}

// if (G5_IS_MOBILE) {
   // include_once(G5_MOBILE_PATH.'/head.php');
   // return;
// }

include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<?php
$pName = explode("/",$_SERVER['REQUEST_URI']);
$pageName = explode(".", $pName[2]);

$pn = $pageName[0];
if ($pn == vr) {
  $pn = "media";
}
if ($pn == board){
  switch ($bo_table){

  case 'news':
  case 'publ':
  case 'gall':  $pn = 'intro';
  break;

  case 'brwork' :
  case 'mkwork' :
  case 'design' :
  case 'brwork2' :
  case 'mediapol' :  $pn = 'work';
  break;

  // case 'brwork' :
  //    $pn = 'brand';
  // break;
  //
  // case 'mkwork' :
  //    $pn = 'marke';
  // break;
  //
  // case 'mediapol' :
  //    $pn = 'media';
  // break;
  }
}

?>


<script src="/js/jquery.rwdImageMaps.min.js"></script>
<script>
  $(function(){
  	$('img[usemap]').rwdImageMaps();
  	$("#img").width("100%");
  });
</script>

<link rel="stylesheet" href="/css/jquery.mmenu.all.css">
<script src="/js/jquery.mmenu.min.all.js"></script>
<script>

$(document).ready(function(){
  if($(".menu_di").children("ul").children("li").hasClass("<?=$pn?>") === true){
    $(".<?=$pn?>").children("a").css("color","#3ab6c5");
    $(".menu_di").children("ul").children("li").not(".<?=$pn?>").hover(function() {
      $(".<?=$pn?>").children("a").css("color","#404040");
    }, function(){
      $(".<?=$pn?>").children("a").css("color","#3ab6c5");
    });
  }
});
</script>
<style>
  .wrap{width:100%; }

  .logo_im {float:left;}
  .menu_di{width:700px; margin:0 auto;}
  /* .menu_di{width:840px; margin:0 auto;} */
  .menu_di ul:first-child{width:100%; text-align:left; margin:0;}
  .li_tbx{ float:left; position:relative; padding:10px 20px;}
  .li_tbx a{color:#404040; font-size:15px; font-weight: bold;}
  .li_tbx:hover a{color:#3ab6c5;}
  .di_ul {display:block; text-align:left; position:absolute; background:#545454; padding:0; top:100%;}
  .di_ul li{padding:7px 10px;}

  .counse{float:right; width:70px; text-align:center; border:2px solid #3ab6c5; padding:7px 0; margin-top:4px;}
  .counse span{font-size:12px; font-weight:800; color: #3ab6c5;}
  @media only screen and (min-width:641px)
{
	  .top_wrap{width:100%; background:#fff;}
  .menu_wrap{background: #fff;width:100%; padding:14px 0; max-width:1200px; margin:0 auto; overflow:hidden;}
	.mo_head{display:none; }
  .top_wrap_on{position:fixed; z-index:10000; left:0; top:0; box-shadow:0px 2px 5px rgba(87, 84, 84, 0.2);}

}
#loader{display:none;}
@media only screen and (max-width:640px)
{
	body{max-width:960px;}
  .top_wrap{display:none;}
  .menu_wrap{display:none;}
  .mo_head{width:95%; max-width:960px; margin:0 auto; display:block;}
  #header{width:100%; overflow: hidden; padding:3% 0;}
  .mh-head {width:10%; float: left;}
  #header_logo{width:68.75%; float: left;}
  .fa-bars img{width:100%;}

  .menuwrap{position:fixed; left:-250px;}
  .show_ul{display: none;}
  .hide{display:none;}

  #menu ul li a {color:#0081c7; font-weight: 500;}
  #menu ul li span{color:#0081c7; font-weight: 500;}

  .mh-logo{width:31%; float:right; max-width:112px;}
  .mh-logo a img{width:100%;}
  .wrap{display:none;}
    h4 {position: absolute; bottom: 20px; left: 20px; margin: 0; font-weight: 200; opacity: .5; font-family: sans-serif; color: #fff;}
	#loader {display:block; animation: loader 5s cubic-bezier(.8,0,.2,1) infinite; height: 40px; width: 41px; position: absolute; top:calc(45% - 20px); left:calc(50% - 20px);}
	@keyframes loader { 90% { transform: rotate(0deg); } 100% { transform: rotate(180deg); }}
	#top { animation: top 5s linear infinite; border-top: 20px solid #26b7bc; border-right: 20px solid transparent; border-left: 20px solid transparent; height: 0px; width: 1px; transform-origin: 50% 100%;}
	@keyframes top { 90% { transform: scale(0); } 100% { transform: scale(0);}}
	#bottom { animation: bottom 5s linear infinite; border-right: 20px solid transparent; border-bottom: 20px solid #26b7bc; border-left: 20px solid transparent; height: 0px; width: 1px; transform: scale(0); transform-origin: 50% 100%;}
	@keyframes bottom { 10% { transform: scale(0); } 90% { transform: scale(1); } 100% { transform: scale(1); }}
	#line { animation: line 5s linear infinite; border-left: 1px dotted #26b7bc; height: 0px; width: 0px; position: absolute; top: 20px; left: 20px;}
	@keyframes line { 10% { height: 20px; } 100% { height: 20px; }}

}
</style>
<script type="text/javascript">
var wwidth = $(window).width();
if (wwidth < 640 ){
		// setTimeout(function(){
		// 	$("#loader").fadeOut();
		// 	$(".wrap").fadeIn();
		// },2000);
		$(window).load(function(){
			$("#loader").delay(1000).fadeOut();
			$(".wrap").delay(1000).fadeIn();
		});
}
$(window).scroll(function(){
  var sl_sc = $(document).scrollTop();
  if(sl_sc > 10){
    $(".top_wrap").addClass('top_wrap_on');
  }else{
    $(".top_wrap").removeClass('top_wrap_on');
  }
  // var hi = $(document).scrollTop();
  // alert(al_sc);
});
</script>
<div id="loader">
  <div id="top"></div>
  <div id="line"></div>
  <div id="bottom"></div>
</div>
<!-- 상단 시작 { -->
	<div class="wrap">
    <div class="top_wrap">
  	  <div class="menu_wrap">
  	    <div class="logo_im">
          <a href="/"><img src="/image/main/logo.png" alt="메인페이지가는 로고이미지"></a></div>
  	    <div class="menu_di">
  	      <ul>
  	        <li class="intro li_tbx"><a href="/sub/intro/what.php">회사소개</a></li>
  	        <li class="brand li_tbx"><a href="/sub/brand/worth.php">브랜드컨설팅</a></li>
  	        <li class="marke li_tbx"><a href="/sub/marke/worth.php">마케팅컨설팅</a></li>
            <li class="media li_tbx"><a href="/sub/media/worth.php">미디어 / VR</a></li>
  	        <!-- <li class="media li_tbx"><a href="/sub/media/worth.php">미디어</a></li>
  	        <li class="vr li_tbx"><a href="/sub/vr/vrpage.php">VR파노라마</a></li> -->
            <li class="elec li_tbx"><a href="/sub/elec/election.php">선거기획</a></li>
            <!-- <li class="elec li_tbx"><a href="#">문화기획</a></li> -->
            <li class="work li_tbx"><a href="/bbs/board.php?bo_table=mediapol">포트폴리오</a></li>
  	      </ul>
  	    </div>
  	    <div class="counse">
  	    <a href="/bbs/board.php?bo_table=online"><span>상담하기</span></a>
  	    </div>
  	  </div>
  	 </div>
<script type="text/javascript">
if (wwidth < 999 ){
$(document).ready(function() {
	//  create a menu
	$('#menu').mmenu();
});
$(function(){
	$('img[usemap]').rwdImageMaps();
	$("#img").width("100%");
});
}
</script>

<div class="mo_head">

  <div id="header">
    <div class="mh-head Sticky">
      <span class="mh-btns-left">
        <a class="fa fa-bars" href="#menu" title="메뉴 버튼"><img src="/image/newmain/menu_btn.png" alt="메뉴 이미지"></a>
      </span>
    </div>
	<div class="mh-logo">
		<a href="/" title="홈으로가는 버튼"><img src="/image/main/logo2.png" alt="모바일페이지 로고이미지"></a>
	</div>
  </div>

<nav id="menu">
  <ul>
    <li><span>회사소개</span>
      <ul>
            <li><a href="/sub/intro/what.php" title="브라더스솔루션 회사소개페이지로 이동">WHAT WE DO</a></li>
            <li><a href="/sub/intro/team.php" title="브라더스솔루션 팀소개페이지로 이동">TEAM</a></li>
            <li><a href="/bbs/board.php?bo_table=news" title="브라더스솔루션 공지사항게시판으로 이동">NOTICE</a></li>
            <li><a href="/bbs/board.php?bo_table=publ" title="브라더스솔루션 언론홍보게시판으로 이동">NEWS</a></li>
			<li><a href="/bbs/board.php?bo_table=gall" title="브라더스솔루션 갤러리게시판으로 이동">STORY</a></li>
			<li><a href="/sub/intro/location.php" title="브라더스솔루션 오시는길페이지로 이동">LOCATION</a></li>
      </ul>
    </li>
    <li><span>브랜드컨설팅</span>
      <ul>
            <li><a href="/sub/brand/worth.php" title="브랜드컨설팅 소개페이지로 이동">WORTH</a></li>
            <li><a href="/sub/brand/process.php" title="브랜드컨설팅 프로세스페이지로 이동">PROCESS</a></li>
      </ul>
    </li>
    <li><span>마케팅컨설팅</span>
      <ul>

            <li><a href="/sub/marke/worth.php" title="마케팅 소개페이지로 이동">WORTH</a></li>
            <li><a href="/sub/marke/contents.php" title="마케팅 콘텐츠페이지로 이동">CONTENTS</a></li>
            <li><a href="/sub/marke/process.php" title="마케팅 프로세스페이지로 이동">PROCESS</a></li>
      </ul>
    </li>
	   <li><span>미디어 / VR</span>
      <ul>
        <li><a href="/sub/media/worth.php" title="미디어 소개페이지로 이동">WORTH</a></li>
        <!-- <li><a href="/sub/media/process.php" title="미디어 프로세스페이지로 이동">PROCESS</a></li> -->
        <li><a href="/sub/vr/vrpage.php" title="VR 파노라마 소개페이지로 이동">VR파노라마</a></li>
      </ul>
    </li>
	   <!-- <li><span>VR파노라마</span>
      <ul>
        <li><a href="/sub/vr/vrpage.php" title="VR 파노라마 소개페이지로 이동">VR파노라마</a></li>
      </ul>
    </li> -->
    <li><span>선거기획</span>
     <ul>
       <li><a href="/sub/elec/election.php" title="선거 기획 페이지로 이동">ELECTION</a></li>
     </ul>
   </li>
    <li><span>포트폴리오</span>
     <ul>
       <li><a href="/bbs/board.php?bo_table=mediapol" title="미디어 포트폴리오 게시판으로 이동">MEDIA</a></li>
       <li><a href="/bbs/board.php?bo_table=brwork2" title="브랜드/마케팅 포트폴리오 게시판으로 이동">BRAND/MARKETING</a></li>
       <li><a href="/bbs/board.php?bo_table=design" title="디자인 포트폴리오 게시판으로 이동">DESIGN</a></li>
     </ul>
   </li>
	<li><a href="/bbs/write.php?bo_table=online" title="상담하기 게시판으로 이동">상담하기</a></li>
  </ul>
</nav>
</div>
