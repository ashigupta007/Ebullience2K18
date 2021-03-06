<?php
	if(!isset($_REQUEST["session"])){
		if(!isset($_SESSION)){
			session_start();
		}
	}else{
		if(!isset($_SESSION)){
			session_start(array($_REQUEST["session"]));
		}
	}
	$session_get = session_id();

	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ebullience 2K18</title>

	<meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, minimum-scale=1">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="NIET Zonal Techfest Website">
    
    <meta name="keywords" content="NIET, Zonal, Techfest, Ebullience, 2018, AKTU, Jagdish, Ashish">
    
    <meta name="author" content="Jagdish Singh, Ashish Gupta">

    <meta name="theme-color" content="#030710">

    <link rel="stylesheet" type="text/css" href="css/style.css">

	<!--<script>
		var countDownDate = new Date("Mar 22, 2018 09:30:00").getTime();
		var x = setInterval(function() {
  		var now = new Date().getTime();
  		var distance = countDownDate - now;
		var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  		var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  		var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  		var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  		document.getElementById("timer").innerHTML = days + "  days   " + hours + " hours "
  		+ minutes + " mins " + seconds + " secs ";
  		if (distance < 0) {
    	clearInterval(x);
    	document.getElementById("timer").innerHTML = "Get Set Go For The TechFest";
  		}
		}, 1000);
	</script>-->
<body>
	<div id="overlayer">
		<div class='triangles'>
      		<div class='tri invert'></div>
      		<div class='tri invert'></div>
      		<div class='tri'></div>
      		<div class='tri invert'></div>
      		<div class='tri invert'></div>
      		<div class='tri'></div>
      		<div class='tri invert'></div>
      		<div class='tri'></div>
      		<div class='tri invert'></div>
    	</div>
	</div>

	<div class="last" style="background-color: #030710; height: 100%; width: 100%;position:absolute;z-index: -5">
		<div class="arc_reactor">
		
			<img src="images/1.png" class="one arc">
			<img src="images/2.png" class="two arc">
			<img src="images/3.png" class="three arc">
			<img src="images/4.png" class="four arc">
			<img src="images/5.png" class="five arc">
			<img src="images/6.png" class="six arc">
			<img src="images/8.png" class="seven arc">
			<img src="images/9.png" class="eight arc">
			<img src="images/10.png" class="nine arc">
		
		</div>

    	<canvas id="waves"></canvas>

	</div>
	<div id="skill" style="min-height: 100%; min-width: 100%; position: absolute;z-index: -3"></div>

	<div class="main-cont">
		 <div class="line"></div>
     <img src="images/aktu_logo.png" class="aktu">

		<h1><!--Dr. APJ ABDUL KALAM TECHNICAL UNIVERSITY-->
    NOIDA INSTITUTE OF ENGINEERING AND TECHNOLOGY  
    </h1>
    <img src="images/niet_logo.png" class="aktu2">
    <h5>Accredited by NAAC (A Grade) CSE, ECE, ME, & B.Pharm are NBA accredited 99th Rank by NIRF (2016)</h5>
		<center><div class="line_2"></div></center>
      <h3>Dr. APJ ABDUL KALAM TECHNICAL UNIVERSITY</h3>
    <center><div class="line_2"></div></center>  
		<br>
   <!-- <div id="timer" class="timer">
          
    </div>-->

    

    <div class="footer">
      <h4>TECHNICAL, LITERARY AND MANAGEMENT ZONAL FEST</h4>
		<div class="line_3"></div>
			Designed And Developed By 

			<a class="author" target="_blank" href="https://github.com/ashigupta007"> Ashish Gupta </a>
			and
			<a class="author" target="_blank" href="https://github.com/JDchauhan"> Jagdish Singh </a>
		
      	</div>

	</div>

</body>
	  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">

    <script type="text/javascript" src="js/jquery.particleground.js"></script>

    <script type="text/javascript" src="js/sine-waves.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">

    <script type="text/javascript" src="js/main.js"></script>

	<script>
		$(window).on('load',(function() {
  		$("#overlayer").delay(2000).fadeOut("slow");
		}));
	</script>

 
</html>
