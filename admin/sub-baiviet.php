<head>
	<style>
		.khung-chuc-nang{
			width:90%;
			height:6rem;
			margin-bottom:0.8rem;
			margin:0 auto;
			border-bottom:1px solid rgba(215, 215, 215, 0.69);
		}
		.row-nut{
			display:block;
			height:4rem;
			width:15rem;
			border-radius:4px;
			padding-left:1.05rem;
			padding-top:0.7rem;
			background:#2b993e;
			color:#fff;
			}
		.row-nut:hover{
			transition: all 0.2s;
			-webkit-transition: all 0.2s;
			-moz-transition: all 0.2s;
			background: #37c750;
			color:#fff;
			box-shadow:0px 0px 13px 1px rgba(33, 33, 33, 0.26);
			}
		.khung-chuc-nang div{

			}
		.khung-chuc-nang div a{
			font-size:1.8rem;
			}
		.khung-chuc-nang div a:hover{
			text-decoration:none;
			}
    </style>

    <!-- icon kieu font -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div id="tieu-de-chinh"><h2>Quản lý bài viết</h2></div>
	<div class="khung-chuc-nang">
    	<div><a href="thembaiviet.php" class="row-nut" data-toggle="tooltip" data-placement="right" data-original-title="Thêm một bài viết mới vào website của bạn..."><i class="fa fa-edit"></i>&nbsp;Thêm bài viết</a></div>
    </div>
    <div class="noi-dung">
    	<table id="mydatatable" class="table table-bordered table-striped table-responsive table-bordered">
        	<thead>
            	<tr>
                	<th class="disable_desc">STT</th>
                    <th>Tên</th>
                    <th>Ngày tạo</th>
                    <th>Ẩn/Hiện</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                <tr>
            </thead>
            <?php
				$hienbai = "fa-eye"; // hien bai viet
				$anbai = "fa-eye-slash"; // an bai viet
				$hien = "";
				require_once ("ketnoi.php");
				$kn = new ketnoi();
				$kq = $kn->get_all_content();
				$i = 0;
			 ?>
            <tbody>
            <?php while($row = mysql_fetch_array($kq)){ ?>
            	<tr>
                	<th><?php echo $i ?></th>
                    <td><a href="<?php echo "?act=suabai&idbv=".$row["idbv"] ?>"><?php echo $row["tenbv"] ?></a></td>
                    <td><?php echo $row["ngaydang"] ?></td>
                    <?php
						// Xet bai co hien hay khong?
						$xet = $row["hienthi"];
						if($xet=="1"){
							$hien = $hienbai;
							}
							else
							$hien = $anbai;
					?>
                    <!-- An hien bai -->
                    <td><a class="sua-doi" href="<?php echo "?act=hienbai&idbv=".$row["idbv"] ?>"><i class="fa <?php echo $hien ?> nut-sua" style="font-size: 180%;" data-toggle="tooltip" data-placement="bottom" data-original-title="<?php if($xet==1) echo "Bài viết đang hiện thị trên website!"; else echo "Bài viết đang được ẩn trên website!" ?>"></i></a></td>
                    <!-- Chinh sua bai -->
                    <td><a class="sua-doi" href="<?php echo "?act=suabai&idbv=".$row["idbv"] ?>"><i class="fa fa-edit nut-sua" style="font-size: 180%;" data-toggle="tooltip" data-placement="bottom" data-original-title="Sửa đổi bài viết!"></i></a></td>
                    <!-- Xoa bai -->
                    <td><a class="sua-doi" href="<?php echo "?act=xoabai&idbv=".$row["idbv"] ?>"><i class="fa fa-trash nut-sua" style="font-size: 180%;color:red" data-toggle="tooltip" data-placement="bottom" data-original-title="Xóa vĩnh viễn bài viết!"></i></a></td>
                </tr>
                <?php $i++; } ?>
            </tbody>
        </table>
        </div>
        <script src="http://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
		<script src="js/vendor/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.sortelements.js" type="text/javascript"></script>
        <script src="js/jquery.bdt.js" type="text/javascript"></script>
        <script>
            $(document).ready( function () {
            	$('#mydatatable').bdt();
        	});
        </script>
