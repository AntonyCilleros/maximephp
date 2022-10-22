<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Code César</title>
</head>
<body>
	<form name="donnervalleur" method="post" action="CodeCesar.php">
    Entrez un mot : <input type="text" name="mot"/> <br/>
	Entrez une clé : <input type="text" name="nbr"/> <br/>
    <input type="submit" name="valider" value="OK"/>
	</form>
    <?php
		$tableauOcc = array_fill(0, 26, 0);
		//$tableauOcc = range(0, 26, 0); // array(valeur de dep, nb elem, s'incrémente)

		if (isset($_POST['mot']))
		{
		$mot = (string)$_POST['mot'];
		$nbr = (int)$_POST['nbr'];
			echo $mot . '<br>';
			for($compteur = 0; $compteur < strlen($mot); $compteur++) 
			{
				if ((ord($mot[$compteur]) > 96) && (ord($mot[$compteur]) < 123))
					$mot [$compteur] = chr (97 + (ord($mot[$compteur]) - 97 + $nbr) % 26);
				elseif ((ord($mot[$compteur]) > 64) && (ord($mot[$compteur]) < 91))
					$mot [$compteur] = chr (65 + (ord($mot[$compteur]) - 65 + $nbr) % 26);
				
				for($lettre = 65; $lettre<=90; $lettre++)
				{
					if ($mot[$compteur] == chr($lettre)) $tableauOcc[$lettre-65]++;
					elseif ($mot[$compteur] == chr($lettre+32)) $tableauOcc[$lettre-97]++;
				}
				for($i; $i<$tableauOcc; $i++){
					if ($tableauOcc[i] > 0) echo $i+90 . '=' . $tableauOcc[$i]
				}
			}
			echo ($mot);echo('<br>');
			unset($_POST['mot']);

		}
		
		
	?>
</body>
</html>