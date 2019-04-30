<?php
// 이 파일은 새로운 파일 생성시 반드시 포함되어야 함
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 테마 head.sub.php 파일
if(!defined('G5_IS_ADMIN') && defined('G5_THEME_PATH') && is_file(G5_THEME_PATH.'/head.sub.php')) {
    require_once(G5_THEME_PATH.'/head.sub.php');
    return;
}

$begin_time = get_microtime();

if (!isset($g5['title'])) {
    $g5['title'] = $config['cf_title'];
    $g5_head_title = $g5['title'];
}
else {
    $g5_head_title = $g5['title']; // 상태바에 표시될 제목
    $g5_head_title .= " | ".$config['cf_title'];
}

// 현재 접속자
// 게시판 제목에 ' 포함되면 오류 발생
$g5['lo_location'] = addslashes($g5['title']);
if (!$g5['lo_location'])
    $g5['lo_location'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
$g5['lo_url'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
if (strstr($g5['lo_url'], '/'.G5_ADMIN_DIR.'/') || $is_admin == 'super') $g5['lo_url'] = '';

/*
// 만료된 페이지로 사용하시는 경우
header("Cache-Control: no-cache"); // HTTP/1.1
header("Expires: 0"); // rfc2616 - Section 14.21
header("Pragma: no-cache"); // HTTP/1.0
*/
?>
<!doctype html>
<html lang="ko">
<head>
<meta charset="utf-8">
<?php
if (G5_IS_MOBILE) {
    echo '<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">'.PHP_EOL;
    echo '<meta name="HandheldFriendly" content="true">'.PHP_EOL;
    echo '<meta name="format-detection" content="telephone=no">'.PHP_EOL;
} else {
	echo '<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">'.PHP_EOL;
    echo '<meta http-equiv="imagetoolbar" content="no">'.PHP_EOL;
    echo '<meta http-equiv="X-UA-Compatible" content="IE=Edge">'.PHP_EOL;
}

if($config['cf_add_meta'])
    echo $config['cf_add_meta'].PHP_EOL;
?>
<meta name="naver-site-verification" content="b198238fd5e80dbc0b7b75fdcde8b2d89f76bb76"/>
<meta name="description" content="종합광고대행사, IMC전문컨설팅, 성과위주 광고운영, 검색광고, 배너광고, 바이럴광고, SNS광고, 영상제작">
<meta property="og:type" content="website">
<meta property="og:title" content="온라인광고대행사 (주)브라더스솔루션">
<meta property="og:image" content="http://brothers-solution.com/image/og_img_1.jpg">
<meta property="og:description" content="종합광고대행사, IMC전문컨설팅, 성과위주 광고운영, 검색광고, 배너광고, 바이럴광고, SNS광고, 영상제작">
<link rel="shortcut icon" href="/image/pabi.ico" type="image/x-icon">
<link rel="icon" href="/image/pabi.ico" type="image/x-icon">
<title><?php echo $g5_head_title; ?></title>
<?php
if (defined('G5_IS_ADMIN')) {
    if(!defined('_THEME_PREVIEW_'))
        echo '<link rel="stylesheet" href="'.G5_ADMIN_URL.'/css/admin.css?ver='.G5_CSS_VER.'">'.PHP_EOL;
} else {
    // echo '<link rel="stylesheet" href="'.G5_CSS_URL.'/'.(G5_IS_MOBILE?'mobile':'default').'.css?ver=7'.G5_CSS_VER.'">'.PHP_EOL;
	echo '<link rel="stylesheet" href="'.G5_CSS_URL.'/'.(G5_IS_MOBILE?'default':'default').'.css?ver=8'.G5_CSS_VER.'">'.PHP_EOL;
}
?>
<link rel="stylesheet" href="http://brothers-solution.com/css/font.css?t=2">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:100,200,300,400,500,600,700,800,900"> <!--- font-family:'Encode Sans Expanded'; CJH --->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"><!-- font-family: 'Montserrat', sans-serif; SJ -->
<link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet"><!-- font-family: 'Play', sans-serif; SJ -->
<!-- <link rel="stylesheet" href="/css/fontawesome-free-5.0.6/web-fonts-with-css/css/fontawesome.min.css"> -->
<!--[if lte IE 8]>
<script src="<?php echo G5_JS_URL ?>/html5.js"></script>
<![endif]-->
<script>
// 자바스크립트에서 사용하는 전역변수 선언
var g5_url       = "<?php echo G5_URL ?>";
var g5_bbs_url   = "<?php echo G5_BBS_URL ?>";
var g5_is_member = "<?php echo isset($is_member)?$is_member:''; ?>";
var g5_is_admin  = "<?php echo isset($is_admin)?$is_admin:''; ?>";
var g5_is_mobile = "<?php echo G5_IS_MOBILE ?>";
var g5_bo_table  = "<?php echo isset($bo_table)?$bo_table:''; ?>";
var g5_sca       = "<?php echo isset($sca)?$sca:''; ?>";
var g5_editor    = "<?php echo ($config['cf_editor'] && $board['bo_use_dhtml_editor'])?$config['cf_editor']:''; ?>";
var g5_cookie_domain = "<?php echo G5_COOKIE_DOMAIN ?>";
<?php if(defined('G5_IS_ADMIN')) { ?>
var g5_admin_url = "<?php echo G5_ADMIN_URL; ?>";
<?php } ?>
</script>
<!-- <script src="<?php echo G5_JS_URL ?>/jquery-1.8.3.min.js"></script> -->
<script src="<?php echo G5_JS_URL ?>/jquery-1.11.3.min.js"></script>
<script src="<?php echo G5_JS_URL ?>/jquery.menu.js?ver=<?php echo G5_JS_VER; ?>"></script>
<script src="<?php echo G5_JS_URL ?>/common.js?ver=<?php echo G5_JS_VER; ?>"></script>
<script src="<?php echo G5_JS_URL ?>/wrest.js?ver=<?php echo G5_JS_VER; ?>"></script>

<?php
if(G5_IS_MOBILE) {
    echo '<script src="'.G5_JS_URL.'/modernizr.custom.70111.js"></script>'.PHP_EOL; // overflow scroll 감지
}
if(!defined('G5_IS_ADMIN'))
    echo $config['cf_add_script'];
?>
<!-- 네이버웹마스터 채널반영 -->
<span itemscope="" itemtype="http://schema.org/Organization">
 <link itemprop="url" href="http://brothers-solution.com">
 <a itemprop="sameAs" href="http://instagram.com/brothers_solution"></a>
 <a itemprop="sameAs" href="https://www.facebook.com/Brothers-Solution-313150909161061/"></a>
 <a itemprop="sameAs" href="https://www.youtube.com/channel/UCaOfJMhSlwbOnESYTT9J0qQ"></a>
</span>
<!-- 네이버웹마스터 채널반영 -->
</head>
<body>
<?php
if ($is_member) { // 회원이라면 로그인 중이라는 메세지를 출력해준다.
    $sr_admin_msg = '';
    if ($is_admin == 'super') $sr_admin_msg = "최고관리자 ";
    else if ($is_admin == 'group') $sr_admin_msg = "그룹관리자 ";
    else if ($is_admin == 'board') $sr_admin_msg = "게시판관리자 ";

    echo '<div id="hd_login_msg">'.$sr_admin_msg.get_text($member['mb_nick']).'님 로그인 중 ';
    echo '<a href="'.G5_BBS_URL.'/logout.php">로그아웃</a></div>';
}
?>
<link href='https://cdn.rawgit.com/openhiun/hangul/14c0f6faa2941116bb53001d6a7dcd5e82300c3f/nanumbarungothic.css' rel='stylesheet' type='text/css'>
<link href='//spoqa.github.io/spoqa-han-sans/css/SpoqaHanSans-kr.css' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Raleway:800" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400" rel="stylesheet"><!-- 구글폰트 SJ -->
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"><!-- 구글폰트 SJ -->
<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet"><!-- 구글폰트 SJ -->
