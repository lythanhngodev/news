<?php require_once("admin/ketnoi.php");
	$idbv = $_GET["id"];
	settype($idbv,"int");
	$kn = new ketnoi();
	$kq = $kn->get_full_content($idbv);
	$row = mysql_fetch_array($kq);
	$luotxem = $row["luotxem"];
	settype($luotxem,"int");
	$luotxem = $luotxem + 1;
	$kn->put_views($row["idbv"],$luotxem);
?>

<head>
	<link rel="stylesheet" type="text/css" href="css/bai-viet-chi-tiet.css">
</head>

<div class="chia-se-bai-viet">
	<a id="fb" class="btn-social btn-facebook btn-icon-title" href="http://www.facebook.com/sharer.php?u=http://localhost/congngheviet/<?php echo $row["linkbv"]."-".$row["idbv"].".html"; ?>" onclick="window.open(this.href, 'weeklywin', 'left=50,top=50,width=600,height=360,toolbar=0'); return false;"><i class="fa fa-facebook-square fa-lg"></i><span id="smFacebook">&nbsp;&nbsp;Facebook&nbsp;</span></a>
    <a id="tw" class="btn-social btn-twitter btn-icon-title" href="https://twitter.com/intent/tweet?text=<?php echo $row["tenbv"] ?>;url=http://localhost/congngheviet/<?php echo $row["linkbv"]."-".$row["idbv"].".html"; ?>" onclick="window.open(this.href, 'weeklywin', 'left=50,top=50,width=600,height=360,toolbar=0'); return false;"><i class="fa fa-twitter-square fa-lg"></i><span id="smTwitter">&nbsp;&nbsp;Twitter&nbsp;</span></a>
    <a id="gp" class="btn-social btn-google btn-icon-title" href="http://plus.google.com/share?url=http://localhost/congngheviet/<?php echo $row["linkbv"]."-".$row["idbv"].".html"; ?>" onclick="window.open(this.href, 'weeklywin', 'left=50,top=50,width=600,height=360,toolbar=0'); return false;"><i class="fa fa-google-plus-square fa-lg"></i><span id="smGoogle">&nbsp;&nbsp;Google+&nbsp;</span></a>
		<span class="luot-xem"><i class="fa fa-eye"></i>&nbsp;&nbsp;<?php echo $luotxem ?></span>
</div>
<!-- Dành cho hiển thị HOME / Chuyên mục / ... -->
<?php
	$idcm = $row["idcm"];
	settype($idcm,"int");
	$kq = $kn->get_chuyen_muc_name($idcm);
	$row1 = mysql_fetch_array($kq);
 ?>
<div class="clear"></div>


<div class="thu-muc">
	<a href="http://localhost/congngheviet/" class="muc-cha-con">TRANG CHỦ</a>
	<a href="#" class="ngan-cach">/</a>
	<a href="http://localhost/congngheviet/chuyenmuc/<?php echo $idcm ?>/<?php echo $row1["linkcm"] ?>" id="mau-cm" class="muc-cha-con"><?php echo $row1["tencm"] ?></a>
</div>

<div class="noi-dung-bai-viet-ct">
	<!-- This is content -->
    <?php echo $row['noidung']; ?>
		<!-- End content -->
