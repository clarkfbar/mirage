<html>
	<head>
		<title>People</title>
		<script type='text/javascript' src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
	</head>
	
	<body>
        <a name="Top"></a>
		<?php
			include("../header.php");
			get_header("../navbar.php","../menu.xml");
		?>
		<div style="position:fixed; top:120px; right:30px;">
			<a href="gallery"><img src="gallery-icon.png" width="200px" height="200" title="Click Me to View Gallery"/></a>
		</div>
		<div style="margin-left:170px; margin-top:110px;">
			<?php
				include("people.php");
				show_people();
			?>
		</div>
        <div style="position:fixed; left:80px;bottom:40px;">
            <a href="#Top"><img src="top.png" width="60px" height="60px"/><br><center style="font-size:12px;">To Top</center></a>
        </div>
	</body>
</html>