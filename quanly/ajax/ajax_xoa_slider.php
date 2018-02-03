<?php 
	session_start();
	include_once("ajax_config.php");
	function vlu_xoa_slider($id){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi = "
				DELETE FROM `slider`
				WHERE 
					`id` = '$id'
		";
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
			if (vlu_xoa_slider($_POST['id'])). {
				echo "Slider đã được xóa!";
			}
			else{
				echo "Có lỗi trong quá trình xóa!";
			}
		}
	}
	else
		header("Location: ../login.php");
 ?>