<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

// if (G5_IS_MOBILE) {
    // include_once(G5_MOBILE_PATH.'/tail.php');
    // return;
// }
?>


<link href="/css/pcht.css?t=12" rel="stylesheet" media="screen and (min-width:641px) and (max-width:1920px)">
<link href="/css/moht.css?t=14" rel="stylesheet" media="screen and (max-width:640px)">
<!-- 하단 시작 { -->
  <div class="tail_wrap">
  	<div class="tail">
      <ul class="tail_fir_ul tail_ul">
          <li class="tail_in_ment">(주) BROTHERS SOLUTION은 마케팅 그 이상의 가치를 전합니다.</br>놀라운 변화의 시작은  BROTHERS SOLUTION에서 시작됩니다.</li>
          <!-- <li class="tail_in_sur"></li> -->
          <ul class="name_wrap">
            <li class="boss_name">CEO Choi Jaewan</li>
            <li class="tail_bln">CRN 514-86-00309</li>
          </ul>
          <li class="tail_in_cm">ⓒ brothers-solution 2017 All rights reserved.</li>
          <li class="tail_anne">저희 홈페이지는 크롬에서 최적화 되어 있습니다.</li>
      </ul>
      <ul class="tail_sec_ul tail_ul">
          <li class="sec_ul_ment">49, Centum dong-ro, Haeundae-gu,</br>Busan, Republic of Korea, 48059</li>
          <li class="call_number">Tel 1899.6742</li>
          <li class="sec_ul_mail">master@brothers-solution.com</li>
          <li class="fax_number">Fax 0303.3130.6742</li>
      </ul>
      <ul class="tail_thi_ul tail_ul">
          <li class="tail_sns_ment">BS SNS</li>
          <li class="sns_icon_wrap">
            <ul>
              <li>
                <a href="https://www.facebook.com/Brothers-Solution-313150909161061/" title="새창으로이동" target="blank"><img src="/image/tail/face_icon.png" alt="브라더스솔루션 페이스북 이동"></a>
              </li>
              <li>
                <a href="http://blog.naver.com/brotherssolution" target="blank" title="새창으로이동"><img src="/image/tail/blog_icon.png" alt="브라더스솔루션 블로그 이동"></a>
              </li>
              <li>
                <a href="http://instagram.com/brothers_solution" title="새창으로이동" target="blank"><img src="/image/tail/insta_icon.png" alt="브라더스솔루션 인스타그램 이동"></a>
              </li>
              <li>
                <a href="https://pf.kakao.com/_gxgxokxl"title="새창으로이동" target="_blank"><img src="/image/tail/yellow_icon.png" alt="브라더스솔루션 옐로아이디 이동"></a>
              </li>
              <li>
                <a href="https://www.youtube.com/channel/UCaOfJMhSlwbOnESYTT9J0qQ/featured"title="새창으로이동" target="_blank"><img src="/image/tail/youtube_icon.png" alt="브라더스솔루션 유튜브사이트로 이동"></a>
              </li>
            </ul>
          </li>
      </ul>
  	</div>
  </div>
  <div class="mo_tail_wrap">
  	<div class="mo_tail">
		<ul class="mo_tail_thi_ul mo_tail_ul">
			  <li class="mo_sns_icon_wrap">
				<ul>
				  <li>
					<a href="https://www.facebook.com/Brothers-Solution-313150909161061/" title="새창으로이동" target="blank"><img src="/image/tail/face_icon.png" alt="브라더스솔루션 페이스북 이동"></a>
				  </li>
				  <li>
					<a href="http://blog.naver.com/brotherssolution" target="blank" title="새창으로이동"><img src="/image/tail/blog_icon.png" alt="브라더스솔루션 블로그 이동"></a>
				  </li>
				  <li>
					<a href="http://instagram.com/brothers_solution" title="새창으로이동" target="blank"><img src="/image/tail/insta_icon.png" alt="브라더스솔루션 인스타그램 이동"></a>
				  </li>
				  <li>
					<a href="https://pf.kakao.com/_gxgxokxl"title="새창으로이동"><img src="/image/tail/yellow_icon.png" alt="브라더스솔루션 옐로아이디 이동"></a>
				  </li>
          <li>
            <a href="https://www.youtube.com/channel/UCaOfJMhSlwbOnESYTT9J0qQ/featured"title="새창으로이동" target="_blank"><img src="/image/tail/youtube_icon.png" alt="브라더스솔루션 유튜브사이트로 이동"></a>
          </li>
				</ul>
			  </li>
		  </ul>
		  <ul class="mo_tail_sec_ul tail_ul">
      <li class="mo_call_number">Tel 1899.6742</li>
      <li class="mo_fax_number">Fax 0303.3130.6742</li>
			<li class="mo_sec_ul_mail">master@brothers-solution.com</li>
			<li class="mo_sec_ul_ment">49, Centum dong-ro, Haeundae-gu,</br>Busan, Republic of Korea, 48059</li>
		  </ul>
		  <ul class="mo_tail_fir_ul mo_tail_ul">
			  <li class="mo_tail_in_ment"> BROTHERS SOLUTION은 마케팅 그 이상의 가치를 전합니다.</br>놀라운 변화의 시작은  BROTHERS SOLUTION에서 시작됩니다.</li>
        <ul class="mo_boss_wrap">
          <li class="mo_boss_name">CEO Choi Jaewan</li>
          <li class="mo_tail_bln">CRN 514-86-00309</li>
        </ul>
			  <li class="mo_tail_in_cm">ⓒ brothers-solution 2017 All rights reserved.</li>
		  </ul>
  	</div>
    <div class="mo_tail_logo">
  		<img src="/image/pabi2.png">
  	</div>
    <!-- <div class="mo_tail_logo_w">
	<div class="mo_tail_logo">
		<img src="/image/pabi2.png">
	</div>
    </div> -->
  </div>
</div>

<?php
if (!G5_IS_MOBILE) {
  if(!$bo_table){
?>

<!-- WIDERPLANET  SCRIPT START 2017.12.26 -->
<div id="wp_tg_cts" style="display:none;"></div>
<script type="text/javascript">
var wptg_tagscript_vars = wptg_tagscript_vars || [];
wptg_tagscript_vars.push(
(function() {
	return {
		wp_hcuid:"",   /*고객넘버 등 Unique ID (ex. 로그인  ID, 고객넘버 등 )를 암호화하여 대입.
				*주의 : 로그인 하지 않은 사용자는 어떠한 값도 대입하지 않습니다.*/
		ti:"39086",	/*광고주 코드 */
		ty:"Home",	/*트래킹태그 타입 */
		device:"web"	/*디바이스 종류  (web 또는  mobile)*/

	};
}));
</script>
<script type="text/javascript" async src="//cdn-aitg.widerplanet.com/js/wp_astg_4.0.js"></script>
<!-- // WIDERPLANET  SCRIPT END 2017.12.26 -->
<?}?>
<!-- 공통 적용 스크립트 , 모든 페이지에 노출되도록 설치. 단 전환페이지 설정값보다 항상 하단에 위치해야함 -->
<script type="text/javascript" src="//wcs.naver.net/wcslog.js"> </script>
<script type="text/javascript">
if (!wcs_add) var wcs_add={};
wcs_add["wa"] = "s_2bcb1d8503bf";
if (!_nasa) var _nasa={};
wcs.inflow();
wcs_do(_nasa);
</script>

<!-- 네이버 애널리틱스 -->
<script type="text/javascript" src="http://wcs.naver.net/wcslog.js"></script>
<script type="text/javascript">
if(!wcs_add) var wcs_add = {};
wcs_add["wa"] = "57187dbdcfd998";
wcs_do();
</script>
<!-- 네이버 애널리틱스 -->
<?php }?>

<?php
if (G5_IS_MOBILE) {
?>
<!-- WIDERPLANET  SCRIPT START 2017.12.26 -->
<div id="wp_tg_cts" style="display:none;"></div>
<script type="text/javascript">
var wptg_tagscript_vars = wptg_tagscript_vars || [];
wptg_tagscript_vars.push(
(function() {
	return {
		wp_hcuid:"",  	/*고객넘버 등 Unique ID (ex. 로그인  ID, 고객넘버 등 )를 암호화하여 대입.
				 *주의 : 로그인 하지 않은 사용자는 어떠한 값도 대입하지 않습니다.*/
		ti:"39086",	/*광고주 코드 */
		ty:"Home",	/*트래킹태그 타입 */
		device:"mobile"	/*디바이스 종류  (web 또는  mobile)*/
	};
}));
</script>

<!-- NAVER SCRIPT_m -->
<script type="text/javascript" src="//wcs.naver.net/wcslog.js"></script>
<script type="text/javascript">
if (!wcs_add) var wcs_add={};
wcs_add["wa"] = "s_2bcb1d8503bf";
if (!_nasa) var _nasa={};
wcs.inflow("brothers-solution.com");
wcs_do(_nasa);
</script>

<script type="text/javascript" async src="//cdn-aitg.widerplanet.com/js/wp_astg_4.0.js"></script>
<!-- // WIDERPLANET  SCRIPT END 2017.12.26 -->
<!-- 모바일 네이버 애널리틱스 -->
<script type="text/javascript" src="http://wcs.naver.net/wcslog.js"></script>
<script type="text/javascript">
if(!wcs_add) var wcs_add = {};
wcs_add["wa"] = "4e76e6ac9b8c18";
wcs_do();
</script>
<!-- 모바일 네이버 애널리틱스 -->
<?php }?>
<?php
include_once(G5_PATH."/tail.sub.php");
?>
