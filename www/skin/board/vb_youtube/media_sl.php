<link rel="stylesheet" href="/css/jquery.bxslider.css">
<script src="/js/jquery.bxslider.js"></script>

<script>
    $(document).ready(function(){
      $('.slider').bxSlider({
        speed:1000,
        touchEnabled:false,
        onSlideBefore:function( $slideElement, oldIndex, newIndex ){
          // console.log("oldIndex"+oldIndex);
          // console.log("newIndex"+newIndex);
            $(".sli_sj").animate({
              top:"-20px",
              opacity:"0"
            },300);
            $(".sli_date").animate({
              right:"100px",
              opacity:"0"
            },400);
            $(".sli_cont").animate({
              top:"200px",
              opacity:"0"
            },400);
            $(".sli_line").animate({width:0},200);
            var nw_name = "";
            var nw_date = "";
            var nw_cont = "";
            var nw_count = "";
            if(newIndex == 0){
              nw_name = "대독장 홍보영상";
              nw_date = "60s&nbsp 2018/04/12";
              nw_cont = "누구나 쉽게 찾아와 제대로 된 한끼 식사를 할 수 있도록";
              var nw_count = "1";
              $(".sli_cont").css("top","50px");
              $(".sli_line").css("top","77px");

            }else if(newIndex == 1){
              nw_name = "주얼리 브랜드 호사";
              nw_date = "30s&nbsp 2018/02/23";
              nw_cont = "소중한 날에 기쁨을 전해드리고자하는 프리미엄 주얼리 브랜드";
              var nw_count = "5";
              $(".sli_cont").css("top","50px");
              $(".sli_line").css("top","77px");

            }else if (newIndex == 2) {
              nw_name = "메디온 홍보영상";
              nw_date = "30s&nbsp 2017/12/20";
              nw_cont = "㈜메디온은 병.의원이 원하는 부가가치를 어떤 효율적인 방법으로 창조를 할 것인가를 함께 고민하고 실현합니다.";
              var nw_count = "4";
              $(".sli_cont").css("top","50px");
              $(".sli_line").css("top","77px");

            }else if (newIndex == 3) {
              nw_name = "마린셰프라운지";
              nw_date = "30s&nbsp 2017/11/28";
              nw_cont = "바다속에서 나타나는 특별한 빛의 결정체";
              var nw_count = "3";
              $(".sli_cont").css("top","50px");
              $(".sli_line").css("top","77px");
            }else if (newIndex == 4) {
              nw_name = "부산 도시재생<br/>종합정보화 시스템";
              nw_date = "30s&nbsp 2018/02/30";
              nw_cont = "성공적인 도시재생을 위해 민과 관의 중간지원기구로서 참여, 소통, 협력을 통해 사람중심의 도시재생시스템을 구축";
              var nw_count = "2";
              $(".sli_cont").css("top","80px");
              $(".sli_line").css("top","97px");
            }
            $(".sli_sj").html(nw_name);
            $(".sli_date").html(nw_date);
            $(".sli_cont").html(nw_cont);
            $(".sli_now_num").html("0"+nw_count);
        },
        onSlideAfter:function( $slideElement, oldIndex, newIndex ){
          // console.log("oldIndex"+oldIndex);
          // console.log("newIndex"+newIndex);
            $(".sli_sj").css("top","50px").animate({
              top:"0px",
              opacity:"1"
            }, 200);
            $(".sli_line").animate({width:"40px"},400);
            $(".sli_date").animate({
              right:"14px",
              opacity:"1"
            },400);
            if(newIndex == 4){
              $(".sli_cont").animate({
                top:"97px",
                opacity:"1"
              },400);
            }else{
              $(".sli_cont").animate({
                top:"50px",
                opacity:"1"
              },400);
            }
        }
      });

      var bg_div = $('<div class="slide_bg2"><img src="/img/boardsl/media_bg2.png" alt=""></div>');
      $(".bx-wrapper").prepend(bg_div);
      $(".lnr-chevron-right").click(function(){
        $(".bx-prev").trigger("click");
      });
      var sli_mx_num = $(".slider").children("div").length;
      $(".sli_mx_num").html("0"+sli_mx_num);
    });
  </script>
