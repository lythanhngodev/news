<?php
	include_once("config.php");
	$suathanhcong = 1;
	function vlu_load_chuyen_muc_khong_chua_chuyen_muc_bai_viet($idbv){
		$ketnoi = new clsKetnoi();
		$hoi = "SELECT * FROM tblcm WHERE idcm not in (SELECT idcm FROM tblbaiviet WHERE idbv = '$idcm') and hienthi='1'";
		$chuyenmuc = mysqli_query($ketnoi->ketnoi(), $hoi);
		while ($row_cm = mysqli_fetch_assoc($chuyenmuc)) {
		?>
			<option value="<?php echo $row_cm['idcm']; ?>"><?php echo $row_cm['tencm']; ?></option>
		<?php
		}
	}
	function vlu_load_chuyen_muc_tu_bai_viet($idbv){
		$ketnoi = new clsKetnoi();
		$hoi = "SELECT * FROM tblcm WHERE idcm in (SELECT idcm FROM tblbaiviet WHERE idbv = '$idbv') and hienthi='1'";
		$chuyenmuc = mysqli_query($ketnoi->ketnoi(), $hoi);
		while ($row_cm = mysqli_fetch_assoc($chuyenmuc)) {
		?>
			<option value="<?php echo $row_cm['idcm']; ?>" selected="selected"><?php echo $row_cm['tencm']; ?></option>
		<?php
		}
	}
	function vlu_lay_bai_chinh_sua($idbv){
		$ketnoi = new clsKetnoi();
		$hoi = "SELECT * FROM tblbaiviet WHERE idbv = '$idbv'";
		$baiviet = mysqli_query($ketnoi->ketnoi(), $hoi);
		return $baiviet;
	}
	function vlu_sua_bai_viet($idbv,$tenbv, $idcm, $mota, $noidung, $hinhanh, $tukhoa, $linkbv, $ngaydang, $luotxem, $hienthi){
		$ketnoi = new clsKetnoi();
		$hoi = "
			UPDATE `baiviet` 
			SET 
				`tenbv`='$tenbv',
				`idcm`=$idcm,
				`noidung`='$noidung',
				`hinhanh`='$hinhanh',
				`luotxem`='$luotxem',
				`hienthi`=$hienthi,
				`linkbv`='$linkbv',
				`tieude`='$tenbv',
				`tukhoa`='$tukhoa',
				`mota`='$mota',
				`ngaydang`='$ngaydang'
			WHERE
				`idbv` = '$idbv'
		";
		if(mysqli_query($ketnoi->ketnoi(), $hoi)===TRUE){
			$suathanhcong = 1;
		}
		else {
			$suathanhcong = 0;
		}
	}
 ?>
