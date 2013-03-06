<?php //phpinfo();exit; ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">		
		<title>Test</title>

		<link rel="stylesheet" type="text/css" media="all" href="help/css/anythingslider.css" />
		<script type="text/javascript" src="help/js/jquery.min.js"></script>		
		<script type="text/javascript" src="help/js/jquery.anythingslider.min.js"></script>		


		<style>
		#slider { width: 700px; height: 390px; }
		</style>




		<script type="text/javascript">

		$(document).ready(function(){

			$('#slider').anythingSlider({

		        //resizeContents: false,
		        buildNavigation: false, 
		        buildStartStop: false,
		        hashTags: false,
		        onSlideBegin: function(){

		        },
		        onSlideComplete: function(){

		        }

			});

		});

	    </script>




	</head>
		

	<body>

		<div class="container">



			<ul id="slider">

				<li><img src="help/img/anythingslider/slide-civil-1.jpg" alt=""></li>

				<li><img src="help/img/anythingslider/slide-env-1.jpg" alt=""></li>

				<li><img src="help/img/anythingslider/slide-civil-2.jpg" alt=""></li>

				<li><img src="help/img/anythingslider/slide-env-2.jpg" alt=""></li>

			</ul>





		</div>


	</body>
</html>










