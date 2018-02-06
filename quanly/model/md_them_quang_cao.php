<?php
	include_once("config.php");
	$themthanhcong = 1;
	function vlu_them_thanh_vien($tendn, $tenuser, $matkhau, $sdt, $email, $facebook, $hinhanh, $ngaythamgia, $ngaysinh, $gioitinh, $quyen){
		$ketnoi = new clsKetnoi();
		$hoi = "INSERT INTO `user`(`iduser`,`tendn`, `tenuser`, `matkhau`, `sdt`, `email`, `facebook`, `hinhanh`, `ngaythamgia`, `ngaysinh`, `gioitinh`, `quyen`) VALUES (NULL,'$tendn','$tenuser','$matkhau','$sdt','$email','$facebook','$hinhanh','$ngaythamgia','$ngaysinh',$gioitinh,$quyen)";
		if(mysqli_query($ketnoi->ketnoi(), $hoi)===TRUE){
			$themthanhcong = 1;
		}
		else {
			$themthanhcong = 0;
		}
	}
 ?>