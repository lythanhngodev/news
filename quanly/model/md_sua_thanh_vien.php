<?php
	include_once("config.php");
	$suathanhcong=0;
	function vlu_lay_user($iduser){
		$ketnoi = new clsKetnoi();
		$hoi = "SELECT * FROM tbluser WHERE iduser = '$iduser'";
		$user = mysqli_query($ketnoi->ketnoi(), $hoi);
		return $user;
	}
	function vlu_sua_thanh_vien($iduser, $tendn, $tenuser, $sdt, $email, $facebook, $hinhanh, $ngaysinh, $gioitinh){
		$ketnoi = new clsKetnoi();
		$hoi = "
			UPDATE `user` 
			SET 
				`tendn`='$tendn',
				`tenuser`='$tenuser',
				`sdt`='$sdt',
				`email`='$email',
				`facebook`='$facebook',
				`hinhanh`='$hinhanh',
				`ngaysinh`='$ngaysinh',
				`gioitinh`=$gioitinh
			WHERE
				`iduser` = '$iduser'
		";
		if(mysqli_query($ketnoi->ketnoi(), $hoi)===TRUE){
			$suathanhcong = 1;
		}
		else {
			$suathanhcong = 0;
		}
	}
	function vlu_sua_thanh_vien_mk($iduser, $matkhau_n, $matkhau_o){
		$ketnoi = new clsKetnoi();
		$hoi = "SELECT * FROM user WHERE iduser='$iduser' and matkhau = '$matkhau_o'";
		$tl = mysqli_query($ketnoi->ketnoi(), $hoi);
		$dem = mysqli_num_rows($tl);
		if ($dem == 1) {
			$hoi1 = "
					UPDATE `user` 
					SET 
						`matkhau`='$matkhau_n'
					WHERE
						`iduser` = '$iduser' and 
						`matkhau` = '$matkhau_o'
					";
			if(mysqli_query($ketnoi->ketnoi(), $hoi1)===TRUE){
				$suathanhcong = 1;
			}
			else {
				$suathanhcong = 0;
			}
		}
		else
			$suathanhcong = 0;
		return $suathanhcong;
	}
 ?>
