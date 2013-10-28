<style>
.custom_font{
	FONT-FAMILY: Verdana, Geneva, Arial, Helvetica, sans-serif;
	white-space: normal;
	font-size: small;
}
</style>
<?php
	include('date_icon.php');
    function get_month($number){
        if($number == 1) return "Jan";
        else if($number == 2) return "Feb";
        else if($number == 3) return "Mar";
        else if($number == 4) return "Apr";
        else if($number == 5) return "May";
        else if($number == 6) return "Jun";
        else if($number == 7) return "Jul";
        else if($number == 8) return "Aug";
        else if($number == 9) return "Sep";
        else if($number == 10) return "Oct";
        else if($number == 11) return "Nov";
        else if($number == 12) return "Dec";
    };
    
	function show_news($number,$path){
		$xml = simplexml_load_file($path);
		$count = 0;
		foreach($xml->news as $child){
			if($number != -1 && $number <= $count){
				break;
			}
			
			$year = $child->year;
			$month = $child->month;
			$day = $child->day;
			$content = $child->content;
			
			echo "<table border='0' class='custom_id'><tr><td text-align='center'>";
			date_icon($year,get_month($month));
			echo "</td><td>";
			echo "<div style='font:normal 15px tahoma;'>".$content."</div>";
			echo "</td></tr></table>";
			$count += 1;
		}
	};
    
    function cal_month($sy,$sm,$ey,$em){
        if($sy==$ey) return $sm-$em+1;
        else{
            return $sm+cal_month($sy-1,12,$ey,$em);
        }
    };
	
	function list_news($number,$path){
		$xml = simplexml_load_file($path);
        $cy = date('Y');
        $cm = date('n');
		$count = 0;
        $number_of_month = $xml->number_of_month;
		echo "<ul class='custom_id'>";
		foreach($xml->news as $child){
			if($count >= $number) break;
            if($number_of_month < cal_month($cy,$cm,$child->year,$child->month)) break;
			$title = $child->title;
			
			echo "<li>".$title."</li>";
			$count += 1;
		}
		echo "</ul>";
	};
?>