
<?php //TODO: Hiển thị các bài viết mới liên quan tới sự kiện  ?><head>
  <link rel="stylesheet" type="text/css" href="css/sukien-css.css">
</head>
<?php
  require_once("admin/ketnoi.php");
  $kn = new ketnoi();
  $kq = $kn->get_sukien_news();
  while ($row = mysql_fetch_array($kq)){
 ?>
<div class="su-kien-sk">
  <a href="<?php echo $row["linkbv"] ?>-<?php echo $row["idbv"] ?>.html" class="" id="">
      <div class="khung-chua-hinh-sk">
          <img src="<?php echo $row["thumb"] ?>" />
      </div>
      <div class="khung-chua-tin-sk">
        <div class="tieu-de-sk"><h2><?php echo $row['tenbv'] ?></h2></div>
        <div class="ngay-thang-sk"><i class="fa fa-calendar" style="font-size:14px;">&nbsp;&nbsp;<?php echo $row['ngaydang'] ?></i></div>
        <div class="mo-ta-sk"><?php echo $row['mota'] ?></div>
      </div>
  </a>
</div>
<?php } ?>
