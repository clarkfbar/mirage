<?php
	function show_nav($menu){
	echo 
		"<style type='text/css'>
		<!--
			body{margin:0px; padding:0px; background:#fff;}
			#fl_menu{position:absolute; top:100px; left:10px; z-index:9999; width:150px; height:50px;}
			#fl_menu .label{padding-left:20px; line-height:50px; font-family:'Arial Black', Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; background:#012002; color:#fff; letter-spacing:7px;}
			#fl_menu .menu{display:none;}
			#fl_menu .menu .menu_item{display:block; background:#013602; color:#bbb; border-top:1px solid #333; padding:10px 20px; font-family:Arial, Helvetica, sans-serif; font-size:12px; text-decoration:none;}
			#fl_menu .menu a.menu_item:hover{background:#000; color:#fff;}
			.content{width:520px; margin:50px auto;}
		-->
		</style>";
		echo "<script type='text/javascript' src='http://ix.cs.uoregon.edu/~zeyu/mirage/jquery.easing.1.3.js'></script>";
		echo "<script type='text/javascript'>
			function FloatMenu(){
				var animationSpeed=1500;
				var animationEasing='easeOutQuint';
				var scrollAmount=$(document).scrollTop();
				var newPosition=menuPosition+scrollAmount;
				if($(window).height()<$('#fl_menu').height()+$('#fl_menu .menu').height()){
					$('#fl_menu').css('top',menuPosition);
				} else {
					$('#fl_menu').stop().animate({top: newPosition}, animationSpeed, animationEasing);
				}
			}
			$(window).load(function() {
				menuPosition=$('#fl_menu').position().top;
				FloatMenu();
			});";
		
		echo "
		$(window).scroll(function () { 
			FloatMenu();
		});
		jQuery(document).ready(function(){
			var fadeSpeed=500;
			$('#fl_menu').hover(
				function(){ //mouse over
					$('#fl_menu .label').fadeTo(fadeSpeed, 1);
					$('#fl_menu .menu').fadeIn(fadeSpeed);
				},
				function(){ //mouse out
					//$('#fl_menu .label').fadeTo(fadeSpeed, 0.75);
					//$('#fl_menu .menu').fadeOut(fadeSpeed);
				}
			);
			$('#fl_menu .label').fadeTo(fadeSpeed, 1);
			$('#fl_menu .menu').fadeIn(fadeSpeed);
		});
		</script>";
		
		echo "
		<div id='fl_menu'>
		<div class='label'>MENU</div>
		<div class='menu'>";
    
   		$xml = simplexml_load_file($menu);
    	foreach($xml->menu as $child){
    		$url = $child->url;
    		if(strcmp($child->url,"")==0) $url="#";
    		echo "<a href='".$url."' class='menu_item'>".$child->name."</a>";
    	}
    
    	echo "</div></div>";
    }
?>