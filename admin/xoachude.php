<?php 
	require_once("ketnoi.php");
	$kn = new ketnoi();
	$idcm = $_GET["idcm"];
	$kn->delete_chuyen_muc($idcm);
	header("Location:http://localhost/congngheviet/admin/chude.php");
?>