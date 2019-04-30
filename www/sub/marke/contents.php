<?php
include_once('../../common.php');
include_once('../../head.php');

$np = cont;

include_once('./cate.php');
?>
<link href="https://fonts.googleapis.com/css?family=Raleway:700" rel="stylesheet">
<style>
.sub_wrap{width:100%; min-width:1200px; margin:0 auto;}
  /*상단 효과부분*/
  .sub_topbg{ height:687px; background-image: url(/image/sub/marke/proc_img_1_1.jpg); background-repeat: no-repeat;}
  .sub_mewrap{position: relative; left:70px; top:30px; overflow:hidden; width:300px; margin:0;}
  .sub_mewrap span{font-size:25px; color:#fff; font-weight:900; font-family: 'MoskBold700'; letter-spacing: -1px; left:50px; float:left;}
  .sub_mewrap span:nth-child(2){display:block; width:100px; background-color:#fff; height:3px; position: absolute; top:15px; left:150px;}
  .sub_top_me_wrap{width:1200px; margin:0 auto;}

  .cen_menwrap{width:400px; height:400px; margin:80px auto; padding:30px; position:relative; box-sizing: border-box;}
  .sp_box{width:100%; height:100%; margin:auto; position:relative;}
  .sp_box span{position:absolute; padding:3.5%; width:33%; text-align:center; font-size:4rem; font-weight:bold; letter-spacing: 25px; font-family: 'Raleway', sans-serif; display: none; color:#fff;}
  .sp_box span:nth-child(1){top:0; left:0; text-align: left;}
  .sp_box span:nth-child(2){top:0; left:33%;}
  .sp_box span:nth-child(3){top:0; left:66%; text-align: right;}
  .sp_box span:nth-child(4){top:33.33%; left:0; text-align: left;}
  .sp_box span:nth-child(5){top:33.33%; left:33.33%;}
  .sp_box span:nth-child(6){top:33.33%; left:66.66%; text-align: right;}
  .sp_box span:nth-child(7){top:66.66%; left:0; width:25%;}
  .sp_box span:nth-child(8){top:66.66%; left:25%; width:25%;}
  .sp_box span:nth-child(9){top:66.66%; left:50%; width:25%;}
  .sp_box span:nth-child(10){top:66.66%; left:75%; width:25%;}

  .lines{width: 0;height: 0; position: absolute;z-index: 22; -webkit-transition: 800ms cubic-bezier(0, 0.4, 0.5, 1);transition: 800ms cubic-bezier(0, 0.4, 0.5, 1);border: 0px solid #fff;}
  .line_1{width:0%; left: 0;top: 0;height: 1px;border-top-width: 1px;}
  .line_2{height:0%; right: 0;top: 0;border-right-width: 1px;}
  .line_3{width:0%; right: 0;bottom: 0;height: 1px;border-bottom-width: 1px;}
  .line_4{height:0%; left: 0;bottom: 0;border-left-width: 1px;}
  /*상단 효과부분*/

  .cen_ment{width:100%; max-width:1070px; text-align:center; margin:70px auto; }
  .ma_me{ font-family: 'MoskBold700'; font-size:1.3rem; color:#3ab6c5; padding:20px 0;  border-bottom:2px solid #d6d6d6;}
  .me_1{font-size:0.9rem; color:#747674; letter-spacing:-1px;}

  .bot_img{ width:100%;}
  .bot_img ul{ margin:0; padding: 0;}
  .ul_ul{overflow: hidden;  border-bottom:2px solid #d6d6d6;}
  .li_me{float:left; text-align: left;}
  .li_me_1{width:240px;font-size:2.5rem; font-weight: bold; color:#d6d6d6; letter-spacing: 20px; line-height: 60px; margin:50px 0; margin-right:20px;}
  .li_me_2{padding-top:91px; margin-right:40px;}
  .li_me_3{padding-top:50px;}
  .li_me2_1{ width:270px;color:#3ab6c5; border-bottom:2px solid #3ab6c5; font-size:1.2rem; padding:5px 0; font-weight: bold; margin-bottom:20px; letter-spacing:-2px;}
  .li_me_3 p {font-size:0.95rem; color:#747674; font-weight:500;}

  .ul_ul:nth-child(4) > .li_me_3{ margin-right:65px;}
  .ul_ul:nth-child(5) > .li_me_3{ margin-right:82px;}
  .ul_ul:nth-child(5) > .li_me_1{ margin-right:0px;}
  .ul_ul:nth-child(6) > .li_me_1{ margin-right:15px;}
  .ul_ul:nth-child(6) > .li_me_3{ margin-right:80px;}

  @media only screen and (max-width:640px)
{
	.cen_menwrap{width:78%; height:271px; margin:11% auto; padding:3%;}
	.sub_mewrap span{font-size:1.2rem;}
	.sub_mewrap span:nth-child(2){left:100px;top:10px; height:2px;}
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
	.cen_ment{width:100%; margin:10% auto;}
	.li_me_1{width:61%; margin:0; letter-spacing:3px; line-height:49px; font-size:2.3rem;}
	.li_me_2{padding-top:3%; margin-right:0; width:38%;}
	.li_me_2 img{width:100%;}
	.li_me_3{padding:0;}
	.li_me_3 p{font-size:0.8rem; line-height:18px;}
	.li_me2_1{margin-top:4%;}
	.li_me_3{margin-right:0;}
	.ul_ul:nth-child(5) > .li_me_3{margin-right:0;}
	.ul_ul:nth-child(6) > .li_me_3{margin-right:0;}
  .ma_me{font-size:2rem; border-bottom:1px solid #d6d6d6;}
  .ul_ul {padding:8% !important; border-bottom:1px solid #d6d6d6;}
  .ul_ul:nth-child(1) > .li_me_3 > ul .li_me2_1 {width:109px;}
  .ul_ul:nth-child(2) > .li_me_3 > ul .li_me2_1 {width:109px;}
  .ul_ul:nth-child(3) > .li_me_3 > ul .li_me2_1 {width:147px;}
  .ul_ul:nth-child(4) > .li_me_3 > ul .li_me2_1 {width:280px;}
  .ul_ul:nth-child(5) > .li_me_3 > ul .li_me2_1 {width:130px;}
  .ul_ul:nth-child(6) > .li_me_3 > ul .li_me2_1 {width:152px;}
  .ul_ul:nth-child(6) {border:none;}
  .ul_ul:nth-child(6) > .li_me_1 {margin-right:0;}
}

</style>

<script>
if(wwidth < 640){
	$(document).ready(function(){
		$(".li_me_3").children("ul").children("p").children("br").remove();
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
        <span class="sub_top_ment">CONTENTS</span>
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
          <span>형</span>
          <span>식</span>
          <span>의</span>
          <span>성</span>
          <span>공</span>
          <span>비</span>
          <span>전</span>
        </div>
      </div>
    </div>
  </div>
  <div class="cen_ment">
    <p class="ma_me">MARKETING</p>
    <div class="bot_img">
      <ul class="ul_ul">
        <li class="li_me li_me_1">통합</br>마케팅</li>
        <li class="li_me li_me_2"><img src="/image/sub/marke/proc_icon_5.jpg" alt=""></li>
        <li class="li_me li_me_3">
          <ul>
            <li class="li_me2_1">1. 검색광고</li>
            <p>소비자가 원하는 키워드를 검색 했을 때, 결과 페이지에 나오는 화면에</br>업체의 광고가 노출 되는 광고 입니다. 합리적인 비용과 높은 효율로</br>제품에 관심을 가진 고객들에게 노출되며 정확한 타겟팅을 통한</br>광고를 할 수 있는 장점이 있습니다.
            </p>
          </ul>
        </li>
      </ul>
      <ul class="ul_ul">
        <li class="li_me li_me_1">브랜드</br>마케팅</li>
        <li class="li_me li_me_2"><img src="/image/sub/marke/proc_icon_6.jpg" alt=""></li>
        <li class="li_me li_me_3">
          <ul>
            <li class="li_me2_1">2. 배너광고</li>
            <p>브랜딩 및 이벤트 프로모션에 탁월한 광고로 강력한 주목도를 주어</br>광고효과를 극대화할 수 있는 이미지 광고 입니다. 포털 사이트 내</br>다양한 영역에 노출되며 지속적인 노출로 인해 브랜드 인식률 및</br>브랜드 신뢰도도 함께 높아지는 장점이 있습니다.
            </p>
          </ul>
        </li>
      </ul>
      <ul class="ul_ul">
        <li class="li_me li_me_1">높은</br>퀄리티</li>
        <li class="li_me li_me_2"><img src="/image/sub/marke/proc_icon_2.jpg"alt=""></li>
        <li class="li_me li_me_3">
          <ul>
            <li class="li_me2_1">3. 블로그 체험단</li>
            <p>실제의 경험만큼 큰 공감을 일으킬 컨텐츠는 없을 것입니다. 각 분야별로</br>영향력 있는 블로거들의 생생한 후기와 높은 퀄리티의 디자인을 융합하여</br>개성이 있는 정보를 전달합니다.
            </p>
          </ul>
        </li>
      </ul>
        <ul class="ul_ul">
          <li class="li_me li_me_3">
            <ul>
              <li class="li_me2_1">4. 바이럴마케팅 (블로그, 카페, SNS)</li>
              <p>블로그, 카페, 페이스북, 인스타그램 등 고객사와 부합하는 채널을 분석하여</br>효율적인 시너지를 제공할 마케팅 솔루션을 제공합니다.  또한 키워드 및 배너,</br>매체 전체에 대하여 목적별 유입분석, 퍼포먼스 분석 등 다양한 기능을</br>통합 지원 합니다.
              </p>
            </ul>
          </li>
          <li class="li_me li_me_1">마케팅</br>솔루션</li>
          <li class="li_me li_me_2"><img src="/image/sub/marke/proc_icon_3.jpg"alt=""></li>
        </ul>
        <ul class="ul_ul">
          <li class="li_me li_me_3">
            <ul>
              <li class="li_me2_1">5. 제휴마케팅</li>
              <p>분야별로 개설되어 있는 지역카페를 활용한 마케팅을 통해 커뮤니티를</br>활성화하여 유입이 가능한 소비자층에 집중적으로 브랜드를 인식시킵니다.</br>이를 통해 보다 빠른 피드백의 효과를 누리실 수 있습니다.
              </p>
            </ul>
          </li>
          <li class="li_me li_me_1">빠른</br>피드백</li>
          <li class="li_me li_me_2"><img src="/image/sub/marke/proc_icon_4.jpg"alt=""></li>
        </ul>
        <ul class="ul_ul">
          <li class="li_me li_me_3">
            <ul>
              <li class="li_me2_1">6. 홈페이지 제작</li>
              <p>크리에이티브한 디자인과 트렌드에 맞는 기술혁신으로 차별화 된 가치를</br>
              창출합니다. 또한 새로운 감성을 더해 새로운 형식의 성공비전을 제시하여</br>드립니다.
              </p>
            </ul>
          </li>
          <li class="li_me li_me_1">차별화된</br>가치창출</li>
          <li class="li_me li_me_2"><img src="/image/sub/marke/proc_icon_1.jpg" alt=""></li>
        </ul>
    </div>
  </div>
</div>
<?php
include_once('../../tail.php');
?>
