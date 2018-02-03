<!doctype html>
<html>
<head>
<?php require_once("header.php"); ?>
</head>
<body>
<div id="an-hien" class="black-mask animated fadeInDown" style="display:none;">
    <div class="dropdown-menu-right" style="display: block;">
        <form role="search" method="get" class="form-inline" action="http://localhost/news">
            <div class="form-group">
                <input id="nav-search" type="text" name="timkiem" value="" placeholder="Nhập từ khóa...">
                <div class="close-button" onClick="antim()"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></div>
            </div>
        </form>
    </div>
</div>
<div id="logo-head">
    <img src="images/logo.png">
    <div class="banner">
        <a href="#"><img src="images/banner.jpg"></a>
    </div>
</div>
<div id="main-menu">
    <div id="menu">
        <ul>
        	<li><a id="me-tc" href="">TRANG CHỦ</a></li>
        	<li><a id="me-cn" href="chuyenmuc/1/cong-nghe">Công nghệ</a></li>
            <li><a id="me-sk" href="chuyenmuc/2/su-kien">Sự kiện</a></li>
            <li><a id="me-dg" href="chuyenmuc/3/danh-gia">Đánh giá</a></li>
            <li><a id="me-ttud" href="chuyenmuc/4/ung-dung-thu-thuat">Thủ thuật - Ứng dụng</a></li>
            <div id="tim-kiem" style="float: right;height: 50px;line-height: 50px;width: 50px;text-align: center;" onClick="tim()"><i class="fa fa-search" style="font-size:22px"></i></div>
        </ul>
    </div>
</div>
<!-- MENU -->
<div id="container">
    <!-- 6 tin nổi bậc -->
    <?php if(!isset($_GET["p"]) && !isset($_GET["chitiet"])){ ?>
	<?php require_once("tinnoibac.php"); ?>
    <?php }
    else
        if(isset($_GET["p"]) && $_GET["p"] == "chuyenmuc" && isset($_GET["id"])){
            require_once("chuyenmuc/cm-dau-trang.php");
        }
	else
        if(isset($_GET["p"]) && $_GET["p"] == "chitiet" && isset($_GET["id"])){
            require_once("chitiet/head-chi-tiet-bai-viet.php");
        }
    ?>
<div id="cot-trai"><!-- Cột Trái -->
    <?php
    if(isset($_GET["timkiem"])){
  		require_once("timkiem.php");
  	}
    else
	# Load bài khi xác định đang ở trang chủ =)))
	if(!isset($_GET["p"]) && !isset($_GET["chitiet"])){
	?>
	<!--<h2 class="bai-viet-moi">BÀI MỚI</h2>-->
    <!--- 6 tin moi -->
    <?php require_once("tinmoi.php");?>
    <!--- Xem thêm -->
    <!--- Clear FIX -->
    <div class="clear"></div>
    <div class="quang-cao">
        <div id="qc-1" class="animated fadeIn"><a href="#"><img src="images/banner-1.jpg"></a></div>
        <div id="qc-2" class="hide"><a href="#"><img src="images/banner-2.jpg"></a></div>
        <div id="qc-3" class="hide"><a href="#"><img src="images/banner-3.jpg"></a></div>
    </div>
    <!--- Su kien -->
    <header style="width: 100%;float: left;height: 6rem;">
        <h2 class="bai-viet-moi">SỰ KIỆN</h2>
        <span class="gach-chan"></span>
    </header>
        <?php require_once("sukien.php") ?>
    <!--- Clear FIX -->
    <div class="clear"></div>
    <!-- Ban tin cong nghe -->
    <header style="width: 100%;float: left;height: 6rem;">
        <h2 class="bai-viet-moi cong-nghe-moi">CÔNG NGHỆ</h2>
        <span class="gach-chan"></span>
       </header>
    <?php require_once("congnghe.php"); ?>
    <!--- Clear FIX -->
    <div class="clear"></div>
    <!--- Danh gia -->
    <header style="width: 100%;float: left;height: 6rem;">
		<h2 class="bai-viet-moi cong-nghe-moi">ĐÁNH GIÁ</h2>
		<span class="gach-chan"></span>
	   </header>
    <?php require_once("danh-gia.php"); ?>
    <?php }
    else
	# Load bài của chuyên mục Công Nghệ
    if(isset($_GET["p"]) && $_GET["p"] == "chuyenmuc" && isset($_GET["id"]) && $_GET["id"]=="1"){
        #Chuyển sang trang chuyên mục
        require_once("chuyenmuc/cm-cong-nghe.php");
    }
	else
	if(isset($_GET["p"]) && $_GET["p"] == "chuyenmuc" && isset($_GET["id"]) && $_GET["id"]=="2"){
        # Chuyển sang trang chuyên mục
        require_once("chuyenmuc/cm-su-kien.php");
    }
	else
	if(isset($_GET["p"]) && $_GET["p"] == "chuyenmuc" && isset($_GET["id"]) && $_GET["id"]=="3"){
        # Chuyển sang trang chuyên mục
        require_once("chuyenmuc/cm-danh-gia.php");
    }
	else
	if(isset($_GET["p"]) && $_GET["p"] == "chuyenmuc" && isset($_GET["id"]) && $_GET["id"]=="4"){
        # Chuyển sang trang chuyên mục
        require_once("chuyenmuc/cm-thu-thuat-ung-dung.php");
    }
	else
	# nội dung bài viết chi tiết
	if(isset($_GET["p"]) && $_GET["p"] == "chitiet" && isset($_GET["id"])){
        # Chuyển sang trang chuyên mục
        require_once("chitiet/chi-tiet-bai-viet.php");
    }
	# Hiển thị bai viết từng tác giả
	else
	if(isset($_GET["p"]) && $_GET["p"] == "author" && isset($_GET["iduser"])){
		require_once("author/author.php");
	}
    ?>
