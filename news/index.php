<html>
	<head>
		<title>News</title>
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
        <a name="Top"></a>
		<?php
			include("../header.php");
			get_header("../navbar.php","../menu.xml");
		?>
		
		<div style="width:100%; height:100%; position:absolute; margin-top:90px;">
			<h2 class="custom_font" style="font-size:Large;"><center>News related to Mirage Research Group</center></h2>
			<div style="margin-top:10px;">
				<img src="news.jpg" width="300" height="200" align="right" style ='margin-right:10px;'>
			</div>
			
			<div style="margin-left:170px;margin-top:10px;margin-right:20px;">
				<?php
					include("news.php");
					show_news(-1,"news.xml");
				?>
			</div>
		</div>
        <div style="position:fixed; left:80px;bottom:40px;">
            <a href="#Top"><img src="top.png" width="60px" height="60px"/><br><center style="font-size:12px;">To Top</center></a>
        </div>
	</body>
</html>