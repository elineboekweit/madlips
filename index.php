<!DOCTYPE HTML>
<html>
<head>
	<title>Mad Lips</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="../images/eb.png">
	<meta charset="UTF-8">
</head>
<body>
	<header>
		<h1>Mad lips</h1>
	</header>
	<nav>
		<ul>
			<li id="head"><a href="index.php">Er heerst paniek...</a></li>
			<li id="head"><a href="onkunde.php">Onkunde</a></li>
		</ul>
	</nav>
	<section>	
	<p>	
		<ul>
			<form action="mail.php" method="post">
				<input type="hidden" name="form" value="index">

				<li>Welk dier zou je nooit als huisdier willen hebben?<hr>
				<input type="text" name="huisdier"><br></li>

				<li>Wie is de belangrijkste persoon in je leven?<hr>
				<input type="text" name="persoon"><br></li>

				<li>In welk land zou je graag willen wonen?<hr>
				<input type="text" name="land"><br></li></li>

				<li>Wat doe je als je je verveelt?<hr>
				<input type="text" name="verveel"><br></li>

				<li>Met welk speelgoed speelde je als kind het meest?<hr>
				<input type="text" name="speelgoed"><br></li>

				<li>Bij welke docent spijbel je het liefst?<hr>
				<input type="text" name="spijbel"><br></li>

				<li>Als je €100.000,- had, wat zou je dan kopen?<hr>
				<input type="text" name="geld"><br></li>

				<li>Wat is je favoriete bezigheid?<hr>
				<input type="text" name="bezigheid"><br></li>
				<li>&nbsp
				<input type="submit" value="Submit"><br></li>
			</form>

		</ul>
	</p>
	</section>
	<a id="pijl" href="../links/links.php"><img src="../images/pijl.png"></a>
</body>
</html>