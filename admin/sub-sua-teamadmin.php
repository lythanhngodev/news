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
	$kn = new ketnoi();
	$iduser = $_POST["iduser"];
	$tendn = $_POST["tendn"];
	$tennd = $_POST["tennd"];
	$diachi = $_POST["diachi"];
	$sdt = $_POST["sdt"];
	$gmail = $_POST["gmail"];
	$facebook = $_POST["facebook"];
	$quyen;
	if(isset($_POST["quyen"]))
		$quyen = 1;
	else
		$quyen = 0;
	$ngaysinh = $_POST["ngaysinh"];
	$thumbus = $_POST["thumbus"];
	$slogan = $_POST["slogan"];
	$linkuser = $_POST["linkuser"];
	if($kn->update_one_user($iduser,$tendn,$tennd,$diachi,$sdt,$gmail,$facebook,$quyen,$ngaysinh,$thumbus,$slogan,$linkuser)==true){
		echo "<head>";
		echo "<meta http-equiv=\"refresh\" content=\"2\";url=\"http://localhost/congngheviet/admin/teamadmin/\" />";
		echo "</head>";
		echo "<body onload=(tost())></body>";
		}
		else
			{
				echo "<head>";
				echo "<meta http-equiv=\"refresh\" content=\"2\";url=\"http://localhost/congngheviet/admin/teamadmin/\" />";
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
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 2000);
}
function err_tost() {
    var x = document.getElementById("snackbarerr")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 2000);
}
</script>
