<?php 
	include_once('config.php');
	function vlu_all_user(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi = "select * from user";
		$dulieu = mysqli_query($conn, $hoi);
		return $dulieu;
	}
 ?>