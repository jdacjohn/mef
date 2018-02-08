<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Mablean Ephriam Foundation [Photos]</title>
	<link rel="stylesheet" type="text/css" media="screen" href="global.css" />
	<link type="text/css" href="css/styles.css" rel="stylesheet" />
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/jquery.pikachoose.js"></script>
	<script type="text/javascript" src="assets/js/jquery.jcarousel.min.js"></script>
	<script language="javascript">
		<!--
		$(document).ready(
			function (){
				$("#pikame").PikaChoose();

				$("#pikame").jcarousel({scroll:4,
					vertical:true,					
					initCallback: function(carousel) 
					{
				        $(carousel.list).find('img').click(function() {
				        	//console.log($(this).parents('.jcarousel-item').attr('jcarouselindex'));
				            carousel.scroll(parseInt($(this).parents('.jcarousel-item').attr('jcarouselindex')));
				        });
				    }
			    });

			});
			
		-->
	</script>
</head>

<body>
	
	
<? include("header.php");?>
	
		
		<div class="bodytext">
		
	<div id="photos">
		
		<!--Peary Middle School-->
		<h3>Peary Middle School</h3>
		<div class="pikachoose">
Judge Mablean and Board Members Christopher Sibley and Kiana Ephriam attend Peary Middle School on opening day to meet 
	principal Garrett and students. MEF has adopted Peary Middle School.
<div style="position: relative; top: 0px;">		<ul id="pikame" class="jcarousel-skin-pika">
				<li><img src="images/Peary/001.jpg"/><span></span></li>
				<li><img src="images/Peary/002.jpg"/><span></span></li>
				<li><img src="images/Peary/003.jpg"/><span></span></li>
				<li><img src="images/Peary/004.jpg"/><span></span></li>
				<li><img src="images/Peary/005.jpg"/><span></span></li>
				<li><img src="images/Peary/006.jpg"/><span></span></li>
				<li><img src="images/Peary/007.jpg"/><span></span></li>
				<li><img src="images/Peary/008.jpg"/><span></span></li>
				<li><img src="images/Peary/009.jpg"/><span></span></li>
				<li><img src="images/Peary/010.jpg"/><span></span></li>
	<li><img src="images/Peary/011.jpg"/><span></span></li>
		<li><img src="images/Peary/012.jpg"/><span></span></li>
			<li><img src="images/Peary/013.jpg"/><span></span></li>
				<li><img src="images/Peary/014.jpg"/><span></span></li>
					<li><img src="images/Peary/015.jpg"/><span></span></li>
								<li><img src="images/Peary/016.jpg"/></a><span></span></li>
			</ul></div>
		</div>
	</div>

			
		</div>
<div style="float: left; width: 1024px; top: 400px; position: relative;"><? include("footer.php");?></div>
</body>
</html>
