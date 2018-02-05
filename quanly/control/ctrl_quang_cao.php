<?php 
	if($quyen_user != '1'){
	?>
    <script type="text/javascript">
      location.href = "<?php echo $vlute['HOST']; ?>";
    </script>
    <?php
	}
	include_once("model/md_quang_cao.php");
	$dulieu = vlu_all_quang_cao();
	include_once("view/vw_quang_cao.php");
 ?>