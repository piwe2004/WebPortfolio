<?php
include_once('../../common.php');
include_once('../../head.php');

$np = proc;

include_once('./cate.php');
?>
<link href="https://fonts.googleapis.com/css?family=Raleway:700" rel="stylesheet">
<style>
ul{padding: 0; margin:0;}
.sub_wrap{width:100%; min-width:1200px; margin:0 auto;}
  /*상단 효과부분*/
  .sub_topbg{ height:687px; background-image: url("/image/sub/media/proc_img_1_1.jpg"); background-repeat: no-repeat;}
  .sub_mewrap{position: relative; left:70px; top:30px; overflow:hidden; width:300px; margin:0;}
  .sub_mewrap span{font-size:25px; color:#fff; font-weight:900; font-family: 'MoskBold700'; letter-spacing: -1px; left:50px; float:left;}
  .sub_mewrap span:nth-child(2){display:block; width:100px; background-color:#fff; height:3px; position: absolute; top:15px; left:150px;}
  .sub_top_me_wrap{width:1200px; margin:0 auto;}

  .cen_menwrap{width:400px; height:400px; margin:80px auto; padding:30px; position:relative; box-sizing: border-box;}
  .sp_box{width:100%; height:100%; margin:auto; position:relative;}
  .sp_box span{position:absolute; padding:3.5%; width:33%; text-align:center; font-size:4rem; font-weight:bold; letter-spacing: 25px; font-family: 'Raleway', sans-serif; display: none; color:#fff;}
  .sp_box span:nth-child(1){top:0; left:0; text-align: center;}
  .sp_box span:nth-child(2){top:0; left:33%;}
  .sp_box span:nth-child(3){top:0; left:66%; }
  .sp_box span:nth-child(4){top:33.33%; left:0;}
  .sp_box span:nth-child(5){top:33.33%; left:33.33%;}
  .sp_box span:nth-child(6){top:33.33%; left:66.66%;}
  .sp_box span:nth-child(7){top:66.66%; left:0;}
  .sp_box span:nth-child(8){top:66.66%; left:33.33%;}
  .sp_box span:nth-child(9){top:66.66%; left:66.66%;}

  .lines{width: 0;height: 0; position: absolute;z-index: 22; -webkit-transition: 800ms cubic-bezier(0, 0.4, 0.5, 1);transition: 800ms cubic-bezier(0, 0.4, 0.5, 1);border: 0px solid #fff;}
  .line_1{width:0%; left: 0;top: 0;height: 1px;border-top-width: 1px;}
  .line_2{height:0%; right: 0;top: 0;border-right-width: 1px;}
  .line_3{width:0%; right: 0;bottom: 0;height: 1px;border-bottom-width: 1px;}
  .line_4{height:0%; left: 0;bottom: 0;border-left-width: 1px;}
  /*상단 효과부분*/

  .cen_ment{width:1000px;; text-align:center; margin:70px auto; }
  .ma_me{ font-family: 'MoskBold700'; font-size:1.3rem; color:#3ab6c5; padding:20px 0; }
  .sub_ment{font-size:0.8rem; color:#747674;}

  .sjt_wrap{width:1000px; margin:0 auto; overflow:hidden; margin-bottom: 70px;}
  .sjt_ul{float:left;  text-align:center;}
  .sjt_ul li:nth-child(2){font-size:0.8rem;  color:#747674;}
  .bot_img{width:1000px; margin:0 auto; text-align:center; padding-left:70px;}

  .sjt_1{margin-left:20px;}
  .sjt_2{margin-left:33px;}
  .sjt_3{margin-left:32px;}

  .sjt_wrap_mo{display: none;}

  @media only screen and (max-width:640px)
{
	.sp_box span:nth-child(1){text-align:center;}
	.cen_menwrap{width:78%; height:271px; margin:11% auto; padding:3%;}
	.sub_mewrap span{font-size:1.2rem;}
	.sub_mewrap span:nth-child(2){left:100px;top:10px;}
	.sub_mewrap{width:45%; left:11%;}
	.sj_mid_ment{margin:10px 20px;}
  .sp_box span{font-size:2.5rem; }
	.sj_mid{margin:10% 0;}
	.sub_topbg{max-width:960px; height:439px;}
	.mid_top_ment{width:95%; margin:0 auto;}
  .sub_wrap{width:100%; max-width:960px; margin:0; min-width:0;}
  .sub_top_me_wrap{max-width:960px; width:100%; margin:0;}
  .cen_ment{width: 100%; max-width: 960px; margin:3% 0;}
  .sjt_wrap{display:none;}
  .sjt_wrap_mo{display: block; width:300px; margin:15% auto;}
  .mo_sjt{margin-bottom:7%;}
  .mo_sjt_tit{overflow:hidden; float:left; font-size:1.5rem; font-weight:bold; color:#3bb6c5; margin-right:4%; }
  .mo_sjt_suj{overflow:hidden; width:77%; text-align:left; color:#747674; font-size: 0.9rem; line-height: 16px; padding-top:1%;}
  .mo_sjt_img{text-align:center; padding:9% 0;}
  .bot_img{display: none;}
  .sub_ment{font-size:0.83rem; padding:0 5%;}
  .sjt_ul{float:none;}
  .ma_me{font-size:2rem; padding:8% 0;}
}

</style>

<script>
if(wwidth < 640){
	$(document).ready(function(){
		$(".sub_ment").children("br").remove();
	});
}
</script>

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
      $(".sp_box").children("span:eq(9)").delay(700).fadeIn(1000);
    }
</script>
<div class="sub_wrap">
  <div class="sub_topbg">
    <?php
      include_once('./cate.php');
    ?>
    <div class="sub_top_me_wrap">
      <div class="sub_mewrap">
        <span class="sub_top_ment">PROCESS</span>
        <span>&nbsp;&nbsp;&nbsp;</span>
      </div>
      <div class="cen_menwrap">
        <div class="lines line_1"></div>
        <div class="lines line_2"></div>
        <div class="lines line_3"></div>
        <div class="lines line_4"></div>
        <div class="sp_box">
          <span>최</span>
          <span>고</span>
          <span>의</span>
          <span>퀄</span>
          <span>리</span>
          <span>티</span>
          <span>보</span>
          <span>&nbsp;</span>
          <span>장</span>
        </div>
      </div>
    </div>
  </div>
  <div class="cen_ment">
    <p class="ma_me">MEDIA</p>
    <p class="sub_ment">크리에이티브한 아이디어와 공감할 수 있는 스토리를 담은 홍보영상 및 이미지를 제작해드립니다.</br>
      기업홍보영상제작, 기업홍보동영상, 제품홍보영상, 박람회 홍보영상, 내부 촬영 등</br>
      목적과 부합하는 기법을 제공하여 효율적인 마케팅을 도와드리겠습니다.
    </p>
  </div>
  <div class="sjt_wrap">
    <ul class="sjt_1 sjt_ul">
      <li><img src="/image/sub/media/proc_img_2.jpg" alt="기획 카테고리 이미지"></li>
      <li class="">고객사의 니즈를 파악하고</br>그에 맞는 스토리보드를 기획합니다.</li>
    </ul>
    <ul class="sjt_2 sjt_ul">
      <li><img src="/image/sub/media/proc_img_3.jpg" alt="촬영 카테고리 이미지"></li>
      <li>미디어 최고의 전문가,</br>최신 장비로 최고의 퀄리티를</br>보장합니다.
  </li>
    </ul>
    <ul class="sjt_3 sjt_ul">
      <li><img src="/image/sub/media/proc_img_4.jpg" alt="홍보 카테고리 이미지"></li>
      <li>제작된 영상을 각종 채널의</br>컨텐츠로 활용하여</br>브랜드 인지도를 상승시킵니다.</li>
    </ul>
  </div>
  <div class="sjt_wrap_mo">
    <ul class="mo_sjt1 mo_sjt">
      <li class="mo_sjt_tit">기획</li>
      <li class="mo_sjt_suj">고객사의 니즈를 파악하고 그에 맞는 스토리보드를 기획합니다.</li>
      <li class="mo_sjt_img"><img src="/image/sub/media/pric_img_5.jpg"></li>
    </ul>
    <ul class="mo_sjt2 mo_sjt">
      <li class="mo_sjt_tit">촬영</li>
      <li class="mo_sjt_suj">미디어 최고의 전문가, 최신 장비로 최고의 퀄리티를 보장합니다.</li>
      <li class="mo_sjt_img"><img src="/image/sub/media/pric_img_6.jpg"></li>
    </ul>
    <ul class="mo_sjt3 mo_sjt">
      <li class="mo_sjt_tit">홍보</li>
      <li class="mo_sjt_suj">제작된 영상을 각종 채널의 컨텐츠로 활용하여 브랜드 인지도를 상승시킵니다.</li>
      <li class="mo_sjt_img"><img src="/image/sub/media/pric_img_7.jpg"></li>
    </ul>
  </div>
  <div class="bot_img">
    <img src="/image/sub/media/proc_img_5.jpg" alt="감각적이고 역동적인 홍보영상을 제작해드립니다.">
  </div>
</div>
<?php
include_once('../../tail.php');
?>
