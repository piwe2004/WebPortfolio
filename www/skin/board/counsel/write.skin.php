<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$board_skin_url.'/style.css">', 0);
?>
<style>
  .head_img {margin-top:4%; width:100%; }
  .content_wrap{text-align:center; margin:4% 0;}
  .content_t1 {font-size:3.5rem; margin-bottom:2%; font-weight:300;}
  .content_t2 {font-size:1.05rem; line-height:30px; font-weight: 500; letter-spacing:1px;}
  .content_phon {font-size: 1.3rem; letter-spacing: 1px; font-weight:700; margin-bottom:7%;}
</style>
    <!-- <div class="head_img"><img src="/gnu/img/board/head_img.jpg" style="width:100%;"></div> -->


<section id="bo_w" style="width:1000px; margin:70px auto;">
    <!-- <div class="content_wrap">
      <p class="content_t1">당신의 프로젝트에 대해 이야기 해주세요</p>
      <p class="content_t2">메디온의 마케팅은 새로운 세상을 꿈꿉니다. </br> 꼼꼼히 컴토 후 빠른 시일 내에 연락 드리겠습니다.</p>
      <div style="margin:5% 0 3% 0;"><img src="/gnu/img/board/tel.jpg" style="100%;"></div>
      <p class="content_phon">010.9790.8111</p>
    </div> -->
    <!-- <h2 id="container_title"><?php echo $g5['title'] ?></h2> -->

	<?php
	if($csconfig['cf_counsel']){

		if(!$w && $csconfig['cf_agree']){

			switch($csconfig['cf_agree']) {
				case '1':
					$w_step = ($_POST['agree'])?"step2":"step1";
					break;
				case '2':
					$w_step = 'step2';
					break;
			}

		}else{

			$w_step = ($w=="r")?"re":"step2";

		}

		include_once($board_skin_path.'/write.'.$w_step.'.skin.php');

	}else{

		$str = '<p>온라인상담 스킨을 적용 또는 설치를 진해해주세요.</p>';
		if($is_admin) $str .= '<a role="button" href="/adm/counsel_config.php" class="btn_admin" target="_blank">설정 및 설치</a>';

		echo $str;

	}
	?>
</section>
<!-- } 게시물 작성/수정 끝 -->

<!-- NAVER SCRIPT* -->
<script type="text/javascript" src="//wcs.naver.net/wcslog.js"></script>
<script type="text/javascript">
var _nasa={};
_nasa["cnv"] = wcs.cnv("5","1");
</script>

<!-- WIDERPLANET PURCHASE SCRIPT START 2018.1.26 -->
<div id="wp_tg_cts" style="display:none;"></div>
<script type="text/javascript">
var wptg_tagscript_vars = wptg_tagscript_vars || [];
wptg_tagscript_vars.push(
(function() {
	return {
		wp_hcuid:"",  		     /*고객넘버 등 Unique ID (ex. 로그인  ID, 고객넘버 등 )를 암호화하여 대입.
					      *주의 : 로그인 하지 않은 사용자는 어떠한 값도 대입하지 않습니다.*/
		ti:"39086",            	     /*광고주 코드 */
		ty:"PurchaseComplete",       /*트래킹태그 타입 */
		device:"web",                /*디바이스 종류  (web 또는  mobile)*/
		items:[{i:"비용상담 ",	     /*전환 식별 코드  (한글 , 영어 , 번호 , 공백 허용 )*/
			t:"비용상담 ",         /*전환명  (한글 , 영어 , 번호 , 공백 허용 )*/
			p:"1",		     /*전환가격  (전환 가격이 없을경우 1로 설정 )*/
			q:"1"		     /*전환수량  (전환 수량이 고정적으로 1개 이하일 경우 1로 설정 )*/
		}]
	};
}));
</script>
<script type="text/javascript" src="//cdn-aitg.widerplanet.com/js/wp_astg_4.0.js"></script>
<!-- // WIDERPLANET PURCHASE SCRIPT END 2018.1.26 -->
