<?php 
	session_start();
	if (!isset($_POST['id'])) {
		header("Location: ../login.php");
	}

	include_once("ajax_config.php");

	function vlu_xoa_bai($idbv){	
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi = "DELETE FROM baiviet WHERE idbv='$idbv'";
		if(mysqli_query($conn, $hoi)===TRUE)
			return true;
		else
			return false;
	}
	if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
		if(!vlu_login($_SESSION['username'],$_SESSION['password'])){
			header("Location: ../login.php");
		}
		else{
			if (vlu_xoa_bai($_POST['id'])) {
				echo "Đã xóa bài viết!";
			}
			else{
				echo "Có lỗi trong quá trình xóa!";
			}
		}
	}
	else
		header("Location: ../login.php");
 ?>