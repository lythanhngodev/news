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
	function vlu_lay_tu_khoa($idbv){
		$ketnoi = new clsKetnoi();
		$hoi = "SELECT tentag FROM `bv_tag` bt, tags t WHERE idbv = '$idbv' AND bt.idtag = t.idtag";
		$baiviet = mysqli_query($ketnoi->ketnoi(), $hoi);
		$dem = mysqli_num_rows($baiviet);
		if ($dem>0) {
			$kq="";
			$kqct="";
			while ($row=mysqli_fetch_array($baiviet)) {
				$kq.=$row[0].",";
			}
			for ($i=0; $i < strlen($kq)-1; $i++) { 
				$kqct.=$kq[$i];
			}
			return $kqct;
		}else return "";
	}
 ?>
