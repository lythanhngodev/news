
<?php
	require_once("../admin/ketnoi.php");
	$kn = new ketnoi();
	$trang = $_GET["trang"];
	settype($trang,"int");
	$idcm = $_GET["idcm"];
	settype($idcm,"int");
	$idbv = $_GET["idbv"];
	settype($idbv,"int");
	$sotin1trang = 3;
	$from = ($trang - 1) * $sotin1trang;
	$kq = $kn->get_content_of_ategories($idcm,$from,$sotin1trang,$idbv); //Lấy 3 bài đầu tiên khi có bài được select từ csdl
	$xet = 0;
	while($row = mysql_fetch_array($kq)){ ?>
        <?php if($xet==0){ /* Mo dau if thuc if */ $xet=2; ?>
        <!--- 1 --->
		<div class="dong-ngang-cn">
			<div class="khung-chua-bai-viet-cn animated fadeIn" style="animation-delay:100ms;">
				<a class="hinh-anh-cn" href="<?php echo $row["linkbv"] ?>-<?php echo $row["idbv"] ?>.html">
			<img src="<?php echo $row["thumb"] ?>" width="100%" height="auto" alt="<?php echo $row["tenbv"] ?>" class="hinh-thumb-nho-cn" />
				<div class="tieu-de-ngan-nho-cn"><h3><?php echo $row["tenbv"] ?></h3></div>
					<div class="ngay-thang-dang-nho-cn"><i class="fa fa-calendar" style="font-size:14px;"></i><span>&nbsp; &nbsp;</span><?php echo $row["ngaydang"] ?></div>
	<!--<div class="noi-dung-tom-tat-nho-cn"><?php //echo $row["mota"] ?></div>-->
		</a>
	</div>
    <?php }
	else
		if($xet==2){ ?>
    	<!--- 2 --->
        <div class="khung-chua-bai-viet-cn animated fadeIn" style="animation-delay:250ms;">
            <a class="hinh-anh-cn" href="<?php echo $row["linkbv"] ?>-<?php echo $row["idbv"] ?>.html">
                <img src="<?php echo $row["thumb"] ?>" width="100%" height="auto" alt="<?php echo $row["tenbv"] ?>" class="hinh-thumb-nho-cn" />
                <div class="tieu-de-ngan-nho-cn"><h3><?php echo $row["tenbv"] ?></h3></div>
                <div class="ngay-thang-dang-nho-cn"><i class="fa fa-calendar" style="font-size:14px;"></i><span>&nbsp; &nbsp;</span><?php echo $row["ngaydang"] ?></div>
                <!--<div class="noi-dung-tom-tat-nho-cn"><//?php echo $row["mota"] ?></div>-->
            </a>
        </div>
        <?php $xet=4;}
    else
    if ($xet==4) { ?>
      <!--- 3 --->
        <div class="khung-chua-bai-viet-cn animated fadeIn" style="animation-delay:400ms;">
            <a class="hinh-anh-cn" href="<?php echo $row["linkbv"] ?>-<?php echo $row["idbv"] ?>.html">
                <img src="<?php echo $row["thumb"] ?>" width="100%" height="auto" alt="<?php echo $row["tenbv"] ?>" class="hinh-thumb-nho-cn" />
                <div class="tieu-de-ngan-nho-cn"><h3><?php echo $row["tenbv"] ?></h3></div>
                <div class="ngay-thang-dang-nho-cn"><i class="fa fa-calendar" style="font-size:14px;"></i><span>&nbsp; &nbsp;</span><?php echo $row["ngaydang"] ?></div>
                <!--<div class="noi-dung-tom-tat-nho-cn"><?php //echo $row["mota"] ?></div>-->
            </a>
        </div>
      </div>
    <?php $xet=0; continue; } ?>
<?php } ?>
