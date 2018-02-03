<?php
	include_once("config.php");
	$themthanhcong = 1;
	function vlu_load_chuyen_muc(){
		$ketnoi = new clsKetnoi();
		$hoi = "SELECT * FROM chuyenmuc WHERE hienthi='1'";
		$chuyenmuc = mysqli_query($ketnoi->ketnoi(), $hoi);
		while ($row_cm = mysqli_fetch_assoc($chuyenmuc)) {
		?>
			<option value="<?php echo $row_cm['idcm']; ?>"><?php echo $row_cm['tencm']; ?></option>
		<?php
		}
	}
	function vlu_them_bai_viet($tenbv, $idcm, $mota, $noidung, $hinhanh, $tukhoa, $linkbv, $ngaydang, $luotxem, $hienthi, $iduser){
		$ketnoi = new clsKetnoi();
		$hoi = "INSERT INTO `baiviet`(`idbv`, `tenbv`, `idcm`, `noidung`, `hinhanh`, `luotxem`, `hienthi`, `linkbv`, `tieude`, `tukhoa`, `mota`, `ngaydang`, `iduser`) VALUES (NULL,'$tenbv',$idcm,'$noidung','$hinhanh',$luotxem,$hienthi,'$linkbv','$tenbv','$tukhoa','$mota','$ngaydang',$iduser)";
		if(mysqli_query($ketnoi->ketnoi(), $hoi)===TRUE){
			$themthanhcong = 1;
		
		}
		else {
			$themthanhcong = 0;
		}
	}
 ?>
