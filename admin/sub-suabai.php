<style>
#snackbar{
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #2b993e;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}
#snackbarerr{
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #ff0000;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}
#snackbar.show,#snackbarerr.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
</style>
<?php
	require_once("ketnoi.php");
	$idbv = $_POST["idbv"];
	$tenbv = $_POST["tenbaiviet"];
	$chuyenmuc = $_POST["chuyenmuc"];
	$mota = $_POST["mota"];
	$noidung = $_POST["noidung"];
	$thumb = "images/".$_POST["thumb"];
	$tieude = $_POST["tieude"];
	$tukhoa = $_POST["tukhoa"];
	$linkbv = $_POST["linkbv"];
	$hienthi;
	if(isset($_POST["hienthi"]))
		$hienthi=1;
	else
		$hienthi=0;
	$tinnoibac;
	if(isset($_POST["tinnoibac"]))
		$tinnoibac=1;
	else
		$tinnoibac=0;
	$luotxem = $_POST["luocxem"];

	/* xu ly du lieu */
	$kn = new ketnoi();
	if($kn->rewrite_content($idbv,$tenbv,$chuyenmuc,$noidung,$thumb,$luotxem,$hienthi,$linkbv,$tieude,$tukhoa,$mota,$tinnoibac)){
    	echo "<head>";
    	echo "<meta http-equiv=\"refresh\" content=\"3\";url=\"http://localhost/congngheviet/admin/baiviet.php/\" />";
      echo "</head>";
      echo "<body onload=(tost())></body>";
		}
		else
		{
      echo "<head>";
      echo "<meta http-equiv=\"refresh\" content=\"3\";url=\"http://localhost/congngheviet/admin/baiviet.php/\" />";
      echo "</head>";
      echo "<body onload=(err_tost())></body>";
		}
?>
<div id="snackbar">Cập nhật thành công!</div>
<div id="snackbarerr">Cập nhật không thành công!</div>
<script>
function tost() {
    var x = document.getElementById("snackbar")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
function err_tost() {
    var x = document.getElementById("snackbarerr")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
