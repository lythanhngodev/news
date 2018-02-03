<?php 
	session_start();
	include_once("ajax_config.php");

	function vlu_them_slider($tieude, $link, $style, $hinhanh){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi = "
				INSERT INTO `slider`(`id`, `tieude`, `link`, `style`, `hinhanh`) VALUES (NULL,'$tieude','$link','$style','$hinhanh')
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
			if (vlu_them_slider($_POST['tieude'], $_POST['link'], $_POST['style'], $_POST['hinhanh'])) {
				echo "Slider đã được thêm!";
			}
			else{
				echo "Có lỗi trong quá trình thêm!";
			}
		}
	}
	else
		header("Location: ../login.php");
 ?>