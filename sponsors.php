<?php
	function show_sponsors(){
		$xml = simplexml_load_file('sponsors.xml');
		echo "<div style='text-align: center;'>Sponsors: &nbsp;&nbsp;";
		foreach($xml->sponsor as $child){
			echo "<img alt='nsf' src='".$child->imageurl."' width='".$child->width."' height='".$child->height."'>&nbsp;";
		}
		echo "</div>";
	};
?>