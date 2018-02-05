<?php 
	include_once('config.php');
	function vlu_all_user(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi = "select * from tbluser";
		$dulieu = mysqli_query($conn, $hoi);
		return $dulieu;
	}
	function vlu_count_content($iduser){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi = "SELECT count(*) FROM tblbaiviet bv WHERE bv.iduser='$iduser'";
		$dulieu = mysqli_query($conn, $hoi);
		$kq = mysqli_fetch_array($dulieu);
		return $kq[0];
	}
 ?>