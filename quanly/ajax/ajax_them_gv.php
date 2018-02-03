<?php 
	session_start();
	include_once("ajax_config.php");
	function vlu_them_gv($hoten, $khoa, $trinhdo, $chucvu, $lienhe){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi = "
				INSERT INTO `giaovien`(`idgv`, `idkhoa`, `hoten`, `trinhdochuyenmon`, `chucvuchucnang`, `lienhe`) VALUES (null,'$khoa','$hoten','$trinhdo','$chucvu','$lienhe')
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
			if (vlu_them_gv($_POST['hoten'], $_POST['khoa'], $_POST['trinhdo'], $_POST['chucvu'], $_POST['lienhe'])) {
				echo "Giáo viên đã được thêm!";
			}
			else{
				echo "Có lỗi trong quá trình sửa!";
			}
		}
	}
	else
		header("Location: ../login.php");
 ?>