<!DOCTYPE html>
<html lang="en">
   <html>
<head>

  <title>jQuery Mobile page</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="theme.css" />
  <link rel="stylesheet" href="jquery.mobile.icons.min.css" />
  <link rel="stylesheet" href="jquery.mobile.structure-1.4.5.min.css" /> 
  <script src="jquery-1.11.1.min.js"></script> 
  <script src="jquery.mobile-1.4.5.min.js"></script> 

</head>
<body> <div id="pag1" data-role="page" data-theme="b">
			<div data-role="header">
				<h1>BMI</h1>
			</div>
			<div role="main" class="ui-content">
				<p>Met deze WebApp wordt uw BMI berekend.</p>
				<form action="BMI.php" method="get">
					<label for="gewicht">Gewicht (kg):</label>
					<input name="gewicht" id="gewicht" type="range" min="30" max="200" step="1" value="30" data-highlight="true">	
					<label for="lengte">Lengte (cm):</label>
					<input name="lengte" id="lengte" type="range" min="130" max="250" step="1" value="130" data-highlight="true">
					<label class="ui-hidden-accessible" for="bereken">Bereken BMI:</label>
					<button class="ui-shadow ui-btn ui-corner-all ui-mini" id="bereken" type="submit" name="bereken">BEREKEN BMI</button>
					</body>
</html>
<h1> BMI berekenen </h1>
<p>
 Vul hier je gewicht en lengte in, zodat de computer kan berekenen wat je BMI is!
</p>
<form action="bmi_berekenen.php" method="post">
 <!-- Hier kan je je BMI invullen en dan gaat de computer het berekenen. -->
   Uw gewicht in kilo's: <input type="text" name="gewicht"/>
   Uw lengte in cm's:  <input type="text" name="lengte"/>
    <input type="submit" name="verzend" value="getalinput"/>
</form>
<br /><br />

<?php
// Deze php heb ik gebruikt van het vorige hoofdstuk
// hier wordt een variabele aangemaakt voor het gewicht van de gebruiker en de lengte van de gebruiker, daaronder zijn de variabelen met de berekeningen
$lengte2 = $lengte / 100;
$lengte3 = $lengte2 * $lengte2;
$BMI = round($gewicht / $lengte3, 1);
// hierboven is de berekening van het BMI, die wordt afgerond op 1 decimaal.

// hier maak ik de uitkomsten, de computer geeft een bepaalde tekst bij een bepaald BMI


//als het BMI onder 18.5 geeft de computer ondergewicht terug
if($BMI <18.5) {
      echo "U heeft ondergewicht, uw BMI is namelijk $BMI";
}
//is het bmi tussen 18.5 en 25 dan heeft iemand normaal gewicht
elseif($BMI >= 18.5 && $BMI < 25) {
      echo "U heeft een normaal gewicht, uw BMI is namelijk $BMI";
}
// is het bmi boven de 25 en onder de 27 dan heeft hij licht overgewicht
elseif($BMI > 25 && $BMI <= 27) {
      echo "U heeft licht overgewicht, uw BMI is namelijk $BMI";
}
//als iemand boven de 27 maar onder de 30 dan is er gemiddeld overgewicht
elseif($BMI > 27 && $BMI <=30) {
      echo "U heeft gemiddeld overgewicht, uw BMI is namelijk $BMI";
}
//wanneer het bmi boven de 30 is maar onder 40 dan is er heftig overgewicht
elseif($BMI > 30 && $BMI <= 40) {
      echo "U heeft heftig overgewicht, uw BMI is namelijk $BMI";
}
//boven de 40 is er dodelijk overgewicht
elseif($BMI > 40) {
      echo "U heeft dodelijk overgewicht, uw BMI is namelijk $BMI";
}

?>
 </body>
</html>