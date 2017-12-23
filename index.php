<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['userSession']))
{
	header("Location: login.php");
}

$query = $MySQLi_CON->query("SELECT * FROM users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$MySQLi_CON->close();
?>
<html >
  <head>
    <meta charset="UTF-8">
    <title>WeUI-Uploader</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    
    
    <link rel='stylesheet prefetch' href="css/weui.css">

        <link rel="stylesheet" href="css/style.css">


    <link rel="stylesheet" href="style.css" type="text/css" />

    
<!--    for login-->
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['user_email']; ?></title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen"> 

<link rel="stylesheet" href="style.css" type="text/css" />
 <!--    for login-->
  </head>

  <body>
<!--/.for login -->
<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
         <img src="ISLARTS_16x16.png">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
<!--          <a class="navbar-brand" > ISLARTS</a>-->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
 <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp; <?php echo $userRow['user_name']; ?></a></li>
            <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp; Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!--/.for login -->
    
    
    
    <div class="container">
   
<!--    <div class="weui_cells weui_cells_form">-->
      <div class="weui_cell">
        <div class="weui_cell_bd weui_cell_primary">
          <div class="weui_uploader">
            <div class="weui_uploader_hd weui_cell">
          
            </div>
            <div class="weui_uploader_bd">
              <ul class="weui_uploader_files">
                <!-- 预览图插入到这 -->

              </ul>
              
              
			  <form name="imageUpload" id="imgfile" method="post" enctype="multipart/form-data" action="upload.php">
             <button type="submit" name="btn-upload" onClick="window.location.reload()">upload</button>
              <div class="weui_uploader_input_wrp">
        <input class="weui_uploader_input js_file" type="file" name="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="" >
				
				
				
				<br>
        <br /><br />
 
        
            
             
                  
              </div>
            </div>
          </div>
        </div>
      </div>
      
<!--    </div>-->
    
  </div>
  <div class="weui_dialog_alert" style="display: none;">
    <div class="weui_mask"></div>
    <div class="weui_dialog">
      <div class="weui_dialog_hd"><strong class="weui_dialog_title">警告</strong></div>
      <div class="weui_dialog_bd">弹窗内容，告知当前页面信息等</div>
      <div class="weui_dialog_ft">
        <a href="javascript:;" class="weui_btn_dialog primary">确定</a>
      </div>
    </div>
  </div>
  
   
    <script src="js/jquery2_1_3.min.js"></script>
<script src="js/weui.js"></script>

        <script src="js/index.js"></script>

    
        </form>
    
  </body>
</html>
