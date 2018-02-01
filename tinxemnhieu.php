<?php
  require_once("admin/ketnoi.php");
  $today = date("Y-m-d");
  $week = strtotime(date("Y-m-d", strtotime($today))."-7day"); // trừ ngày hiejn tại cho 7  - tức 1 tuần
  $week = strftime("%Y-%m-%d", $week);
  $kn = new ketnoi();
  $kq = $kn->get_content_of_week($today,$week);
  while ($row = mysql_fetch_array($kq)) {
 ?>
 <div class="khung-chua-xem-nhieu"><!-- Tab xem nhieu -->
     <a href="?p=chitiet&id=<?php echo $row["idbv"] ?>&khongdau=<?php echo $row["linkbv"] ?>">
         <img src="<?php echo $row["thumb"] ?>" alt="<?php echo $row["tenbv"] ?>" title="<?php echo $row["tenbv"] ?>" width="100%" height="auto" class="" />
         <div class="tieu-de-xem-nhieu"><?php echo $row["tenbv"] ?></div>
     </a>
 </div>
 <?php } ?>
