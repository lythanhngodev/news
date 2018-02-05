<?php 
	include_once('config.php');
	if($quyen_user=='1'){
    	$truyvan = "SELECT * FROM `tblbaiviet` ORDER BY `idbv` DESC";
	 }
	 else
	 if($quyen_user=='0')
	    $truyvan = "SELECT * FROM `tblbaiviet` where iduser = '$id_user' ORDER BY `idbv` DESC";
	 $ketnoi = new clsKetnoi();
	 $dulieu = mysqli_query($ketnoi->ketnoi(),$truyvan);
 ?>