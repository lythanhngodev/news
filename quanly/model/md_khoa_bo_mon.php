<?php 
	include_once('config.php');
	function vlu_all_khoa_bo_mon(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi = "
			SELECT * FROM `khoabomon`
		";
		$dulieu = mysqli_query($conn, $hoi);
		return $dulieu;
	}
 ?>