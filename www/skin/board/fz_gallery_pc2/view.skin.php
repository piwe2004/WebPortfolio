<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css?t=6">', 0);
add_stylesheet('<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css">', 0);
add_javascript('<script type="text/javascript" src="'.$board_skin_url.'/js/default.js"></script>', 100);
?>
<script src="<?php echo G5_JS_URL; ?>/viewimageresize.js"></script>
<script>
$(window).scroll(function(){
  if($(this).scrollTop() > 0 ){
    $(".left_title").css({
        position:"fixed",
        top:"30px"
      });
    $(".arrow_wrap").css({
        position:"fixed",
        top:"30px"
      });
  } else{
    $(".left_title").css({
      position:"absolute",
      top:"30px"
    })
    $(".arrow_wrap").css({
      position:"absolute",
      top:"30px"
    })
  }
});
</script>
<style>
  .left_title #bo_v_title{ width:100%; font-size: 2.6rem; font-weight:900; letter-spacing:-2px; font-family: 'Spoqa Han Sans', 'Spoqa Han Sans JP', 'Sans-serif'; line-height: 1.285; display: block; padding:0 !important; padding-bottom:10px; margin-bottom: 40px;}
  .fz_gallery_date{width:38%; display: block;}
  .fz_gallery_date{font-size:1rem !important; letter-spacing: -0.5px; font-family: 'Raleway', sans-serif;}
  #bo_v_con{font-family: 'SpoqaHanSans-Regular'; line-height: 1.65; letter-spacing:-1px;}
  #bo_v_con p{text-align:left !important;}
  #bo_v_con > div > .MsoNormal > img {width:100% !important;}
  .fb-like{width:50%; margin-top:19px;}

  .arrow_wrap{position:fixed; top:225px; right:140px;}
  /*.arrow_wrap img{width:70%;}*/

  #box_line{width:365px; margin:22px 0 0; height:2px; background:#000;}

  ._51m- ._2pic ._51mw{display: none !important;}

  .fix_title{width:1200px; margin:0px auto 80px; overflow:hidden;}
  .left_title{position:absolute; width:18%; flaot:left; text-align:justify; top:30px; }

  .main_title{width:366px; margin:60px auto 0; text-align:left;}
  .main_title #bo_v_title2{font-size:2.4rem;}
  .main_title .fz_gallery_date{margin-top:20px;}


</style>
<?php echo $facebook_url ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ko_KR/sdk.js#xfbml=1&version=v2.10&appId=923915017757119';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="arrow_wrap">
  <a href="<?php echo $list_href ?>"><img src="/image/left_arrow.png"></a>
</div>
<!--- <div class="main_title">
  <span id="bo_v_title2">
      <?php
      if ($category_name) echo "[".$view['ca_name'].'] '; // 분류 출력 끝
      echo cut_str(get_text($view['wr_subject']), 40); // 글제목 출력
      ?>
  </span>
  <span class="fz_gallery_date">
  <?php //echo date("M d, Y", strtotime($view['wr_datetime'])) ?>
  </span>
</div> --->
<div class="fix_title">
    <div class="left_title">
  		<div class="main_title">
        <span id="bo_v_title2">
            <?php
            if ($category_name) echo "[".$view['ca_name'].'] '; // 분류 출력 끝
            echo cut_str(get_text($view['wr_subject']), 40); // 글제목 출력
            ?>
        </span>
  			<span class="fz_gallery_date"><?php echo date("M d, Y", strtotime($view['wr_datetime'])) ?></span>
      		<?php
      		// 링크
      		foreach($view[link] as $key => $value) {
      			if(!$value) continue;
      			$str .= "<li";
      			if($i==0) $str .= " class='first'";
      			$str .= ">";
      			$str .= "<a href='{$view[link_href][$key]}' class='txt_link' target='_blank'>사이트 바로가기 →</a>";
      			//$str .= "<span class='txt_hit'>[{$view[link_hit][$key]}]</span>";
      			$str .= "</li>";
      			$i++;
      		}
      		if($i>0) echo "<ul class='ad_list_area'>{$str}</ul>";
      		?>
      </div>
          <div id="box_line"></div>

          <?php
          //include_once(G5_SNS_PATH."/view.sns.skin.php");
          ?>
          <!-- <div class="fb-like" data-href="<?php //echo $list[$i]['href'];?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div> -->
    </div>
