<?php 
	include_once('config.php');
	function vlu_all_info_website(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi = "select * from info";
		$dulieu = mysqli_query($conn, $hoi);
		return $dulieu;
	}
 ?>