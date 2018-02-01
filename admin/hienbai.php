<?php 
	require_once("ketnoi.php");
	$kn = new ketnoi();
	$id = $_GET["idbv"];
	$kn->hide_show_content($id);
	echo "<meta http-equiv=\"refresh\" content=\"0; url=baiviet.php\">";
?>