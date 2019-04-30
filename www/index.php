<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

// if (G5_IS_MOBILE) {
    // include_once(G5_MOBILE_PATH.'/index.php');
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
<link href="https://fonts.googleapis.com/css?family=Raleway:900" rel="stylesheet">
<link href="http://vjs.zencdn.net/6.4.0/video-js.css" rel="stylesheet">
<script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
<?php
if(!G5_IS_MOBILE){
?>
<link href="/css/pcindex.css?t=19" rel="stylesheet">
<script src="/js/pcjs.js?t=1"></script>
<?} else {?>
<link href="/css/moindex.css?t=16" rel="stylesheet">
<script src="/js/mojs.js"></script>
<?}?>
<style>
.icon_box_4{background-image:url('/image/main/main_box_10_bg.png'); background-size:100%;}
</style>
<script type="text/javascript">
$(document).ready(function(){
  $(".open_btn").click(function(){
    $(this).fadeOut();
    $("#Bl_bak, .menu_ul_wrap, .close_btn").fadeIn();
  });
  $(".close_btn").click(function(){
    $(this).fadeOut();
    $("#Bl_bak, .menu_ul_wrap").fadeOut();
    $(".open_btn").fadeIn();
  });
});
function quick_move(val)
{
	var offset = $("." + val).offset().top;
	$('html, body').animate({scrollTop : offset}, 600);
}

setInterval(function(){
	$(".down_arrow").animate({
		bottom:"60"
	});
	$(".down_arrow").animate({
		bottom:"40"
	});
}, 500);

  $(window).resize(function(){
    resizeYoutube();
  });
  $(function(){
    resizeYoutube();
  });
  function resizeYoutube(){
     $("iframe").each(function(){
        if( /^https?:\/\/www.youtube.com\/embed\//g.test($(this).attr("src")) ){
           $(this).css("width","100%");
           $(this).css("height",Math.ceil( parseInt($(this).css("width")) * 1056 / 1878 ) + "px");
         }
     });
   }

</script>
<div id="loader">
  <div id="top"></div>
  <div id="line"></div>
  <div id="bottom"></div>
</div>

