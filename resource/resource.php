<?php
	$xml = simplexml_load_file('resource.xml');
	
	foreach($xml->section as $section){
		echo "<h2>".$section->section_title.":</h2><ul>";
		foreach($section->link as $link){
			if(strcmp($link->url,"")==0){
                echo "<li>".$link->title."</li>";
            }else{
                echo "<li><a href='".$link->url."'>".$link->title."</a></li>";
            }
		}
		echo "</ul>";
	}
?>