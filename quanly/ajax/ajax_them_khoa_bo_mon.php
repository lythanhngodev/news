<?php 
	session_start();
	include_once("ajax_config.php");

	function vlu_them_khoa_bo_mon($ten, $tenen, $diachi, $dienthoai, $mail, $ngaylap, $mota, $link, $hinh){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi = "
				INSERT INTO `khoabomon`(`idkhoa`, `tenkhoa`, `tentienganh`, `diachi`, `dienthoai`, `mail`, `ngaythanhlap`, `motakhac`, `hinhanhkhoa`, `link`) VALUES (null,'$ten','$tenen','$diachi','$dienthoai','$mail','$ngaylap','$mota','$hinh','$link')
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
			if (vlu_them_khoa_bo_mon($_POST['ten'], $_POST['tenen'], $_POST['diachi'], $_POST['dienthoai'], $_POST['mail'], $_POST['ngaylap'], $_POST['mota'], $_POST['link'], $_POST['hinh'])) {
				echo "Khoa bộ môn đã được thêm!";
			}
			else{
				echo "Có lỗi trong quá trình thêm!";
			}
		}
	}
	else
		header("Location: ../login.php");
 ?>