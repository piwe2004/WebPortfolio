<script>
$(document).ready(function(){
  $(".<?=$np?>").css({
    "background":"#3ab6c5",
    "border-right":"#3ab6c5"
  });
});
</script>
<style>
  .sub_cate{width:100%; max-width:1200px; margin:0 auto;}
  .sub_cate ul{margin:0; padding:0;}
    .sub_cate a > li{float:left; width:50%; background:rgba(0,0,0,.4); border-right:0.5px solid rgba(252,252,252,0.3); text-align: center; padding:20px 0; cursor:pointer; box-sizing: border-box;}
  /* .sub_cate a > li{float:left; width:100%; background:rgba(0,0,0,.4); border-right:0.5px solid rgba(252,252,252,0.3); text-align: center; padding:20px 0; cursor:pointer; box-sizing: border-box;} */
  .sub_cate a:last-child > li{border-right:none;}
  .sub_cate a > li {color:#fff; font-size:14px; font-weight:700;}
  .sub_cate a > li:hover{border-color:rgba(0,0,0,0.8); background:rgba(0,0,0,0.8);}
  .sub_cate a:last-child li:hover{border-right:none;}
    @media only screen and (max-width:999px)
  {
	  .sub_cate{width:100%; max-width:960px; margin:0;}
	  .sub_cate a > li{font-size:14px;}

  }
</style>
  <div class="sub_cate">
    <ul>
      <a href="/sub/media/process.php" title="미디어 프로세스 서브페이지로 이동"><li class="proc">PROCESS</li></a>
      <a href="/sub/vr/vrpage.php" title="VR서브페이지 서브페이지로 이동"><li class="vrpage">VIRTUAL REALITY</li></a>
    </ul>
  </div>
