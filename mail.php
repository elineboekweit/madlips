<?php 
	$form = $_POST['form'];
?>

<!DOCTYPE HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
<?php 
	if($form == "index") {
?>
	<div class="content">
		<p>
		Er heerst paniek in het koninkrijk <?= $_POST["land"]?>.<br>
		Koning <?= $_POST["spijbel"]?> is ten einde raad
		en als koning <?= $_POST["spijbel"]?> ten einde raad is,
		dan roept hij zijn ten-einde-raadsheer <?= $_POST["persoon"]?>.<br>
		<br>
		"<?= $_POST["persoon"]?>! Het is een ramp! Het is een schande!"<br><br>
		"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"<br>
		"Mijn <?= $_POST["huisdier"]?> is verdwenen! Zo maar, zonder waarschuwing.
		En ik had net <?= $_POST["speelgoed"]?> voor hem gekocht!"<br>
		"Majesteit, uw <?= $_POST["huisdier"]?> komt vast vanzelf weer terug?"<br>
		"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd 
		<?= $_POST["bezigheid"]?> leren?"<br>
		"Maar Sire, daar kunt u toch uw <?= $_POST["geld"]?> voor gebruiken."<br>
		"<?= $_POST["persoon"]?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."<br>
		"<?= $_POST["verveel"]?>, Sire."<br>
	</div>
<?php
	}
	elseif($form == "onkunde"){
?>
		<section>
			Er zijn veel mensen die niet kunnen <?= $_POST["kunnen"]?>.
			Neem nou <?=$_POST["persoon"]?>.
			Zelfs met de hulp van een <?= $_POST["vakantie"]?> 
			of zelfs <?= $_POST["getal"]?> 
			kan <?= $_POST["persoon"]?> 
			niet <?= $_POST["kunnen"]?>.
			Dat heeft niet te maken met een gebrek aan <?= $_POST["beste"]?>, 
			maar met een te veel aan <?= $_POST["slechtste"]?>.
			Te veel <?= $_POST["slechtste"]?> 
			leidt tot <?= $_POST["ergste"]?> 
			en dat is niet goed als je wilt <?= $_POST["kunnen"]?>.
			Helaas voor <?= $_POST["persoon"]?>.
		</section>
<?php
	}
?>
</section>
<a id="pijl" href="../links/links.php"><img src="../images/pijl.png"></a>
</body>
</html>