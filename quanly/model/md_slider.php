<?php 
	include_once('config.php');
	function vlu_all_slider(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi = "select * from slider";
		$dulieu = mysqli_query($conn, $hoi);
		return $dulieu;
	}
 ?>