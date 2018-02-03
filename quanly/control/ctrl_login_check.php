<?php
	session_start();
	include_once("model/md_login.php");
	if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
		if(!vlu_login($_SESSION['username'],$_SESSION['password'])){
			header("Location: login.php");
		}
	}
	else
		header("Location: login.php");
	$ketnoi = new clsKetnoi();
	$hoi_user = "SELECT quyen, thumbus,tennd,iduser, admin from tbluser WHERE (tendn=N'".$_SESSION['username']."' or gmail = '".$_SESSION['username']."') and matkhau = N'".md5($_SESSION['password'])."'";
	$thucthi_user = mysqli_query($ketnoi->ketnoi(), $hoi_user);
	$row_user = mysqli_fetch_assoc($thucthi_user);
	$id_user = $row_user['iduser'];
	$ten_user = $row_user['tennd'];
	$quyen_user = $row_user['quyen'];
	$hinh_user = $row_user['thumbus'];
 ?>
