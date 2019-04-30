<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

if(!$is_admin){
  header("Location:http://brothers-solution.com/temporary.php");
}

include_once(G5_PATH.'/head.php');
?>
<style>


</style>
<div class="main_box main_box1" style="">
	<div class="main_box1_font_wrap">
		<div style="margin-bottom:20px; margin-top:-95px;"><span class="sq_font box1_font1 " style="">마케팅의 새로운 패러다임</span></br></div>
		<div><span class="sq_font box1_font2">BROTHERS SOLUTION</span></div>
	</div>
</div>
<div class="main_box main_box2">
	<div class="main_box2_font_wrap">
		<div><span class="sq_font box2_font1">(주)브라더스솔루션은 고객사의 정확한 needs를 파악하여</br>최적화된 마케팅프로모션, 온/오프라인 마케팅, 홈페이지 제작,</br>SNS 마케팅 솔루션을 제공하기 위해 노력하고 있습니다.
</span></div>
	</div>
	<a href="/sub/info.php"><div class="but_more"><span class="sq_font">VEIW MORE</span></div></a>
</div>
<div class="main_box main_box3">
	<div class="box_img"><img src="/image/main/main_3.jpg" style="width:100%;"></div>
	<div class="main_box box_wrap">
		<div class="boxs box1"><a href="/sub/onoff.php"><img src="/image/main/box_1.jpg"></a></div>
		<div class="boxs box2"><a href="/sub/media.php"><img src="/image/main/box_2.jpg"></a></div>
		<div class="boxs box3"><a href="/sub/making.php"><img src="/image/main/box_3.jpg"></a></div>
		<div class="boxs box4"><a href="/sub/brand.php"><img src="/image/main/box_4.jpg"></a></div>
	</div>
</div>
<div class="main_box main_box4">z
		<div class="main_box4_font_wrap">
			<div><span class="sq_font box4_font1">맞춤형 전략과 크리에이티브한 기획력으로</br>효율적인 마케팅 솔루션을 제공합니다.</span></div>
		</div>
</div>
<div class="main_box4_img"><img src="/image/main/main_4.jpg" style="width:100%;"></div>
<div class="main_box info">
	<div class="left_img"><img src="/image/main/office_1.jpg"></div>
	<div class="right_img">
		<img src="/image/main/contact_top.jpg" style="width:100%;">
		<?php
		include_once("./customer1.php");
		?>
	</div>
</div>
<div class="main_box map"><img src="/image/main/map.jpg"></div>
<?php
include_once(G5_PATH.'/tail.php');
?>