<!-- 게시물 읽기 시작 { -->
<article id="bo_v" style="width:68%; float:right;" class="fz_wrap">

    <!-- 게시물 상단 버튼 시작 { -->
    <div id="bo_v_top">
        <?php
        ob_start();
         ?>
        <?php if ($copy_href || $move_href) { ?>
        <ul class="bo_v_nb">
            <?php if ($copy_href) { ?><li><a href="<?php echo $copy_href ?>" class="list_btn btn_copy" onclick="board_move(this.href); return false;">복사</a></li><?php } ?>
            <?php if ($move_href) { ?><li><a href="<?php echo $move_href ?>" class="list_btn btn_move" onclick="board_move(this.href); return false;">이동</a></li><?php } ?>
        </ul>
        <?php } ?>

        <ul class="bo_v_com">
            <?php if ($update_href) { ?><li><a href="<?php echo $update_href ?>" class="list_btn btn_edit"><i class="fa fa-rotate-right"></i> 수정</a></li><?php } ?>
            <?php if ($delete_href) { ?><li><a href="<?php echo $delete_href ?>" class="list_btn btn_del" onclick="del(this.href); return false;"><i class="fa fa-remove"></i> 삭제</a></li><?php } ?>
            <li><a href="<?php echo $list_href ?>" class="list_btn btn_list"><i class="fa fa-list"></i> 목록</a></li>
            <?php if ($reply_href) { ?><li><a href="<?php echo $reply_href ?>" class="list_btn btn_reply">답변</a></li><?php } ?>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="list_btn btn_write"><i class="fa fa-pencil"></i> 글쓰기</a></li><?php } ?>
        </ul>
        <?php
        $link_buttons = ob_get_contents();
        ob_end_flush();
         ?>
    </div>
    <!-- } 게시물 상단 버튼 끝 -->

    <!-- <header>
        <h1 id="bo_v_title">
            <?php
            if ($category_name) echo "[".$view['ca_name'].'] '; // 분류 출력 끝
            echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력
            ?>
        </h1>
    </header> -->

	<!-- <section id="bo_v_info">
		<div class="fl">
			<span class="bo_v_user"><i class="fa fa-user"><span class="sound_only">작성자</span></i> <strong><?php echo $view['name'] ?></strong><?php if ($is_ip_view) { echo "<em>$ip</em>"; } ?></span>
		</div>
		<div class="fr">
			<span class="bo_v_date"><i class="fa fa-calendar-check-o"><span class="sound_only">작성일</span></i> <strong><?php echo date("y-m-d H:i", strtotime($view['wr_datetime'])) ?></strong></span> <span class="bar">|</span>
			<span class="bo_v_hit"><i class="fa fa-eye"></i> 조회 <strong><?php echo number_format($view['wr_hit']) ?></strong></span> <span class="bar">|</span>
			<span class="bo_v_comment"><i class="fa fa-comments"></i> 댓글 <strong><?php echo number_format($view['wr_comment']) ?></strong></span>
		</div>
	</section> -->

	<?php
		$i = 0; $str = "";
		// 가변 파일
		foreach($view[file] as $value) {
			if($value[source] && !$value[view]) {

				$str .= "<li id='file_sector_{$i}'";
				if($i==0) $str .= " class='first'";
				$str .= ">";
				if($value[content]) $str .= "<a href=\"javascript:layer_file('{$i}');\" class='btn_handle'>보기</a>";
				$str .= "<a href=\"{$view['file'][$i]['href']}\" class='txt_name view_file_download' title='{$value[content]}'>{$value[source]}</a>";
				$str .= "<span class='txt_size'>({$value[size]})</span>";
				$str .= "<span class='txt_hit'>[{$value[download]}]</span>";
				$str .= "<span class='txt_date'>{$value[datetime]}</span>";
				if($value[content]) $str .= "<p class='txt_file_content' style='display:none;'>{$value[content]}</p>";
				$str .= "</li>";
				$i++;
			}
		}
		// 링크
		//foreach($view[link] as $key => $value) {
		//	if(!$value) continue;
		//	$str .= "<li";
		//	if($i==0) $str .= " class='first'";
		//	$str .= ">";
		//	$str .= "<a href='{$view[link_href][$key]}' class='txt_link' target='_blank'>".cut_str($value, 70)."</a>";
		//	$str .= "<span class='txt_hit'>[{$view[link_hit][$key]}]</span>";
		//	$str .= "</li>";
		//	$i++;
		//}
		//if($i>0) echo "<ul class='ad_list_area'>{$str}</ul>";
	?>

    <section id="bo_v_atc">
        <div style="display:inline-block; width:150px;">
          <div style="width:50%; border:1px solid #3ab6c5; float: left; vertical-align:middle;margin-top:12.2px; margin-right:10px; margin-bottom: 10px;"></div>
          <!--- <span class="top_title" style="font-size:1rem; font-weight:bold; font-family: 'Spoqa Han Sans', 'Spoqa Han Sans JP', 'Sans-serif';"><? //echo $board['bo_subject']; ?></span> --->
        </div>
         <!-- <h1 id="bo_v_title">
            <?php
            //if ($category_name) echo "[".$view['ca_name'].'] '; // 분류 출력 끝
            //echo cut_str(get_text($view['wr_subject']), 70); // 글제목 출력
            ?>
        </h1>  -->
        <h2 id="bo_v_atc_title">본문</h2>
        <div id="bo_v_con"><?php echo get_view_thumbnail($view['content']); ?></div>

        <?php
        // 파일 출력
        $v_img_count = count($view['file']);
        if($v_img_count) {
            echo "<div id=\"bo_v_img\">\n";

            // for ($i=0; $i<=count($view['file']); $i++) {
            //     if ($view['file'][$i]['view']) {
            //         //echo $view['file'][$i]['view'];
            //         echo "<div class='editor_img_wrap'>".get_view_thumbnail($view['file'][$i]['view'])."</div>";
            //     }
            // }

            echo "</div>\n";
        }
         ?>

        <!-- 본문 내용 시작 { -->
        <?php//echo $view['rich_content']; // {이미지:0} 과 같은 코드를 사용할 경우 ?>
        <!-- } 본문 내용 끝 -->

		<?php /* 추천 비추천 모두 사용 */
		if($is_good && $is_nogood) {
			$length = 194;
			if(!$view[wr_good] && !$view[wr_nogood]) {
				$abbab = "0.5";
			} else {
			$score_sum = $view[wr_nogood] + $view[wr_good];
			$abbab = $view[wr_good] / $score_sum;
		}
		$size = round($length * $abbab);
		?>
		<div class="article_score">
			<a class="btn_good" href="<?php echo $good_href ? $good_href.'&amp;'.$qstr : '#no_member' ?>" id="good_button" title="추천"></a>
			<div class="graph">
				<em id="txt_good" class="txt_good"><?=number_format($view[wr_good])?></em>
				<span id="score_bar" class="score_bar" style="width:<?=$size?>px;"></span>
				<span class="line_border"></span>
				<em id="txt_nogood" class="txt_nogood"><?=number_format($view[wr_nogood])?></em>
			</div>
			<a class="btn_nogood" href="<?php echo $nogood_href ? $nogood_href.'&amp;'.$qstr : '#no_member' ?>" id="nogood_button" title="비추천"></a>
		</div>
		<? } else if($is_good) { /* 추천만 사용 */ ?>
		<div class="article_score limit_score">
			<a class="btn_good" href="<?php echo $good_href ? $good_href.'&amp;'.$qstr : '#no_member' ?>" id="good_button" title="추천"></a>
			<em id="txt_good" class="txt_good"><?=number_format($view[wr_good])?></em>
		</div>
		<? } else if($is_nogood) { /* 비추천만 사용 */ ?>
		<div class="article_score limit_score">
			<a class="btn_nogood" href="<?php echo $nogood_href ? $nogood_href.'&amp;'.$qstr : '#no_member' ?>" id="nogood_button" title="비추천"></a>
			<em id="txt_nogood" class="txt_nogood"><?=number_format($view[wr_nogood])?></em>
		</div>
		<? } ?>
		<!-- //추천영역 !-->


		<? if ($is_signature) { ?>
		<!-- 네임카드 !-->
		<div class="namecard">
			<div class="ncard_head">
				<span class="txt_name"><?=$view[name]?>(<?=$mb[mb_id]?>)</span>
				<a id="btn_namecard" href="<?php echo G5_BBS_URL;?>/new.php?mb_id=<?=$view[mb_id]?>" class="btn_link"><span><?=$view[wr_name]?></span>님의 게시물전체보기</a>
			</div>
			<div class="ncard_body">
				<span class="txt_introduce"><?=$signature?nl2br($signature):"입력된 서명이 없습니다."?></span>
			</div>
		</div>
		<!-- //네임카드 !-->
		<? } ?>
    </section>
	<!-- <div class="fz_middle_btn">
		<div class="fl">
			<?php if ($prev_href) { ?><a href="<?php echo $prev_href ?>" class="list_btn btn_prev">이전글</a><?php } ?><?php if ($next_href) { ?><a href="<?php echo $next_href ?>" class="list_btn btn_next">다음글</a><?php } ?>
		</div>
		<div class="fr">
			<?php
				//include_once(G5_SNS_PATH."/view.sns.skin.php");
				//if ($scrap_href) { echo "<a href='{$scrap_href}' target='_blank' class='list_btn btn_scrap' onclick='win_scrap(this.href); return false;'>스크랩</a>";}
			?>
		</div>
	</div> -->



  <!-- 댓글 -->
    <!-- <?php
    // 코멘트 입출력
    // include_once('./view_comment.php');
     ?> -->
  <!-- 댓글 -->
  <?php if($is_admin){?>
    <!-- 링크 버튼 시작 { -->
    <div id="bo_v_bot">
        <?php echo $link_buttons ?>
    </div>
    <!-- } 링크 버튼 끝 -->
  <?}?>
