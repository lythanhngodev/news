<?php
	include_once("admin/ketnoi.php");
	$kn = new ketnoi();
	$kq = $kn->get_five_news();
	$chay = 1;
	$cm1;$cm2;$cm3;$cm4;
	$cm1=$cm2=$cm3=$cm4="mau1"; ?>

	<div id="tin-hot">
		<div><h4>TIN HOT</h4></div>
		<div id="noi-dung-tin-hot">
			<a href="#">
				<span id="tin-1" class="animated fadeInRight">Sony Xperia XZ Premium màn hình 4K HDR đã ra mắt</span>
				<span id="tin-2" class="hide">Hình ảnh buổi Tech Offline bộ đôi Galaxy A 2017 của FPT Shop</span>
				<span id="tin-3" class="hide">Buổi offline LG G6 khoe khả năng chống nước tuyệt vời</span>
				<span id="tin-4" class="hide">Đánh giá Samsung Galaxy S8: Dẫn đầu đường cong</span>
			</a>
		</div>
		<div class="toi-lui">
			<i class="fa fa-angle-left"></i>
			<i class="fa fa-angle-right"></i>
		</div>
	</div>

<?php	while($row = mysql_fetch_array($kq)){?>
	<!-- content -->
    <?php if($chay==1){
	?>
    <div id="tin-moi">
			<div class="dong animated fadeIn" id="dong1" style="animation-delay:100ms;background: url('<?php echo $row["thumb"] ?>'), #212121;width: 50%;height: 38.5rem;background-position: center;background-size: cover;"><!-- Dòng 1 -->
				<article class="muc-chinh" id="xet">
				<a class="nam-tren-hinh" href="<?php echo $row["linkbv"] ?>-<?php echo $row["idbv"] ?>.html">
									<div class="nen-noi">
										<div class="ten-cm"><?php echo $row["tencm"] ?></div>
										<div class="tieu-de-ngan">
											<h2 style="font-size: 34px;"><?php echo $row["tenbv"] ?></h2>
										</div>
									<div class="ngay-thang-dang"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;<span><?php echo $row['ngaydang'] ?></span></div>
									</div>
							</a>
					</article>
			</div>
    <?php $chay=2; }
	else
	if($chay==2){?>
	<div class="dong dong33 animated fadeIn" id="dong1" style="animation-delay:150ms;background: url('<?php echo $row["thumb"] ?>'),#212121;width: 24.5%;height: 19rem;background-position: center;background-size: cover;margin-left: 0.5rem;"><!-- Dòng 1 -->
		<article class="muc-chinh" id="xet">
		<a class="nam-tren-hinh" href="<?php echo $row["linkbv"] ?>-<?php echo $row["idbv"] ?>.html">
							<div class="nen-noi">
								<div class="ten-cm"><?php echo $row["tencm"] ?></div>
								<div class="tieu-de-ngan33">
									<h2 style="font-size: 18px;"><?php echo $row["tenbv"] ?></h2>
							</div>
							<div class="ngay-thang-dang"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;<span><?php echo $row['ngaydang'] ?></span></div>
							</div>
					</a>
			</article>
	</div>
    <?php $chay=3; }
	else
	if($chay==3){?>
    <div class="dong dong33 animated fadeIn" id="dong3" style="animation-delay:200ms;background: url('<?php echo $row["thumb"] ?>'),#212121;background-position: center;background-size: cover;margin-left: 0.5rem;width: 24.5%;height: 19rem;">
    	<article class="muc-chinh33" id="xet">
			<a class="nam-tren-hinh33" href="<?php echo $row["linkbv"] ?>-<?php echo $row["idbv"] ?>.html">
                <div class="nen-noi33 nen-noi">
                	<div class="ten-cm"><?php echo $row["tencm"] ?></div>
                	<div class="tieu-de-ngan33">
                    <h2 style="font-size: 18px;"><?php echo $row["tenbv"] ?></h2>
                </div>
                <div class="ngay-thang-dang33"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;<span><?php echo $row['ngaydang'] ?></span></div>
                </div>
            </a>

        </article>
    </div>
    <?php $chay=4; }
	else
	if($chay==4){ ?>
    <div class="dong dong33 animated fadeIn" id="dong4" style="animation-delay:250ms;background: url('<?php echo $row["thumb"] ?>'),#212121;background-position: center;background-size: cover;margin-left: 0.5rem;width: 24.5%;height: 19rem;">
    	<article class="muc-chinh33" id="xet">
			<a class="nam-tren-hinh33" href="<?php echo $row["linkbv"] ?>-<?php echo $row["idbv"] ?>.html">
                <div class="nen-noi33 nen-noi">
                	<div class="ten-cm"><?php echo $row["tencm"] ?></div>
                	<div class="tieu-de-ngan33">
                    <h2 style="font-size: 18px;"><?php echo $row["tenbv"] ?></h2>
                </div>
                <div class="ngay-thang-dang33"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;<span><?php echo $row['ngaydang'] ?></span></div>
                </div>
            </a>

        </article>
    </div>
    <?php $chay=5; }
    else
    { ?>
    <div class="dong dong33 animated fadeIn" id="dong5" style="animation-delay:250ms;background: url('<?php echo $row["thumb"] ?>'),#212121;background-position: center;background-size: cover;margin-left: 0.5rem;width: 24.5%;height: 19rem;">
    	<article class="muc-chinh33" id="xet">
			<a class="nam-tren-hinh33" href="<?php echo $row["linkbv"] ?>-<?php echo $row["idbv"] ?>.html">
                <div class="nen-noi33 nen-noi">
                	<div class="ten-cm"><?php echo $row["tencm"] ?></div>
                	<div class="tieu-de-ngan33">
                    <h2 style="font-size: 18px;"><?php echo $row["tenbv"] ?></h2>
                </div>
                <div class="ngay-thang-dang33"><i class="fa fa-clock-o"></i>&nbsp;&nbsp;<span><?php echo $row['ngaydang'] ?></span></div>
                </div>
            </a>

        </article>
    </div>
    <?php $chay=5; }
} ?>
<script type="text/javascript">
	var aa = 2;
	function chaytin(){
		setTimeout(function(){	
			if (aa==5||aa>5) {aa=1;}
			var idtin = "tin-"+aa;
			if(idtin=="tin-1"){
				$("#tin-2").addClass("hide");
				$("#tin-3").addClass("hide");
				$("#tin-4").addClass("hide");
				$("#tin-1").removeClass("hide");
				$("#tin-1").addClass("animated fadeInRight");
			}
			if(idtin=="tin-2"){
				$("#tin-1").addClass("hide");
				$("#tin-3").addClass("hide");
				$("#tin-4").addClass("hide");
				$("#tin-2").removeClass("hide");
				$("#tin-2").addClass("animated fadeInRight");
			}
			if(idtin=="tin-3"){
				$("#tin-1").addClass("hide");
				$("#tin-2").addClass("hide");
				$("#tin-4").addClass("hide");
				$("#tin-3").removeClass("hide");
				$("#tin-3").addClass("animated fadeInRight");
			}
			if(idtin=="tin-4"){
				$("#tin-1").addClass("hide");
				$("#tin-2").addClass("hide");
				$("#tin-3").addClass("hide");
				$("#tin-4").removeClass("hide");
				$("#tin-4").addClass("animated fadeInRight");
			}
			aa++;
		    chaytin();
		}, 4000);
	}
	$(document).ready(function(){
		chaytin();
	});
</script>
  <script type="text/javascript">
    $("#me-tc").addClass("active");
  </script>
