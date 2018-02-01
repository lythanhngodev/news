<?php session_start();?>
<?php
	if(isset($_SESSION['quyen']) && $_SESSION['quyen'] != "1")
			header("Location:http://localhost/congngheviet/admin/");
	if(!isset($_SESSION['quyen']))
			header("Location:http://localhost/congngheviet/admin/");
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
        <span class="mui--text-title"><img src="/congngheviet/admin/logo-admin-login.png" style="width: 105px;margin-left: 17px;"></span>
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
        	<div id="tieu-de-chinh" class="animated fadeInDown"><h2>Chỉnh sửa chuyên mục</h2></div>
<script src="js/lslug-tien-bai-viet.js"></script>
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
		.o-text:hover{
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
<?php
	//sua bai da dang
	require_once("ketnoi.php");
	$kn = new ketnoi();
	$kq = $kn->get_once_chuyen_muc($_GET['idcm']);
	$row = mysql_fetch_assoc($kq);
	//$row = $kn->get_one_content($idbv);
	$tencm =  $row["tencm"];
    $linkcm =  $row["linkcm"];
    $tukhoa = $row["tukhoa"];
    $tieude = $row["tieude"];
    $hienthi =  $row["hienthi"];
    $mota =  $row["mota"];
?>
<div id="thong-tin-bai-viet">
	<form action="/congngheviet/admin/sub-suachude.php" method="post" id="" name="form-sua" class="chinh-sua">
	<table>
    	<tr class="animated slideInUp">
        	<th>Tên chuyên mục</th>
            <td><input type="text" value="<?php echo $tencm; ?>" name="tencm" id="tbv" class="o-text"></td>
        </tr>
        <tr class="animated slideInUp">
        	<th>Link chuyên mục</th>
            <td><textarea type="text" value="" name="linkcm" id="mt" class="o-text" rows="3"><?php echo $linkcm; ?></textarea></td>
        </tr>
        <tr class="animated slideInUp"><!-- -->
        	<th>Từ khóa</th>
            <td><input type="text" value="<?php echo $tukhoa; ?>" name="tukhoa" id="td" class="o-text"></td>
        </tr>
        <tr class="animated slideInUp">
        	<th>Tiêu đề</th>
            <td><input type="text" value="<?php echo $tieude; ?>" name="tieude" id="tk" class="o-text"></td>
        </tr>
        <tr class="animated slideInUp"><!-- -->
        	<th>Hiển thị</th>
            <td><input type="checkbox" value="" <?php if($hienthi=="1") echo "checked=\"checked\"" ?> name="tieude" id="td"></td>
        </tr>
        <tr class="animated slideInUp">
        	<th>Mô tả</th>
            <td><input type="text" value="<?php echo $mota; ?>" name="mota" id="tk" class="o-text"></td>
        </tr>
        <tr id="nut">
        	<th></th>
            <td><input type="submit" class="subsub xanhsub" value="Lưu">&nbsp;<input type="reset" class="subsub camsub" value="Nhập lại">&nbsp;<input type="button" class="subsub xamsub" value="Hủy"></td>
        </tr>
        <input type="text" hidden="hidden" value="sua" name="ahihi" class="" >
    </table>
    </form>
</div>

      </div>
    </div>
    <?php require_once("footer.php"); ?>
  </body>
</html>

