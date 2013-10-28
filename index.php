<html>
	<head>
		<title>Mirage</title>
		<script type='text/javascript' src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
		<style>
			.custom_font{
				FONT-FAMILY: Verdana, Geneva, Arial, Helvetica, sans-serif;
				white-space: normal;
				font-size: small;
			}
		</style>
	</head>
    <body>
        <?php
			include('header.php');
			get_header("navbar.php","menu.xml");
       ?>

	   <div id="container" class="custom_font" style="width:100%;">
			<table border="0" style="width:100%;table-layout:fixed;word-wrap:break-word; margin-top:90px; position:relative;">
				<tr>
					<td style=";height:500PX; width:auto;text-align:top; text-align:center;" valign="top">
						<div style="font-size: 16px; line-height: 1.2; margin-left:170px; margin-right:40px; margin-top:20px;">
                            <img src = "logo4.gif">
							<h3 style="text-align:center;">Lab Information</h3>
							<p class="custome_font" style="padding:2px 6px 4px 6px; color: #555555;">The Network Research Group (NRG) in the Department of Computer and Information Science at the University of Oregon was founded by Professor Reza Rejaie in January 2004. The NRG is part of the Computer Systems group at the CIS department. NRG's research focuses on several applied areas of Computer Networks. Our Lab is located at Room 331 of the CIS Department (Deschutes Hall).</p>
						</div>
                        <div style="position:absolute; margin-top:10%;  left:50%; margin-left:-300px;">
						<?php
							include('sponsors.php');
							show_sponsors();
						?>
                        </div>
					</td>
				
					<td style="width:300px; height:100%; text-align:top;" valign="top">
						<div style="width:300px; height: auto">
							<?php 
								include "slider/slider.php";
								show_slider("slider/sliderimage.xml");
							?>
							<table style="width:300px; height:auto;">
								<tr>
									<td style="text-align:center;">
										<div style="-moz-border-radius: 10px;-webkit-border-radius: 10px;-khtml-border-radius: 10px;border-radius: 10px;background-color:#006600;color:white;height:30px; ">
											<h3 style="margin-bottom:0;">Lastest News</h3></td>
										</div>
								</tr>
								<tr>
									<td>
										<div style="background-color:white; color:#00600;-moz-border-radius: 5px;-webkit-border-radius: 5px;-khtml-border-radius: 5px;border-radius: 5px;">
										<?php
											include "news/news.php";
											list_news(5, "news/news.xml");
										?>
										</div>
									</td>
								</tr>
							</table>
						</div>
					</td>
				</tr>
			</table>
		</div>
    </body>
</html>