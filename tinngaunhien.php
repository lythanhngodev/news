<?php
  require_once("admin/ketnoi.php");
  $today = date("Y-m-d");
  $week = strtotime(date("Y-m-d", strtotime($today))."-7day"); // trừ ngày hiejn tại cho 7  - tức 1 tuần
  $week = strftime("%Y-%m-%d", $week);
  $kn = new ketnoi();
  $kq = $kn->get_content_random($today,$week);
  while ($row = mysql_fetch_array($kq)) {
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
 <div class="khung-chua-xem-nhieu"><!-- Tab xem nhieu -->
     <a href="?p=chitiet&id=<?php echo $row["idbv"] ?>&khongdau=<?php echo $row["linkbv"] ?>">
         <div class="hinh-anh-nho" style="background-image: url('<?php echo $row["thumb"] ?>');" title="<?php echo $row["tenbv"] ?>"></div>
         <div class="tieu-de-xem-nhieu">
          <h4><?php echo trim($tt); ?></h4>
         </div>
     </a>
 </div>
 <?php } ?>
