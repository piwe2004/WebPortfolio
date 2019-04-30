<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
$category_option = str_replace('전체', 'All', $category_option);

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css?t=1">', 0);
?>
<link rel="stylesheet" type="text/css" href="<?php echo $board_skin_url ?>/css/component.css?t=7" />
<script src="<?php echo $board_skin_url ?>/js/modernizr.custom.js"></script>

<!-- <h2 id="container_title"><?php //echo $board['bo_subject'] ?><span class="sound_only"> 목록</span></h2> -->
<style>
  .wrap{background:#f7f7f7;}

  #bo_cate_ul{width:100%; margin:0 auto;}

  .sub_cate{margin-bottom: 0;}
  .empty_list{float: none !important; margin:0 auto !important;}
  .tail_sec_ul{margin:0 47px!important;}
  .sj_cate{box-sizing:border-box; padding:25px; max-height:123px; background:#fff;}
  .sj_sj_name{font-size:18px; letter-spacing:-1px; margin-bottom:6px; }
  .sj_ca_exp{font-size:12px; color:#4b4b4b; margin-bottom:15px;}
  .sj_cate_name > a{font-size:12px; color:#b4b4b4;}
  .fi_bg_div{opacity:0; background:rgba(0,0,0,0.5); width:100%; height:219px; position:absolute; z-index: 2; transition:all .8s;}
  #bo_cate li {float:left;margin-bottom:-1px; font-size:15px; font-weight:300; font-family: 'Montserrat', sans-serif;  box-sizing: border-box; line-height:50px; width:150px;  height:50px; margin-right:10px; background:#fff;}
  #bo_cate li:last-child {margin-right:0px; text-align: center;}
  #bo_cate_on{border:1px solid #019494;}
  #bo_cate_on::before{content:""; display: block; position:absolute; right:-1px; top:-1px; width:31px; height:16px; background:#f7f7f7;}
  #bo_cate_on::after{content:""; display: block; position:absolute; left:-1px; bottom:-1px; width:31px; height:16px; background:#f7f7f7;}
  #bo_cate{margin-bottom:60px;}
  figure > a > div {box-sizing: border-box; overflow: hidden;}
  /* figure > a > div > img {transition:all 2.0s;} */
  figure:hover > a > div > img{transform:scale(1.1); transition:all .8s;}
  figure:hover .fi_bg_div{opacity:1;}
</style>
<script>
  $(document).ready(function(){
    $("#bo_cate_on").parent().css({
      background:"none"
    });
  });
</script>
<?php
if($bo_table == brwork2){
  // include_once('brmk_sl.php');
  include_once('testsl.php');

// if($bo_table == test2){
//   include_once('brmk_sl.php');
?>
<style media="screen">
  #bo_cate ul {margin-bottom:10px;padding-left:1px;width:951px;zoom:1}
  #bo_gall{ margin:-40px auto 50px;}
</style>
<?php
} else if ($bo_table == design ) {
  include_once('desisli.php');
?>
<style media="screen">
  #bo_cate ul {margin-bottom:10px;padding-left:1px;width:635px;zoom:1}
  #bo_gall{margin:50px auto;}
</style>
<?php
} else {
  include_once('brmk_sl.php');

  // include_once('testsl.php');
}
?>

<!-- 게시판 목록 시작 { -->
<div id="bo_gall" style="width:1200px;">

    <?php if ($is_category) { ?>
    <nav id="bo_cate">
        <h2><?php echo $board['bo_subject'] ?> 카테고리</h2>
        <ul id="bo_cate_ul">
            <?php echo $category_option ?>
        </ul>
    </nav>
    <?php } ?>

    <div class="bo_fx">
        <!-- <div id="bo_list_total">
            <span>Total <?php// echo number_format($total_count) ?>건</span>
            <?php// echo $page ?> 페이지
        </div> -->

        <?php if ($rss_href || $write_href) { ?>
        <ul class="btn_bo_user">
            <?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01">RSS</a></li><?php } ?>
            <?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin">관리자</a></li><?php } ?>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02">글쓰기</a></li><?php } ?>
        </ul>
        <?php } ?>
    </div>

    <form name="fboardlist"  id="fboardlist" action="./board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
    <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
    <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
    <input type="hidden" name="stx" value="<?php echo $stx ?>">
    <input type="hidden" name="spt" value="<?php echo $spt ?>">
    <input type="hidden" name="page" value="<?php echo $page ?>">
    <input type="hidden" name="sw" value="">

    <?php if ($is_checkbox) { ?>
    <div id="gall_allchk">
        <label for="chkall" class="sound_only">현재 페이지 게시물 전체</label>
        <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);">
    </div>
    <?php } ?>

    <ul class="grid cs-style-4">
        <?php for ($i=0; $i<count($list); $i++) {
            if($i>0 && ($i % $bo_gallery_cols == 0))
                $style = 'clear:both;';
            else
                $style = '';
            if ($i == 0) $k = 0;
            $k += 1;
            if ($k % $bo_gallery_cols == 0) $style .= "margin:0 !important;";
         ?>
		 <li>
			<figure>
          <a href="<?php echo $list[$i]['href'] ?>">
				<div>
          <div class="fi_bg_div"></div>
    				<?php
    				if ($list[$i]['is_notice']) { // 공지사항  ?>
              <?php
            	$thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height']);
              if($thumb['src']) {
                $img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" "width:'.$board['bo_gallery_width'].'px;height:'.$board['bo_gallery_height'].'px">';
              } else {
                $img_content = '<span style="width:'.$board['bo_gallery_width'].'px;height:'.$board['bo_gallery_height'].'px">no image</span>';
              }
              echo $img_content;
              ?>
    					<!-- <strong style="width:<?php //echo $board['bo_gallery_width'] ?>px;height:<?php //echo $board['bo_gallery_height'] ?>px">공지</strong> -->
    				<?php } else {
    					$thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height']);

    					if($thumb['src']) {
    						$img_content = '<img src="'.$thumb['src'].'" alt="'.$thumb['alt'].'" "width:'.$board['bo_gallery_width'].'px;height:'.$board['bo_gallery_height'].'px">';
    					} else {
    						$img_content = '<span style="width:'.$board['bo_gallery_width'].'px;height:'.$board['bo_gallery_height'].'px">no image</span>';
    					}

    					echo $img_content;
    				}
    				 ?>
				</div>
          </a>
          <div class="sj_cate">
            <a href="<?php echo $list[$i]['href'] ?>"><p class="sj_sj_name">
              <?php
              $content = cut_str(preg_replace("@<.*?>@","", $list[$i]['subject']),15); // 내용 자르기
              echo $content;
              ?>
              <!-- <p>자세히보기 →</p> -->
              <?if($is_admin){?>
              <span><?php echo $list[$i]['wr_2']?></span>
              <?}?>
            </p></a>
            <p class="sj_ca_exp"><?php echo $list[$i]['wr_1']?></p>
            <?php
              $cate_name = $list[$i]['ca_name'];
              $cate_re = str_replace('Web&Modoo', 'Web%26Modoo', $cate_name);
            ?>
            <p class="sj_cate_name"><a href="<?php echo G5_BBS_URL.'/board.php?bo_table='.$bo_table."&amp;sca=".$cate_re ?>">#<?php echo $list[$i]['ca_name'] // 분류 출력 끝?></a></p>
          </div>

				<figcaption>
          <!-- <a href="<?php echo $list[$i]['href'] ?>"> -->
  					<!-- <div class="ge_suj"> -->
              <!-- <h3> -->
              <?php //echo $list[$i]['subject'] ?>
              <!-- <p>자세히보기 →</p> -->
              <!-- </h3> -->
            <!-- </div> -->
            <!-- </a> -->
          <!-- <div class="icon_wrap"> -->
            <!-- <div class="more_btn"> -->
		          <!-- <a href="<?php //echo $list[$i]['href'] ?>">자세히보기<i class="fal fa-long-arrow-right"></i></a> -->
            <!-- </div> -->
            <!-- <div class="blank_btn"> -->
              <!-- <a href="<?php //echo $list[$i]['wr_link1'] ?>" target="blank"></a> -->
            <!-- </div> -->
          <!-- </div> -->
					<?php //echo $list[$i]['name'] ?>
				</figcaption>
			</figure>
		</li>
        <?php } ?>
        <?php if (count($list) == 0) { echo "<li class=\"empty_list\">게시물이 없습니다.</li>"; } ?>
    </ul>

    <?php if ($list_href || $is_checkbox || $write_href) { ?>
    <div class="bo_fx">
        <?php if ($is_checkbox) { ?>
        <ul class="btn_bo_adm">
            <li><input type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value"></li>
            <li><input type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value"></li>
            <li><input type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value"></li>
        </ul>
        <?php } ?>

        <?php if ($list_href || $write_href) { ?>
        <ul class="btn_bo_user">
            <?php if ($list_href) { ?><li><a href="<?php echo $list_href ?>" class="btn_b01">목록</a></li><?php } ?>
            <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b02">글쓰기</a></li><?php } ?>
        </ul>
        <?php } ?>
    </div>
    <?php } ?>
    </form>
    <!-- 페이지 -->
    <?php echo $write_pages;  ?>

    <!-- 게시물 검색 시작 { -->
    <fieldset id="bo_sch">
        <legend>게시물 검색</legend>

        <form name="fsearch" method="get">
        <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
        <input type="hidden" name="sca" value="<?php echo $sca ?>">
        <input type="hidden" name="sop" value="and">
        <label for="sfl" class="sound_only">검색대상</label>
        <select name="sfl" id="sfl">
            <option value="wr_subject"<?php echo get_selected($sfl, 'wr_subject', true); ?>>제목</option>
            <option value="wr_content"<?php echo get_selected($sfl, 'wr_content'); ?>>내용</option>
            <option value="wr_subject||wr_content"<?php echo get_selected($sfl, 'wr_subject||wr_content'); ?>>제목+내용</option>
            <option value="mb_id,1"<?php echo get_selected($sfl, 'mb_id,1'); ?>>회원아이디</option>
            <option value="mb_id,0"<?php echo get_selected($sfl, 'mb_id,0'); ?>>회원아이디(코)</option>
            <option value="wr_name,1"<?php echo get_selected($sfl, 'wr_name,1'); ?>>글쓴이</option>
            <option value="wr_name,0"<?php echo get_selected($sfl, 'wr_name,0'); ?>>글쓴이(코)</option>
        </select>
        <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
        <input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="frm_input required" size="15" maxlength="15">
        <input type="submit" value="검색" class="btn_submit">
        </form>
    </fieldset>
    <!-- } 게시물 검색 끝 -->
</div>
<script src="<?php echo $board_skin_url ?>/js/toucheffects.js"></script>









<?php if($is_checkbox) { ?>
<noscript>
<p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
</noscript>
<?php } ?>



<?php if ($is_checkbox) { ?>
<script>
function all_checked(sw) {
    var f = document.fboardlist;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]")
            f.elements[i].checked = sw;
    }
}

function fboardlist_submit(f) {
    var chk_count = 0;

    for (var i=0; i<f.length; i++) {
        if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
            chk_count++;
    }

    if (!chk_count) {
        alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
        return false;
    }

    if(document.pressed == "선택복사") {
        select_copy("copy");
        return;
    }

    if(document.pressed == "선택이동") {
        select_copy("move");
        return;
    }

    if(document.pressed == "선택삭제") {
        if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
            return false;

        f.removeAttribute("target");
        f.action = "./board_list_update.php";
    }

    return true;
}

// 선택한 게시물 복사 및 이동
function select_copy(sw) {
    var f = document.fboardlist;

    if (sw == 'copy')
        str = "복사";
    else
        str = "이동";

    var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

    f.sw.value = sw;
    f.target = "move";
    f.action = "./move.php";
    f.submit();
}
</script>
<?php } ?>
<!-- } 게시판 목록 끝 -->
