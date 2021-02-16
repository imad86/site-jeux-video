<?php 

	// connexion à la base de donnée (BDD) - le constructeur PDO permet de créer l'objet de connexion à la BDD
	// on peut également se connecter à la BDD avec SQL mais on ne pourra pas seconnnecté à d'autre type de base
	// PDO permet de se connecter à tous les types de BDO existantes

	try {				// on essai de créer notre objet de connexion 
		$connexion = new PDO('mysql:host=localhost;dbname=lasalle;charset=utf8', 'root', '');
	}
	catch(Exception $error){		// catch, si try a échoué , on attrape l'exception (l'erreur renvoyé par le constructeur) et on la stock dans la variable $error (qui contient un objet)
		die("Erreur: " . $error->getMessage());	//on affiche ce que contient l'exception (stocké dans $error) en appelant la méthode de l'objet getMessage()
	}

?>
	
	
	