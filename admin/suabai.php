<div id="tieu-de-chinh" class="animated fadeInDown"><h2>Bài viết</h2></div>
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
	(int)$idbv = $_GET["idbv"];
	require_once("ketnoi.php");
	$kn = new ketnoi();
	$row = $kn->get_one_content($idbv);
	$tenbv = $row["tenbv"];
	$idcm = $row["idcm"];
	$mota = $row["mota"];
	$noidung = $row["noidung"];
	$thumb = $row["thumb"];
	$tieude = $row["tieude"];
	$tukhoa = $row["tukhoa"];
	$linkbv = $row["linkbv"];
	$hienthi = $row["hienthi"];
	$noibac = $row["tinnoibac"];
	$luotxem = $row["luotxem"];
?>
<div id="thong-tin-bai-viet">
	<form action="baiviet.php" method="post" id="" name="form-sua" class="chinh-sua">
	<table>
    	<tr class="animated slideInUp">
        	<th>Tên bài viết</th>
            <td><input type="text" value="<?php echo $tenbv; ?>" name="tenbaiviet" id="tbv" class="o-text" onKeyPress="lamlink('tbv','lbv')"></td>
        </tr>
        <tr class="animated slideInUp">
        	<th>Thể loại</th>
            <td>
            	<select name="chuyenmuc" id="cm" class="o-text">
                	<option value="1" <?php if($idcm==1) echo "selected" ?> >Công Nghệ</option>
                    <option value="2" <?php if($idcm==2) echo "selected" ?> >Sự kiện</option>
                    <option value="3" <?php if($idcm==3) echo "selected" ?> >Đánh giá</option>
                    <option value="4" <?php if($idcm==4) echo "selected" ?> >Thủ thuật - Ứng dụng</option>
					<option value="5" <?php if($idcm==5) echo "selected" ?> >Khuyến mãi - Quảng cáo</option>
                </select>
            </td>
        </tr>
        <tr class="animated slideInUp">
        	<th>Mô tả</th>
            <td><textarea type="text" value="" name="mota" id="mt" class="o-text" rows="3"><?php echo $mota; ?></textarea></td>
        </tr>
        <tr class="animated slideInUp"><!-- -->
        	<th>Nội dung</th>
            <td><textarea id="editor1" name="noidung" class="nhap-lieu ckeditor" ><?php echo $noidung; ?></textarea></td>
        </tr>
        <tr class="animated slideInUp"><!-- -->
        	<th>Hình ảnh</th>
            <td><input type="file" name="thumb" accept="image/*" value=""></td><!-- chưa sửa hình ảnh được -->
        </tr>
        <tr class="animated slideInUp">
        	<th>Tiêu đề dành cho SEO</th>
            <td><input type="text" value="<?php echo $tieude; ?>" name="tieude" id="td" class="o-text"></td>
        </tr>
        <tr class="animated slideInUp">
        	<th>Từ khóa dành cho SEO</th>
            <td><input type="text" value="<?php echo $tukhoa; ?>" name="tukhoa" id="tk" class="o-text"></td>
        </tr>
        <tr class="animated slideInUp">
        	<th>Link bai viet</th>
            <td><input type="text" value="<?php echo $linkbv; ?>" name="linkbv" id="lbv" class="o-text"></td>
        </tr>
        <tr class="animated slideInUp">
        	<th>Tùy chọn</th>
            <td>
            	<input type="checkbox" name="hienthi" id="ht" class="o-check" <?php if($hienthi==1) echo "checked" ?>>&nbsp;<span class="chu">Hiển thị</span>
                <input type="checkbox" name="tinnoibac" id="tnb" class="o-check" <?php if($noibac==1) echo "checked" ?>>&nbsp;<span class="chu">Tin nổi bậc</span>
            </td>
        </tr>
        <tr class="animated slideInUp">
        	<th>Luot xem</th>
            <td><input type="text" name="luocxem" id="lx" class="o-text" value="<?php echo $luotxem ?>" ></td>
        </tr>
        <!--
        <tr class="animated slideInUp">
        	<th>Ngày đăng</th>
            <td><input type="date" value="" name="ngaydang" id="nd" class="o-text"></td>
        </tr>
        -->
        <tr id="nut">
        	<th></th>
            <td><input type="submit" class="subsub xanhsub" value="Lưu">&nbsp;<input type="reset" class="subsub camsub" value="Nhập lại">&nbsp;<input type="button" class="subsub xamsub" value="Hủy"></td>
        </tr>
        <input type="hidden" value="<?php echo $_GET["idbv"]; ?>" name="idbv" class="" >
        <input type="text" hidden="hidden" value="sua" name="ahihi" class="" >
    </table>
    <script>
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace( 'editor1' );
    </script>
    </form>
</div>
<script src="ckeditor/ckeditor.js"></script>
