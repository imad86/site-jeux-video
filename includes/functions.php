<?php
// FICHIER QUI CONTIENT TOUTES LES FUNCTIONS REUTILISABLES

// function pour nettoyer mes chaines des caracteres
function Clean($text){
	
	// la function trim(); permet d'enlever les espaces en debut et fin de chaine de carateres
	$text = trim($text);
	
	// la function htmlspecialchars convertit les balise html en caracteres speciaux (ex: < devient &lt;)
	// la funciton attend le parametre ENT_QUOTES qui convertit les quotes en caracteres speciaux (ex: ' devient &lsquo;)
	$text = htmlspecialchars($text, ENT_QUOTES);
	
	
	// on test si la function get_magic_quotes_gpc() est active sur notre serveur afin de pouvoir utiliser la function striplashes
	// si active elle est egale a 1, si desactive = 0
	if(get_magic_quotes_gpc() === 1){
		// la function stripslashes retire tous le \
		$text = stripslashes($text);
	}
	
	// on recupere notre variable en sortie de traitement qu'on retourne a l'endroit de la function a ete appelee
	return $text;
}


// function pour verifier la synthaxe d'un email grace aux expression regulieres

function IsEmail($email){
	
	$verif = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
	
	
	/* 
	Condition normale :
	
	if($verif === 0 || $verif === false){
		$verif 	= false;
	} else {
		$verif 	= true;
	}
	
	*/
	
	// Condition ternaire (condition sur une ligne qui revient a faire la meme chose que celle au dessus)
	
	return (($verif === 0) || ($verif === false)) ? false : true;
	
	
	
}



?>