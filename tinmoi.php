<?php require_once("admin/ketnoi.php");?>
<header style="width: 100%;float: left;height: 6rem;">
	<h2 class="bai-viet-moi">BÀI MỚI</h2>
	<span class="gach-chan"></span>
</header>
<?php
	$kn = new ketnoi();
	$kq = $kn->get_bai_viet_moi();
	$xet = 0;
	while($row = mysql_fetch_array($kq)){ ?>
	<div class="su-kien-sk">
	  <a href="<?php echo $row["linkbv"] ?>-<?php echo $row["idbv"] ?>.html" class="" id="">
	      <div class="khung-chua-hinh-sk">
	          <div class="hinh-anh-thumb" style="background-image: url('<?php echo $row["thumb"] ?>');" title="<?php echo $row["tenbv"] ?>"></div>
	      </div>
	      <div class="khung-chua-tin-sk">
	        <div class="tieu-de-sk"><h2><?php echo $row['tenbv'] ?></h2></div>
	        <div class="ngay-thang-sk"><i class="fa fa-clock-o" style="font-size:14px;"></i>&nbsp;&nbsp;<span><?php echo $row['ngaydang'] ?></span></div>
	        <div class="mo-ta-sk">
	        	<?php
                          $mang = explode(' ', $row['mota']);
                          if (count($mang)>40) {
                            for ($i=0; $i <40; $i++) { 
                              echo $mang[$i]." ";
                            } echo "...";
                          }
                          else echo $row['mota']." ... ";
                        ?>	
	        	</div>
	      </div>
	  </a>
	</div>
<?php } ?>
<div class="clear"></div>
