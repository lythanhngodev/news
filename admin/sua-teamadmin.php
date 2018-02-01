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
	require_once("ketnoi.php");
	$iduser = $_GET["idadmin"];
	settype($iduser,"int");
	$kn = new ketnoi();
	$kq = $kn->get_one_user($iduser);
	$row = mysql_fetch_array($kq);
	$tendn = $row["tendn"];
	$tennd = $row["tennd"];
	$diachi = $row["diachi"];
	$sdt = $row["sdt"];
	$gmail = $row["gmail"];
	$facebook = $row["facebook"];
	$quyen = $row["quyen"];
	$ngaysinh = $row["ngaysinh"];
	$thumbus = $row["thumbus"];
	$slogan = $row["slogan"];
	$linkuser = $row["linkuser"];
?>
<div id="tieu-de-chinh" class="animated fadeInDown"><h2>Thông tin gười quản trị</h2></div>

<div id="thong-tin-bai-viet">
	<form action="teamadmin.php" method="post" id="" name="form-sua" class="chinh-sua">
	<table>
    	<tr class="animated slideInUp">
        	<th>Tên người dùng</th>
            <td><input type="text" value="<?php echo $tennd; ?>" name="tennd" id="tnd" class="o-text"></td>
        </tr>
        <tr class="animated slideInUp">
        	<th>Tên đăng nhập</th>
            <td><input type="text" value="<?php echo $tendn; ?>" name="tendn" id="tdn" class="o-text"></td>
        </tr>
        <tr class="animated slideInUp">
        	<th>Địa chỉ</th>
            <td><textarea type="text" value="" name="diachi" id="dc" class="o-text" rows="3"><?php echo $diachi; ?></textarea></td>
        </tr>
        <tr class="animated slideInUp"><!-- -->
        	<th>Số điện thoại</th>
            <td><input type="text" value="<?php echo $sdt; ?>" name="sdt" id="sdtt" class="o-text"></td>
        </tr>
        <tr class="animated slideInUp"><!-- -->
        	<th>Ngày sinh</th>
            <td><input type="datetime" value="<?php echo $ngaysinh; ?>" name="ngaysinh" id="ns" class="o-text"></td>
        </tr>
        <tr class="animated slideInUp">
        	<th>Gmail</th>
            <td><input type="text" value="<?php echo $gmail; ?>" name="gmail" id="gm" class="o-text"></td>
        </tr>
        <tr class="animated slideInUp">
        	<th>Facebook</th>
            <td><input type="text" value="<?php echo $facebook; ?>" name="facebook" id="fb" class="o-text"></td>
        </tr>
        <tr class="animated slideInUp">
        	<th>Tùy chọn</th>
            <td>
            	<input type="checkbox" name="quyen" id="q" class="o-check" <?php if($quyen==1) echo "checked" ?>>&nbsp;<span class="chu">Quyền</span>
            </td>
        </tr>
        <tr class="animated slideInUp">
        	<th>Câu Slogan</th>
            <td><input type="text" name="slogan" id="slg" class="o-text" value="<?php echo $slogan ?>" ></td>
        </tr>
        <tr class="animated slideInUp"><!-- -->
        	<th>Ảnh đại diện</th>
            <td><input type="file" name="thumbus" accept="image/*" value=""></td><!-- chưa sửa hình ảnh được -->
        </tr>
        <tr>
        	<th>Link User</th>
            <td><input type="text" name="linkuser" id="lus" class="o-text" value="<?php echo $linkuser ?>" ></td>
        </tr>

        <input type="hidden" value="<?php echo $_GET["idadmin"]; ?>" name="iduser" class="" >
        <input type="hidden" value="suauser" name="suasua" class="" >

        <tr id="nut">
        	<th></th>
            <td><input type="submit" class="subsub xanhsub" value="Lưu">&nbsp;<input type="reset" class="subsub camsub" value="Nhập lại">&nbsp;<input type="button" class="subsub xamsub" value="Hủy"></td>
        </tr>
    </table>
    <script>
            CKEDITOR.replace( 'editor1' );
        </script>
    </form>
</div>
