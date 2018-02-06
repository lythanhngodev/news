<?php 
	include_once("ajax_config.php");

	function vlu_xoa_bai($idtag,$tentag){	
		$ketnoi = new clsKetnoi();
		$conn = $ketnoi->ketnoi();
		$hoi = "UPDATE `tags` SET `tentag` = '$tentag' WHERE `tags`.`idtag` = '$idtag'";
		if(mysqli_query($conn, $hoi)===TRUE)
			return true;
		else
			return false;
	}
	if (vlu_xoa_bai($_POST['id'],$_POST['tentag'])) { ?>
		<script type="text/javascript">thanhcong("Thẻ đã được chỉnh sửa. Vui lòng load lại trang web.");dongmodal("modal-sua-tag");</script>
	<?php }
	else{ ?>
		<script type="text/javascript">khongthanhcong("Thẻ chưa được sửa! Vui lòng kiểm trả lại thông tin bài viết");</script>
	<?php }