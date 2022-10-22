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
		}
			echo ($mot);echo('<br>');
			unset($_POST['mot']);
		}
		
	?>
</body>
</html>