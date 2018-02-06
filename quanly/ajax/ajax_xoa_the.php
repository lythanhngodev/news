<?php 
	include_once("ajax_config.php");

	function vlu_xoa_bai($idtag){	
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi = "DELETE FROM tags WHERE idtag='$idtag'";
		$tvvv = "DELETE FROM `bv_tag` WHERE `bv_tag`.`idtag` = '$idtag'";
		$kttvvv = mysqli_query($conn, $tvvv);
		if(mysqli_query($conn, $hoi)===TRUE)
			return true;
		else
			return false;
	}
	if (vlu_xoa_bai($_POST['id'])) { ?>
		<script type="text/javascript">thanhcong("Thẻ đã được xóa. Vui lòng load lại trang web.");dongmodal("qltv-modal-xoa-tags");$("#the-tag-<?php echo $_POST['id']; ?>").addClass("hide")</script>
	<?php }
	else{ ?>
		<script type="text/javascript">khongthanhcong("Thẻ chưa được xóa! Vui lòng kiểm trả lại thông tin bài viết");</script>
	<?php }