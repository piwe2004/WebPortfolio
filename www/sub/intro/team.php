<?php
include_once('../../common.php');
include_once('../../head.php');

$np = team;

include_once('./cate.php');
?>
<link href="https://fonts.googleapis.com/css?family=Raleway:700" rel="stylesheet">
<script src="/js/masonry.pkgd.min.js" type="text/javascript"></script>
<script src="/js/TweenMax.min.js" type="text/javascript"></script>
<script src="/js/jquery.lazyload.min.js" type="text/javascript"></script>
<style>
  body{background:#f1f1f1;}
  .cate_wrap{background:#f1f1f1;}
  /* .top_wrap{background:#898989;}
  .menu_wrap{background:#898989;}
  .li_tbx a{color:#fff;} */

  #member_wrap {opacity:0; filter:alpha(opacity:0); width: 97%; margin: 0 auto;}
  .item p{color:#3ab6c5; font-family: 'NanumSquare', sans-serif; }
  .item > .name {position: absolute; top:40px;left: 20px; border-bottom: 0px solid; padding-bottom: 2px; min-width: 30%; display: none; font-size:15px;}
  .item > .tname {position: absolute;top:20px; left: 20px; display: none; font-size:15px; font-weight:900;}
  .item:hover .name, .item:hover .tname {display: block;}

  .team_wrap{width:100%; height:100% inherit; box-sizing: border-box; padding:50px 10px; overflow:hidden}

  /*.team_wrap{padding:50px 20px; display: inline-block;}*/
  .item{width:16.64%; height:303px; float:left; box-sizing: border-box; position:relative;}
  .item{width:16.64%; float:left; box-sizing: border-box; position:relative;}
  .item img{width:100%;}
.lg{width:33.26%; height:606px;}
  .lg{width:33.26%;}
  .tail_wrap{background:#f7f7f7;}

  .item > img {-webkit-filter:grayscale(100%);-moz-filter:grayscale(100%);-ms-filter:grayscale(100%);-o-filter:grayscale(100%);filter:grayscale(100%);-webkit-filter: grayscale(100%); filter: gray;}
  .item:hover > img {-webkit-filter: grayscale(0%); filter:none; border:10px solid #3ab6c5;}

  .mo_team{display:none; position: relative;}
  @media only screen and (max-width:640px)
{
  ul{padding:0; margin: 0;}
  .team_wrap {padding:10px;}
	.mo_team{display:block; width:100%; max-width:960px; margin:0; position: relative;}
	#member_wrap{display:none;}
	.team_img_wrap{width:100%; overflow: hidden;}
		.boss_team{width:100%; text-align: center;margin-right:1%; position:relative;}
	.boss_1{margin-right:0; width:100%; text-align: center; margin:0 auto; background:#fff;}
	.boss_1 img{width:50%;}
	/* .team_img_wrap p {position: absolute;} */
  .font_wrap{background:rgba(0, 0, 0, 0.5); position:absolute; bottom:0%;width:100%; padding:0 2%; box-sizing: border-box; text-align: left;}
	.mo_tname{font-size:0.5rem; color:#fff;}
	.mo_name{ font-weight:bold; font-size:0.6rem;color:#fff;}
	.mo_team_wrap{width:32.33%; margin-right:1%; float:left; margin-top:1%; position:relative;}
	.mo_team_wrap img{width:100%;}
}
</style>

<script type="text/javascript">
    var it_le = $(".item").length;
  	$(document).ready(function() {
      // alert(it_le);
		TweenMax.to("#member_wrap", 0.9, {opacity: 1, delay: 1});
		$('#member_wrap .item').each(function (index) {
		  var tween = new TimelineMax()
				  .add([
					TweenMax.from($(this), 0.5, {opacity: 0})
				  ]);
		});

		$('#member_wrap .item').hover(function () {
		  $('#member_wrap .item').css('z-index', '0');
		  $(this).css('z-index', '2');
		  TweenMax.to($(this), 0.9, {scaleX: 1.1, scaleY: 1.1, ease: Elastic.easeOut});

		}, function () {
      $(this).css('z-index', '0');
		  TweenMax.to($(this), 0.9, {scaleX: 1, scaleY: 1, ease: Elastic.easeOut});
		});
      var $container = $('#member_wrap');
    		$container.masonry({
        itemSelector: '.item'
      });
	});


</script>
<div class="team_wrap">
  <div id="member_wrap">
    <div class="item">
      <img src="/image/sub/intro/team/design_5_b.jpg" alt="디자이너 신윤주"
      onmouseover="this.src='/image/sub/intro/team/design_5.jpg'"
      onmouseout="this.src='/image/sub/intro/team/design_5_b.jpg'">
      <p class="tname">Designer</p>
      <p class="name">YoonJoo, Shin</p>
    </div>
    <div class="item lg">
      <img src="/image/sub/intro/team/boss_1_1_b.jpg" alt="CEO 최재완"
      onmouseover="this.src='/image/sub/intro/team/boss_1_1.jpg'"
      onmouseout="this.src='/image/sub/intro/team/boss_1_1_b.jpg'">
      <p class="tname">CEO</p>
      <p class="name">JaeWan, Choi</p>
    </div>
    <!-- <div class="item lg">
      <img src="/image/sub/intro/team/boss_1_1_b_1.jpg" alt="CEO 한성현"
      onmouseover="this.src='/image/sub/intro/team/boss_2_2.jpg'"
      onmouseout="this.src='/image/sub/intro/team/boss_1_1_b_1.jpg'">
      <p class="tname">CEO</p>
      <p class="name">SungHyun, Han</p>
    </div> -->
    <div class="item">
      <img src="/image/sub/intro/team/design_1_b.jpg" alt="디자이너 양보영"
      onmouseover="this.src='/image/sub/intro/team/design_1.jpg'"
      onmouseout="this.src='/image/sub/intro/team/design_1_b.jpg'">
      <p class="tname">Designer</p>
      <p class="name">BoYoung, Yang</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/design_2_b.jpg" alt="디자이너 허수정"onmouseover="this.src='/image/sub/intro/team/design_2.jpg'"
      onmouseout="this.src='/image/sub/intro/team/design_2_b.jpg'">
      <p class="tname">Designer</p>
      <p class="name">SuJeong, Heo</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/design_6_b.jpg" alt="디자이너 최주희"
      onmouseover="this.src='/image/sub/intro/team/design_6.jpg'"
      onmouseout="this.src='/image/sub/intro/team/design_6_b.jpg'">
      <p class="tname">Designer</p>
      <p class="name">JuHee, Choi</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/design_7_b.jpg" alt="디자이너 이나라"
      onmouseover="this.src='/image/sub/intro/team/design_7.jpg'"
      onmouseout="this.src='/image/sub/intro/team/design_7_b.jpg'">
      <p class="tname">Designer</p>
      <p class="name">Nara, Lee</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/design_3_b.jpg" alt="디자이너 김민규"
      onmouseover="this.src='/image/sub/intro/team/design_3.jpg'"
      onmouseout="this.src='/image/sub/intro/team/design_3_b.jpg'">
      <p class="tname">Designer</p>
      <p class="name">MinGyu, Kim</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/design_4_b.jpg" alt="디자이너 김지원"onmouseover="this.src='/image/sub/intro/team/design_4.jpg'"
      onmouseout="this.src='/image/sub/intro/team/design_4_b.jpg'">
      <p class="tname">Designer</p>
      <p class="name">JiWon, Kim</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/media_b.jpg" alt="콘텐츠 디렉터 김문섭"onmouseover="this.src='/image/sub/intro/team/media.jpg'"
      onmouseout="this.src='/image/sub/intro/team/media_b.jpg'">
      <p class="tname">Contents Director</p>
      <p class="name">MunSeob, Kim</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/media_2_b.jpg" alt="콘텐츠 디렉터 이현빈"onmouseover="this.src='/image/sub/intro/team/media_2.jpg'"
      onmouseout="this.src='/image/sub/intro/team/media_2_b.jpg'">
      <p class="tname">Contents Director</p>
      <p class="name">HyunBin, Lee</p>
    </div>
    <!-- <div class="item">
      <img src="/image/sub/intro/team/make_1_7_b.jpg" alt="Creater 정시후"onmouseover="this.src='/image/sub/intro/team/make_1_7.jpg'"
      onmouseout="this.src='/image/sub/intro/team/make_1_7_b.jpg'">
      <p class="tname">Creater</p>
      <p class="name">정시후</p>
    </div> -->
    <div class="item">
      <img src="/image/sub/intro/team/make_1_2_b.jpg" alt="크리에이터 김민현"onmouseover="this.src='/image/sub/intro/team/make_1_2.jpg'"
      onmouseout="this.src='/image/sub/intro/team/make_1_2_b.jpg'">
      <p class="tname">Creater</p>
      <p class="name">MinHyun, Kim</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/make_1_6_b.jpg" alt="크리에이터 이수정"onmouseover="this.src='/image/sub/intro/team/make_1_6.jpg'"
      onmouseout="this.src='/image/sub/intro/team/make_1_6_b.jpg'">
      <p class="tname">Creater</p>
      <p class="name">SuJeong, Lee</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/make_1_5_b.jpg" alt="크리에이터 윤혜빈"onmouseover="this.src='/image/sub/intro/team/make_1_5.jpg'"
      onmouseout="this.src='/image/sub/intro/team/make_1_5_b.jpg'">
      <p class="tname">Creater</p>
      <p class="name">HyeBin, Yoon</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/make_1_4_b.jpg" alt="크리에이터 문형빈"onmouseover="this.src='/image/sub/intro/team/make_1_4.jpg'"
      onmouseout="this.src='/image/sub/intro/team/make_1_4_b.jpg'">
      <p class="tname">Creater</p>
      <p class="name">HyungBin, Mun</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/make_2_2_b_1.jpg" alt="크리에이터 정현석"onmouseover="this.src='/image/sub/intro/team/make_2_2.jpg'"
      onmouseout="this.src='/image/sub/intro/team/make_2_2_b_1.jpg'">
      <p class="tname">Creater</p>
      <p class="name">HyunSuk, Jung</p>
    </div>
      <div class="item">
        <img src="/image/sub/intro/team/make_2_6_b.jpg" alt="크리에이터 안재민"onmouseover="this.src='/image/sub/intro/team/make_2_6.jpg'"
        onmouseout="this.src='/image/sub/intro/team/make_2_6_b.jpg'">
        <p class="tname">Creater</p>
        <p class="name">JaeMin, Ann</p>
      </div>
    <!-- <div class="item">
      <img src="/image/sub/intro/team/make_2_5_b.jpg" alt="크리에이터 허희경"onmouseover="this.src='/image/sub/intro/team/make_2_5.jpg'"
      onmouseout="this.src='/image/sub/intro/team/make_2_5_b.jpg'">
      <p class="tname">Creater</p>
      <p class="name">HeeKyung, Heo</p>
    </div> -->
    <div class="item">
      <img src="/image/sub/intro/team/make_2_1_b.jpg" alt="크리에이터 양선정"onmouseover="this.src='/image/sub/intro/team/make_2_1.jpg'"
      onmouseout="this.src='/image/sub/intro/team/make_2_1_b.jpg'">
      <p class="tname">Creater</p>
      <p class="name">SunJung, Yang</p>
    </div>
    <!-- <div class="item">
      <img src="/image/sub/intro/team/make_2_3_b.jpg" alt="크리에이터 장은지"onmouseover="this.src='/image/sub/intro/team/make_2_3.jpg'"
      onmouseout="this.src='/image/sub/intro/team/make_2_3_b.jpg'">
      <p class="tname">Creater</p>
      <p class="name">EunJi, Jang</p>
    </div> -->
    <div class="item">
      <img src="/image/sub/intro/team/make_2_4_b.jpg" alt="크리에이터 지소희"onmouseover="this.src='/image/sub/intro/team/make_2_4.jpg'"
      onmouseout="this.src='/image/sub/intro/team/make_2_4_b.jpg'">
      <p class="tname">Creater</p>
      <p class="name">SoHee, Ji</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/make_3_4_b_1.jpg" alt="크리에이터 최종혁"onmouseover="this.src='/image/sub/intro/team/make_3_4.jpg'"
      onmouseout="this.src='/image/sub/intro/team/make_3_4_b_1.jpg'">
      <p class="tname">Creater</p>
      <p class="name">JongHyuk, Choi</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/make_3_1_b.jpg" alt="크리에이터 황보주형"onmouseover="this.src='/image/sub/intro/team/make_3_1.jpg'"
      onmouseout="this.src='/image/sub/intro/team/make_3_1_b.jpg'">
      <p class="tname">Creater</p>
      <p class="name">JuHyung, Hwangbo</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/make_3_2_b.jpg" alt="크리에이터 김승민"onmouseover="this.src='/image/sub/intro/team/make_3_2.jpg'"
      onmouseout="this.src='/image/sub/intro/team/make_3_2_b.jpg'">
      <p class="tname">Creater</p>
      <p class="name">SeongMin, Kim</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/make_3_3_b.jpg" alt="크리에이터 박소희"onmouseover="this.src='/image/sub/intro/team/make_3_3.jpg'"
      onmouseout="this.src='/image/sub/intro/team/make_3_3_b.jpg'">
      <p class="tname">Creater</p>
      <p class="name">SoHee, Park</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/make_2_7_b.jpg" alt="크리에이터 강정화"onmouseover="this.src='/image/sub/intro/team/make_2_7.jpg'"
      onmouseout="this.src='/image/sub/intro/team/make_2_7_b.jpg'">
      <p class="tname">Creater</p>
      <p class="name">JeongHwa, Kang</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/make_1-2_1_b.jpg" alt="크리에이터 송성민"onmouseover="this.src='/image/sub/intro/team/make_1-2_1.jpg'"
      onmouseout="this.src='/image/sub/intro/team/make_1-2_1_b.jpg'">
      <p class="tname">Creater</p>
      <p class="name">SeongMin, Song</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/make_1-2_2_b.jpg" alt="크리에이터 허원준"onmouseover="this.src='/image/sub/intro/team/make_1-2_2.jpg'"
      onmouseout="this.src='/image/sub/intro/team/make_1-2_2_b.jpg'">
      <p class="tname">Creater</p>
      <p class="name">WonJun, Heo</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/make_1-2_3_b.jpg" alt="크리에이터 이주경"onmouseover="this.src='/image/sub/intro/team/make_1-2_3.jpg'"
      onmouseout="this.src='/image/sub/intro/team/make_1-2_3_b.jpg'">
      <p class="tname">Creater</p>
      <p class="name">JooKyoung, Lee</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/make_1_8_b.jpg" alt="컨설턴트 서보경"onmouseover="this.src='/image/sub/intro/team/make_1_8.jpg'"
      onmouseout="this.src='/image/sub/intro/team/make_1_8_b.jpg'">
      <p class="tname">Creater</p>
      <p class="name">BoKyoung, Seo</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/sales_2_b.jpg" alt="컨설턴트 김무진"onmouseover="this.src='/image/sub/intro/team/sales_2.jpg'"
      onmouseout="this.src='/image/sub/intro/team/sales_2_b.jpg'">
      <p class="tname">consultant</p>
      <p class="name">MuJin, Kim</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/make_3_5_b.jpg" alt="크리에이터 손현진"onmouseover="this.src='/image/sub/intro/team/make_3_5.jpg'"
      onmouseout="this.src='/image/sub/intro/team/make_3_5_b.jpg'">
      <p class="tname">Creater</p>
      <p class="name">HyeonJin, Son</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/make_2_8_b.jpg" alt="크리에이터 김선영"onmouseover="this.src='/image/sub/intro/team/make_2_8.jpg'"
      onmouseout="this.src='/image/sub/intro/team/make_2_8_b.jpg'">
      <p class="tname">Creater</p>
      <p class="name">SeonYoung, Kim</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/make_2_9_b.jpg" alt="크리에이터 정주은"onmouseover="this.src='/image/sub/intro/team/make_2_9.jpg'"
      onmouseout="this.src='/image/sub/intro/team/make_2_9_b.jpg'">
      <p class="tname">Creater</p>
      <p class="name">JuEun, Jeong</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/make_2_10_b.jpg" alt="크리에이터 허지은"onmouseover="this.src='/image/sub/intro/team/make_2_10.jpg'"
      onmouseout="this.src='/image/sub/intro/team/make_2_10_b.jpg'">
      <p class="tname">Creater</p>
      <p class="name">JiEun, Heo</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/manag_3_b.jpg" alt="경영지원부 류후성"
      onmouseover="this.src='/image/sub/intro/team/manag_3.jpg'"
      onmouseout="this.src='/image/sub/intro/team/manag_3_b.jpg'">
      <p class="tname">management team</p>
      <p class="name">HuSung, Ryoo</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/manag2_b.jpg" alt="경영지원부 김미영"onmouseover="this.src='/image/sub/intro/team/manag_2.jpg'"
      onmouseout="this.src='/image/sub/intro/team/manag2_b.jpg'">
      <p class="tname">management team</p>
      <p class="name">MeYoung, Kim</p>
    </div>
    <!-- <div class="item">
      <img src="/image/sub/intro/team/manag_4_b.jpg" alt="경영지원부 정자윤"onmouseover="this.src='/image/sub/intro/team/manag_4.jpg'"
      onmouseout="this.src='/image/sub/intro/team/manag_4_b.jpg'">
      <p class="tname">management team</p>
      <p class="name">JaYoon, Jeong</p>
    </div> -->
    <div class="item">
      <img src="/image/sub/intro/team/manag_1_b.jpg" alt="경영지원부 최윤영"onmouseover="this.src='/image/sub/intro/team/manag_1.jpg'"
      onmouseout="this.src='/image/sub/intro/team/manag_1_b.jpg'">
      <p class="tname">management team</p>
      <p class="name">YoonYoung, Choi</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/manag_5_b.jpg" alt="경영지원부 허지현"onmouseover="this.src='/image/sub/intro/team/manag_5.jpg'"
      onmouseout="this.src='/image/sub/intro/team/manag_5_b.jpg'">
      <p class="tname">management team</p>
      <p class="name">JiHyun, Heo</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/manag_6_b.jpg" alt="경영지원부 허민제"onmouseover="this.src='/image/sub/intro/team/manag_6.jpg'"
      onmouseout="this.src='/image/sub/intro/team/manag_6_b.jpg'">
      <p class="tname">management team</p>
      <p class="name">MinJe, Heo</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/manag_7_b.jpg" alt="경영지원부 류지원"onmouseover="this.src='/image/sub/intro/team/manag_7.jpg'"
      onmouseout="this.src='/image/sub/intro/team/manag_7_b.jpg'">
      <p class="tname">management team</p>
      <p class="name">JiWon, Ryu</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/manag_8_b.jpg" alt="경영지원부 최우정"onmouseover="this.src='/image/sub/intro/team/manag_8.jpg'"
      onmouseout="this.src='/image/sub/intro/team/manag_8_b.jpg'">
      <p class="tname">management team</p>
      <p class="name">UJeong, Choi</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/2clap_b.jpg" alt="Design2Clap 신욱수 "onmouseover="this.src='/image/sub/intro/team/2clap.jpg'"
      onmouseout="this.src='/image/sub/intro/team/2clap_b.jpg'">
      <p class="tname">Design2Clap</p>
      <p class="name">UkSu, Shin </p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/inte_1_b.jpg" alt="Design2Clap 김대현 "onmouseover="this.src='/image/sub/intro/team/inte_1.jpg'"
      onmouseout="this.src='/image/sub/intro/team/inte_1_b.jpg'">
      <p class="tname">Design2Clap</p>
      <p class="name">DaeHyun, Kim</p>
    </div>
    <div class="item">
      <img src="/image/sub/intro/team/inte_2_b.jpg" alt="Design2Clap 남미소 "onmouseover="this.src='/image/sub/intro/team/inte_2.jpg'"
      onmouseout="this.src='/image/sub/intro/team/inte_2_b.jpg'">
      <p class="tname">Design2Clap</p>
      <p class="name">MiSo, Nam</p>
    </div>
  </div>
</div>


  <div class="mo_team">
	<ul class="boss_img team_img_wrap">
		<li class="boss_1 boss_team">
			<img src="/image/sub/intro/team/boss_1_1.jpg" alt="CEO 최재완">
      <div class="font_wrap">
  			<p class="mo_tname">CEO</p>
  			<p class="mo_name">JaeWan, Choi</p>
      </div>
		</li>
		<!-- <li class="boss_2 boss_team">
			<img src="/image/sub/intro/team/boss_2_2.jpg" alt="CEO 한성현">
      <div class="font_wrap">
  			<p class="mo_tname">CEO</p>
  			<p class="mo_name">SungHyun, Han</p>
      </div>
		</li> -->
	</ul>
	<ul class="team_img_wrap">
		<li class="design_1 mo_team_wrap">
			<img src="/image/sub/intro/team/design_5.jpg" alt="디자이너 신윤주">
      <div class="font_wrap">
			   <p class="mo_tname">Designer</p>
			   <p class="mo_name">YoonJoo, Shin</p>
      </div>
		</li>
		<li class="design_2 mo_team_wrap">
			<img src="/image/sub/intro/team/design_1.jpg" alt="디자이너 양보영">
      <div class="font_wrap">
  			<p class="mo_tname">Designer</p>
  			<p class="mo_name">BoYoung, Yang</p>
      </div>
		</li>
		<li class="design_3 mo_team_wrap">
			<img src="/image/sub/intro/team/design_2.jpg" alt="디자이너 허수정">
      <div class="font_wrap">
  			<p class="mo_tname">Designer</p>
  			<p class="mo_name">SuJeong, Heo</p>
      </div>
		</li>
    <li class="design_6 mo_team_wrap">
      <img src="/image/sub/intro/team/design_6.jpg" alt="디자이너 최주희">
      <div class="font_wrap">
        <p class="mo_tname">Designer</p>
        <p class="mo_name">JuHee, Choi</p>
      </div>
    </li>
    <li class="design_4 mo_team_wrap">
      <img src="/image/sub/intro/team/design_7.jpg" alt="디자이너 이나라">
      <div class="font_wrap">
        <p class="mo_tname">Designer</p>
        <p class="mo_name">Nara, Lee</p>
      </div>
    </li>
		<li class="design_4 mo_team_wrap">
			<img src="/image/sub/intro/team/design_3.jpg" alt="디자이너 김민규">
      <div class="font_wrap">
  			<p class="mo_tname">Designer</p>
  			<p class="mo_name">MinGyu, Kim</p>
      </div>
		</li>
		<li class="design_5 mo_team_wrap">
			<img src="/image/sub/intro/team/design_4.jpg" alt="디자이너 김지원">
      <div class="font_wrap">
  			<p class="mo_tname">Designer</p>
  			<p class="mo_name">JiWon, Kim</p>
      </div>
		</li>
		<li class="media_team mo_team_wrap">
			<img src="/image/sub/intro/team/media.jpg" alt="콘텐츠 디렉터 김문섭">
      <div class="font_wrap">
  			<p class="mo_tname">Contents Director</p>
  			<p class="mo_name">MunSeob, Kim</p>
      </div>
		</li>
    <li class="media_team_2 mo_team_wrap">
      <img src="/image/sub/intro/team/media_2.jpg" alt="콘텐츠 디렉터 이현빈">
      <div class="font_wrap">
        <p class="mo_tname">Contents Director</p>
        <p class="mo_name">HyunBin, Lee</p>
      </div>
    </li>
		<!-- <li class="marke_1 mo_team_wrap">
			<img src="/image/sub/intro/team/make_1_7.jpg" alt="크리에이터 정시후">
			<p class="mo_tname">Creater</p>
			<p class="mo_name">정시후</p>
		</li> -->
		<li class="marke_1 mo_team_wrap">
			<img src="/image/sub/intro/team/make_1_2.jpg" alt="크리에이터 김민현">
      <div class="font_wrap">
			   <p class="mo_tname">Creater</p>
			   <p class="mo_name">MinHyun, Kim</p>
      </div>
		</li>
		<li class="marke_1 mo_team_wrap">
			<img src="/image/sub/intro/team/make_1_6.jpg" alt="크리에이터 이수정">
      <div class="font_wrap">
			   <p class="mo_tname">Creater</p>
			   <p class="mo_name">SuJeong, Lee</p>
      </div>
		</li>
		<li class="marke_1 mo_team_wrap">
			<img src="/image/sub/intro/team/make_1_5.jpg" alt="크리에이터 윤혜빈">
      <div class="font_wrap">
  			<p class="mo_tname">Creater</p>
  			<p class="mo_name">HyeBin, Yoon</p>
      </div>
		</li>
		<li class="marke_1 mo_team_wrap">
			<img src="/image/sub/intro/team/make_1_4.jpg" alt="크리에이터 문형빈">
      <div class="font_wrap">
  			<p class="mo_tname">Creater</p>
  			<p class="mo_name">HyungBin, Mun</p>
      </div>
		</li>
		<li class="marke_2 mo_team_wrap">
			<img src="/image/sub/intro/team/make_2_2.jpg" alt="크리에이터 정현석">
      <div class="font_wrap">
  			<p class="mo_tname">Creater</p>
  			<p class="mo_name">HyunSuk, Jung</p>
      </div>
		</li>
    <li class="marke_2 mo_team_wrap">
			<img src="/image/sub/intro/team/make_2_6.jpg" alt="크리에이터 안재민">
      <div class="font_wrap">
  			<p class="mo_tname">Creater</p>
  			<p class="mo_name">JaeMin, Ann</p>
      </div>
		</li>
		<!-- <li class="marke_2 mo_team_wrap">
			<img src="/image/sub/intro/team/make_2_5.jpg" alt="크리에이터 허희경">
      <div class="font_wrap">
  			<p class="mo_tname">Creater</p>
  			<p class="mo_name">HeeKyung, Heo</p>
      </div>
		</li> -->
		<li class="marke_2 mo_team_wrap">
			<img src="/image/sub/intro/team/make_2_1.jpg" alt="크리에이터 양선정">
      <div class="font_wrap">
  			<p class="mo_tname">Creater</p>
  			<p class="mo_name">SunJung, Yang</p>
      </div>
		</li>
		<!-- <li class="marke_2 mo_team_wrap">
			<img src="/image/sub/intro/team/make_2_3.jpg" alt="크리에이터 장은지">
      <div class="font_wrap">
  			<p class="mo_tname">Creater</p>
  			<p class="mo_name">EunJi, Jang</p>
      </div>
		</li> -->
		<li class="marke_2 mo_team_wrap">
			<img src="/image/sub/intro/team/make_2_4.jpg" alt="크리에이터 지소희">
      <div class="font_wrap">
  			<p class="mo_tname">Creater</p>
  			<p class="mo_name">SoHee, Ji</p>
      </div>
		</li>
		<li class="marke_3 mo_team_wrap">
			<img src="/image/sub/intro/team/make_3_4.jpg" alt="크리에이터 최종혁">
      <div class="font_wrap">
  			<p class="mo_tname">Creater</p>
  			<p class="mo_name">JongHyuk, Choi</p>
      </div>
		</li>
		<li class="marke_3 mo_team_wrap">
			<img src="/image/sub/intro/team/make_3_1.jpg" alt="크리에이터 황보주형">
      <div class="font_wrap">
  			<p class="mo_tname">Creater</p>
  			<p class="mo_name">JuHyung, Hwangbo</p>
      </div>
		</li>
		<li class="marke_3 mo_team_wrap">
			<img src="/image/sub/intro/team/make_3_2.jpg" alt="크리에이터 김승민">
      <div class="font_wrap">
  			<p class="mo_tname">Creater</p>
  			<p class="mo_name">SeongMin, Kim</p>
      </div>
		</li>
		<li class="marke_3 mo_team_wrap">
			<img src="/image/sub/intro/team/make_3_3.jpg" alt="크리에이터 박소희">
      <div class="font_wrap">
  			<p class="mo_tname">Creater</p>
  			<p class="mo_name">SoHee, Park</p>
      </div>
		</li>
    <li class="marke_3 mo_team_wrap">
      <img src="/image/sub/intro/team/make_2_7.jpg" alt="크리에이터 강정화">
      <div class="font_wrap">
        <p class="mo_tname">Creater</p>
        <p class="mo_name">JeongHwa, Kang</p>
      </div>
    </li>
    <li class="marke_3 mo_team_wrap">
      <img src="/image/sub/intro/team/make_1-2_1.jpg" alt="크리에이터 송성민">
      <div class="font_wrap">
        <p class="mo_tname">Creater</p>
        <p class="mo_name">SeongMin, Song</p>
      </div>
    </li>
    <li class="marke_3 mo_team_wrap">
      <img src="/image/sub/intro/team/make_1-2_2.jpg" alt="크리에이터 허원준">
      <div class="font_wrap">
        <p class="mo_tname">Creater</p>
        <p class="mo_name">WonJun, Heo</p>
      </div>
    </li>
    <li class="marke_3 mo_team_wrap">
      <img src="/image/sub/intro/team/make_1-2_3.jpg" alt="크리에이터 이주경">
      <div class="font_wrap">
        <p class="mo_tname">Creater</p>
        <p class="mo_name">JooKyoung, Lee</p>
      </div>
    </li>
    <li class="marke_3 mo_team_wrap">
      <img src="/image/sub/intro/team/make_1_8.jpg" alt="크리에이터 서보경">
      <div class="font_wrap">
        <p class="mo_tname">Creater</p>
        <p class="mo_name">BoKyoung, Seo</p>
      </div>
    </li>
		<li class="sales_1 mo_team_wrap">
			<img src="/image/sub/intro/team/sales_2.jpg" alt="컨설턴트 김무진">
      <div class="font_wrap">
  			<p class="mo_tname">consultant</p>
  			<p class="mo_name">MuJin, Kim</p>
      </div>
		</li>
    <li class="marke_3 mo_team_wrap">
      <img src="/image/sub/intro/team/make_3_5.jpg" alt="크리에이터 손현진">
      <div class="font_wrap">
        <p class="mo_tname">Creater</p>
        <p class="mo_name">HyeonJin, Son</p>
      </div>
    </li>
    <li class="marke_3 mo_team_wrap">
      <img src="/image/sub/intro/team/make_2_8.jpg" alt="크리에이터 김선영">
      <div class="font_wrap">
        <p class="mo_tname">Creater</p>
        <p class="mo_name">SeonYoung, Kim</p>
      </div>
    </li>
    <li class="marke_3 mo_team_wrap">
      <img src="/image/sub/intro/team/make_2_9.jpg" alt="크리에이터 정주은">
      <div class="font_wrap">
        <p class="mo_tname">Creater</p>
        <p class="mo_name">JuEun, Jeong</p>
      </div>
    </li>
    <li class="marke_3 mo_team_wrap">
      <img src="/image/sub/intro/team/make_2_10.jpg" alt="크리에이터 허지은">
      <div class="font_wrap">
        <p class="mo_tname">Creater</p>
        <p class="mo_name">JiEun, Heo</p>
      </div>
    </li>
		<li class="sales_2 mo_team_wrap">
			<img src="/image/sub/intro/team/manag_3.jpg" alt="경영지원부 류후성">
      <div class="font_wrap">
  			<p class="mo_tname">management team</p>
        <p class="mo_name">HuSung, Ryoo</p>
      </div>
    </li>
		<li class="sales_2 mo_team_wrap">
			<img src="/image/sub/intro/team/manag_2.jpg" alt="경영지원부 김미영">
      <div class="font_wrap">
  			<p class="mo_tname">management team</p>
        <p class="mo_name">MeYoung, Kim</p>
      </div>
    </li>
		<!-- <li class="sales_2 mo_team_wrap">
			<img src="/image/sub/intro/team/manag_4.jpg" alt="경영지원부 정자윤">
      <div class="font_wrap">
  			<p class="mo_tname">management team</p>
        <p class="mo_name">JaYoon, Jeong</p>
      </div>
    </li> -->
		<li class="sales_2 mo_team_wrap">
			<img src="/image/sub/intro/team/manag_1.jpg" alt="경영지원부 최윤영">
      <div class="font_wrap">
  			<p class="mo_tname">management team</p>
        <p class="mo_name">YoonYoung, Choi</p>
      </div>
    </li>
		<li class="sales_2 mo_team_wrap">
			<img src="/image/sub/intro/team/manag_5.jpg" alt="경영지원부 허지현">
      <div class="font_wrap">
  			<p class="mo_tname">management team</p>
        <p class="mo_name">JiHyun, Heo</p>
      </div>
    </li>
    <li class="sales_2 mo_team_wrap">
      <img src="/image/sub/intro/team/manag_6.jpg" alt="경영지원부 허민제">
      <div class="font_wrap">
        <p class="mo_tname">management team</p>
        <p class="mo_name">MinJe, Heo</p>
      </div>
    </li>
    <li class="sales_2 mo_team_wrap">
      <img src="/image/sub/intro/team/manag_7.jpg" alt="경영지원부 류지원">
      <div class="font_wrap">
        <p class="mo_tname">management team</p>
        <p class="mo_name">JiWon, Ryu</p>
      </div>
    </li>
    <li class="sales_2 mo_team_wrap">
      <img src="/image/sub/intro/team/manag_8.jpg" alt="경영지원부 최우정">
      <div class="font_wrap">
        <p class="mo_tname">management team</p>
        <p class="mo_name">UJeong, Choi</p>
      </div>
    </li>
		<li class="sales_2 mo_team_wrap">
			<img src="/image/sub/intro/team/2clap.jpg" alt="디자인투클랩 신욱수">
      <div class="font_wrap">
  			<p class="mo_tname">Design2Clap</p>
        <p class="mo_name">UkSu, Shin</p>
      </div>
    </li>
		<li class="sales_2 mo_team_wrap">
			<img src="/image/sub/intro/team/inte_1.jpg" alt="디자인투클랩 김대현">
      <div class="font_wrap">
  			<p class="mo_tname">Design2Clap</p>
        <p class="mo_name">DaeHyun, Kim</p>
      </div>
    </li>
    <li class="sales_2 mo_team_wrap">
      <img src="/image/sub/intro/team/inte_2.jpg" alt="디자인투클랩 남미소">
      <div class="font_wrap">
        <p class="mo_tname">Design2Clap</p>
        <p class="mo_name">MiSo, Nam</p>
      </div>
    </li>
  </ul>
</div>
<!-- </div> -->
<?php
include_once('../../tail.php');
?>
