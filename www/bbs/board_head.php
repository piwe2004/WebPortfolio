<?php


if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 게시판 관리의 상단 내용
if (G5_IS_MOBILE) {
    // 모바일의 경우 설정을 따르지 않는다.
    include_once(G5_BBS_PATH.'/_head.php');
    echo stripslashes($board['bo_mobile_content_head']);
} else {
    if(is_include_path_check($board['bo_include_head'])) {  //파일경로 체크
        @include ($board['bo_include_head']);
    } else {    //파일경로가 올바르지 않으면 기본파일을 가져옴
        include_once(G5_BBS_PATH.'/_head.php');
    }

    echo stripslashes($board['bo_content_head']);
}
?>
<?php
if($pn == intro){
  echo "<div class='board_wrap'>";
  include_once('../sub/intro/cate.php');
}elseif ($pn == brand) {
  include_once('../sub/brand/cate.php');
}elseif ($pn == marke) {
  include_once('../sub/marke/cate.php');
}elseif ($pn == media) {
  include_once('../sub/media/cate.php');
}elseif ($pn == work) {
  include_once('../sub/work/work.php');
}elseif ($pn == test2) {
  include_once('../sub/work/work.php');
}
if($pn == intro){
?>
<style>
  /* .cate_wrap{background:#f1f1f1;}
  body{background:#f1f1f1;} */
  /* .board_wrap{overflow:hidden;background:#f1f1f1;} */
</style>
<?}?>

<style>
  .sub_cate{overflow: hidden; margin-bottom:20px;}
</style>
