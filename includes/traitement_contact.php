<?php
// declaration des variables qui contiennent les informations envoyé par le formulaire
// methode POST, l'information est transmise de fichier a fichier sur le meme serveur
// methode GET, l'information est transmise par l'URL du navigateur
$name			= $_POST['name'];
$tel			= $_POST['tel'];
$email		= $_POST['email'];
$message	= $_POST['message'];
$submit			= $_POST['submit'];

// echo $name . ' ' . $tel . ' ' . $email . ' ' .$message



/* *************************************
**						CONFIGURATION						**
************************************  */

// PENSER A FAIRE UN TABLE QUI CONTIENT CES INFORMATIONS POUR LES CLIENTS
// la ou les personne(s) qui recevront l'email, si plusieurs , les separer par un ; (ex: fmasson1977@gmail.com; guillaume.granet@bbox.fr)
$receiver = 'curaim.dias@gmail.com';
//(true ou false), une copie du message est envoyé a l'utilisateur
$copy			= 'true'; 
$object		= 'mail en provenance de nomDuSite';


// Les differents messages de validation/erreur

$message_received = 'Votre message nous est bien parvenu !';
$message_not_submit = 'l\'envoi du mail a echoue, veuillez reessayer SVP.';


$message_error_form		 = 'vous devez d\'abord remplir tous les champs.';
$message_error_invalid = 'verifiez que tous les champs soit remplis et que l\'email soit correct';


/* *************************************
**							FUNCTION							**
************************************  */

// on inclut notre fichier qui contient les functions suivantes: Clean() et IsEmail()
/*


*/
include_once 'functions.php';


/* *************************************
**	 TRAITEMENT DES INFOS ET EMAIL		**
************************************  */
// on test en premier si notre formulaire a ete teste par notre page contact
// la functoin isset() veut dire "est ce que ce que je contiens existe (a ete setup)
if(!isset($submit)){
	// le formulaire n'a pas été soumis au fichier traitement_contact.php par notre formulaire
	echo $error_form;
		
} else {
	
	// verification de la variable $name :
	if(isset($name)){												// si $name est bien renseignee dans form...
		$name = Clean($name);									// on la nettoie
	} else {																// sinon ...
		$name = '';														// on la valorise en une string vide
	}
	// verification de la variable $tel :
	if(isset($tel)){												// si $tel est bien renseignee dans form...
		$tel = Clean($tel);										// on la nettoie
	} else {																// sinon ...
		$tel = '';														// on la valorise en une string vide
	}
	
	// verification de la variable $email :
	if(isset($email)){											// si $email est bien renseignee dans form...
		$email = Clean($email);								// on la nettoie
	} else {																// sinon ...
		$email = '';													// on la valorise en une string vide
	}
	
	// verification de la variable $message :
	if(isset($message)){										// si $message est bien renseignee dans form...
		$message = Clean($message);						// on la nettoie
		$message = nl2br($message);						// nl2br() met des <br> a chaque fois que le user fait un saut de ligne
	} else {																// sinon ...
		$message = '';												// on la valorise en une string vide
	}
	
	
	// verification du format de l'email (condition ternaire) :
	
	$email = (IsEmail($email)) ? $email : '';
	/* ou en condition normale :
	if(IsEmail($email)){										// si $email est bien au format email...
			$email = $email;										// on la garde tel quelle est
		} else {															// sinon ...
			$email = '';												// on la valorise en une string vide
		}
	*/	
	
	
	// verification avant l'envoi de  l'email :
	if(($name != '') && ($tel != '') && ($email != '') && ($message != '')){
		
		// construction de l'email :
		$header  = 'MIME-Version: 1.0' . '\r\n';
		$header	.= 'FROM: ';
		$header .= $name;
		$header .= '<' . $email . '>' . '\r\n';
		$header .= 'Reply-to';
		$header .= $email . '/r/n';
		$header .= 'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed' . '\r\n';
		$header .= 'Content-Disposition: inline' . '\r\n';
		$header .= 'Content-Transfer-Encoding: 7bit' . '\r\n';
		$header .= 'X-Mailer:PHP/' . '\r\n';
		$header .= phpversion();
		
		// receiverS
		// envoyer une copie a l'utilisateur ?
		 if($copy == true){
			 $target = $receiver . ';' . $email;
		 } else {
			 $target = $receiver;
		 }
		
		// remplacement de certains caractère speciaux sur la variable $message
		$message = str_replace("&#039;"		, "'", $message);
		$message = str_replace("&#08217;"	, "'", $message);
		$message = str_replace("&quot;"		, '"', $message);
		$message = str_replace("<br>"			, '' , $message);
		$message = str_replace("<br />"		, '' , $message);
		$message = str_replace("&lt;"			, '<', $message);
		$message = str_replace("&gt;"			, '>', $message);
		$message = str_replace("&amp;"		, '&', $message);
		
		// variable compteur pour envoi de l'email dans la boucle foreache()
		$num_emails = 0;
		
		// on cree une variable temporaire pour decouper les receivers et les mettre dans un tableau 
		$tmp = explode(';', $target);              // $tmp est maintenant un array qui contient a chaque index un email seul
		
		// on bloucle pour chaque entree du tableau contenues dans $tmp avec foreach() et on envoi l'email
		// pour envoyer un email on utilise la funtoin mail():
		
		foreach($tmp as $email_receiver){
			// la function mail() envoi le message et retourne true sinon elle n'y parvient pas et retourne false
			if(mail($email_receiver, $object, $message, $header)){
				$num_emails++;
			} else {
				echo $message_not_submit . ' ' . $email_receiver;
			}
		}
		
		/* on peut verifier si on a bien envoye tous les email a tous les receivers en comptant au prealable les receivers et en comparant cette donnee a $num_emails
		Si les 2 sont egales, on a envoye a tout le monde.
		*/
		
		// Si tout est ok on redirige vers la page contact.php
		// pour faire une redirection on utilise la function header()
		header('Location: ../contact.php');
			
			
	} else {
		echo $message_error_invalid;
	}
	
	
	
	
	
	
}









?>