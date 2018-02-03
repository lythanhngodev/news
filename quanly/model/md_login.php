<?php 
	include_once("config.php");
	function vlu_login($us, $pa){
		$pa = md5($pa);	
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi = "SELECT quyen, thumbus,tennd,iduser, admin from tbluser WHERE (tendn=N'$us' or gmail = '$us') and matkhau = N'$pa'";
		$thucthi = mysqli_query($conn, $hoi);
		$dem_user = mysqli_num_rows($thucthi);
		if ($dem_user > 0)
			return true;
		else
			return false;
	}
 ?>