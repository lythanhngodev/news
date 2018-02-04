<?php 
	include_once('config.php');
	function vlu_all_tags(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi = "SELECT DISTINCT t.idtag, t.tentag FROM tags t";
		$dulieu = mysqli_query($conn, $hoi);
		return $dulieu;
	}
	function vlu_count_content_of_tags($idtag){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi = "SELECT count(*) FROM bv_tag bt WHERE bt.idtag='$idtag'";
		$dulieu = mysqli_query($conn, $hoi);
		$kq = mysqli_fetch_array($dulieu);
		return $kq[0];
	}
 ?>