<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Joshua Blakley</title>
<link rel="stylesheet" href="style/css/style.css" />
<link rel="stylesheet" href="style/css/text.css" />
<link rel="stylesheet" href="style/css/960.css" />
<?php 
	require('wp/wp-blog-header.php'); 
?>

</head>
<body>
  <div align="center" id="mainWrapper" class="container_12">
  
    <?php include('template_global.php') ?>
	<div class="clear"></div>
    <div id="Content" class="grid_12 pull_12">
		<?php if(isset($_GET['p'])){
			echo '<iframe class="grid_12 alpha" src="wp/?p=' . $_GET['p'] . '" height="1000em" width="100%" scrolling="no"></iframe>';
		}else{
			echo '<iframe class="grid_12 alpha" src="wp/" height="1000em" width="100%" scrolling="no"></iframe>';
		} ?>
	</div>
	<div class="clear"></div>
    <?php include('template_footer.php') ?>
  </div>
</body>
</html>
