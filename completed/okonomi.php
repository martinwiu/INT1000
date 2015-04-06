<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="user-scalable = yes">
<title>Økonomi</title>
<link href="styles/okonomi.css" rel="stylesheet" type="text/css">
<!--Laster ned script tag fra Adobe Edge Web Fonts server.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/source-sans-pro:n6:default.js" type="text/javascript"></script>
</head>

<body>
<div id="wrapper">
    <header id="top">
        <h1>Økonomi</h1>
<nav id="mainnav">
        <ul>
          <li><a href="hjem.php" >Hjem</a></li>
        <li><a href="historie.php">Historie</a></li>
        <li><a href="video.html">Video</a></li>
        <li><a href="struktur.php">Struktur</a></li>
        <li><a href="okonomi.php"class="thispage" >Økonomi</a></li>
        <li><a href="quiz.php">Quiz</a></li>
        </ul>
    </nav>
    </header>
	
    <article id="main">
      <h2>Klubbøkonomi!</h2>
      <div id="divNav2">
      <nav>
        <p><?php
			$xml=simplexml_load_file("info.xml") or die("Error: Cannot create object");
			echo $xml->p5 . "<br>";
			?>  
		<br> <br>
        </p>
		<br>
		<br>
		<br>
		<br>
		<h2>Spiller inntekter per uke!</h2>
		<p>
			<?php
			$xml=simplexml_load_file("info.xml") or die("Error: Cannot create object");
			echo $xml->p6 . "<br>";
			?>  
		</p>
      </nav>
      </div>
	 
<figure class="floatright"> </figure>
<figure class="floatleft"> </figure>
</article>

<div id="divNav2">
    <aside id="sidebar">
      <h2 align="center">Klubbøkonomi</h2>
	<a href="http://imgur.com/eoyBivX"><img src="../images/klubbokonomi.jpeg" width="450" height="266" alt="" /> <br>
	<br>
	<br>
	<h2 align="center"> Spiller inntekter </h2> 
	<a href="http://imgur.com/dEuavkB"><img src="../images/Spiller inntekt.jpeg" width="450" height="266" alt="" />
</aside>
</div>

    <footer>
	<a href="struktur.php"> Forrige Side</a>
	<a href="quiz.php"> Neste Side</a>
    </footer>

</body>
</html>
