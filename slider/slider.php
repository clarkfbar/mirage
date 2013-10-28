<?php
    function show_slider($name){
        echo "
        <script type='text/javascript' src='slider/coin-slider.min.js'></script>
        <link rel='stylesheet' href='slider/coin-slider-styles.css' type='text/css' />";
                
      	$xml = simplexml_load_file($name);
		echo "<div id='coin-slider' style='width:200px; height:200px;'>";
		foreach($xml->image as $child){
			echo "<a href='".$child->linkto."' target='_blank'>
			<img src='".$child->img."'><span>".$child->description."</span></a>";
		}  
		echo "</div>";
		echo "<script type='text/javascript'>
		$(document).ready(function(){
			$('#coin-slider').coinslider({width:300, height:250, navigation:true,delay:3000});
		});</script>";
    };
?>