<?php 
	session_start();
	include_once("ajax_config.php");
	function vlu_sua_slider($id, $tieude, $link, $style, $hinhanh, $kichhoat){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi = "
				UPDATE `slider` set
					`tieude` = '$tieude',
					`link` = '$link', 
					`style` = '$style',
					 `hinhanh` = '$hinhanh',
					 `kichhoat` = $kichhoat
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
			if (vlu_sua_slider($_POST['id'], $_POST['tieude'], $_POST['link'], $_POST['style'], $_POST['hinhanh'], $_POST['kh'])) {
				echo "Slider đã được sửa!";
			}
			else{
				echo "Có lỗi trong quá trình sửa!";
			}
		}
	}
	else
		header("Location: ../login.php");
 ?>