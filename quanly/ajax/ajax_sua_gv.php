<?php 
	session_start();
	include_once("ajax_config.php");
	function vlu_sua_gv($hoten, $khoa, $trinhdo, $chucvu, $lienhe, $id){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi = "
				UPDATE `giaovien` 
				SET
					`idkhoa`='$khoa',
					`hoten`='$hoten',
					`trinhdochuyenmon`='$trinhdo',
					`chucvuchucnang`='$chucvu',
					`lienhe`='$lienhe'
				WHERE
					`idgv` = '$id'
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
			if (vlu_sua_gv($_POST['hoten'], $_POST['khoa'], $_POST['trinhdo'], $_POST['chucvu'], $_POST['lienhe'], $_POST['id'])) {
				echo "Giáo viên đã được sửa!";
			}
			else{
				echo "Có lỗi trong quá trình sửa!";
			}
		}
	}
	else
		header("Location: ../login.php");
 ?>