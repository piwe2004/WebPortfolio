<?php
include_once('../../common.php');
include_once('../../head.php');

$np = vrpage;

?>
<link href="https://fonts.googleapis.com/css?family=Raleway:700" rel="stylesheet">

<style>
.sub_wrap{width:100%; min-width:1200px; margin:0 auto 120px;}
  /*상단 효과부분*/
  .sub_topbg{ height:687px; background-image: url(/image/sub/vr/vr_img_1.png); background-repeat: no-repeat;}
  .sub_mewrap{position: relative; left:70px; top:30px; overflow:hidden; width:80%; margin:0;}
  .sub_mewrap span{font-size:25px; color:#fff; font-weight:900; font-family: 'MoskBold700'; letter-spacing: -1px; left:50px; float:left;}
  .sub_mewrap span:nth-child(2){display:block; width:100px; background-color:#fff; height:3px; position: absolute; top:15px; left:210px;}
  .sub_top_me_wrap{width:1200px; margin:0 auto;}


  .cen_menwrap{width:400px; height:400px; margin:80px auto; padding:30px; position:relative; box-sizing: border-box;}
  .sp_box{width:100%; height:100%; margin:auto; position:relative;}
  .sp_box span{position:absolute; padding:3.5%; width:33%; text-align:center; font-size:4rem; font-weight:bold; letter-spacing: 25px; font-family: 'Raleway', sans-serif; display: none; color:#fff;}
  .sp_box span:nth-child(1){top:0; left:0;}
  .sp_box span:nth-child(2){top:0; left:33%;}
  .sp_box span:nth-child(3){top:0; left:66%;}
  .sp_box span:nth-child(4){top:33.33%; left:0;}
  .sp_box span:nth-child(5){top:33.33%; left:33.33%;}
  .sp_box span:nth-child(6){top:33.33%; left:66.66%;}
  .sp_box span:nth-child(7){top:66.66%; left:0;}
  .sp_box span:nth-child(8){top:66.66%; left:22%;}
  .sp_box span:nth-child(9){top:66.66%; left:44%;}
  .sp_box span:nth-child(10){top:66.66%; left:66%;}

  .lines{width: 0;height: 0; position: absolute;z-index: 22; -webkit-transition: 800ms cubic-bezier(0, 0.4, 0.5, 1);transition: 800ms cubic-bezier(0, 0.4, 0.5, 1);border: 0px solid #fff;}
  .line_1{width:0%; left: 0;top: 0;height: 1px;border-top-width: 1px;}
  .line_2{height:0%; right: 0;top: 0;border-right-width: 1px;}
  .line_3{width:0%; right: 0;bottom: 0;height: 1px;border-bottom-width: 1px;}
  .line_4{height:0%; left: 0;bottom: 0;border-left-width: 1px;}
  /*상단 효과부분*/


  .sj_top{width:100%; background:#f8f8f8; padding:40px 0; }
  .sj_top span {color:#0e0e0e; }
    .sj_topwrap{width:1200px; margin:0 auto;}

  .sj_top_ment{margin-left: 20px;}
  .sj_top_ment div {width:167px; height: 10px; background:#3ab6c5; margin-top: 10px;}
  .sj_mid_ment{margin:40px 20px;}
  .sj_mid_ment span{font-family:'MoskExtraBold800';font-size:5rem; font-weight:bold; letter-spacing:-1px; line-height:85px;}
  .sj_bot_ment{margin-left: 20px;}
  .sj_bot_ment > p{font-family:'Nanum Barun Gothic', sans-serif; font-weight:300; font-size:0.9rem; line-height:24px;}
  .sj_bot_ment > p > span{font-weight:900;}

  .sj_mid{margin:70px 0; text-align: center;}
  .mid_si_fir{font-size:3.4rem; font-weight:bold; letter-spacing:-0.5px; margin:20px auto; font-family:'Nanum Barun Gothic', sans-serif; }
  .mid_sj{margin-bottom:70px;}
  .mid_si_sec{font-size:0.9rem; font-weight:300; line-height: 24px; font-family:'Nanum Barun Gothic', sans-serif;}
  .mid_si_sec > span{font-weight:900;}
  .vr_bot_sm{font-size:14px !important; font-weight:600!important; color:#bbbbbb !important;}


    @media only screen and (min-width:641px)
  {
    body{overflow: hidden; min-width:1200px;}
      .sir_wrap{width:850px; margin:100px auto; height:460px;  position:relative;}
      .sir_div{width:460px; height:460px; top:0; position:absolute;; border-radius: 50%; box-sizing: border-box; padding:100px 0; float:left;}
      #left_sir{background:#e6e5e5; left:10px;}
      .sir_fir{font-size:27px; font-weight:bold; letter-spacing:-2px;}
      #left_sir > .sir_fir::after{content:''; display:block; width:40px; height:2px; background:#000; margin:20px auto 30px;}
      .sir_sec{font-size:16px; letter-spacing:-1px; font-weight: 300; line-height:30px;}
      .sir_sec > span{font-weight:900;}
      #right_sir{background:rgba(33,155,169,0.65); top:0px; left:410px;}
      #right_sir .sir_fir{color:#fff;}
      #right_sir .sir_fir::after{content:''; display:block; width:40px; height:2px; background:#fff; margin:20px auto 30px;}
      #right_sir > .sir_sec{font-weight: 400; line-height:35px; color:#fff;}

      .sj_bot{width:1200px; margin:250px auto 0; text-align: center; position:relative;}
      .sj_bot .sj_ment{margin-bottom:70px;}
      /* .sj_bot p{color:#444552; font-size:19px; font-weight:900; margin:20px 0;} */

      .vr_tit_box{width:336px; height:418px; box-sizing: border-box; padding:32px 45px; border:5px solid #181818;text-align: left; position: relative; margin:150px 0 70px;}
      .vr_tit_tit{font-size:42px; font-weight:900; margin:0 !important; letter-spacing:-2px;}
      .vr_tit_tit::after{content:""; display: block; width:54px; height:2px; margin-top:34px;background:#181818; }
      .vr_tit_con{font-size:22px; position: absolute; bottom:45px; margin:0!important; letter-spacing:-1px;}
      .vr_wrap{width:1200px; margin:0 auto 100px; overflow: hidden; text-align:left; position:relative;}
      .vr_wrap iframe{width:820px; height:477px;}
      .if_right{float:right;}
      .if_left{float:left;}
      .vr_posi_img{position:relative; right:40px; text-align: center;}
      .vr_wrap_info{position:absolute; bottom:0;}
      .info_left{left:50px;}
      .info_right{right:50px;}
      .vr_info_sbj_en{font-size:22px;}
      .vr_info_sbj_en > span{font-weight:900;}
      .vr_info_sbj_en::before{content:""; display:block; width:46px; height:2px; background:#181818; margin-bottom:40px;}
      .vr_info_sbj_kr{font-size:38px; font-weight:900; letter-spacing:-1px;}
      .vr_info_sbj_kr > span{font-size:25px; font-weight:300;}
      .vr_info_con1{font-size:16px; margin-bottom:80px; line-height:25px;}
      .vr_info_con1 > span{background:#333333; color:#fff;}
      .vr_info_con2{font-size:16px;}
      .bot_line{width:15px; height:115px; background:#252525; position: absolute; bottom:-120px; right:-150px;}
      .po_img{position:absolute;}
      .po_img1{top:1350px; right:-250px;}
      .po_img2{top:2320px; left:-150px;}
      .po_img3{bottom:1350px; right:-50px;}
  }
  @media only screen and (max-width:640px)
{
  .sj_mid_ment{margin:6% 4.5%;}
	.cen_menwrap{width:78%; height:271px; margin:11% auto; padding:3%;}
	.sp_box span{font-size:2.5rem; }
	.sub_wrap{width:100%; max-width:960px; margin-bottom:0%; min-width:0; overflow: hidden;}
	.sub_top_me_wrap{max-width:960px; width:100%; margin:0;}
	.sub_topbg{max-width:960px; height:482px;}
	.sub_mewrap{width:90%; left:11%;}
	.sub_mewrap span:nth-child(2){width:70px}
	.sj_mid_ment span{font-size:3rem; line-height:58px;}
	.sj_top{max-width:960px;}
	.sj_topwrap{width:100%; max-width:960px;}
  .sj_bot_ment{width:90%; margin:0 auto;}

  .sir_wrap{width:95%; max-width:460px; margin:0 auto; overflow: hidden;}
  .sir_div{width:330px; height:330px; margin:0 auto;  border-radius: 50%; box-sizing: border-box;}
  #left_sir{background:#e6e5e5; margin-bottom:10%;  padding:18% 0;}
  .sir_fir{font-size:18px; font-weight:bold; letter-spacing:-2px;}
  #left_sir > .sir_fir::after{content:''; display:block; width:40px; height:2px; background:#000; margin:3% auto 5%;}
  .sir_sec{font-size:16px; letter-spacing:-1px; font-weight: 300; line-height:20px;}
  .sir_sec > span{font-weight:900;}
  #right_sir{background:rgba(33,155,169,0.65);  padding:15% 0;}
  #right_sir .sir_fir{color:#fff;}
  #right_sir .sir_fir::after{content:''; display:block; width:40px; height:2px; background:#fff; margin:3% auto 5%;}
  #right_sir > .sir_sec{font-weight: 400; line-height:30px; color:#fff;}

  .mid_si_sec{width:90%; margin:0 auto;}

  /* .vr_wrap{width:95%; max-width:640px; margin:0 auto 5%; overflow: hidden; position:relative;}
  .vr_wrap iframe{width:100%; height:300px;} */

  #link_img{width:100%; height:100%; position:absolute;}

  .sj_bot{width:90%; margin:0 auto; text-align: center; position: relative;}
  /* .sj_bot p{color:#dadbdb; font-size:19px; font-weight:900; margin:20px 0;} */

  .vr_tit_box{width:95%;  box-sizing: border-box; padding:4% 5%; border:5px solid #181818;text-align: left; position: relative; margin:10% auto 7%;}
  .vr_tit_tit{font-size:25px; font-weight:900; margin:0 !important; letter-spacing:-2px;}
  .vr_tit_tit::after{content:""; display: block; width:54px; height:2px; margin-top:4%;background:#181818; }
  .vr_tit_con{font-size:15px; margin:3% 0 0!important; letter-spacing:-1px;}
  .vr_wrap{width:100%; margin:0 auto 20%; overflow: hidden; text-align:left; position:relative;}
  .vr_wrap iframe{width:100%; height:300px;}
  /* .if_right{float:right;}
  .if_left{float:left;} */
  .vr_posi_img{position:relative; text-align: center; width:100%; display: none;}
  .vr_posi_img > img{width:30%;}
  /* .vr_wrap_info{position:absolute; bottom:0;} */
  /* .info_left{left:50px;}
  .info_right{right:50px;} */
  .vr_info_sbj_en{font-size:15px;}
  .vr_info_sbj_en > span{font-weight:900;}
  /* .vr_info_sbj_en::before{content:""; display:block; width:46px; height:2px; background:#181818; margin-bottom:40px;} */
  .vr_info_sbj_kr{font-size:28px; font-weight:900; letter-spacing:-1px;}
  .vr_info_sbj_kr > span{font-size:15px; font-weight:300;}
  .vr_info_con1{font-size:14px; margin-bottom:4%;}
  .vr_info_con1 > span{background:#333333; color:#fff;}
  .vr_info_con2{font-size:14px;}
  .bot_line{width:15px; height:115px; background:#252525; position: absolute; bottom:-120px; right:-150px; display: none;}
  .po_img{position:absolute; z-index: -1; width:20%; display: none;}
}

</style>

<script type="text/javascript">
  $(document).ready(function(){

    setTimeout("show_time()", 500);

    $(".line_1").animate({
      width:"100%"
    });
    $(".line_2").animate({
      height:"100%"
    })
    ;$(".line_3").animate({
      width:"100%"
    })
    ;$(".line_4").animate({
      height:"100%"
    });

  });
    function show_time(){
      $(".sp_box").children("span:eq(0)").delay(500).fadeIn(1000);
      $(".sp_box").children("span:eq(1)").delay(800).fadeIn(1000);
      $(".sp_box").children("span:eq(2)").delay(500).fadeIn(1000);
      $(".sp_box").children("span:eq(3)").delay(700).fadeIn(1000);
      $(".sp_box").children("span:eq(4)").delay(700).fadeIn(1000);
      $(".sp_box").children("span:eq(5)").delay(900).fadeIn(1000);
      $(".sp_box").children("span:eq(6)").delay(1000).fadeIn(1000);
      $(".sp_box").children("span:eq(7)").delay(800).fadeIn(1000);
      $(".sp_box").children("span:eq(8)").delay(900).fadeIn(1000);
      $(".sp_box").children("span:eq(9)").delay(900).fadeIn(1000);
    }
</script>
<script>
if(wwidth < 640){
	$(document).ready(function(){
		$(".mid_si_sec").children("br").remove();
		$(".vr_info_con2").children("br").remove();
	});
}
</script>
<div class="sub_wrap">
  <div class="sub_topbg">
    <?php
      include_once('./cate.php');
    ?>
    <div class="sub_top_me_wrap">
      <div class="sub_mewrap">
        <span class="sub_top_ment">VIRTUAL REALITY</span>
        <span>&nbsp;&nbsp;&nbsp;</span>
      </div>
      <div class="cen_menwrap">
        <div class="lines line_1"></div>
        <div class="lines line_2"></div>
        <div class="lines line_3"></div>
        <div class="lines line_4"></div>
        <div class="sp_box">
          <span>진</span>
          <span>화</span>
          <span>된</span>
          <span>기</span>
          <span>업</span>
          <span>의</span>
          <span>프</span>
          <span>로</span>
          <span>모</span>
          <span>션</span>
        </div>
      </div>
    </div>
  </div>
  <div class="sj_top">
   <div class="sj_topwrap">
        <div class="sj_top_ment">
          <div></div>
        </div>
        <div class="sj_mid_ment">
          <span>Virtual<br>Reality</span>
        </div>
        <div class="sj_bot_ment">
          <p><span>VR 파노라마는 Virtual Reality</span>의 약자로 가상현실을 뜻합니다.<br/>웹상에서 파노라마 이미지를 이용해  3D 효과로 사용자가 마치 그 장소에 있는 것처럼 체험하게 해주는 기술 입니다.<br/>화면에서 원하는 부분을 <span>확대해서 보거나 회전해서</span> 주변을 자유롭게  볼 수 있어 마치, 사용자가 <span>실제 현장에서 직접 둘러보는 느낌</span>을 갖게 합니다.</p>
        </div>
    </div>
  </div>
  <div class="sj_mid">
    <div class="mid_sj">
      <p class="mid_si_fir">VR Panorama</p>
      <p class="mid_si_sec">화면에서 원하는 부분을 확대해서 보거나 180도 또는 <span>360도 회전</span>해서 주변을 둘러 볼 수 있습니다.<br/>화면에 마우스를 드레그 하면 화면 또한 같은 방향으로 회전하기 때문에<br/>마치, 사용자가 <span>실제 현장에서 직접 둘러보는 느낌</span>을 갖게 합니다.</p>
    </div>
    <div class="sir_wrap">
      <div class="sir_div" id="left_sir">
        <p class="sir_fir">VR Panorama 특징</p>
        <p class="sir_sec"><span>VR Panorama기술은</span><br/>건설, 주거, 상업공간, 의료공간 등의<br/>홍보 및 정보와 기업내 관리운용시스템과<br/>같은 복잡한 피드백 시스템을 가진<br/>솔루션에 이르기까지 <span>현 시대의 다양한<br/>분야에서 활용되고 있습니다.</span></p>
      </div>
      <div class="sir_div" id="right_sir">
        <p class="sir_fir">적용분야</p>
        <p class="sir_sec">
          관광안내<br/>대학캠퍼스 안내<br/>기업체홍보<br/>항공 지리정보<br/>각종 축제 행사홍보 등<br/>
        </p>
      </div>
    </div>
  </div>
  <div class="sj_bot">
    <div class="vr_tit_box">
      <p class="vr_tit_tit">VR<br/>PANORAMA</p>
      <p class="vr_tit_con">VR로 보는 새로운 세상</p>
    </div>
    <div class="vr_wrap">
      <div class="vr_posi_img">
        <img src="/image/sub/vr/ltrb_line.jpg" alt="">
      </div>
      <!-- <?//if(G5_IS_MOBILE){?>
        <a href="https://roundme.com/tour/238371/view/683974/"><div id="link_img"></div></a>
      <?//}?>
      <iframe src='https://roundme.com/embed/238371/683974' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->
      <iframe class="if_right" src='/vrpage/BS/tour.html' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      <div class="vr_wrap_info info_left">
        <p class="vr_info_sbj_en"><span>Brothers</span> Solution</p>
        <p class="vr_info_sbj_kr">브라더스솔루션</p>
        <p class="vr_info_con1">비즈니스 성공을 위한<br/><span>차별화된 아이덴티티를</span> 제공합니다.</p>
        <p class="vr_info_con2">브라더스 솔루션은<br/>VR투어 프로그램 입니다.<br/>VR투어 프로그램은 VR파노라마와 달리<br/>저장된 여러장소를 볼 수 있습니다.</p>
      </div>
    </div>
    <div class="vr_wrap">
      <div class="vr_posi_img">
        <img src="/image/sub/vr/lbrt_line.jpg" alt="">
      </div>
      <iframe class="if_left" src='/vrpage/golmok/index.html' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      <div class="vr_wrap_info info_right">
        <p class="vr_info_sbj_en"><span>Golmok</span></p>
        <p class="vr_info_sbj_kr">골목<span>두번째 이야기</span></p>
        <p class="vr_info_con1">김해 먹자골목안에<br/><span>“골목”이 생기다</span></p>
        <p class="vr_info_con2">골목은 VR파노라마 입니다.<br/>VR파노라마는 한장소를<br/>좌우 360도 상하 180원하시는<br/>방향으로 회전하면서 보실수 있습니다.</p>
      </div>
    </div>
    <div class="vr_wrap">
      <div class="vr_posi_img">
        <img src="/image/sub/vr/ltrb_line.jpg" alt="">
      </div>
      <iframe class="if_right" src='http://medionmso.com/vrpage/vtour/tour.html' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      <div class="vr_wrap_info info_left">
        <p class="vr_info_sbj_en"><span>Rebom</span></p>
        <p class="vr_info_sbj_kr">래봄병원</p>
        <p class="vr_info_con1">봄은 희망입니다.<br/><span>당신의 봄이 다시, 옵니다.</span></p>
        <p class="vr_info_con2">래봄병원은<br/>VR투어 프로그램 입니다.<br/>VR투어 프로그램은 VR파노라마와 달리<br/>저장된 여러장소를 볼 수 있습니다.</p>
      </div>
    </div>
    <div class="vr_wrap">
      <div class="vr_posi_img">
        <img src="/image/sub/vr/lbrt_line.jpg" alt="">
      </div>
      <iframe class="if_left" src='/vrpage/youth/index.html' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      <div class="vr_wrap_info info_right">
        <p class="vr_info_sbj_en"><span>Cheongchun jokbal</span></p>
        <p class="vr_info_sbj_kr">청춘족발</p>
        <p class="vr_info_con1">족발계의 신세계<br/><span>청춘족발</span></p>
        <p class="vr_info_con2">청춘족발은 VR파노라마 입니다.<br/>VR파노라마는 한장소를<br/>좌우 360도 상하 180원하시는<br/>방향으로 회전하면서 보실수 있습니다.</p>
      </div>
    </div>
    <div class="vr_wrap">
      <div class="vr_posi_img">
        <img src="/image/sub/vr/ltrb_line.jpg" alt="">
      </div>
      <iframe class="if_right" src='/vrpage/artua/index.html' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      <div class="vr_wrap_info info_left">
        <p class="vr_info_sbj_en"><span>Artois</span></p>
        <p class="vr_info_sbj_kr">아르투아</p>
        <p class="vr_info_con1">천연을 사랑하는<br/><span>화장품</span></p>
        <p class="vr_info_con2">피부개선에 도움을 위해 <span>좋은성분,<br/>안전한 등급의 원료</span>만 사용하겠습니다.</p>
      </div>
    </div>
    <div class="vr_wrap">
      <div class="vr_posi_img">
        <img src="/image/sub/vr/ltrb_line.jpg" alt="">
      </div>
      <iframe class="if_left" src='/vrpage/mons/index.html' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      <div class="vr_wrap_info info_right">
        <p class="vr_info_sbj_en"><span>MonsTerace</span></p>
        <p class="vr_info_sbj_kr">몬스테라스</p>
        <p class="vr_info_con1">테라스가 이쁜<br/><span>카페</span></p>
        <p class="vr_info_con2">몬스테라스는 VR파노라마 입니다.<br/>VR파노라마는 한장소를<br/>좌우 360도 상하 180원하시는<br/>방향으로 회전하면서 보실수 있습니다.</p>
      </div>
    </div>
      <div class="bot_line">
      </div>
      <div class="po_img po_img1">
        <img src="/image/sub/vr/dot_tri.jpg" alt="">
      </div>
      <div class="po_img po_img2">
        <img src="/image/sub/vr/line_sir.jpg" alt="">
      </div>
      <div class="po_img po_img3">
        <img src="/image/sub/vr/tri_line.jpg" alt="">
      </div>

    <script>
      $(document).ready(function(){
        $(".js-controls").trigger('click');
      });
    </script>
  </div>
</div>
<?php
include_once('../../tail.php');
?>
