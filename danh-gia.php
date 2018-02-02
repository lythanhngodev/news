<?php
	$kn = new ketnoi();
	$kq = $kn->get_danhgia_news();
	$xet = 0;
	while($row = mysql_fetch_array($kq)){ ?>
        <?php if($xet==0){ /* Mo dau if thuc if */ $xet=2; ?>
		<div class="dong-ngang-cn">
			<div class="khung-chua-bai-viet-cn">
				<a class="hinh-anh-cn" href="<?php echo $row["linkbv"] ?>-<?php echo $row["idbv"] ?>.html">
			<img src="<?php echo $row["thumb"] ?>" width="100%" height="auto" alt="<?php echo $row["tenbv"] ?>" class="hinh-thumb-nho-cn" />
				<div class="tieu-de-ngan-nho-cn"><h3><?php echo $row["tenbv"] ?></h3></div>
					<div class="ngay-thang-dang-nho-cn"><i class="fa fa-calendar" style="font-size:14px;"></i><span>&nbsp; &nbsp;</span><?php echo $row["ngaydang"] ?></div>
		</a>
	</div>
    <?php }
	else
		if($xet==2){ ?>
        <div class="khung-chua-bai-viet-cn">
            <a class="hinh-anh-cn" href="<?php echo $row["linkbv"] ?>-<?php echo $row["idbv"] ?>.html">
                <img src="<?php echo $row["thumb"] ?>" width="100%" height="auto" alt="<?php echo $row["tenbv"] ?>" class="hinh-thumb-nho-cn" />
                <div class="tieu-de-ngan-nho-cn"><h3><?php echo $row["tenbv"] ?></h3></div>
                <div class="ngay-thang-dang-nho-cn"><i class="fa fa-calendar" style="font-size:14px;"></i><span>&nbsp; &nbsp;</span><?php echo $row["ngaydang"] ?></div>
            </a>
        </div>
        <?php $xet=3;}
    else
    if ($xet==3) { ?>
        <div class="khung-chua-bai-viet-cn">
            <a class="hinh-anh-cn" href="<?php echo $row["linkbv"] ?>-<?php echo $row["idbv"] ?>.html">
                <img src="<?php echo $row["thumb"] ?>" width="100%" height="auto" alt="<?php echo $row["tenbv"] ?>" class="hinh-thumb-nho-cn" />
                <div class="tieu-de-ngan-nho-cn"><h3><?php echo $row["tenbv"] ?></h3></div>
                <div class="ngay-thang-dang-nho-cn"><i class="fa fa-calendar" style="font-size:14px;"></i><span>&nbsp; &nbsp;</span><?php echo $row["ngaydang"] ?></div>
            </a>
        </div>
    <?php $xet=4; }
    else
        if($xet==4){ ?>
        <div class="khung-chua-bai-viet-cn">
            <a class="hinh-anh-cn" href="<?php echo $row["linkbv"] ?>-<?php echo $row["idbv"] ?>.html">
                <img src="<?php echo $row["thumb"] ?>" width="100%" height="auto" alt="<?php echo $row["tenbv"] ?>" class="hinh-thumb-nho-cn" />
                <div class="tieu-de-ngan-nho-cn"><h3><?php echo $row["tenbv"] ?></h3></div>
                <div class="ngay-thang-dang-nho-cn"><i class="fa fa-calendar" style="font-size:14px;"></i><span>&nbsp; &nbsp;</span><?php echo $row["ngaydang"] ?></div>
            </a>
        </div>
      </div>
    <?php $xet=0; continue; } ?>
<?php } ?>
