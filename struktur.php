<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="user-scalable = yes">
<title>Struktur</title>
<link href="styles/seriemestere.css" rel="stylesheet" type="text/css">
<!--Laster ned script tag fra Adobe Edge Web Fonts server.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/source-sans-pro:n6:default.js" type="text/javascript"></script>



 
</head>

<body>
<div id="wrapper">
    <header id="top">
        <h1>Struktur</h1>
<nav id="mainnav">
        <ul>
          <li><a href="hjem.php" >Hjem</a></li>
        <li><a href="historie.php">Historie</a></li>
        <li><a href="video.html">Video</a></li>
        <li><a href="struktur.php" class="thispage">Struktur</a></li>
        <li><a href="okonomi.php">Økonomi</a></li>
        <li><a href="quiz.php">Quiz</a></li>
        </ul>
    </nav>
    </header>
	
    <article id="main">
      <h2>Struktur</h2>
      <div id="divNav2">
      <nav>
        <p> <?php
			$xml=simplexml_load_file("info.xml") or die("Error: Cannot create object");
			echo $xml->p7 . "<br>";
			?>
			
        </p>
		<br>
		<br>
		<h2>Format</h2>
		<p><?php
			$xml=simplexml_load_file("info.xml") or die("Error: Cannot create object");
			echo $xml->p8 . "<br>";
			?>
		</p>
      </nav>
      </div>
	 
<figure class="floatright"> </figure>
<figure class="floatleft"> </figure>
</article>

<div id="divNav2">
    <aside id="sidebar">
      <h2 align="center">Deltagere</h2>
	<img src="../images/jipp.jpg" width="450" height="266" alt=""/> <br>
	<br>
	<br>
	<h2 align="center"> Premier League Table 2013/14 </h2> 
	<a href="http://imgur.com/igQbsNv"><img src="../images/table.png" width="450" height="266" alt="" />
	<br>
</aside>
</div>

 


    <footer>
	<a href="video.html"> Forrige Side</a>
	<a href="okonomi.php"> Neste Side</a>
    </footer>

</body>
</html>
