<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css?t=4">', 0);

$board['bo_gallery_width'] = 122;
$board['bo_gallery_height'] = 80;
?>
<style>
.thumb img{ width:100%; height:200px;}
</style>
<!-- <?php echo $bo_subject; ?> 웹진형 최신글 시작 { -->
<div class="wzine">
<h2 class="wzine_tit"><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>" title="<?php echo $bo_table?>게시판으로 이동버튼">
<?php echo $bo_subject; ?></a></h2>
<div class="wzine_cont">
<ul class="wzine_list">
    <?php for ($i=0; $i<count($list); $i++) {  ?>
        <li>
            <?php
			$content = cut_str(preg_replace("@<.*?>@","", $list[$i]['wr_content']),100); // 내용 자르기
			$subject_su = cut_str(preg_replace("@<.*?>@","", $list[$i]['subject']),15); // 내용 자르기
			$thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height']);
			if($thumb['src']) {
				$img_content = '<img src="'.$thumb['src'].'">';
			} else {
				$img_content = '';
			}


            //echo $list[$i]['icon_reply']." ";
			echo "<div class=\"r_list\">";
            echo "<a href=\"".$list[$i]['href']."\">";
			echo "<span class=\"cont\">";
            if ($list[$i]['is_notice'])
                echo "<strong>".$subject_su."</strong><p>".$content;
            else
                echo "<strong>".$subject_su."</strong><p>".$content;
            if ($list[$i]['comment_cnt'])
                echo $list[$i]['comment_cnt'];

            // if ($list[$i]['link']['count']) { echo "[{$list[$i]['link']['count']}]"; }
            // if ($list[$i]['file']['count']) { echo "<{$list[$i]['file']['count']}>"; }
            //
            // if (isset($list[$i]['icon_new'])) echo " " . $list[$i]['icon_new'];
            // if (isset($list[$i]['icon_hot'])) echo " " . $list[$i]['icon_hot'];
            // if (isset($list[$i]['icon_file'])) echo " " . $list[$i]['icon_file'];
            // if (isset($list[$i]['icon_link'])) echo " " . $list[$i]['icon_link'];
            // if (isset($list[$i]['icon_secret'])) echo " " . $list[$i]['icon_secret'];

			echo "</p></span></a></div>";
             ?>
             <span class="date" ><?php echo date("Y.m.d ", strtotime($list[$i]['datetime'])) ?></span>
        </li>
    <?php }  ?>
    <?php if (count($list) == 0) { //게시물이 없을 때  ?>
  <li>
  <!-- <div class="thumb"><a href="#"><img alt="" src="<?php echo $latest_skin_url ?>/img/no_img.jpg"></a></div> -->
  <!-- <div class="r_list"><a href="#"><span class="cont">게시물이 없습니다.<br>게시물이 없습니다.</span> -->
  <div class="r_list em_box"><a href="#"><span class="cont" style="font-size:0.8rem;">게시물이 없습니다.</span>
  </a></div></li>
  <?php }  ?>
	</ul>
  </div>
 </div>
<!-- } <?php echo $bo_subject; ?> 최신글 끝 -->
