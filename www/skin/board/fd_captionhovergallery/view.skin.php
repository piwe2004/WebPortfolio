<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css?t=5">', 0);
?>

<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<style>

  #top_po{position:relative; width:100%; top:0; left:0; width:100%; background:rgb(51,51,51); overflow: hidden;}

  header{padding:12px 0px; overflow: hidden; float: left;}

  .tp_sj{text-align: left; float:left; color:#fff; margin-left:30px; margin-right:15px; }
  #bo_v_title{font-size:23px; font-family: 'Arita'; font-weight:400; letter-spacing: -1px;}

  #bo_v_img{display: none;}
  .wrap{max-width:1920px;}
  .bo_v_com{display: none;}
  .bo_v_nb{display: none;}
  #bo_v_top{display: none;}
  #bo_v_con{text-align: center;}

#m_gehe{width:100%; max-width:1920px; padding:30px; box-sizing: border-box; /*background:rgba(0,0,0,0.7);*/ background:#fff;}
  #bo_v{position:relative; padding-bottom:0; width:100%; margin:0 auto; max-width:1920px; background:#fff;}


  #ge_close{float: right; overflow: hidden; max-height:74px;}
  #ge_close span {color:#fff; }
  .ger_li{font-family: 'Lato', sans-serif; text-align: center;padding:25px 18px 0px; border-left:1px solid rgba(255,255,255,0.3); color:#fff; float:left; height:70px; display:inline-block; vertical-align: baseline; font-size:18px; transition:background.4s;}
  .ger_li:hover{background:#fff; color:#000;}
  .ger_li:hover span, .ger_li:hover .cl_fix{color:#000 !important;}

  .arr_div{width:40px;}
  .ger_clo{width:40px;}
  .arr_div  span, .ger_clo  span{font-size:25px;}


  .cl_fix{margin-top:10px; font-size:13px;}

  .son{position:fixed !important; top:0px !important; left:0px !important; box-shadow:0 3px 10px rgba(0,0,0,.5); z-index:100;}

  #ge_logo{position:absolute; top:15px; left:0px;}

  #arro_l{left:15px;}
  #arro_r{right:15px;}

  .ge_lin{font-family: 'AritaL';}
  .ge_lin > a{ color:rgb(80, 78, 78) !important;}
  .ger_adm{padding:0 10px; color:#fff;}
  .ger_adm  a{color:#fff;}
  /* .ge_url{font-family: 'AritaL'; margin-right:3px; } */

  .nanli{margin-left:30px; width:450px;}
  .nanli > div {overflow: hidden;}
  .nanli > div > dt {font-family: 'Arita'; clear:both; width:100px; float:left; padding:7px 0 7px 10px; margin-right:20px; border-top:1px solid #aaa; border-bottom:1px solid #aaa; color:#666;}
  .nanli > div:nth-child(2) > dt{ border-top:none;}
  .nanli > div > dd {font-family: 'Arita';padding:7px 0 7px 10px; color:#999; border-top:1px solid #eee; border-bottom:1px solid #eee; overflow: hidden;}
  .nanli > div > dd > a {color:#999 !important;}
  .nanli > div:nth-child(2) > dd{ border-top:none;}

  #go_url{width:150px; margin:10px 0; padding:5.5px 12px; background:rgb(28,28,28); border-radius: 3px; overflow:hidden; text-align:center; box-sizing:border-box; font-size:14px; transition:background.4s; letter-spacing:-1px;}
  #go_url:hover{background:rgb(58, 182, 197); }
  #go_url > a {color:#fff; transition:color.6s; font-family: 'Lato', sans-serif; }
  #go_url:hover > a{color:#fff;}
  #go_url > a > span{padding-left:10px;}

  .ge_bot{display: none; position:fixed; right:50px; bottom:0; color:#fff; width:50px; box-sizing: border-box; font-size:20px; height:35px; background:#333; text-align: center; padding:5px 0 0; border-radius:4px 4px 0 0; cursor: pointer;}

  /* .sound_only{font-size:12px; line-height:15px; position:relative; left:12px;} */
</style>

<script>
  $(document).ready(function(){
    $(".top_wrap").remove();
    $(".tail_wrap").remove();
    $(".sub_cate").remove();
    var th = $("#top_po").height();
    $("#ge_close").css("height",th);
  //   var gw = $("#m_gehe").width();
  //   $("#top_po").css({
  //     "width":gw
  //   });
  });
  $(window).resize(function(){
    var th = $("#top_po").height();
    $("#ge_close").css("height",th);
  //   var gw = $("#m_gehe").width();
  //   $("#top_po").css({
  //     "width":gw
  //   });
  //   $("#bo_v_con").children("p").children("img").css("width",gw);
  });
  $(window).scroll(function () {
    var hi = $(document).scrollTop();
    if(hi > 70){
      $("#top_po").stop().addClass("son");
      $(".ge_bot").slideDown();
    }else{
      $("#top_po").removeClass("son");
      $(".ge_bot").slideUp();
    }
    $(".ge_bot").click(function(){
      $("html, body").stop().animate({
        scrollTop:"0"
      },600);
    });
    if ($(window).scrollTop() == $(document).height() - $(window).height()) {
      $(".ge_bot").css("bottom","48px");
    }else{
      $(".ge_bot").css("bottom","0px");
    }

  });
</script>
<!-- 게시물 읽기 시작 { -->
<!-- <div id="bo_v_table"><?php //echo $board['bo_subject']; ?></div> -->

<div id="top_po">
  <!-- <div id="ge_logo">
    <img src="/image/ge_logo.png" alt="로고">
  </div> -->

    <header>
      <div class="tp_sj">
        <h1 id="bo_v_title">
            <?php
            if ($category_name) echo $view['ca_name'].' | '; // 분류 출력 끝
            echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력
            ?>
        </h1>
      </div>
        <?php
        if (implode('', $view['link'])) {
         ?>
         <!-- 관련링크 시작 { -->
        <div id="go_url">
            <?php
            // 링크
            $cnt = 0;
            for ($i=1; $i<=count($view['link']); $i++) {
                if ($view['link'][$i]) {
                    $cnt++;
                    $link = cut_str($view['link'][$i], 70);
             ?>
                    <a href="<?php echo $view['link_href'][$i] ?>" target="_blank">
                          <?php //echo $link ?>
                          사이트 바로가기
                          <span class="lnr lnr-arrow-right"></span>
                    </a>
            <?php
                }
            }
             ?>
        </div>
        <!-- } 관련링크 끝 -->
        <?php } ?>
<!-- <div class="nanli">
<div class="ge_name"> -->
  <?php //if($view['wr_1']) { ?>
    <!-- <dt class="cli_sj">CLIENT</dt>
    <dd class="cli_con"><?php// echo $view['wr_1']; ?></dd> -->
    <?php //} ?>
<!-- </div> -->
  <?php
  //if (implode('', $view['link'])) {
   ?>
   <!-- 관련링크 시작 { -->
  <!-- <div id="bo_v_link"> -->
      <!-- <dt> -->
      <?php
      // 링크
      // $cnt = 0;
      // for ($i=1; $i<=count($view['link']); $i++) {
      //     if ($view['link'][$i]) {
      //         $cnt++;
      //         $link = cut_str($view['link'][$i], 70);
       ?>
                  <!-- <img src="<?php //echo $board_skin_url ?>/img/icon_link.gif" alt="관련링크"> -->
                    <!-- <span class="ge_url">URL </span>
            </dt>
            <dd>
              <a href="<?php// echo $view['link_href'][$i] ?>" target="_blank">
                    <?php //echo $link ?>
              </a>
            </dd> -->
              <!-- <span class="bo_v_link_cnt"><?php//echo $view['link_hit'][$i] ?>회 연결</span> -->
      <?php
      //     }
      // }
       ?>
  <!-- </div> -->
  <!-- } 관련링크 끝 -->
  <?php //} ?>
<!-- </div> -->
    </header>
  <div id="ge_close">
    <ul>
      <?php
      if($is_admin){
      ?>
      <li class="ger_li ger_adm">
        <?php if ($update_href) { ?><div style="margin-top:10px;"><a href="<?php echo $update_href ?>" class="cl_fix">수정</a></div><?php } ?>
        <?php if ($delete_href) { ?><div style="margin-top:10px;"><a href="<?php echo $delete_href ?>" class="cl_fix">삭제</a></div><?php } ?>
      </li>
      <?}?>
      <a href="/bbs/write.php?bo_table=online">
        <li class="ger_li ger_onl">
          <span class="lnr lnr-pencil"></span>
          프로젝트의뢰
        </li>
      </a>
      <?php if ($prev_href) { ?>
      <li class="ger_li arr_div" id="arro_l">
        <a href="<?php echo $prev_href ?>">
          <!-- <img src="/image/arro_left.png" alt=""> -->
          <span class="lnr lnr-chevron-left"></span>
        </a>
      </li>
      <?php } ?>
      <?php if ($next_href) { ?>
      <li class="ger_li arr_div" id="arro_r">
        <a href="<?php echo $next_href ?>">
          <!-- <img src="/image/arro_right.png" alt=""> -->
          <span class="lnr lnr-chevron-right"></span>
        </a>
      </li>
      <?php } ?>
      <a href="<?php echo $list_href ?>">
        <li class="ger_li ger_clo">
          <span class="lnr lnr-cross"></span>
        </li>
      </a>
    </ul>
    <!-- <a href="<?php //echo $list_href ?>">
      <img src="/image/port_close.jpg" alt="목록">
    </a> -->
    <!-- <?php //if ($update_href) { ?><div style="margin-top:10px;"><a href="<?php //echo $update_href ?>" class="cl_fix">수정</a></div><?php //} ?>
    <?php //if ($delete_href) { ?><div style="margin-top:10px;"><a href="<?php //echo $delete_href ?>" class="cl_fix">삭제</a></div><?php //} ?> -->

  </div>

  </div>

</div>

<div id="m_gehe">
<!-- <div class="arrow_wr">
  <?php //if ($prev_href) { ?>
  <div class="arr_div" id="arro_l">
    <a href="<?php //echo $prev_href ?>">
      <img src="/image/arro_left.png" alt="">
    </a>
  </div>
  <?php //} ?>
  <?php //if ($next_href) { ?>
  <div class="arr_div" id="arro_r">
    <a href="<?php //echo $next_href ?>">
      <img src="/image/arro_right.png" alt="">
    </a>
  </div>
  <?php// } ?>
</div> -->

<article id="bo_v">
    <?php
    if ($view['file']['count']) {
        $cnt = 0;
        for ($i=0; $i<count($view['file']); $i++) {
            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view'])
                $cnt++;
        }
    }
     ?>

    <?php if($cnt) { ?>
    <!-- 첨부파일 시작 { -->
    <section id="bo_v_file">
        <h2>첨부파일</h2>
        <ul>
        <?php
        // 가변 파일
        for ($i=0; $i<count($view['file']); $i++) {
            if (isset($view['file'][$i]['source']) && $view['file'][$i]['source'] && !$view['file'][$i]['view']) {
         ?>
            <li>
                <a href="<?php echo $view['file'][$i]['href'];  ?>" class="view_file_download">
                    <img src="<?php echo $board_skin_url ?>/img/icon_file.gif" alt="첨부">
                    <strong><?php echo $view['file'][$i]['source'] ?></strong>
                    <?php echo $view['file'][$i]['content'] ?> (<?php echo $view['file'][$i]['size'] ?>)
                </a>
                <span class="bo_v_file_cnt"><?php echo $view['file'][$i]['download'] ?>회 다운로드</span>
                <span>DATE : <?php echo $view['file'][$i]['datetime'] ?></span>
            </li>
        <?php
            }
        }
         ?>
        </ul>
    </section>
    <!-- } 첨부파일 끝 -->
    <?php } ?>



    <!-- 게시물 상단 버튼 시작 { -->
    <div id="bo_v_top">
        <?php
        ob_start();
         ?>
        <?php if ($prev_href || $next_href) { ?>
        <ul class="bo_v_nb">
            <?php if ($prev_href) { ?><li><a href="<?php echo $prev_href ?>" class="btn_b01">이전글</a></li><?php } ?>
            <?php if ($next_href) { ?><li><a href="<?php echo $next_href ?>" class="btn_b01">다음글</a></li><?php } ?>
        </ul>
        <?php } ?>

        <ul class="bo_v_com">

            <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" class="btn_b01" onclick="del(this.href); return false;">삭제</a></li><?php } ?>
            <?php if ($copy_href) { ?><li><a href="<?php echo $copy_href ?>" class="btn_admin" onclick="board_move(this.href); return false;">복사</a></li><?php } ?>
            <?php if ($move_href) { ?><li><a href="<?php echo $move_href ?>" class="btn_admin" onclick="board_move(this.href); return false;">이동</a></li><?php } ?>
            <?php if ($search_href) { ?><li><a href="<?php echo $search_href ?>" class="btn_b01">검색</a></li><?php } ?>
            <li><a href="<?php echo $list_href ?>" class="btn_b01">목록</a></li>
            <?php if ($reply_href) { ?><li><a href="<?php echo $reply_href ?>" class="btn_b01">답변</a></li><?php } ?>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02">글쓰기</a></li><?php } ?>
        </ul>
        <?php
        $link_buttons = ob_get_contents();
        ob_end_flush();
         ?>
    </div>
    <!-- } 게시물 상단 버튼 끝 -->

    <section id="bo_v_atc">
        <!-- <h2 id="bo_v_atc_title">본문</h2> -->

        <?php
        // 파일 출력
        $v_img_count = count($view['file']);
        if($v_img_count) {
            echo "<div id=\"bo_v_img\">\n";

            for ($i=0; $i<=count($view['file']); $i++) {
                if ($view['file'][$i]['view']) {
                    //echo $view['file'][$i]['view'];
                    echo get_view_thumbnail($view['file'][$i]['view']);
                }
            }

            echo "</div>\n";
        }
         ?>

        <!-- 본문 내용 시작 { -->
        <div id="bo_v_con"><?php echo get_view_thumbnail($view['content']); ?></div>
        <?php//echo $view['rich_content']; // {이미지:0} 과 같은 코드를 사용할 경우 ?>
        <!-- } 본문 내용 끝 -->

        <?php if ($is_signature) { ?><p><?php echo $signature ?></p><?php } ?>

    </section>

    <?php
    include_once(G5_SNS_PATH."/view.sns.skin.php");
    ?>

    <!-- 링크 버튼 시작 { -->
    <div id="bo_v_bot">
        <?php echo $link_buttons ?>
    </div>
    <!-- } 링크 버튼 끝 -->

</article>
<!-- } 게시판 읽기 끝 -->

  <div class="ge_bot">
    <span class="lnr lnr-chevron-up"></span>
  </div>
</div>
<script>
<?php if ($board['bo_download_point'] < 0) { ?>
$(function() {
    $("a.view_file_download").click(function() {
        if(!g5_is_member) {
            alert("다운로드 권한이 없습니다.\n회원이시라면 로그인 후 이용해 보십시오.");
            return false;
        }

        var msg = "파일을 다운로드 하시면 포인트가 차감(<?php echo number_format($board['bo_download_point']) ?>점)됩니다.\n\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\n\n그래도 다운로드 하시겠습니까?";

        if(confirm(msg)) {
            var href = $(this).attr("href")+"&js=on";
            $(this).attr("href", href);

            return true;
        } else {
            return false;
        }
    });
});
<?php } ?>

function board_move(href)
{
    window.open(href, "boardmove", "left=50, top=50, width=500, height=550, scrollbars=1");
}
</script>

<script>
$(function() {
    $("a.view_image").click(function() {
        window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
        return false;
    });

    // 추천, 비추천
    $("#good_button, #nogood_button").click(function() {
        var $tx;
        if(this.id == "good_button")
            $tx = $("#bo_v_act_good");
        else
            $tx = $("#bo_v_act_nogood");

        excute_good(this.href, $(this), $tx);
        return false;
    });

    // 이미지 리사이즈
    $("#bo_v_atc").viewimageresize();
});

function excute_good(href, $el, $tx)
{
    $.post(
        href,
        { js: "on" },
        function(data) {
            if(data.error) {
                alert(data.error);
                return false;
            }

            if(data.count) {
                $el.find("strong").text(number_format(String(data.count)));
                if($tx.attr("id").search("nogood") > -1) {
                    $tx.text("이 글을 비추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                } else {
                    $tx.text("이 글을 추천하셨습니다.");
                    $tx.fadeIn(200).delay(2500).fadeOut(200);
                }
            }
        }, "json"
    );
}
</script>
<!-- } 게시글 읽기 끝 -->
