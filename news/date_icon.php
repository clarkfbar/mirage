<?php
    function date_icon($m,$d){
	  echo 
	  "<div style='background:url(icon.png) top no-repeat; background-size:40px 40px; text-align:center;padding:0 0 4px; width: 40px; height:40px; float:left;'>
			<span>
				<p style='border:0 none; margin:0; padding:0;'>
					<span style='font:normal 12px tahoma; color:RGB(30,160,30); text-transform: uppercase;padding-top:2px;height:12px;'>".$m."</span><br/>
					<span style='font:bold 15px tahoma; color:RGB(30,100,30);'>".$d."</span>
				</p>
			</span>
	   </div>";
    };
?>