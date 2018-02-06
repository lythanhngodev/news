<?php 
	session_start();
	include_once("ajax_config.php");
	function vlu_them_gv($tenbv,$idcm,$noidung,$thumb,$hienthi,$linkbv,$tieude,$tukhoa,$mota,$ngaydang,$iduser,$tinnoibac){
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		// xử lý từ khóa
		$mang = explode(',', $tukhoa);
		for ($i=0; $i < count($mang); $i++) { 
			$tv = "SELECT * FROM `tags` WHERE `tentag` = N'$mang[$i]'";
			$kttv = mysqli_query($conn, $tv);
			$demkq = mysqli_num_rows($kttv);
			if ($demkq==0) {
				$tv1="INSERT INTO `tags` (`idtag`, `tentag`) VALUES (NULL, '$mang[$i]')";
				mysqli_query($conn, $tv1);
			}
		}
		$hoi = "
				INSERT INTO tblbaiviet (tenbv, idcm, noidung, thumb, hienthi, linkbv, tieude, mota, ngaydang, iduser,tinnoibac) VALUES ('$tenbv', '$idcm', '$noidung', '$thumb', b'$hienthi', '$linkbv', '$tieude', '$mota', '$ngaydang', '$iduser',b'$tinnoibac')
		";
		$kq1 = mysqli_query($conn, $hoi);
		for ($i=0; $i < count($mang); $i++) { 
			
			$tv="SELECT idtag FROM `tags` WHERE `tentag`=N'$mang[$i]'";
			$kttv = mysqli_query($conn, $tv);
			$kqkq = mysqli_fetch_array($kttv);
			$idtag = $kqkq[0];

			$tv2="SELECT Max(idbv) FROM `tblbaiviet`";
			$kttv2 = mysqli_query($conn, $tv2);
			$kqkq2 = mysqli_fetch_array($kttv2);
			$idbv = $kqkq2[0];

			$tv3 = "INSERT INTO `bv_tag` (`id`, `idbv`, `idtag`) VALUES (NULL, '$idbv', '$idtag')";
			mysqli_query($conn, $tv3);
		}
		if(mysqli_query($conn, $hoi)===TRUE)
			return true;
		else
			return false;
	}
	if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
		if(!vlu_login($_SESSION['username'],$_SESSION['password'])){ ?>
			<script type="text/javascript">trangchu();</script>
		<?php }
		else{
			if (vlu_them_gv($_POST['tenbv'], $_POST['idcm'], $_POST['noidung'], $_POST['thumb'], $_POST['hienthi'], $_POST['linkbv'], $_POST['tieude'], $_POST['tukhoa'], $_POST['mota'], $_POST['ngaydang'], $_POST['iduser'], $_POST['noibat'])) { ?>
				<script type="text/javascript">thanhcong("Bài viết đã được thêm");</script>
			<?php }
			else{ ?>
				<script type="text/javascript">khongthanhcong("Bài viết chưa được thêm! Vui lòng kiểm trả lại thông tin bài viết");</script>
			<?php }
		}
	}
	else
		header("Location: ../login.php");
 ?>