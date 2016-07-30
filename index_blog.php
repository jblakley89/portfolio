<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Joshua Blakley</title>
    <link rel="stylesheet" href="style/css/style.css" />
    <link rel="stylesheet" href="style/css/text.css" />
    <link rel="stylesheet" href="style/css/960.css" />
    <link rel="stylesheet" href="style/css/menu.css" />
    <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="style/js/blog.js"></script>
    <script type="text/javascript" src="style/js/menu.js"></script>

    <?php require('wp/wp-blog-header.php') ?>

</head>
<body>

  <div align="center" id="mainWrapper" class="container_12">

    <?php include('_header.php') ?>

    <div id="Content" class="grid_12 pull_12">

		<?php
        if(isset($_GET['p'])){
			echo '<iframe id="Blog" class="grid_12 alpha" src="wp/?p= '
            . $_GET['p'] . '" height="100%" width="100%" scrolling="no" '
            . 'frameborder="0" ></iframe>';
		}else{
			echo '<iframe id="Blog" class="grid_12 alpha" src="wp/" '
            . 'height="100%" width="100%" scrolling="no" frameborder="0" ></iframe>';
		}
        ?>

	</div>
	<div class="clear"></div>

    <?php include('_footer.php') ?>

  </div>

</body>


