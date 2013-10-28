<html>
	<head>
		<title>Resources</title>
		<script type='text/javascript' src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
		<style>
			.custom_font{
				FONT-FAMILY: Verdana, Geneva, Arial, Helvetica, sans-serif;
				white-space: normal;
				font-size: 14px;
                line-height: 150%;
			}
		</style>
	</head>
	<body>
		<?php
			include("../header.php");
			get_header("../navbar.php","../menu.xml");
		?>
		<div id="container" class="custom_font" style="width:100%; position:absolute; top:90px;">
		        <div style="margin-top:40px; margin-right:40px; float:right">
                    <img src="ResourceCenter.jpg" width="400" height="240">
                </div>
			<div style="position:relative; margin-top:10px; margin-left:170px; margin-right:170px;">
				<?php
					include("resource.php");
				?>
			</div>
		</div>
	</body>
</html>