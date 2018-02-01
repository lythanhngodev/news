<head>
  <link rel="stylesheet" type="text/css" href="css/sukien-css.css">
  <link rel="stylesheet" type="text/css" href="css/chi-tiet-chuyen-muc-css.css">
  <style type="text/css">
    .nam-tren-hinh-cm:hover .nen-noi-cm{
      background-color: rgba(86, 132, 126, 0.8);
    }
  </style>
</head>
<?php
    require_once("admin/ketnoi.php");
    $idcm = $_GET["id"];
	$kt = 1;
    settype($idcm,"int");
    $kn = new ketnoi();
    $kq = $kn->get_content_short($idcm);
    while($row=mysql_fetch_array($kq)){
		if($kt==1){ ?>
        	<div class="khung-chua-tin-cm">
	<a class="nam-tren-hinh-cm" href="<?php echo $row["linkbv"] ?>-<?php echo $row["idbv"] ?>.html">
    	<img src="<?php echo $row['thumb'] ?>" width="1176" height="auto" alt="<?php echo $row['tenbv'] ?>" class="anh-thu-nho-cm" />
            <div class="nen-noi-cm">
                <div class="tieu-de-ngan-cm">
                <h2><?php echo $row['tenbv'] ?></h2>
            </div>
            <div class="ngay-thang-dang-cm"><span class="fa fa-calendar" itemprop="dateCreated">&nbsp;&nbsp;<?php echo $row['ngaydang'] ?></span></div>
            </div>
    </a>
</div>
        <?php $kt++; }
		else {?>
    <div class="su-kien-sk">
        <a href="<?php echo $row["linkbv"] ?>-<?php echo $row["idbv"] ?>.html" class="" id="">
        <div class="khung-chua-hinh-sk">
          <img src="<?php echo $row['thumb'] ?>" alt="" class="" title="<?php echo $row['tenbv'] ?>" />
        </div>
      <div class="khung-chua-tin-sk">
            <div class="tieu-de-sk"><h2><?php echo $row['tenbv'] ?></h2></div>
            <div class="ngay-thang-sk"><i class="fa fa-calendar" style="font-size:14px;">&nbsp;&nbsp;<?php echo $row['ngaydang'] ?></i></div>
            <div class="mo-ta-sk"><?php echo $row['mota'] ?></div>
      </div>
        </a>
    </div>
<?php }
	} ?>
