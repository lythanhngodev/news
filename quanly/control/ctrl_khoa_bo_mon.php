<?php 
	if($quyen_user != '1'){
	?>
    <script type="text/javascript">
      location.href = "<?php echo $vlute['HOST']; ?>";
    </script>
    <?php
	}
	include_once("model/md_khoa_bo_mon.php");
	$dulieu = vlu_all_khoa_bo_mon();
	include_once("view/vw_khoa_bo_mon.php");
 ?>