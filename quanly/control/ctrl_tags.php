<?php 
	if($quyen_user != '1'){
	?>
    <script type="text/javascript">
      location.href = "<?php echo $vlute['HOST']; ?>";
    </script>
    <?php
	}
	include_once("model/md_tags.php");
	$dulieu = vlu_all_tags();
	include_once("view/vw_tags.php");
 ?>