<?php
	// thêm bài viết mới
?>
<script src="js/lslug-tien-bai-viet.js"></script>
<div id="tieu-de-chinh" class="animated fadeInDown"><h2>Thêm bài viết</h2></div>

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
<div id="thong-tin-bai-viet">
	<form action="baiviet.php" id="" class="" name="form-them-bai" method="post">
	<table>
    	<tr class="animated slideInUp">
        	<th>Tên bài viết</th>
            <td><input type="text" value="" name="tenbaiviet" id="tbv" class="o-text" onkeydown="lamlink('tbv','lbv')" onchange="lamlink('tbv','lbv')"></td>
        </tr>
        <tr class="animated slideInUp">
        	<th>Thể loại</th>
            <td>
            	<select name="chuyenmuc" id="cm" class="o-text">
            		<?php require_once("ketnoi.php");
            			$kn = new ketnoi();
            			$stt=1;
            			$kq = $kn->get_all_chu_de();
            		 	while($row = mysql_fetch_array($kq)) { ?>
            		 		<option value="<?php echo $stt; ?>"><?php echo $row['tencm']; ?></option>
            		 <?php $stt++; } ?>
                </select>
            </td>
        </tr>
        <tr class="animated slideInUp">
        	<th>Mô tả</th>
            <td><textarea type="text" value="" name="mota" id="mt" class="o-text" rows="3"></textarea></td>
        </tr>
        <tr class="animated slideInUp">
        	<th>Nội dung</th>
            <td><textarea id="editor1" name="noidung" class="nhap-lieu ckeditor"></textarea></td>
        </tr>
        <tr class="animated slideInUp"><!--- -->
        	<th>Hình ảnh</th>
            <td><input type="file" name="thumb" accept="image/*" onchange=""></td>
        </tr>
        <tr class="animated slideInUp">
        	<th>Tiêu đề dành cho SEO</th>
            <td><input type="text" value="" name="tieude" id="td" class="o-text"></td>
        </tr>
        <tr class="animated slideInUp">
        	<th>Từ khóa dành cho SEO</th>
            <td><input type="text" value="" name="tukhoa" id="tk" class="o-text"></td>
        </tr>
        <tr class="animated slideInUp">
        	<th>Link bai viet</th>
            <td><input type="text" value="" name="linkbv" id="lbv" class="o-text"></td>
        </tr>
        <tr class="animated slideInUp">
        	<th>Tùy chọn</th>
            <td>
            	<input type="checkbox" name="hienthi" id="ht" class="o-check">&nbsp;<span class="chu">Hiển thị</span>
                <input type="checkbox" name="tinnoibac" id="tnb" class="o-check">&nbsp;<span class="chu">Tin nổi bậc</span>
            </td>
        </tr>
        <tr class="animated slideInUp">
        	<th>Luot xem</th>
            <td><input type="text" value="0" name="luotxem" id="lx" class="o-text"></td>
        </tr>
        <tr id="nut">
        	<th></th>
            <td><input type="submit" class="subsub xanhsub" value="Lưu">&nbsp;<input type="reset" class="subsub camsub" value="Nhập lại">&nbsp;<input type="button" class="subsub xamsub" value="Hủy"></td>
        </tr>
        <input type="text" hidden="hidden" value="them" name="ahihi" class="" >
    </table>
    <script>
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace( 'editor1' );
        </script>
    </form>
</div>
<script src="ckeditor/ckeditor.js"></script>
