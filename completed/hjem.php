<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="user-scalable = yes">
<title>Hjem</title>
<link href="styles/index.css" rel="stylesheet" type="text/css">
<!--Laster ned script tag fra Adobe Edge Web Fonts server.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/source-sans-pro:n6:default.js" type="text/javascript"></script>
</head>
 
<body>
<div id="wrapper">
  <header id="top">
    <h1>Premier League</h1>
		<nav id="mainnav">
		<ul>
			<li><a href="hjem.php" class="thispage">Hjem</a></li>
			<li><a href="historie.php">Historie</a></li>
			<li><a href="video.html">Video</a></li>
			<li><a href="struktur.php">Struktur</a></li>
			<li><a href="okonomi.php">Økonomi</a></li>
			<li><a href="quiz.php">Quiz</a></li>
		</ul>
    </nav>
	</header>

	<div id="hero">
    <article>
      <h2>Hallo og velkommen!</h2>
		<p>Vi er veldig glad for at du har tatt deg turen innom vår Premier League E-Læringsapplikasjon. Målet vårt er at du blir en PL-Master når du er ferdig med denne nettsiden. For å bli utnevnt til dette må du fullføre quizzen på siste side! Lykke til og tusen takk!<br></p>
    </article>
	<img src="../images/bg.jpg"  alt=""/></div>
  
	<article id="main">
    
	<h2>GENERELT</h2>	
	<p>
			<?php
			$xml=simplexml_load_file("info.xml") or die("Error: Cannot create object");
			echo $xml->p1 . "<br><br><br>";
			echo $xml->p2 . "<br>";
			?>
	</p>
		
	
				
		<figure class="centered"><img src="../images/premier-league-slide1.jpg" width="450" height="266"  alt=""/>
		<figcaption>Premier League Logo</figcaption>
		</figure>
	</article>
  
 
	<footer>
	
		<a href="historie.php"> Neste Side</a>
	</footer>
</div>

</body>
</html>
