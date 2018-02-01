<?php include_once ("ketnoi.php");?>
<?php
  $kn = new ketnoi();
  session_start();
  if(isset($_SESSION['tk']) && isset($_SESSION['mk'])){
    $tk = $_SESSION['tk'];
    $mk = $_SESSION['mk'];
    $kq = $kn->xet_dang_nhap($tk,$mk);
    if($kq==null)
      header("Location: http://localhost/congngheviet/admin/login.php");
    }
    else
      header("Location: http://localhost/congngheviet/admin/login.php");
    $tk = $_SESSION['tk'];
    $mk = $_SESSION['mk'];
    $us = $kn->get_one_user_2($tk,$mk);
 ?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//cdn.muicss.com/mui-latest/css/mui.min.css" rel="stylesheet" type="text/css" />
    <link href="/congngheviet/admin/css/static/style.css" rel="stylesheet" type="text/css" />
    <script src="//cdn.muicss.com/mui-latest/js/mui.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="/congngheviet/admin/css/static/script.js"></script>
    <?php require_once("header.php"); ?>
    <!-- tool tip -->
    <?php require_once("header.php") ?>
    <script>
    		$(document).ready(function(){
    			$('[data-toggle="tooltip"]').tooltip();
    		});
    </script>
  </head>
  <body>
    <div id="sidedrawer" class="mui--no-user-select" style="box-shadow: 1px 1px 0px 0px rgb(227, 227, 227);">
      <div id="sidedrawer-brand" class="mui--appbar-line-height">
        <span class="mui--text-title"><img src="logo-admin-login.png" style="width: 105px;margin-left: 17px;"></span>
      </div>
      <div class="mui-divider"></div>
      <?php require_once("menu.php"); ?>
    </div>
    <header id="header">
      <?php require_once("top.php"); ?>
    </header>
    <div id="content-wrapper" style="background-color:#fff;">
      <div class="mui--appbar-height"></div>
      <div class="mui-container-fluid">
        <!-- Noi dung khung phai -->
        <div id="tieu-de-chinh" class="animated fadeInDown"><h2>Thông tin cá nhân</h2></div>
        <head>
          <style type="text/css">
            #thong-tin-bai-viet{
              width:90%;
              margin:0 auto;
              margin-right:8rem;
              }
            th{
              width:16em;
              height:50px;
              text-align:right;
              padding-right:4rem;
              }
            .o-text{
              width:48em;
              height:36px;
              border-radius:3px;
              border-style:hidden;
              border:1px solid rgba(33,33,33,0.26);
              padding-left: 0.45rem;
              font-family:Arial;
              font-size:110%;
            }
            .o-check{
              width:1.8rem;
              height:1.8rem;
              }
              .nhap-lieu{
                width:46.9em;
                min-height:200px;
                }
            .chu{
              padding-left: 0.45rem;
              font-size:110%;
              font-family:Arial;
                }
            .subsub{
              height:4.4rem;
              width:12rem;
              margin-right:1rem;
              border-radius:4px;
              border-style:hidden;
              color:#fff;
              }
            .xanhsub{
              background:#27ae60;
              }
            .xanhsub:hover{
              transition: all 0.4s;
              -moz-transition: all 0.4s;
              -webkit-transition: all 0.4s;
              background:#2ecc71;
              box-shadow:4px 4px 10px -3px #a5a5a5;
              }
            .camsub{
              background:#d35400;
              }
            .camsub:hover{
              transition: all 0.4s;
              -moz-transition: all 0.4s;
              -webkit-transition: all 0.4s;
              background:#e67e22;
              box-shadow:4px 4px 10px -3px #a5a5a5;
              }
            .xamsub{
              background:#2c3e50;
              }
            .xamsub:hover{
              transition: all 0.4s;
              -moz-transition: all 0.4s;
              -webkit-transition: all 0.4s;
              background:#34495e;
              box-shadow:4px 4px 10px -3px #a5a5a5;
              }
            /* Do bong */
            .o-text:hover,.o-text:focus{
              transition: all 0.4s;
              -moz-transition: all 0.4s;
              -webkit-transition: all 0.4s;
              box-shadow:4px 4px 10px -3px #a5a5a5;
              }
              #nut{
                margin-top:1rem;
                margin-bottom:1rem;
                height:10rem;
              }
          </style>
        <link rel="stylesheet" type="text/css" href="../css/animate.css">
        </head>
        <div id="thong-tin-bai-viet">
          <form action="#" id="" class="" name="form-them-bai" method="post">
            <?php while($row = mysql_fetch_assoc($us)) { ?>
          <table>
              <tr class="animated slideInUp">
                <th>Tên người dùng</th>
                  <td><input type="text" value="<?php echo $row['tennd'] ?>" name="mota" id="mt" class="o-text" rows="3"></td>
              </tr>
              <tr class="animated slideInUp">
                  <th>Tên đăng nhập</th>
                    <td><input type="text" value="<?php echo $row['tendn'] ?>" name="tendangnhap" id="tbv" class="o-text"></td>
              </tr>
              <tr class="animated slideInUp">
                <th>Địa chỉ</th>
                  <td><input type="text" value="<?php echo $row['diachi'] ?>" name="diachi" id="td" class="o-text"></td>
              </tr>
              <tr class="animated slideInUp">
                  <th>Số điện thoại</th>
                    <td><input type="text" value="<?php echo $row['sdt'] ?>" name="sodienthoai" id="tbv" class="o-text"></td>
                </tr>
                <tr class="animated slideInUp">
                  <th>Gmail</th>
                    <td><input type="text" value="<?php echo $row['gmail'] ?>" name="gmail" id="mt" class="o-text" rows="3"></td>
                </tr>
                <tr class="animated slideInUp">
                  <th>Facebook</th>
                    <td><input type="text" value="<?php echo $row['facebook'] ?>" name="facebook" id="td" class="o-text"></td>
                </tr>
                <tr class="animated slideInUp">
                    <th>Ngày sinh</th>
                      <td><input type="date" value="<?php echo $row['ngaysinh'] ?>" name="tenbaiviet" id="tbv" class="o-text"></td>
                  </tr>
                  <tr class="animated slideInUp">
                    <th>Giới tính</th>
                      <td>
                        <select name="gioitinh" class="o-text">
                          <option value="Nam" <?php if($row['gioitinh'] == "Nam") echo "selected"; ?>>Nam</option>
                          <option value="Nữ" <?php if($row['gioitinh'] == "Nữ") echo "selected"; ?>>Nữ</option>
                          <option value="Khác" <?php if($row['gioitinh'] != "Nữ" && $row['gioitinh'] != "Nam") echo "selected"; ?>>Khác</option>
                        </select>
                      </td>
                  </tr>
                  <tr class="animated slideInUp">
                    <th>Ảnh đại diện</th>
                      <td><input type="text" value="" name="tieude" id="td" class="o-text"></td>
                  </tr>
                  <tr class="animated slideInUp">
                    <th>Slogan</th>
                      <td><input type="text" value="<?php echo $row['slogan'] ?>" name="luotxem" id="lx" class="o-text"></td>
                  </tr>
                  <tr id="nut">
                    <th></th>
                      <td><input type="submit" class="subsub xanhsub" value="Lưu">&nbsp;<input type="reset" class="subsub camsub" value="Nhập lại">&nbsp;<input type="button" class="subsub xamsub" value="Hủy"></td>
                  </tr>
            </table>
            <?php } ?>
            </form>
        </div>
      </div>
    </div>
    <?php require_once("footer.php"); ?>
  </body>
</html>
