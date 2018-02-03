<?php 
	session_start();
	if (!isset($_POST['id'])) {
		header("Location: ../login.php");
	}

	include_once("ajax_config.php");

	function vlu_an_hien_bai($idbv){	
		$hoi ="";
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi1 = "SELECT `tinnoibac` FROM tblbaiviet WHERE idbv='$idbv'";
		$thucthi1 = mysqli_query($conn, $hoi1);
		$kq1 = mysqli_fetch_assoc($thucthi1);
		if ($kq1['tinnoibac']==0) {
			$hoi = "UPDATE `tblbaiviet` SET `tinnoibac` = b'1' WHERE `tblbaiviet`.`idbv` = '$idbv'";
		}
		else{
			$hoi = "UPDATE `tblbaiviet` SET `tinnoibac` = b'0' WHERE `tblbaiviet`.`idbv` = '$idbv'";
		}
		$thucthi = mysqli_query($conn, $hoi);
		return $kq1['tinnoibac'];
	}
	if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
		if(!vlu_login($_SESSION['username'],$_SESSION['password'])){
			header("Location: ../login.php");
		}
		else{
			// thao tác ở đây
			if(vlu_an_hien_bai($_POST['id'])=='1'){
			?>
				<a><i class="fa fa-star-o sao" aria-hidden="true"></i></a>
			<?php
			}
			else{
			?>
				<a><i class="fa fa-star sao" aria-hidden="true"></i></a>
			<?php
			}
		}
	}
	else
		header("Location: ../login.php");
 ?>