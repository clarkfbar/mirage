<?php
	function get_header($navbar, $xml){
		$imageurl = "http://ix.cs.uoregon.edu/~zeyu/mirage/header.jpg";
		echo 
		"<div id='header' style='background-image:url(".$imageurl."); background-repeat:repeat-x; position:absolute; top:0; left:0; height:90px; width:100%;'>
			<span>
				<p style='margin-left:110px; margin-top:20px;'>
					<span style='font:bold 30px tahoma; color:white;'>Mirage</span><br/>
					<span style='font:normal 19px tahoma; color:white;'>Mirage Research Groups</span>
				</p>
			</span>
		</div>";
		
		echo "<script>
			link=document.createElement('link');
			link.href='http://ix.cs.uoregon.edu/~zeyu/mirage/favicon.ico';
			link.rel='shortcut icon';
			document.getElementsByTagName('head')[0].appendChild(link);
		</script>";
		
		include($navbar);
		show_nav($xml);
	};
?>