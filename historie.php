<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="user-scalable = yes">
<title>Historie</title>
<link href="styles/pl_start.css" rel="stylesheet" type="text/css">
<!--Laster ned script tag fra Adobe Edge Web Fonts server.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/source-sans-pro:n6:default.js" type="text/javascript"></script>
</head>

<body>
<div id="wrapper">
    <header id="top">
        <h1>Historie</h1>
<nav id="mainnav">
        <ul>
          <li><a href="hjem.php" >Hjem</a></li>
        <li><a href="historie.php"class="thispage">Historie</a></li>
        <li><a href="video.html">Video</a></li>
        <li><a href="struktur.php">Struktur</a></li>
        <li><a href="okonomi.php">Økonomi</a></li>
        <li><a href="quiz.php">Quiz</a></li>
        </ul>
    </nav>
    </header>
    
	<article id="main">
      <h2 >HISTORIE</h2>
      <div id="divNav2">
      <nav>
        <p><h4>Opprinnelsen</h4> 
		<?php
			$xml=simplexml_load_file("info.xml") or die("Error: Cannot create object");
			echo $xml->p3 . "<br>";
			?> 
		<br></br>
		
        </p>
		<p><h4>Grunnleggelsen</h4>
		<?php
			$xml=simplexml_load_file("info.xml") or die("Error: Cannot create object");
			echo $xml->p4 . "<br>";
			?> 
		</p>
        </nav>
        </div>
		

<figure class="floatright"> </figure>
<figure class="floatleft"> </figure>

	
	
</article>

<div id="divNav2">
    <aside id="sidebar">
      <h5 align="center">Manchester United feirer første Premier League seier noen gang i 1993</h5>
	<img src="../images/boppo.jpg" width="450" height="266" alt=""/> <br>
	<br>
	<br>
	<h5 align="center"> Her kan du se et lite innblikk på hvordan det var i 1993</h5> 
	<iframe width="450" height="266" src="https://www.youtube.com/embed/UrkPJylQh0w" frameborder="0" allowfullscreen></iframe>

</aside>


    

    <footer>
	<a href="hjem.php"> Forrige Side </a>
	
		<a href="video.html"> Neste Side</a>
    </footer>

</body>
</html>
