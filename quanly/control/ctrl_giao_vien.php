<?php 
	if($quyen_user != '1'){
	?>
    <script type="text/javascript">
      location.href = "<?php echo $vlute['HOST']; ?>";
    </script>
    <?php
	}
	include_once("model/md_giao_vien.php");
	$dulieu = vlu_all_gv();
	$dulieu_khoa = vlu_all_khoa();
	$dulieu_khoa1 = vlu_all_khoa();
	include_once("view/vw_giao_vien.php");
 ?>