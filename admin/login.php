<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Đăng nhập hệ thống</title>
<link rel="stylesheet" type="text/css" href="css/style-de.css">
<link rel="stylesheet" type="text/css" href="../css/animate.css">

<!-- icon kieu font -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-image: url(background-1.png);background-position: center;background-size: inherit;">
<div id="fullsize">
	<div id="particles-js" style="position:absolute; width:100%;"></div>
	<script src="js/particles/particles.js"></script>
	<script src="js/particles/demo/js/app.js"></script>
	<script src="js/particles/demo/js/lib/stats.js"></script>
	<div id="top-head">
    	<div id="logo" class="giua animated fadeInDown"><img src="logo-admin-login.png" alt="" title="" width="100px" height="auto"/></div>
    </div>
    <div id="bang-dang-nhap" class="animated fadeIn">
    	<form action="index.php" method="post" id="dang-nhap" class="">
        	<table>
            	<tr class="animated fadeInLeft">
                <td colspan="2" id="chu-dang-nhap">Đăng nhập</td>
                </tr>
                <tr class="animated fadeInRight">
                    <td class="chu"><i class="fa fa-user" style="font-size: 30px;"></i></td>
                    <td><input type="text" id="tk" class="o-trong" name="tai-khoan"></td>
                </tr>
                <tr class="animated fadeInLeft">
                	<td class="chu"><i class="fa fa-key" style="font-size: 30px;"></td>
                    <td><input type="password" id="mk" class="o-trong" name="mat-khau"></td>
                </tr>
                <tr class="animated fadeInRight">
                	<td colspan="2"><input type="submit" id="sub" value="Đăng nhập"></td>
                </tr>
								<tr class="animated fadeInLeft">
                	<td colspan="2"><input type="button" class="quenmk" value="Quên mật khẩu"></td>
                </tr>
            </table>
        </form>
    </div>
    <div id="footer"></div>
</div>
</body>
</html>
