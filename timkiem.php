<head>
  <link rel="stylesheet" type="text/css" href="css/sukien-css.css">
  <link rel="stylesheet" type="text/css" href="css/chi-tiet-chuyen-muc-css.css">
</head>
<style>
	.tac-gia-bai-viet-ct{
		width: 100%;
		height: auto;
		display: block;
		position: relative;
		float: left;
		padding: 1rem;
		background: rgba(227, 227, 227, 0.35);
	}
	.hinh-author{
		width: 20%;
		height: auto;
		display: block;
		text-align: center;
		float: left;
	}
	.hinh-author img{
		border: 2px solid #fff;
		box-shadow:0px 2px 3px 1px #d0d0d0;
		border-radius: 69px;
		transition: all 0.2s;
		-moz-transition: all 0.2s;
		-webkit-transition: all 0.2s;
	}
	.hinh-author img:hover{
		border: 8px solid #333;
		border-radius: 69px;
	}
	.description-author{
		width: 80%;
		height: auto;
		display: block;
		float: left;
	}
	.description-author > a{
		color: #333;
		font-weight: bold;
		text-decoration: none;
	}
	.description-author > h3{

	}
	.description-author > p{

	}
	.author-fb{
		width: 22px;
		height: 25px;
		background-color: rgb(133, 133, 133);
		display: block;
		padding: 5px;
		border-radius: 4px;
		color: #fff;
			}
	.author-fb:hover,.author-fb:hover i{
		background: #3b5998;
		color: #fff;
	}
	.author-post{
		width:100%;
		margin:0rem 1rem 1rem 1rem;
		padding:1rem;
		float:left;
		}
	.author-post > span{
		width:30px;
		height:2px;
		background:#222;
		bottom:0;
		left:0;
		float:left;
		}
	.author-post > h3{

	}
</style>
<?php
  $tutim = $_GET['timkiem'];
 ?>
<div class="author-post">
	<h3>Kết quả tìm kiếm: <?php echo $tutim; ?></h3>
    <span class="borderline"></span>
</div>
<?php
    require_once("admin/ketnoi.php");
    $kn = new ketnoi();
	   $kt = 1;
    $kq = $kn->get_search($tutim);
    while($row=mysql_fetch_array($kq)){
		if($kt==1){ ?>
        	<div class="khung-chua-tin-cm">
	<a class="nam-tren-hinh-cm" href="<?php echo $row["linkbv"] ?>-<?php echo $row["idbv"] ?>.html">
    	<img src="<?php echo $row['thumb'] ?>" width="1176" height="auto" alt="<?php echo $row['tenbv'] ?>" class="anh-thu-nho-cm" />
            <div class="nen-noi-cm">
                <div class="tieu-de-ngan-cm">
                <h2><?php echo $row['tenbv'] ?></h2>
            </div>
            <div class="ngay-thang-dang-cm"><span class="fa fa-calendar" itemprop="dateCreated">&nbsp;&nbsp;<?php echo $row['ngaydang'] ?></span></div>
            </div>
    </a>
</div>
        <?php $kt++; }
		else {?>
    <div class="su-kien-sk">
        <a href="<?php echo $row["linkbv"] ?>-<?php echo $row["idbv"] ?>.html" class="" id="">
        <div class="khung-chua-hinh-sk">
          <img src="<?php echo $row['thumb'] ?>" alt="" class="" title="<?php echo $row['tenbv'] ?>" />
        </div>
      <div class="khung-chua-tin-sk">
            <div class="tieu-de-sk"><h2><?php echo $row['tenbv'] ?></h2></div>
            <div class="ngay-thang-sk"><i class="fa fa-calendar" style="font-size:14px;">&nbsp;&nbsp;<?php echo $row['ngaydang'] ?></i></div>
            <div class="mo-ta-sk"><?php echo $row['mota'] ?></div>
      </div>
        </a>
    </div>
<?php }
	} ?>
