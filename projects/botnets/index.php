<html>
	<head>
        <title>The Ion P2P Project: Empirical Characterizations of P2P Systems</title>
		<script type='text/javascript' src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
        <script type="text/javascript">
            function resize(){
                document.all("iFrame1").style.height = iFrame1.document.body.scrollHeight+100;
            };
        </script>
	</head>
	<body onresize="resize()">
		<?php
			include ("../../header.php");
			get_header("../../navbar.php","../../menu.xml");
		?>
		<div style="position:absolute; margin-top:90px; width:100%; height:auto;">
			<div style="position: relative; margin-top:10px; margin-left:170px; margin-right:170px;">
				<iframe id="iFrame1" name="iFrame1" width="100%" onload="this.height=iFrame1.document.body.scrollHeight+100" frameborder="0" src="botnet.html"></iframe>
			</div>
		</div>
	</body>
</html>