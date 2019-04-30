<?php

Header("Location:/sub/media/process.php");

include_once('../../common.php');
include_once('../../head.php');

$np = worth;

include_once('./cate.php');
?>
<link href="https://fonts.googleapis.com/css?family=Raleway:700" rel="stylesheet">
<style>
ul{padding:0; margin:0;}
.sub_wrap{width:1200px; margin:0 auto;}
.movie_wrap{margin:70px 0;}
.moive_top_ul{margin-top:13px; overflow: hidden;}
.left_li{float:left; }
.li_2_1{margin-bottom: 13px;}
.left_li_2{margin-left:13px;}
.mo_movie_wrap{display:none;}
.tail_wrap{position:absolute; left:0;}
.bo_fx{display:none;}
#bo_gall{padding-top:10px;}
.list_mv{width:1200px; height:1100px; margin-top:20px;}
.list_mv iframe{width:100%; height:100%;}
@media only screen and (max-width:640px)
{
.sub_cate{overflow:hidden;}
.sub_wrap{width:100%; max-width:960px; margin:0; min-width:0;}
.sub_top_me_wrap{max-width:960px; width:100%; margin:0;}
.sub_topbg{max-width:960px;}
.mo_movie_wrap{display:block; margin:4% 0 0;}
.mo_movie_wrap li{width:100%; margin-bottom:2%;}
.movie_wrap{display:none;}
.mo_movie_wrap ul {text-align:center;}
.mo_call_btn{width:315px !important; padding:3% 5%; background:#ff0000; text-align:center; font-size:1rem; color:#fff; margin:5% auto !important; box-sizing: border-box; font-weight:900; -webkit-border-radius: 7px; border-radius: 7px;}
.movie_bot{overflow:hidden; background:#f7f7f7; margin:0 !important; padding:6% 0 5%; }
.list_mv{width:90%; height:600px; margin:20px auto 0;}
}

</style>

<div class="sub_wrap">
  <div class="movie_wrap">
    <ul class="moive_top_ul">
      <li><iframe width="1200" height="675" src="https://www.youtube.com/embed/Dqz50dJuFPs?rel=0" frameborder="0" gesture="media" allowfullscreen></iframe>
      </li>
    </ul>
    <div class="list_mv">
      <iframe src="/bbs/board.php?bo_table=pr2" frameborder="0" scrolling="no" gesture="media" allowfullscreen></iframe>
    </div>
    <?php
      // if(!G5_IS_MOBILE){
      // require_once(G5_BBS_PATH.'/board.php');
      // return;
      // }
     ?>
  </div>
  <div class="mo_movie_wrap">
  <ul>
		<li><iframe width="330" height="226" src="https://www.youtube.com/embed/Dqz50dJuFPs?rel=0" frameborder="0" gesture="media" allowfullscreen></iframe></li>
    <a href="tel:1899.6742"><li class="mo_call_btn">동영상제작문의</li></a>

    <div class="list_mv">
      <iframe src="/bbs/board.php?bo_table=pr2" frameborder="0" gesture="media" allowfullscreen></iframe>
    </div>
    <?php
      // if(G5_IS_MOBILE){
      // require_once(G5_BBS_PATH.'/board.php');
      // return;
      // }
     ?>
    <!-- <li class="movie_bot">
      <ul>
    		<li><iframe width="315" height="225" src="https://www.youtube.com/embed/n5tuB7OHssE?rel=0" frameborder="0" gesture="media" allowfullscreen></iframe></li>
    		<li><iframe width="315" height="225" src="https://www.youtube.com/embed/DE0lRhocIfE?rel=0" frameborder="0" gesture="media" allowfullscreen></iframe></li>
    		<li><iframe width="315" height="225" src="https://www.youtube.com/embed/ck8TSRdrs3Y?rel=0" frameborder="0" gesture="media" allowfullscreen></iframe></li>
      </ul>
    </li> -->
	</ul>
  </div>
</div>
<?php
include_once('../../tail.php');
?>
