<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
    	<title>Gallery</title>
    	<link rel="stylesheet" type="text/css" href="shadowbox.css">
    	<script type='text/javascript' src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
		<script type="text/javascript" src="shadowbox.js"></script>
		<script type="text/javascript">
		Shadowbox.init();
		</script>
    </head>
    <body>
    	<?php
    		include("../../header.php");
    		get_header("../../navbar.php","../../menu.xml");
    	?>
    	<div style="position:relative; top:90px;align:center;"><center><h1>Gallery</h1>
    		<?php
    			include("gallery.php");
    			show_gallery();
    		?>
    	</center></div>
    </body>
</html>