</div>
<!-- Cot trai -->
<div id="cot-phai">
	<div id="fanpage"><!-- Fanpage facebook -->
    <div class="khoang-cach" style="height:0.8rem"> </div>
    	<div id="fb-root"></div>
		<script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=623245324548842";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
            </div>
		<div class="fb-page" data-href="https://www.facebook.com/DevelopXperiaVN/" data-small-header="false" data-adapt-container-width="true" data-width="333px" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/DevelopXperiaVN/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/DevelopXperiaVN/">Cộng đồng phát triển Xperia</a></blockquote></div>
   <div class="xem-nhieu">
   	<h2>XEM NHIỀU TRONG TUẦN</h2>
    <div class="line"></div>
        <?php require_once("tinxemnhieu.php") ?>
    </div>
    <div class="banner-1">
        <a href="#"><img src="images/banner.png"></a>
    </div>
   <div class="xem-nhieu">
    <h2>TIN NGẪU NHIÊN</h2>
    <div class="line"></div>
        <?php require_once("tinngaunhien.php") ?>
   </div>
</div>
<!-- Cot phai -->
<div id="footer">
    <div class="ban-quyen">&copy; CÔNG NGHỆ VIỆT 2017</div>
    <div class="thuc-hien"></div>
</div>
<!-- Footer -->
</div>
<!-- Màu sắc cho 5 bài viết nổi bậc -->
<script type="text/javascript">
    $(document).ready(function(){
    var bb = 2;
    function chayqc(){
        setTimeout(function(){  
            if (bb==4||bb>4) {bb=1;}
            var idtin = "qc-"+bb;
            if(idtin=="qc-1"){
                $("#qc-2").addClass("hide");
                $("#qc-3").addClass("hide");
                $("#qc-1").removeClass("hide");
                $("#qc-1").addClass("animated fadeIn");
            }
            if(idtin=="qc-2"){
                $("#qc-1").addClass("hide");
                $("#qc-3").addClass("hide");
                $("#qc-2").removeClass("hide");
                $("#qc-2").addClass("animated fadeIn");
            }
            if(idtin=="qc-3"){
                $("#qc-1").addClass("hide");
                $("#qc-2").addClass("hide");
                $("#qc-3").removeClass("hide");
                $("#qc-3").addClass("animated fadeIn");
            }
            bb++;
            chayqc();
        }, 4000);
    }
    $(document).ready(function(){
        chayqc();
    });
    });
</script>
<!-- Back to top -->
<a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
</body>
</html>
