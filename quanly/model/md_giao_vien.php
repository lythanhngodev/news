<?php 
	include_once('config.php');
	function vlu_all_gv(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi = "select gv.idgv,kbm.idkhoa,gv.hoten,gv.trinhdochuyenmon,gv.chucvuchucnang,gv.lienhe, kbm.tenkhoa from giaovien gv, khoabomon kbm WHERE gv.idkhoa=kbm.idkhoa";
		$dulieu = mysqli_query($conn, $hoi);
		return $dulieu;
	}
	function vlu_all_khoa(){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi = "select `idkhoa`, `tenkhoa` from khoabomon";
		$dulieu = mysqli_query($conn, $hoi);
		return $dulieu;
	}
 ?>