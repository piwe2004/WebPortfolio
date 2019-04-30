<?php
include_once('../../common.php');
include_once('../../head.php');

$np = proc;

include_once('./cate.php');
?>
<link href="https://fonts.googleapis.com/css?family=Raleway:700" rel="stylesheet">
<style>
.sub_wrap{width:100%; min-width:1200px; margin:0 auto;}
  /*상단 효과부분*/
  .sub_topbg{ height:687px; background-image: url("/image/sub/brand/proc_img_1_1.jpg"); background-repeat: no-repeat;}
  .sub_mewrap{position: relative; left:70px; top:30px; overflow:hidden; width:300px; margin:0;}
  .sub_mewrap span{font-size:25px; color:#fff; font-weight:900; font-family: 'MoskBold700'; letter-spacing: -1px; left:50px; float:left;}
  .sub_mewrap span:nth-child(2){display:block; width:100px; background-color:#fff; height:3px; position: absolute; top:15px; left:130px;}
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
  .sp_box span:nth-child(8){top:66.66%; left:33.33%;}
  .sp_box span:nth-child(9){top:66.66%; left:66.66%;}

  .lines{width: 0;height: 0; position: absolute;z-index: 22; -webkit-transition: 800ms cubic-bezier(0, 0.4, 0.5, 1);transition: 800ms cubic-bezier(0, 0.4, 0.5, 1);border: 0px solid #fff;}
  .line_1{width:0%; left: 0;top: 0;height: 1px;border-top-width: 1px;}
  .line_2{height:0%; right: 0;top: 0;border-right-width: 1px;}
  .line_3{width:0%; right: 0;bottom: 0;height: 1px;border-bottom-width: 1px;}
  .line_4{height:0%; left: 0;bottom: 0;border-left-width: 1px;}
  /*상단 효과부분*/

  .li_leng{width:1000px; margin:0 auto;}
  .li_leng ul{padding: 0; margin: 0;}
  .le_wrap{width:24.5%;float:left;margin-right:0.5%; margin:70px 0; }
  .wrap_li1{font-family: 'MoskExtraBold800'; font-size:2rem; line-height: 28px;}

  .wrap_li2{margin-top:150px;}
  .li2_1{font-family: 'MoskExtraBold800'; font-size:1.3rem; line-height: 18px;}
  .li2_2{margin:15px 0;}
  .li2_3{font-size:0.8rem;}
  .li2_3 p{margin:10px 0; color:#616161;}

  .le_2 ul {padding-top:140px;}
  .le_3 ul{padding-top:70px;}

  @media only screen and (max-width:640px)
{
	.cen_menwrap{width:78%; height:271px; margin:11% auto; padding:3%;}
	.sub_mewrap span{font-size:1.2rem;}
	.sub_mewrap span:nth-child(2){left:90px;top:10px;}
	.sj_mid_ment{margin:10px 20px;}
	.sj_mid{margin:10% 0;}
  .sub_topbg{max-width:960px; height:439px;}
	.mid_top_ment{width:95%; margin:0 auto;}
	.sub_wrap{width:100%; max-width:960px; margin:0; min-width:0;}
	.sub_top_me_wrap{max-width:960px; width:100%; margin:0;}
	.sub_mewrap{width:45%; left:11%;}
	.sj_mid_ment span{font-size:4.5rem;}
  .sp_box span{font-size:2.5rem; }
	.sj_top{max-width:960px;}
	.sj_topwrap{width:100%; max-width:960px;}
	.li_leng{width:100%; max-width:960px; margin:14% 0; padding:0 5.5%; box-sizing:border-box;}
	.le_wrap{float:none; width:100%; margin:5% 0;}
	.le_wrap > ul > li{text-align:center;}
	.li2_3{width:100%; font-size:0.8rem; line-height:18px; }
	.le_2 ul{padding-top:10%;}
	.wrap_li2{margin-top:14%;}
	.le_4{margin-bottom:10px;}
	.wrap_li1{text-align:center; margin:0;}
	.li2_1{text-align:center;}
	.le_3 ul{padding-top:11%;}
	.le_4 ul{padding-top:11%;}
	.li2_4{overflow:hidden; width:90%; margin:0 auto; height:85px;}
	.li2_4 img{width:100%;  margin-top:-35px;}
  .li2_2{margin:3% 0;}
  .li2_2 img{width:25%;}
}

</style>

<script>
if(wwidth < 640){
	$(document).ready(function(){
		$(".li2_1").children("br").remove();
	});
  $(document).ready(function(){
		$(".li2_3").children("p").children("br").remove();
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
          <span>새</span>
          <span>로</span>
          <span>운</span>
          <span>마</span>
          <span>케</span>
          <span>팅</span>
          <span>솔</span>
          <span>루</span>
          <span>션</span>
        </div>
      </div>
    </div>
  </div>
  <div class="li_leng">
    <ul>
      <li class="le_wrap le_1">
        <ul>
          <li class="wrap_li1">BRAND</br>CONSULTING</li>
          <li class="wrap_li2">
            <ul>
                <li class="li2_1">BUSINESS&nbsp;</br>STRATEGY</li>
                <li class="li2_2"><img src="/image/sub/brand/line_1.jpg" alt=""></li>
                <li class="li2_3">
                  <p>- 비즈니스 시장 분석</p>
                  <p>- SWOT 분석을 통한 기회요인과 위험</br>요소 파악</p>
                  <p>- 분석결과와 목적에 부합한 명확한</br>포지셔닝 설정</p>
                </li>
                <li class="li2_4"><img src="/image/sub/brand/bot_img_1.jpg"alt="BUSINESS STRATEGY 이미지"></li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="le_wrap le_2">
        <ul>
            <li class="li2_1">BRAND&nbsp;</br>STRATEGY</li>
            <li class="li2_2"><img src="/image/sub/brand/line_2.jpg" alt=""></li>
            <li class="li2_3">
              <p>- 브랜드 미션 및 구조 설계</p>
              <p>- 브랜드 아이덴티티 기획</p>
              <p>- 브랜드 가치 설정</p>
              <p>- Repositioning</p>
              <p>- 브랜드 실행 방안 기획</p>
            </li>
            <li class="li2_4"><img src="/image/sub/brand/bot_img_2.jpg" alt="BRAND STRATEGY 이미지"></li>
        </ul>
      </li>
      <li class="le_wrap le_3">
        <ul>
            <li class="li2_1">MARKETING&nbsp;</br>STRATEGY</li>
            <li class="li2_2"><img src="/image/sub/brand/line_3.jpg" alt=""></li>
            <li class="li2_3">
              <p>- 마케팅 주요 타겟층 설정</p>
              <p>- 마케팅 프로세스 기획</p>
              <p>- 마케팅 컨텐츠 기획</p>
            </li>
            <li class="li2_4"><img src="/image/sub/brand/bot_img_3.jpg"alt="MARKETING STRATEGY 이미지"></li>
        </ul>
      </li>
      <li class="le_wrap le_4">
        <ul>
            <li class="li2_1">ACTION&nbsp;</br>PLAN</li>
            <li class="li2_2"><img src="/image/sub/brand/line_4.jpg" alt=""></li>
            <li class="li2_3">
              <p>- 기획을 바탕으로 한 컨텐츠 제작</p>
              <p>- 세부 실행방안 설정 마케팅 모니터링</p>
              <p>- 개선 및 보완</p>
            </li>
            <li class="li2_4"><img src="/image/sub/brand/bot_img_4.jpg" alt="ACTION PLAN 이미지"></li>
        </ul>
      </li>
    </ul>
  </div>
</div>
<?php
include_once('../../tail.php');
?>
