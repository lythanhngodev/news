<head>
  <style>
	/* CSS Document */
    .khung-chua-tin-cm{
      width: 100%;
      height: 480px;
      display: block;
      overflow: hidden;
      float: left;
      margin-top: 3rem;
  	}
  	.hinh-thu-nho-cm{
  		height: 500px;
  		position: relative;
  		background-position: center;
  		background-size: cover;
  		-moz-background-size: cover;
  		-webkit-background-size: cover;
  	}
  	.ngay-thang-dang-cm{
  		width: 100%;
  		height: 16rem;
  		float: left;
  		margin-top: 32.1rem;
  		background: rgba(33, 33, 33, 0.62);
  	}
  	.ngay-dang{

  	}
  	.ngay-dang > h2{
  		padding-left: 2rem;
      padding-right: 2rem;
      font-size: 40px;
      font-family: inherit;
      font-weight: 500;
      color: #fff;``
  	}
  	.ngay-dang > b{
  		padding: 1.333rem;
      padding-left: 2rem;
      color: #c3c3c3;
  	}
  </style>
  <script type="text/javascript">
    function doi_mau_menu(idcm){
        if(idcm==1)
            document.getElementById("me-cn").style = "background-color: #e74c3c; color:#fff;";
        else
            if(idcm==2)
            document.getElementById("me-sk").style = "background-color: #16a085; color:#fff;";
        else
            if(idcm==3)
            document.getElementById("me-dg").style = "background-color: #2980b9; color:#fff;";
        else
            if(idcm==4)
            document.getElementById("me-ttud").style = "background-color: #56847e; color:#fff;";
        else
            if(idcm==5)
            document.getElementById("me-kmqc").style = "background-color: rgb(142, 68, 173); color:#fff;";
    }
</script>
<title>Ahihi</title>
</head>
<?php
    require_once("admin/ketnoi.php");
    $idbv = $_GET["id"];
    settype($idbv,"int");
    $kn = new ketnoi();
    $kq = $kn->get_full_content($idbv);
    $row=mysql_fetch_array($kq);
    $us = $kn->get_info_author($row["idbv"]);
  	$row2 = mysql_fetch_array($us);
?>
<?php
# Xử lý màu cho chuyên mục
$idcm = $row["idcm"];
    settype($idcm,"int");
    if($idcm==0)
        echo "Không có chuyên mục này!";
    else
    if($idcm==1){
        echo "<body onload=\"doi_mau_menu(1), doidaymau(1)\";></body>";
    }
    else
        if($idcm==2){
        echo "<body onload=\"doi_mau_menu(2), doidaymau(2)\";></body>";
    }
    else
        if($idcm==3){
        echo "<body onload=\"doi_mau_menu(3), doidaymau(3)\";></body>";
    }
    else
        if($idcm==4){
        echo "<body onload=\"doi_mau_menu(4), doidaymau(4)\";></body>";
    }
    else
        if($idcm==5){
        echo "<body onload=\"doi_mau_menu(5), doidaymau(5)\";></body>";
    }
    ?>
<div class="khung-chua-tin-cm animated fadeIn">
			<div class="hinh-thu-nho-cm" style="background-image:url(<?php echo $row['thumb'] ?>);">
				<div class="ngay-thang-dang-cm">
					<span class="ngay-dang">
						<h2><?php echo $row['tenbv'] ?></h2>
						<b><i class="fa fa-clock-o"></i>&nbsp;&nbsp;<?php echo $row['ngaydang'] ?></b>
            &nbsp;
            <img src="admin/<?php echo $row2["thumbus"] ?>" title="<?php echo $row2['tennd'] ?>" width=20>

            <a href="author/<?php echo $row2["iduser"] ?>/<?php echo $row2['linkuser'] ?>" title="<?php echo $row2['tennd'] ?>" style="color:#c3c3c3;"><?php echo $row2['tennd'] ?></a></span>
				</div>
			</div>
</div>
