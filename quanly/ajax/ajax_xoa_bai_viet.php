<?php 
	session_start();
	if (!isset($_POST['id'])) { ?>
		<script type="text/javascript">trangchu();</script>
	<?php }

	include_once("ajax_config.php");

	function vlu_xoa_bai($idbv){	
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi = "DELETE FROM tblbaiviet WHERE idbv='$idbv'";
		$tvvv = "DELETE FROM `bv_tag` WHERE `bv_tag`.`idbv` = '$idbv'";
		$kttvvv = mysqli_query($conn, $tvvv);
		if(mysqli_query($conn, $hoi)===TRUE)
			return true;
		else
			return false;
	}
	if (vlu_xoa_bai($_POST['id'])) { ?>
		<script type="text/javascript">thanhcong("Bài viết đã được chỉnh xóa. Vui lòng load lại trang web.");</script>
	<?php }
	else{ ?>
		<script type="text/javascript">khongthanhcong("Bài viết chưa được xóa! Vui lòng kiểm trả lại thông tin bài viết");</script>
	<?php }