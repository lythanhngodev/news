<?php 
	include_once("config.php");
	function vlu_login($idbv){	
		$ketnoi = new clsKetnoi();
		$hoi = "UPDATE `baiviet` SET `hienthi` = b'0' WHERE `baiviet`.`idbv` = $idbv";
		
		if (mysqli_query($ketnoi->ketnoi(), $hoi) === TRUE)
			return true;
		else
			return false;
	}
 ?>