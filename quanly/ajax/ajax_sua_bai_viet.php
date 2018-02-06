<?php 
	session_start();
	include_once("ajax_config.php");
	$idbvbvbv;
	function vlu_them_gv($tenbv,$idcm,$noidung,$thumb,$hienthi,$tieude,$tukhoa,$mota,$tinnoibac, $idbv){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		// xử lý từ khóa
		/*$mang = explode(',', $tukhoa);
		for ($i=0; $i < count($mang); $i++) { 
			$tv = "SELECT * FROM `tags` WHERE `tentag` = N'$mang[$i]'";
			$kttv = mysqli_query($conn, $tv);
			$demkq = mysqli_num_rows($kttv);
			if ($demkq==0) {
				$tv1="INSERT INTO `tags` (`idtag`, `tentag`) VALUES (NULL, '$mang[$i]')";
				mysqli_query($conn, $tv1);
			}
		}*/
		$hoi = "
				UPDATE `tblbaiviet` 
				SET 
					`tenbv`='$tenbv',
				    `idcm`='$idcm',
				    `noidung`='$noidung',
				    `thumb`='$thumb',
				    `hienthi`= b'$hienthi',
				    `tieude`='$tieude',
				    `tukhoa`='$tukhoa',
				    `mota`='$mota',
				    `tinnoibac`=b'$tinnoibac' 
				   WHERE `idbv` = '$idbv'
		";
		echo $hoi;
		$kq1 = mysqli_query($conn, $hoi);
		/*for ($i=0; $i < count($mang); $i++) { 
			
			$tv="SELECT idtag FROM `tags` WHERE `tentag`=N'$mang[$i]'";
			$kttv = mysqli_query($conn, $tv);
			$kqkq = mysqli_fetch_array($kttv);
			$idtag = $kqkq[0];

			$tv2="SELECT Max(idbv) FROM `tblbaiviet`";
			$kttv2 = mysqli_query($conn, $tv2);
			$kqkq2 = mysqli_fetch_array($kttv2);
			$idbvbvbv = $kqkq2[0];

			$tv3 = "INSERT INTO `bv_tag` (`id`, `idbv`, `idtag`) VALUES (NULL, '$idbvbvbv', '$idtag')";
			mysqli_query($conn, $tv3);
		}*/
		return true;
	}
	if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
		if(!vlu_login($_SESSION['username'],$_SESSION['password'])){ ?>
			<script type="text/javascript">trangchu();</script>
		<?php }
		else{
			if (vlu_them_gv($_POST['tenbv'], $_POST['idcm'], $_POST['noidung'], $_POST['thumb'], $_POST['hienthi'],$_POST['tieude'], $_POST['tukhoa'], $_POST['mota'], $_POST['noibat'], $_POST['idbv'])) { ?>
				<script type="text/javascript">thanhcong("Bài viết đã được chỉnh sửa. <a href=\"?p=baiviet\">Xem chi tiết</a>");</script>
			<?php }
			else{ ?>
				<script type="text/javascript">khongthanhcong("Bài viết chưa được thêm! Vui lòng kiểm trả lại thông tin bài viết");</script>
			<?php }
		}
	}
	else
		header("Location: ../login.php");
 ?>