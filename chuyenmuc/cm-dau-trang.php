<?php #TO DO: Hiện bài mới nhất của chuyên mục đang truy cập ?>
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
            document.getElementById("me-kmqc").style = "background-color: #8e44ad; color:#fff;";
    }
</script>
<div id="tin-moi">
<?php
    $idcm = $_GET["id"];
    settype($idcm,"int");
    if($idcm==0)
        echo "Không có chuyên mục này!";
    else
    if($idcm==1){
        echo "<body onload=\"doi_mau_menu(1)\";></body>";
    }
    else
        if($idcm==2){
        echo "<body onload=\"doi_mau_menu(2)\";></body>";
    }
    else
        if($idcm==3){
        echo "<body onload=\"doi_mau_menu(3)\";></body>";
    }
    else
        if($idcm==4){
        echo "<body onload=\"doi_mau_menu(4)\";></body>";
    }
    else
        if($idcm==5){
        echo "<body onload=\"doi_mau_menu(5)\";></body>";
    }
?>
</div>
