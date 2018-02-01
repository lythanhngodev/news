<ul>
  <li>
    <strong>Trang chủ</strong>
    <ul>
      <li><a href="/congngheviet/">Trang chủ CNV</a></li>
      <li><a href="baiviet.php">Bài biết</a></li>
    </ul>
  </li>
  <li>
    <strong>Quản lý nội dung</strong>
    <ul>
      <li><a href="baiviet.php">Quản lý bài viết</a></li>
      <?php if(isset($_SESSION['quyen']) && $_SESSION['quyen']=="1"){ ?>
      <li><a href="chude.php">Quản lý chuyên mục</a></li>
      <?php } ?>
    </ul>
  </li>
  <li>
    <strong>Administrator</strong>
    <ul>
      <?php if(isset($_SESSION['quyen']) && $_SESSION['quyen']=="1"){ ?>
      <li><a href="teamadmin.php">Danh sách Admin</a></li>
      <?php } ?>
      <li><a href="profile.php">Thông tin cá nhân</a></li>
    </ul>
  </li>
  <li>
    <strong>Phần mở rộng</strong>
    <ul>
      <li><a href="#">Quản lý quảng cáo</a></li>
      <li><a href="#">Thông tin website</a></li>
      <li><a href="#">Mạng xã hội</a></li>
      <li><a href="#">Seo</a></li>
      <li><a href="#">Code</a></li>
    </ul>
  </li>
</ul>
