<?php 
	if($quyen_user != '1'){
	?>
    <script type="text/javascript">
      location.href = "<?php echo $vlute['HOST']; ?>";
    </script>
    <?php
	}
	include_once("model/md_slider.php");
	$slider = vlu_all_slider();
	include_once("view/vw_slider.php");
 ?>