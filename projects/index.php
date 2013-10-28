<html>
	<head>
		<title>Projects</title>
		<script type='text/javascript' src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
		<style>
			.custom_font{
				FONT-FAMILY: Verdana, Geneva, Arial, Helvetica, sans-serif;
				white-space: normal;
				font-size: 14px;
                line-height:150%;
			}
		</style>
	</head>
	<body>
		<?php
			include("../header.php");
			get_header("../navbar.php","../menu.xml");
		?>
		<div class="custom_font" style="position:absolute; margin-top:90px; width:100%; height:auto;">
            <div style="margin-top:40px; margin-right:40px; float:right">
                <img src="research1.jpg" width="200" height="200">
            </div>
			<div style="position: relative; margin-top:10px; margin-left:170px; margin-right:20px;">
				<?php
					include("projectlist.php");
				?>
			</div>
		</div>
	</body>
</html>