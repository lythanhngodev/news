<head>
  <link rel="stylesheet" type="text/css" href="css/sukien-css.css">
  <link rel="stylesheet" type="text/css" href="css/chi-tiet-chuyen-muc-css.css">
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
    	<div class="anh-tieu-de-cm" style="background-image: url('<?php echo $row['thumb'] ?>');"></div>
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
          <div class="hinh-anh-thumb" style="background-image: url('<?php echo $row["thumb"] ?>');" title="<?php echo $row["tenbv"] ?>"></div>
        </div>
      <div class="khung-chua-tin-sk">
            <div class="tieu-de-sk"><h2><?php echo $row['tenbv'] ?></h2></div>
            <div class="ngay-thang-sk"><i class="fa fa-calendar" style="font-size:14px;">&nbsp;&nbsp;<?php echo $row['ngaydang'] ?></i></div>
            <div class="mo-ta-sk">
            <?php
                $mang = explode(' ', $row['mota']);
                if (count($mang)>38) {
                  for ($i=0; $i <38; $i++) { 
                    echo $mang[$i]." ";
                  } echo "...";
                }
                else echo $row['mota']." ... ";
              ?>  
            </div>
      </div>
        </a>
    </div>
<?php }
	} ?>
  <script type="text/javascript">
    $("#me-sk").addClass("active");
  </script>