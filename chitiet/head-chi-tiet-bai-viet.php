<?php
    require_once("admin/ketnoi.php");
    $idbv = $_GET["id"];
    settype($idbv,"int");
    $kn = new ketnoi();
    $kq = $kn->get_full_content($idbv);
    $row=mysql_fetch_array($kq);
    $us = $kn->get_info_author($row["idbv"]);
  	$row2 = mysql_fetch_array($us);
?>
<?php
# Xử lý màu cho chuyên mục
$idcm = $row["idcm"];
    settype($idcm,"int");
    if($idcm==0)
        echo "Không có chuyên mục này!";
    if ($idcm==1) {
      echo "<script type=\"text/javascript\">$(\"#me-cn\").addClass(\"active\");</script>";
    }
    if ($idcm==2) {
      echo "<script type=\"text/javascript\">$(\"#me-sk\").addClass(\"active\");</script>";
    }
    if ($idcm==3) {
      echo "<script type=\"text/javascript\">$(\"#me-dg\").addClass(\"active\");</script>";
    }
    if ($idcm==4) {
      echo "<script type=\"text/javascript\">$(\"#me-ttud\").addClass(\"active\");</script>";
    }
    ?>
<div class="khung-chua-tin-cm animated fadeIn">
			<div class="hinh-thu-nho-cm" style="background-image:url(<?php echo $row['thumb'] ?>);">
				<div class="ngay-thang-dang-cm">
					<span class="ngay-dang">
						<h2><?php echo $row['tenbv'] ?></h2>
						<b><i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo $row['ngaydang'] ?></b>
            &nbsp;
            <img src="<?php echo $row2["thumbus"] ?>" title="<?php echo $row2['tennd'] ?>" width=20>

            <a href="author/<?php echo $row2["iduser"] ?>/<?php echo $row2['linkuser'] ?>" title="<?php echo $row2['tennd'] ?>" style="color:#f1f1f1;"><?php echo $row2['tennd'] ?></a></span>
				</div>
			</div>
</div>

