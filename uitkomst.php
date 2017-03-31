<!DOCTYPE html>
<html>
<head>
	<title>uitkomst</title>
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
			 	<p>Er zijn veel mensen die niet kunnen <?php echo $_POST ["doen"]; ?>. <br>
				<br>neem nou <?php  echo $_POST ["person"]; ?>.	 <br>
				<br>Zelfs met de hulp van een <?php  echo $_POST ["vacation"]; ?> of zelfs <?php  echo $_POST ["number"]; ?> kan <?php  echo $_POST ["person"]; ?> niet <?php  echo $_POST ["doen"]; ?>.<br> 			 
				<br>Dat heeft niet te maken met een gebrek aan <?php  echo $_POST ["good"]; ?> , maar wel een te veel aan <?php  echo $_POST ["bad"]; ?>. <br>
				<br>Te veel <?php  echo $_POST ["bad"]; ?> leidt tot <?php  echo $_POST ["worse"]; ?> en dat is niet goed als je wilt <?php  echo $_POST ["doen"]; ?>. <br>
				<br>Helaas voor <?php  echo $_POST ["person"]; ?>. </p>
			</form>
			<footer>
				<p>Deze website is gemaakt door Jasper Luijten</p>
			</footer>
		</div>
	</body>
</html>