<style>
.wrap{background:#f7f7f7;}
  .slide_wrap{margin:50px auto 100px;}
  .slide_bg{background:url('/img/boardsl/media_bg.png') no-repeat center; width:1200px; height:580px; box-shadow:17px 17px 40px rgba(0,0,0,0.2); -webkit-box-shadow:17px 17px 40px rgba(0,0,0,0.2);margin:0 auto; position:relative;}
  .slide_bg2{position: absolute; right:0; top:0; z-index:3;}
  .sli_wrap{position:absolute; width:240px; height:380px; right:50px; top:120px;}
  .sli_sj_div,.sli_date,.sli_cont,.sli_line{position:relative; z-index:4; right:0}
  .sli_sj{position:relative;}
  .sli_sj_div{font-family: 'NanumSquare', sans-serif; color:#fff; font-size:30px; top:60px; left:0px; height:80px; overflow: hidden;}
  .sli_date{font-family:'Encode Sans Expanded'; font-size:15px; color:#fff; top:30px; letter-spacing:1px; font-weight:100; right:14px; text-align:right;}
  .sli_cont{font-family: 'Noto Sans KR', sans-serif; color:#fff; top:50px; left:0px; font-size:15px;}
  .sli_line{width:40px; height:3px; background: #fff; left:-60px; top:77px;}

  .lnr{position:absolute; right:335px; bottom:45px; z-index:4; font-size:25px; color:#fff; cursor:pointer;}

  .sli_num{position:absolute; top:50px; right:440px; font-size:23px; font-family: 'Play', sans-serif;}
  .sli_now_num{color:#afafaf;}

  /* 슬라이드 css수정 */
  .bx-viewport{top:100px; padding-left:141px; box-sizing: border-box;}
  .bx-pager{position:relative;}
  .bx-pager-item{position:absolute;}
  .bx-pager-item:nth-child(1){left:0;}
  .bx-pager-item:nth-child(2){lefT:80px;}
  .bx-pager-item:nth-child(3){left:60px}
  .bx-pager-item:nth-child(4){left:40px}
  .bx-pager-item:nth-child(5){left:20px}
  .bx-wrapper .bx-pager.bx-default-pager a{width:12px; height:12px;}
  .bx-wrapper .bx-pager-item:nth-child(1) > a,.bx-wrapper .bx-pager-item:nth-child(2) > a,.bx-wrapper .bx-pager-item:nth-child(4) > a{background:#d6bbee; }
  .bx-wrapper .bx-pager-item:nth-child(5) > a,.bx-wrapper .bx-pager-item:nth-child(3) > a{background:#3ab6c5; }
  .bx-wrapper .bx-pager.bx-default-pager a{margin:0 3px !important;}
  .bx-controls{position:absolute; width:150px; bottom:-120px; left:140px;}
  .bx-controls-direction{display:none;}

  /* 슬라이드 css수정 */
</style>
<div class="slide_wrap">
  <div class="slide_bg">
    <p class="sli_num">
      <span class="sli_now_num">01</span>
      <span class="sli_slu">/</span>
      <span class="sli_mx_num"></span>
    </p>
    <span class="lnr lnr-chevron-right"></span>
    <div class="sli_wrap">
      <div class="sli_date">60s&nbsp 2018/04/12</div>
      <div class="sli_line"></div>
      <div class="sli_sj_div">
        <p class="sli_sj">
          대독장 홍보영상
        </p>
      </div>
      <div class="sli_cont">누구나 쉽게 찾아와 제대로 된 한끼<br/> 식사를 할 수 있도록</div>
    </div>
    <div class="slider">
      <!-- <div class="slide_bg2">
        <img src="/img/boardsl/media_bg2.png" alt="">
      </div> -->
      <div class="slide1">
        <iframe class="ifram_class" width="659" height="370" src="//www.youtube.com/embed/e6is1SWGEvQ?feature=player_detailpage&amp;vq=hd1080&amp;rel=0" frameborder="0" allowfullscreen=""></iframe>
      </div>
      <div class="slide2">
        <iframe class="ifram_class" width="659" height="370" src="//www.youtube.com/embed/46WbSXMIqDc?feature=player_detailpage&amp;vq=hd1080&amp;rel=0" frameborder="0" allowfullscreen=""></iframe>
      </div>
      <div class="slide3">
        <iframe class="ifram_class" width="659" height="370" src="//www.youtube.com/embed/Clb7nFr9W0Q?feature=player_detailpage&amp;vq=hd1080&amp;rel=0" frameborder="0" allowfullscreen=""></iframe>
      </div>
      <div class="slide4">
        <iframe class="ifram_class" width="659" height="370" src="//www.youtube.com/embed/Dqz50dJuFPs?feature=player_detailpage&amp;vq=hd1080&amp;rel=0" frameborder="0" allowfullscreen=""></iframe>
      </div>
      <div class="slide5">
        <iframe class="ifram_class" width="659" height="370" src="//www.youtube.com/embed/R5NdGPkr2tc?feature=player_detailpage&amp;vq=hd1080&amp;rel=0" frameborder="0" allowfullscreen=""></iframe>
      </div>
    </div>
  </div>
</div>
