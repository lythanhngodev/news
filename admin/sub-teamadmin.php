<head>
	<style>
		.khung-chuc-nang{
			width:90%;
			height:5rem;
			margin-bottom:0.8rem;
			margin:0 auto;
			border-bottom:1px solid #D7D7D7;
		}
		.row-nut{
			display:block;
			height:4.5rem;
			width:15rem;
			border-radius:4px;
			background:#2da446;
			color:#fff;
			text-align:center;
			font-size:16px;
			padding:10px 0px 0px 0px;
			}
		.row-nut:hover{
			text-decoration:none;
			color:#fff;
			box-shadow:0px 0px 8px 0px #62a55e;
			}
		.khung-chuc-nang div a{
			font-size:1.8rem;
			}
		.khung-chuc-nang div a:hover{
			text-decoration:none;
			}
			.them-admin{
				margin-left:5rem;
				}
			.them-admin:hover{}
    </style>

    <!-- icon kieu font -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div id="tieu-de-chinh"><h2>Quản lý người dùng</h2></div>
<div class="them-admin"><a class="row-nut" href="/congngheviet/admin/themuser/" data-toggle="tooltip" data-placement="right" data-original-title="Thêm một admin mới vào website của bạn..."><i class="fa fa-user"></i>&nbsp;Thêm admin</a></div>
<div class="noi-dung">
	<table id="mydatatable1" class="table table-bordered table-striped table-responsive table-bordered">
    	<thead>
        	<tr>
            	<th class="disable-sorting">STT</th>
                <th>Tên người dùng</th>
                <th>Tên đăng nhập</th>
                <th>Số điện thoại</th>
                <th style="text-align:center;">Quyền</th>
            <tr>
        </thead>
        <?php
			require_once("ketnoi.php");
			$kn = new ketnoi();
			$kq = $kn->get_all_user();
			$i = 0;
		 ?>
        <tbody>
        <?php while($row = mysql_fetch_array($kq)){ ?>
        	<tr>
            	<th><?php echo $i ?></th>
                <td><a href="?idadmin=<?php echo $row["iduser"] ?>"><?php echo $row["tennd"] ?></a></td>
                <td><?php echo $row["tendn"] ?></td>
                <td><?php echo $row["sdt"] ?></td>
                <!-- Chinh sua bai -->
				<?php
					$xet = $row["quyen"];
					if($xet=="1"){
						$quyen = "fa-check-square-o aria-hidden=\"true\"";
						}
						else
						$quyen = "fa-square-o aria-hidden=\"false\"";
				 ?>
                <td style="text-align:center;"><a class="sua-doi" href="#" ><i class="fa <?php echo $quyen ?> nut-sua" style="font-size: 180%; text-align:center;" data-toggle="tooltip" data-placement="bottom" data-original-title="<?php if($xet==1) echo "Admin toàn quyền =))"; else echo "Admin mất quyền =((" ?>"></i></a></td>
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
    	$('#mydatatable1').bdt();
	});
</script>
