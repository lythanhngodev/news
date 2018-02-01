<?php
  require_once("ketnoi.php");
  $kn = new ketnoi();
  if(!isset($_SESSION['tk']))
    header("Location: http://localhost/congngheviet/admin/");
  $usn = $_SESSION['tk'];
  $kq = $kn->get_author_2($usn);
  $row = mysql_fetch_array($kq);
 ?>
<div class="mui-appbar mui--appbar-line-height" style="background:#65AD9E;">
  <div class="mui-container-fluid">
    <a class="sidedrawer-toggle mui--visible-xs-inline-block mui--visible-sm-inline-block js-show-sidedrawer">☰</a>
    <a class="sidedrawer-toggle mui--hidden-xs mui--hidden-sm js-hide-sidedrawer">☰</a>
    <span class="mui--text-title mui--visible-xs-inline-block mui--visible-sm-inline-block">CNV</span>
    <span class="thong-tin-nd">
      <a href="/congngheviet/" target="_blank"><i id="trang" class="fa fa-home animated fadeInLeft" style="animation-delay: 0.2s;" data-toggle="tooltip" data-placement="bottom" title="Trang chủ"></i></a>
      <img class="anh-cover animated rotateIn" style="animation-delay: 0.4s;" src="/congngheviet/admin/<?php echo $row['thumbus'] ?>" alt="" data-toggle="tooltip" data-placement="bottom" title="<?php echo $row['tennd'] ?>" />
      <span class="chu-admin" style="font-size: 26px;margin-left: 10px;"><a href="/congngheviet/admin/thoat.php"><i class="fa fa-sign-out animated fadeInRight" aria-hidden="true" style="color:#E91818;animation-delay: 0.6s;" data-toggle="tooltip" data-placement="bottom" title="Đăng xuất"></i></a></span>
    </span>
  </div>
</div>
