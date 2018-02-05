<?php 
	include_once('config.php');
	function vlu_all_chuyen_muc(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi = "select * from tblcm";
		$dulieu = mysqli_query($conn, $hoi);
		return $dulieu;
	}
 ?>