<div class="main_wrap">
  <div id="Bl_bak"></div>
  <div class="movie_wrap">
    <div class="menu_wrap">
      <ul class="menu_btn_wrap">
          <li class="menu_btn open_btn"><img src="/image/newmain/menu_btn.png" alt="상단메뉴버튼"></li>
          <li class="menu_btn close_btn"><img src="/image/newmain/close_btn.png" alt="상단메뉴버튼 닫기"></li>
          <li class="menu_logo"><img src="/image/newmain/main_logo.png" alt="상단 로고 이미지"></li>
      </ul>
      <nav>
        <ul class="menu_ul_wrap">
          <li class="intro menu_li"><a href="/sub/intro/what.php" title="회사소개페이지로 이동">회사소개</a></li>
          <li class="brand menu_li"><a href="/sub/brand/worth.php" title="브랜드컨설팅페이지로 이동">브랜드컨설팅</a></li>
          <li class="marke menu_li"><a href="/sub/marke/worth.php" title="마케팅컨설팅페이지로 이동">마케팅컨설팅</a></li>
          <li class="media menu_li"><a href="/sub/media/worth.php" title="미디어페이지로 이동">미디어 / VR파노라마 </a></li>
          <!-- <li class="media menu_li"><a href="/sub/vr/vrpage.php" title="VR파노라마페이지로 이동">VR파노라마</a></li> -->
          <li class="elec menu_li"><a href="/sub/elec/election.php" title="선거기획으로 이동">선거기획</a></li>
          <li class="work menu_li"><a href="/bbs/board.php?bo_table=mediapol" title="포토폴리오 게시판 으로이동">포트폴리오</a></li>
          <li class="online menu_li"><a href="/bbs/board.php?bo_table=online" title="상담하기 게시판 으로이동">상담하기</a></li>
        </ul>
      </nav>
    </div>
    <div class="movie_ment_left">
      <p>Change</br>want to</p>
      <p>B</p>
    </div>
	<div class="down_arrow">
		<a href="javascript:quick_move('sec_wrap');">
			<img src="/image/arrow2.png">
		</a>
	</div>
    <div class="movie_ment_right">
      <img src="/image/newmain/video_ment.png">
    </div>
    <div class="movie_di">

      <?php
      if(!G5_IS_MOBILE){
      ?>
        <iframe width="1878" height="1056" vq=highres src="https://www.youtube.com/embed/F5A7BjPY0N0?rel=0&autoplay=1&controls=0&showinfo=0&autohide=0&loop=1" frameborder="0" gesture="media" allowfullscreen></iframe>
      <!-- <video width="100%" autoplay loop="3" poster="/image/main/poster_bg.jpg">
				<source src="http://bsmov.cafe24.com/movie/BrothersSolution_PR.mp4" type="video/mp4">
			</video> -->
      <?} else {?>
        <!-- <video id="my-video" class="video-js" autoplay muted playsinline poster="/image/main/poster_bg.jpg" width="100%">
          <source src="http://bsmov.cafe24.com/movie/BrothersSolution_PR.mp4" type='video/mp4'>
        </video> -->
        <iframe width="1878" height="1056" vq=highres src="https://www.youtube.com/embed/F5A7BjPY0N0?rel=0&autoplay=1&controls=0&showinfo=0&autohide=0&loop=1" frameborder="0" gesture="media" allowfullscreen></iframe>
      <?}?>
    </div>
  </div>
  <div class="sec_wrap">
    <div class="big_logo"><img src="/image/newmain/main_big_logo.png" alt="배경에 큰로고이미지"></div>
    <div class="sec_cen_ment">
      <p class="cen_ment_1">BROTHERS.</p>
      <p class="cen_ment_2">당신이 기억될 수 있도록</br>새로운 마케팅 솔루션을 제안합니다</p>
      <p class="cen_ment_3">BROTHERS SOLUTION</p>
      <p class="cen_ment_4">브라더스 솔루션은 웹사이트, 모션그래픽, 브랜딩, 모바일 어플리케이션 등<br/>디지털 기반의 다양한 분야에서 활동하는 광고회사 입니다.</br> 우리는 태어난 이유를 찾기 위해 디자인을 하고 창작활동을 합니다.</br>아름답고, 이해하기 쉬우며, 지속 가능한 언어로 디자인합니다. </p>
      <a href="/bsjas.pdf" target="blank" title="새창으로 보기"><div class="jas_box">브라더스 솔루션 제안서</div></a>
    </div>
  </div>
  <div class="icon_wrap">
    <ul class="icon_1 icon_ul">
      <li class="icon_box_1 icon_box">
        <a href="/sub/brand/worth.php" title="브랜드컨설팅 페이지로 이동">
        <div class="border_div"></div>
          <img src="/image/newmain/main_box_1.png" class="box_img_1 boxs_img">
          <div class="icon_ment_wrap">
            <p>CONSULTING</p>
            <p>스토리를 통한 공감</br>공감에 의한 변화!</p>
          </div>
        </a>
      </li>
      <li class="icon_box_4 icon_box">
        <a href="/sub/intro/team.php" title="팀소개 페이지로 이동">
        <div class="border_div"></div>
          <img src="/image/main/main_box_10.png" class="box_img_4 boxs_img">
          <div class="icon_ment_wrap">
            <p>team</p>
            <p>강력한 팀웍이</br>혁신을 창조한다.</p>
          </div>
        </a>
      </li>
      <li class="icon_box_7 icon_box">
        <a href="/sub/intro/what.php" title="회사소개 페이지로 이동">
          <div class="border_div"></div>
          <img src="/image/newmain/main_box_7.png" class="box_img_7 boxs_img">
          <div class="icon_ment_wrap">
            <p>What we do</p>
            <p>성공, 그 이상의</br>새로운 가치를 실현하다.</p>
          </div>
        </a>
      </li>
    </ul>
    <ul class="icon_2 icon_ul">
      <li class="icon_box_2 icon_box">
        <a href="/sub/marke/worth.php" title="마케팅 페이지로 이동">
        <div class="border_div"></div>
          <img src="/image/main/main_box_11.png" class="box_img_2 boxs_img">
          <div class="icon_ment_wrap">
            <p>marketing</p>
            <p>행동의 변화를 일으키다</br>이것이 마케팅의 힘!</p>
          </div>
        </a>
      </li>
      <li class="icon_box_5 icon_box">
        <a href="/bbs/board.php?bo_table=gall" title="갤러리 페이지로 이동">
        <div class="border_div"></div>
          <img src="/image/newmain/main_box_5.png" class="box_img_5 boxs_img">
          <div class="icon_ment_wrap">
            <p>Story</p>
            <p>백문이 불여 일견!</p>
          </div>
        </a>
      </li>
      <li class="icon_box_8 icon_box">
        <a href="/sub/brand/process.php" title="브랜드메뉴 프로세스페이지로 이동">
        <div class="border_div"></div>
          <img src="/image/newmain/main_box_8.png" class="box_img_8 boxs_img">
          <div class="icon_ment_wrap">
          <p>PROCESS</p>
          <p>불타는 열정</br>미친 실행력!</p>
          </div>
        </a>
      </li>
    </ul>
    <ul class="icon_3 icon_ul">
      <li class="icon_box_3 icon_box">
        <a href="/sub/media/worth.php" title="미디어 게시판으로 이동">
        <div class="border_div"></div>
          <img src="/image/newmain/main_box_3.png" class="box_img_3 boxs_img">
          <div class="icon_ment_wrap">
          <p>media</p>
          <p>눈과 귀를 사로잡아</br>마음을 이끌다</p>
          </div>
        </a>
      </li>
      <li class="icon_box_6 icon_box">
        <a href="/sub/marke/process.php" title="마케팅 프로세스 게시판으로 이동">
        <div class="border_div"></div>
          <img src="/image/newmain/main_box_6.png" class="box_img_6 boxs_img">
          <div class="icon_ment_wrap">
          <p>PUBLIC</p>
          <p>브라더스 솔루션의</br>인사이트</p>
          </div>
        </a>
      </li>
      <li class="icon_box_9 icon_box">
        <a href="/bbs/board.php?bo_table=mediapol" title="미디어 포토폴리오 게시판으로 이동">
        <div class="border_div"></div>
          <img src="/image/newmain/main_box_9.png" class="box_img_9 boxs_img">
          <div class="icon_ment_wrap">
            <p>work</p>
            <p>성공하는 컨텐츠의 법칙!</p>
          </div>
        </a>
      </li>
    </ul>
  </div>
  <div class="main_bot_box">
    <div class="bot_left_box">
  	  <a href="/bbs/board.php?bo_table=online" title="상담하기 게시판으로 이동하는 버튼">
        <img src="/image/newmain/main_cont.png" style="" alt="상담신청 배경이미지">
        <ul class="left_ul">
          <li class="left_li_ment">상담신청</li>
          <li class="left_un_bar"></li>
        </ul>
  	  </a>
    </div>
    <div class="bot_right_box">
      <div class="bot_map">
        <ul>
          <li class="location_ment">
            <img src="/image/newmain/location_icon.png" alt="">
            <p>부산시 해운대구 센텀동로 49, 아이피파빌리온 7층</p>
          </li>
          <li class="pc_map">
            <div id="daumRoughmapContainer1510799439409" class="root_daum_roughmap root_daum_roughmap_landing map_wid" style="width:100%;"></div>

            <script charset="UTF-8" class="daum_roughmap_loader_script" src="http://dmaps.daum.net/map_js_init/roughmapLoader.js"></script>

            <script charset="UTF-8">
            	new daum.roughmap.Lander({
            		"timestamp" : "1510799439409",
            		"key" : "khh7"
            	}).render();
            </script>
          </li>
		  <li class="mo_map">
			<table cellpadding="0" cellspacing="0" width="437">
				<tr>
					<td style="border:1px solid #cecece;">
						<a href="https://map.naver.com/?mpx=08350520%3A35.1733483%2C129.1303731%3AZ12%3A0.0160417%2C0.0082852&searchCoord=c9d03cbf35c5291169a02dc2f69756366df0b59d05336508967a3b4c41cb8f32&query=67aA7IKw6rSR7Jet7IucIO2VtOyatOuMgOq1rCDshLzthYDrj5nroZwgNDk%3D&menu=location&tab=1&lng=bb51ce7cc2d58e2d047e2b7c65d58a2e&mapMode=0&lat=4f2560faa0f148f7a898f8d5ef461c82&dlevel=12&enc=b64" target="_blank">
							<img src="http://prt.map.naver.com/mashupmap/print?key=p1512540118690_-1436029346" width="435" height="333" alt="지도 크게 보기" title="지도 크게 보기" border="0" style="vertical-align:top;"/>
						</a>
					</td>
				</tr>
				<tr>
					<td>
						<table cellpadding="0" cellspacing="0" width="100%">
							<tr>
								<td height="30" bgcolor="#f9f9f9" align="left" style="padding-left:9px; border-left:1px solid #cecece; border-bottom:1px solid #cecece;">
									<span style="font-family: tahoma; font-size: 11px; color:#666;">2017.12.6</span>&nbsp;
									<span style="font-size: 11px; color:#e5e5e5;">|</span>&nbsp;
									<a style="font-family: dotum,sans-serif; font-size: 11px; color:#666; text-decoration: none; letter-spacing: -1px;" href="https://map.naver.com/?mpx=08350520%3A35.1733483%2C129.1303731%3AZ12%3A0.0160417%2C0.0082852&searchCoord=c9d03cbf35c5291169a02dc2f69756366df0b59d05336508967a3b4c41cb8f32&query=67aA7IKw6rSR7Jet7IucIO2VtOyatOuMgOq1rCDshLzthYDrj5nroZwgNDk%3D&menu=location&tab=1&lng=bb51ce7cc2d58e2d047e2b7c65d58a2e&mapMode=0&lat=4f2560faa0f148f7a898f8d5ef461c82&dlevel=12&enc=b64" target="_blank">지도 크게 보기</a>
								</td>
								<td width="98" bgcolor="#f9f9f9" align="right" style="text-align:right; padding-right:9px; border-right:1px solid #cecece; border-bottom:1px solid #cecece;">
									<span style="float:right;">
										<span style="font-size:9px; font-family:Verdana, sans-serif; color:#444;">&copy;&nbsp;</span>&nbsp;
										<a style="font-family:tahoma; font-size:9px; font-weight:bold; color:#2db400; text-decoration:none;" href="http://www.nhncorp.com" target="_blank">NAVER Corp.</a>
									</span>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		  </li>
          <li class="las_box">
            <ul>
              <?php
              if(!G5_IS_MOBILE){
              ?>
              <li class="las_left las_li"><?php echo latest('htu', 'news', 1, 100, '', '437,1'); ?> </li>
              <li class="las_right las_li"><?php echo latest('htu', 'publ', 1, 100, '', '437,1'); ?> </li>
              <?} else {?>
              <li class="las_left las_li"><?php echo latest("webzine","news", 1, 25); ?> </li>
              <li class="las_right las_li"><?php echo latest("webzine","publ", 1, 25); ?> </li>
              <?}?>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php
include_once(G5_PATH.'/tail.php');
?>
