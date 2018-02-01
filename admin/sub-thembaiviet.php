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
	// Xu ly them bai viet moi
	require_once("ketnoi.php");
	// id nguoi viet cho vd la 1
  $tk = $_SESSION['tk'];
  $mk = $_SESSION['mk'];
	// lay id bai viet cao nhat
	$ket = new ketnoi();
	$idbv = $ket->get_max_idbv() + 1;
	//echo $idbv;
  $idu = $ket->get_iduser($tk,$mk);
  $rr = mysql_fetch_assoc($idu);
  $iduser = $rr['iduser'];
	$tenbaiviet = $_POST["tenbaiviet"];
	$chuyenmuc = $_POST["chuyenmuc"];
	$mota = $_POST["mota"];
	$noidung = $_POST["noidung"];
	$thumb = $_POST["thumb"];
  $thumb = "images/".$thumb;
	$tieude = $_POST["tieude"];
	$tukhoa = $_POST["tukhoa"];
	$linkbv = $_POST["linkbv"];
	$hienthi=0;
	if(isset($_POST["hienthi"]))
		$hienthi = 1;
	else
		$hienthi = 0;
	$tinnoibac=0;
	if(isset($_POST["tinnoibac"]))
		$tinnoibac = 1;
	else
		$tinnoibac = 0;
	$luotxem;
	if(strlen($_POST["luotxem"])>=1)
		$luotxem = $_POST["luotxem"];
	/* lay ngay hien tai */
	$now = getdate();
	$ngay = $now["year"]."-".$now["mon"]."-".$now["mday"];
	/* xu ly du lieu */
	$kn = new ketnoi();
	if($kn->put_content($idbv,$tenbaiviet,$chuyenmuc,$noidung,$thumb,$luotxem,$hienthi,$linkbv,$tieude,$tukhoa,$mota,$ngay,$iduser,$tinnoibac)==true){
			?>
            <head>
            	<meta http-equiv="refresh" content="3";url="http://localhost/congngheviet/admin/baiviet.php/" />
            </head>
            <body onload=(tost())></body>
            <?php
		}
		else{
			?>
            	<head>
            		<meta http-equiv="refresh" content="3";url="http://localhost/congngheviet/admin/baiviet.php/" />
            	</head>
            	<body onload=(err_tost())></body>
            <?php
			}
?>
<div id="snackbar">Thêm thành công!</div>
<div id="snackbarerr">Thêm không thành công!</div>
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