</div>
<!-- Chia sẻ -->
<div class="chia-se-bai-viet">
	<a id="fb" class="btn-social btn-facebook btn-icon-title" href="http://www.facebook.com/sharer.php?u=http://localhost/congngheviet/<?php echo $row["linkbv"]."-".$row["idbv"].".html"; ?>" onclick="window.open(this.href, 'weeklywin', 'left=50,top=50,width=600,height=360,toolbar=0'); return false;"><i class="fa fa-facebook-square fa-lg"></i><span id="smFacebook">&nbsp;&nbsp;Facebook&nbsp;</span></a>
    <a id="tw" class="btn-social btn-twitter btn-icon-title" href="https://twitter.com/intent/tweet?text=<?php echo $row["tenbv"] ?>;url=http://localhost/congngheviet/<?php echo $row["linkbv"]."-".$row["idbv"].".html"; ?>" onclick="window.open(this.href, 'weeklywin', 'left=50,top=50,width=600,height=360,toolbar=0'); return false;"><i class="fa fa-twitter-square fa-lg"></i><span id="smTwitter">&nbsp;&nbsp;Twitter&nbsp;</span></a>
    <a id="gp" class="btn-social btn-google btn-icon-title" href="http://plus.google.com/share?url=http://localhost/congngheviet/<?php echo $row["linkbv"]."-".$row["idbv"].".html"; ?>" onclick="window.open(this.href, 'weeklywin', 'left=50,top=50,width=600,height=360,toolbar=0'); return false;"><i class="fa fa-google-plus-square fa-lg"></i><span id="smGoogle">&nbsp;&nbsp;Google+&nbsp;</span></a>
		<span class="luot-xem"><i class="fa fa-eye"></i>&nbsp;&nbsp;<?php echo $luotxem ?></span>
</div>

<?php
	$us = $kn->get_info_author($row["idbv"]);
	$row2 = mysql_fetch_array($us);
 ?>
<div class="tac-gia-bai-viet-ct" id="author-content">
	<!-- This is Author -->
	<div class="hinh-author"><img src="<?php echo $row2["thumbus"] ?>" title="" width=123 height=auto /></div>
	<div class="description-author">
		<a href="author/<?php echo $row2["iduser"] ?>/<?php echo $row2["linkuser"] ?>"><b><h3><?php echo $row2["tennd"] ?></h3></b></a>
		<p><?php echo $row2["slogan"] ?></p>
		<a href="<?php echo $row2["facebook"] ?>" target="_blank" class="author-fb"><i class="fa fa-facebook" style="font-size:18px;" ></i></a>
	</div>
</div>
<div class="clear"></div>
<div class="clear"></div>
<h2 class="bai-viet-moi cong-nghe-moi">BÀI VIẾT CÙNG CHUYÊN MỤC</h2>
<span class="gach-chan"></span>
<div class="clear"></div>
<!-- Bài viết cùng chuyên mục -->
<div class="cung-chuyen-muc">
	<div class="dong-ngang-cn">
<?php
	$kn = new ketnoi();
	$kq = $kn->get_content_of_ategories($row["idcm"],0,8,$row["idbv"]); //Lấy 8 bài đầu tiên khi có bài được select từ csdl
	while($row = mysql_fetch_array($kq)){ 
	    $tt="";
	    $mang = explode(' ', trim($row['tenbv']));
	    if (count($mang)>8) {
	      $tt="";
	      for ($i=0; $i <8; $i++) { 
	        $tt.=$mang[$i]." ";
	      }
	    }
	    else $tt = $row['tenbv'];
		?>
        <div class="khung-chua-bai-viet-cn">
            <a class="hinh-anh-cn" href="<?php echo $row["linkbv"] ?>-<?php echo $row["idbv"] ?>.html">
                <img src="<?php echo $row["thumb"] ?>" width="100%" height="auto" alt="<?php echo $row["tenbv"] ?>" class="hinh-thumb-nho-cn" />
                <div class="tieu-de-ngan-nho-cn"><h3><?php echo $tt ?></h3></div>
                <div class="ngay-thang-dang-nho-cn"><i class="fa fa-calendar" style="font-size:14px;"></i><span>&nbsp; &nbsp;</span><?php echo $row["ngaydang"] ?></div>
            </a>
        </div>
	<?php } ?>
	</div>
</div>
<div class="clear"></div>
<div class="xem-them-hot" id="xem-them" style="width:100%;height: 6.9rem;margin-top: 1rem;">
	 <a class="waves-effect waves-light btn-large" id="xem-them-btn" href="#">Xem thêm</a>
</div>
