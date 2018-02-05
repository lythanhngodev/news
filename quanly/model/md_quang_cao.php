<?php 
	include_once('config.php');
	function vlu_all_quang_cao(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi = "select * from quangcao";
		$dulieu = mysqli_query($conn, $hoi);
		return $dulieu;
	}
 ?>