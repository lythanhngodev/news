<?php 
    require_once("admin/ketnoi.php");
    $idbv = $_GET["id"];
    settype($idbv,"int");
    $kn = new ketnoi();
    $kq = $kn->get_full_content($idbv);
    $row=mysql_fetch_array($kq); 
?>
<div class="head-image cat-164">
    <div class="head-image-parallax thumb-wrap relative" style="background-image: url(<?php echo $row["thumb"] ?>&quot;);">
        <img src="<?php echo $row["thumb"] ?>" width="1170" height="480" alt="<?php echo $row["tenbv"] ?>" class="img-responsive">
                <div class="overlay" itemscope="" itemtype="http://schema.org/Article">
            <header>
                                <h1 itemprop="name"><?php echo $row["tenbv"] ?></h1>
                                <p class="post-meta clearfix">
                    <span class="fa-calendar" itemprop="dateCreated">14 Tháng Ba, 2017</span>
                    <span class="fa-author" itemprop="author"><img src="http://congngheviet.com/wp-content/uploads/2016/09/iPhone-7-Plus-imagined-in-Dark-Black-and-Piano-Black-16x16.jpg" width="16" height="16" alt="Mỹ Linh" class="avatar avatar-16 wp-user-avatar wp-user-avatar-16 alignnone photo"> <a href="http://congngheviet.com/author/camathtagmail-com/">Mỹ Linh</a></span>                                                                    </p>
                                <div class="sharing hidden hidden-xs hidden-sm">
                       	</div>
                </header>
        </div>
    </div>
</div>