</article>
<!-- } 게시판 읽기 끝 -->
</div>
<script type="text/javascript">
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

$(function() {
    $("a.view_image").click(function() {
        window.open(this.href, "large_image", "location=yes,links=no,toolbar=no,top=10,left=10,width=10,height=10,resizable=yes,scrollbars=no,status=no");
        return false;
    });

    // 추천, 비추천
    $("#good_button, #nogood_button").click(function() {
		if($(this).attr('href')=="#no_member"){alert("회원만 참여 가능합니다.");return false;}
        excute_good(this.href, this.id=="good_button" ? 1:0);
        return false;
    });

    // 이미지 리사이즈
    $("#bo_v_atc").viewimageresize();
});

function excute_good(href, $tx)
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
				if($tx)
				{
					$("#txt_good").text(number_format(String(data.count)));
					var score_good=parseInt(data.count);
					var score_nogood=parseInt($("#txt_nogood").text());
				}
				else
				{
					$("#txt_nogood").text(number_format(String(data.count)));
					var score_good=parseInt($("#txt_good").text());
					var score_nogood=parseInt(data.count);
				}
				var length = 194;
				var score_sum = score_good + score_nogood;
				var rate = score_good / score_sum;
				var size = Math.round(length * rate);
				$("#score_bar").width(size);
				alert((!$tx ? "비" :"")+"추천이 반영되었습니다.");
            }
        }, "json"
    );
}
var layer_file = function(file) {

	var $file = jQuery("#file_sector_"+file);

	if($file.children(".btn_handle").hasClass("on")) {
		$file.children(".btn_handle").removeClass("on");
		$file.children(".txt_file_content").hide();
	} else {
		$file.children(".btn_handle").addClass("on");
		$file.children(".txt_file_content").show();
	}
}
</script>
<!-- } 게시글 읽기 끝 -->
