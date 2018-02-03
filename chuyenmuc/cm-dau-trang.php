<?php #TO DO: Hiện bài mới nhất của chuyên mục đang truy cập ?>
<div id="tin-moi">
<?php
    $idcm = $_GET["id"];
    settype($idcm,"int");
    if($idcm==0)
        echo "Không có chuyên mục này!";
?>
</div>
