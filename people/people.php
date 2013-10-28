<style>
.custom_font{
	FONT-FAMILY: Verdana, Geneva, Arial, Helvetica, sans-serif;
	white-space: normal;
	font-size: 14px;
}
</style>
<?php
	function print_name($name){
		echo '<strong style="font-size:Medium;">'.$name.'</strong>';
	};

	function print_title($title){
		if(strcmp($title,"")!=0){
			echo '<p>'.$title.'</p>';
		}
	};
	
	function print_homepage($homepage){
		if(strcmp($homepage,"")!=0){
			echo '<p>homepage: <a href="'.$homepage.'">'.$homepage.'</a>';
		}
	};
	
	function print_currentat($currentat){
		if(strcmp($currentat,"")!=0){
			echo '<p>current at: '.$currentat.'</p>';
		}
	};
	
	function print_timeofjoin($timeofjoin){
		if(strcmp($timeofjoin,"")!=0){
			echo '<p>time of join: '.$timeofjoin.'</p>';
		}
	};
	
	function print_timeofgrad($timeofgrad){
		if(strcmp($timeofgrad,"")!=0){
			echo '<p>time of graduation: '.$timeofgrad.'</p>';
		}
	};
	
	function print_time($time){
		if(strcmp($time,"")!=0){
			echo '<p>visit time: '.$time.'</p>';
		}
	};
	
	function show_people(){
		$xml = simplexml_load_file('people.xml');

		echo "<div class='custom_font'><h2>Faculty</h2>";
		foreach($xml->faculty as $child){
			$image = $child->photo;
			if(strcmp($image, "")==0) $image = "photo/pic-nophoto.jpg";
			list($width, $height) = getimagesize($image);
            $w = $width;
            $h = $height;
			if($w > $h){
				$ratio = 160/$w;
				$w = 160;
				$h = $h*$ratio;
			}else{
				$ratio = 160/$h;
				$h = 160;
				$w = $w*$ratio;
			}
            //border can be 0 or 1
			echo '
			<table border="0">
				<tbody>
					<tr>
						<td width="200" height="200" align="center"><img src="'.$image.'" width="'.$w.'" height="'.$h.'"></td>
						<td style="padding-left: 30px;" width="500" class="custom_font">';
				print_name($child->name);
				print_title($child->title);
				print_homepage($child->homepage);
				echo '</td></tr>
				</tbody>
			</table><hr><br/>';
		}
		
		echo "<h2>Visitor</h2>";
		foreach($xml->visitor as $child){			
			$image = $child->photo;
			if(strcmp($image, "")==0) $image = "photo/pic-nophoto.jpg";
			list($width, $height) = getimagesize($image);
            $w = $width;
            $h = $height;
			if($w > $h){
				$ratio = 160/$w;
				$w = 160;
				$h = $h*$ratio;
			}else{
				$ratio = 160/$h;
				$h = 160;
				$w = $w*$ratio;
			}
			echo 
			'<table border="0">
				<tbody>
					<tr>
						<td width="200" height="200" align="center"><img src="'.$image.'" width="'.$w.'" height="'.$h.'"></td>
						<td style="padding-left: 30px;" width="500" class="custom_font">';
							print_name($child->name);
							print_title($child->title);
							print_time($child->time);
							print_homepage($child->homepage);
			echo	'</td></tr>
				</tbody>
			</table><br/><hr>';
		}
		
		echo "<h2>Current Team Members</h2>(Alphabetical order)";		
		foreach($xml->cstudent as $child){
			$image = $child->photo;
			if(strcmp($image, "")==0) $image = "photo/pic-nophoto.jpg";
			list($width, $height) = getimagesize($image);
            $w = $width;
            $h = $height;
			if($w > $h){
				$ratio = 160/$w;
				$w = 160;
				$h = $h*$ratio;
			}else{
				$ratio = 160/$h;
				$h = 160;
				$w = $w*$ratio;
			}
			echo 
			'<table border="0">
				<tbody>
					<tr>
						<td width="200" height="200" align="center"><img src="'.$image.'" width="'.$w.'" height="'.$h.'"></td>
						<td style="padding-left: 30px;" width="500" class="custom_font">';
						print_name($child->name);
						print_title($child->title);
						print_timeofjoin($child->timeofjoin);
						print_homepage($child->homepage);
			echo	'</td></tr>
				</tbody>
			</table><br><hr>';
		}
		
		echo "<h2>Past Team Members</h2>";
		foreach($xml->pstudent as $child){
			$image = $child->photo;
			if(strcmp($image, "")==0) $image = "photo/pic-nophoto.jpg";
			list($width, $height) = getimagesize($image);
            $w = $width;
            $h = $height;
			if($w > $h){
				$ratio = 160/$w;
				$w = 160;
				$h = $h*$ratio;
			}else{
				$ratio = 160/$h;
				$h = 160;
				$w = $w*$ratio;
			}
			echo 
			'<table border="0">
				<tbody>
					<tr>
						<td width="200" height="200" align="center"><img src="'.$image.'" width="'.$w.'" height="'.$h.'"></td>
						<td style="padding-left: 30px;" width="500" class="custom_font">';
							print_name($child->name);
							print_title($child->title);
							print_timeofgrad($child->timeofgrad);
							print_currentat($child->currentat);
							print_homepage($child->homepage);
			echo	'</td></tr>
				</tbody>
			</table><br/><hr>';
		}
		echo "</div>";
	};
?>