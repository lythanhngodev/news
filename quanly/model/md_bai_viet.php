<?php 
	include_once('config.php');
	if($quyen_user=='1'){
    	$truyvan = "SELECT * FROM `tblbaiviet` ORDER BY `idbv` DESC";
	 }
	 else
	 if($quyen_user=='2')
	    $truyvan = "SELECT * FROM `baiviet` where iduser = '$quyen_user' ORDER BY `idbv` DESC";
	 $ketnoi = new clsKetnoi();
	 $dulieu = mysqli_query($ketnoi->ketnoi(),$truyvan);
 ?>