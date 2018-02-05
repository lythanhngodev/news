<?php 
	if($quyen_user != '1'){
	?>
    <script type="text/javascript">
      location.href = "<?php echo $vlute['HOST']; ?>";
    </script>
    <?php
	}
	include_once("model/md_thong_tin_website.php");
	$dulieu = vlu_all_info_website();
	include_once("view/vw_thong_tin_website.php");
 ?>