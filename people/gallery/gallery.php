<?php
	function show_gallery(){
		$xml = simplexml_load_file('gallery.xml');
		$count = 0;
		echo "<table><tr>";
		foreach($xml->image as $child){
            list($width, $height) = getimagesize($child->url);
            $w = $width;
            $h = $height;
            if($width > $height){
				$ratio = 240/$w;
                $w = 240;
                $h = $h*$ratio;;
            }else{
				$ratio = 240/$h;
                $h =  240;
				$w = $w*$ratio;
            }
			echo "<td><table width='240' style='text-align:center'><tr><td><a href='".$child->url."' rel='shadowbox[Vacation];'><img src='".$child->url."' width='".$w."' height='".$h."' alt='images'/></a></td></tr><tr><td style='text-align:center;'>".$child->description."</td></tr></table></td>";
			$count += 1;
			if($count%3 == 0){ //how many image per line? 3
				echo "</tr><tr>";
			}
		}
		echo "</tr></table>";
	};
?>