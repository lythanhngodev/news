<?php 
	if($quyen_user != '1'){
	?>
    <script type="text/javascript">
      location.href = "<?php echo $vlute['HOST']; ?>";
    </script>
    <?php
	}
	include_once("model/md_chuyen_muc.php");
	$dulieu = vlu_all_chuyen_muc();
	include_once("view/vw_chuyen_muc.php");
 ?>