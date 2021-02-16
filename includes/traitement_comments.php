<?php
// on inclu le fichier de connexion pour pouvoir utiliser notre objet de connexion

require_once '../connexion.php';

// recuperation des infos du formulaire
$comments 	= $_POST['comments'];
$article_id = $_POST['article_id'];

// echo '- com: ' . $comments . ' - id: ' . $article_id;



/* *************************************
**							FUNCTION							**
************************************  */

// on inclut notre fichier qui contient les functions suivantes: Clean() et IsEmail()
/*


*/
include_once 'functions.php';

/* *************************************
**	 TRAITEMENT ET INSERTION en BDD		**
************************************  */

if(isset($_POST['submit'])){
	if(isset($comments)){
		// on verifie et on nettoie notre commentaire
		$comments = Clean($comments);
	} else {
		$comments = '';
	}
	
	
	if($comments != ''){
		// on prepare notre requete INSERT
		// on fait INSERT INTO nomDeLaTable (champsDeTable1, champsDeTable2, champsDeTable3, ...) VALUES (valeur a donner aux champs dans l'ordre strict)
		$query = $connexion->prepare("INSERT INTO comments (article_id, commentary, date) VALUES ('$article_id', '$comments', NOW())");
		
		// on execute notre requete qui est maintenant prete en lacant la methode execute()
		$query->execute();
		
		
		// on determine un message de validation
		$msg 		= 'votre commentaire est enregistré';
		$color	= 0;
	}
	
} else {
	
	// message d'error car on est pas passé par le formulaire pour atteindre le fichier traitement_comments.php
	$msg		= 'un problème est survenu, veuillez réessayer SVP.';
	$color	=	1; 						// 1 veut dire que c'est une erreur qu'on affichera en rouge, 0 est egale a ok et sera affiche en vert
	
}
// on redirige vers la page article
header('Location: ../article.php?article_id=' . $article_id . '&validation=' . $msg . '&color=' . $color);


?>