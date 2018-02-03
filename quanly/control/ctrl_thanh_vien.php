<?php 
	if($quyen_user != '1'){
	?>
    <script type="text/javascript">
      location.href = "<?php echo $vlute['HOST']; ?>";
    </script>
    <?php
	}
	include_once("model/md_thanh_vien.php");
	$dulieu = vlu_all_user();
	include_once("view/vw_thanh_vien.php");
 ?>