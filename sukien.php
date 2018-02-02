
<?php //TODO: Hiển thị các bài viết mới liên quan tới sự kiện  ?>
<?php
  require_once("admin/ketnoi.php");
  $kn = new ketnoi();
  $kq = $kn->get_sukien_news();
  while ($row = mysql_fetch_array($kq)){
 ?>
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
<?php } ?>
