<?php
	$xml = simplexml_load_file('publications.xml');

	echo "<ul>";
	foreach($xml->section as $child){
		echo "<li><a href='#".$child->section_id."'>".$child->section_title."</a></li>";
	}
	echo "</ul>";
	
	foreach($xml->section as $section){
		echo "<h3 id='".$section->section_id."'>".$section->section_title.":</h3><ul>";
		foreach($section->publication as $publication){
			echo "<table><tr>";
			echo "<td><li><b>".$publication->title."</b></li></td>";
			foreach($publication->link as $link){
				echo "<td valign='center'><img src='".$link->icon."' width='31' height='32'></td>";
				echo "<td valign='center'><a href='".$link->url."'>".$link->type."</a></td>";
			}
			echo "</tr></table>";
			foreach($publication->line as $line){
				echo $line."<br>";
			}
			echo "<hr>";
		}
		echo "</ul><br><br>";
	}
?>