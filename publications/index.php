<html>
	<head>
		<title>Publications</title>
		<script type='text/javascript' src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
        <style>
            .custom_font{
                FONT-FAMILY: Verdana, Geneva, Arial, Helvetica, sans-serif;
                white-space: normal;
                font-size: 14px;
                line-height: 140%;
            }
        </style>
	</head>
	<body>
        <a name="Top"></a>
		<?php
			include("../header.php");
			get_header("../navbar.php","../menu.xml");
		?>
		<div id="container" style="width:100%; position:absolute; top:90px;" class="custom_font">
			<div style="margin-top:10px; margin-left:170px; margin-right:170px;">
				<p style="font-style:italic;text-align:left;">&nbsp; The documents distributed by this server have been provided by the contributing authors as a means to ensure timely dissemination of scholarly and technical work on a noncommercial basis. Copyright and all rights therein are maintained by the authors or by other copyright holders, not withstanding that they have offered their works here electronically. It is understood that all persons copying this information will adhere to the terms and constraints invoked by each author's copyright. These works may not be reposted without the explicit permission of the copyright holder.</p>
            </div>
            <div style="align:right; margin-right:40px; float:right;"><img src="publications.jpg" width='300' height='216'></div>
            <div style="postion:relative; margin-top:10px; margin-left:170; margin-right:20px;">
                    <?php
                        include("publications.php");
                    ?>
                </div>
            </div>
		</div>
        <div style="position:fixed; left:80px;bottom:40px;">
            <a href="#Top"><img src="top.png" width="60px" height="60px"/><br><center style="font-size:12px;">To Top</center></a>
        </div>
	</body>
</html>