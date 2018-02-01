<?php session_start(); ?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//cdn.muicss.com/mui-latest/css/mui.min.css" rel="stylesheet" type="text/css" />
    <link href="/congngheviet/admin/css/static/style.css" rel="stylesheet" type="text/css" />
    <script src="//cdn.muicss.com/mui-latest/js/mui.min.js"></script>
    <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="/congngheviet/admin/css/static/script.js"></script>
    <?php require_once("header.php") ?>
    <script>
    		$(document).ready(function(){
    			$('[data-toggle="tooltip"]').tooltip();
    		});
    </script>
  </head>
  <body>
    <div id="sidedrawer" class="mui--no-user-select" style="box-shadow: 1px 1px 0px 0px rgb(227, 227, 227);">
      <div id="sidedrawer-brand" class="mui--appbar-line-height">
        <span class="mui--text-title"><img src="logo-admin-login.png" style="width: 105px;margin-left: 17px;"></span>
      </div>
      <div class="mui-divider"></div>
      <?php require_once("menu.php"); ?>
    </div>
    <header id="header">
      <?php require_once("top.php"); ?>
    </header>
    <div id="content-wrapper" style="background-color:#fff;">
      <div class="mui--appbar-height"></div>
      <div class="mui-container-fluid">
        <!-- Noi dung khung phai -->
          <?php
            if(isset($_GET["idadmin"])){
              require_once("sua-teamadmin.php");
            }
            else
            if(isset($_POST["suasua"]) && $_POST["suasua"] == "suauser"){
              require_once("sub-sua-teamadmin.php");
            }
            else{
              require_once("sub-teamadmin.php");
            }
  		      ?>
      </div>
    </div>
    <?php require_once("footer.php"); ?>
  </body>
</html>




