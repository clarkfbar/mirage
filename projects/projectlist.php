<?php
	$xml = simplexml_load_file("projectlist.xml");
	echo "<h2>Current Projects</h2><ul>";
	foreach($xml->cproject as $child){
		echo "<li><a href='".$child->url."'>".$child->title."</a></li>";
	}
	echo "</ul><h2>Past Projects</h2><ul>";
	foreach($xml->pproject as $child){
		echo "<li><a href='".$child->url."'>".$child->title."</a></li>";
	}
	echo "</ul>";
?>