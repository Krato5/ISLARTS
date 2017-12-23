<?php
include_once 'dbconfig.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


</head>
<body>


	 <div class="container">
    <div class="weui_cells_title">Islarts</div>
    <div class="weui_cells weui_cells_form">
      <div class="weui_cell">
        <div class="weui_cell_bd weui_cell_primary">
          <div class="weui_uploader">
            <div class="weui_uploader_hd weui_cell">
              <div class="weui_cell_bd weui_cell_primary">Islarts</div>
            </div>
            <div class="weui_uploader_bd">
             


			 <ul class="weui_uploader_files">
                <!-- 预览图插入到这 -->
<?php
	$sql="SELECT * FROM tbl_uploads";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
       
      <?php echo ['uploads/'] ?>
       
        <?php
	}
	?>
              </ul>
  
 
    

</body>
</html>