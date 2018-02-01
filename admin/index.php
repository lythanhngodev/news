<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<body>
<?php include ("ketnoi.php");?>
<?php
	$kn = new ketnoi();
	$tk = $_POST["tai-khoan"];
	$mk = $_POST["mat-khau"];
	if(!isset($tk) || !isset($mk) || strlen($tk)==0 || strlen($mk)==0)
		/* xac dinh co du lieu hay chua */
		header('Location: '.$congngheviet['HOST'].'admin/login.php');
	else{
		$kq = $kn->xet_dang_nhap($tk,$mk);
		if($kq==null)
			header('Location: '.$congngheviet['HOST'].'admin/login.php');
		else
		{
		  session_start();
		  $_SESSION['tk'] = $_POST["tai-khoan"];
		  $_SESSION['mk'] = $_POST["mat-khau"];
		  $dong = mysql_fetch_assoc($kq);
		  $_SESSION['quyen'] = $dong['admin'];
		$chuoi = 'Location: '.$congngheviet['HOST'].'admin/baiviet.php';
		header($chuoi);
		}
	}
?>
</body>
</html>
