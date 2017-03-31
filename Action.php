<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="madlibs.css" />
</head>
	<body>
		<h1>Madlibs</h1>
		<div id="center">
			<ul>
	  			<li id="nav"><a href="madlibs.php">Er heerst paniek...</a></li>
	  			<li id="nav"><a class="active" href="#home">Onkunde</a></li>
			</ul>
	 	<form>
			<p>Er heerst paniek in het koningkrijk <?php echo $_POST ["place"] ?> ,
			Koning <?php echo $_POST ["docent"] ?> is ten einde raad en als koning <?php echo $_POST ["docent"] ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer<?php echo $_POST ["person"] ?><br>
			<br>"<?php echo $_POST ["person"] ?>! Het is een ramp! Het is een schande!"<br>
			<br>"Sire, Majesteit, Uwe Luidruchtighied, wat is er aan de hand?"<br>
			<br>Mijn <?php echo $_POST ["animal"] ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST ["toys"] ?> voor hem gekocht.<br>
			<br>"Majesteit, uw <?php echo $_POST ["animal"] ?> komt vast vanzelf weer terug?"<br>
			<br>"Ja dat is leuk, maar hoe moet ik nu in de tussentijd<?php echo $_POST ["bezigheid"] ?>doen"<br>
			<br>"Maar sire dan kunt u toch uw <?php echo $_POST ["geld"] ?>voor gebruiken."<br>
			<br>"<?php echo $_POST ["person"] ?>, je hebt gelijk! Wat zou ik doen als ik jou niet had."<br>
			<br>"<?php echo $_POST ["docent"] ?>, Sire."</p>
		</form>
			<footer>
				<p>Deze website is gemaakt door Jasper Luijten</p>
			</footer>
		</div>
	</body>
</html>
