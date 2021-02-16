<!DOCTYPE html>
<html lang="fr">

	<head>
		<?php 
			// on inclut le fichier grace a include, include_once, require, require_once
			// include n'interromp pas la création de la page si erreur
			// require interromp la création
			// _once pour dire qu'on l'inclu une seule fois dans la page
			require_once 'includes/head.php';
		?>
		
	</head>

	<body>
		
		<!-- NAVIGATION ------------------------------------- -->
		<?php	require_once 'includes/navigation.php'; ?>
		
		<!-- CONTAINER START ---------------------------------- -->
		<div class="container">
			
			<!-- BREADCRUMB ----------------------------------- -->
			<h1 class="font-weight-bold pt-4">Contacts <span class="font-weight-normal">Subheading</span></h1>
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item">Contacts</li>
			</ul>

			<div class="row mt-3"> <!-- START ROW -->
				<?php 
				$contacts = $connexion->query("SELECT * FROM contact");
				$data_contacts = $contacts->fetch();
				?>
				<!-- COLONNE 1 -->
				<div class="col-lg-8">
					<?php
					/*
					- on cree une variable $googleMap qui contiendra la map nettoyee
					- str_replace (string replace), pour remplacer le contenu d'une chaine de caractere, il attend 3 arguments
					- 1. la chaine a chercher
					- 2. la chaine de remplacement
					- 3. l'emplacement de la chaine de caractère a modifier					
					*/
					
					$google_Map = str_replace('width="600"', 'width="100%"', $data_contacts['map']);
					
					echo $google_Map; 
					?>
				</div>
				
				<!-- COLONNE 2 -->
				<div class="col-lg-4">
					<h3><?= $data_contacts['title']; ?></h3>
					<p>
						<?= $data_contacts['adress1']; ?><br>
						<?= $data_contacts['adress2']; ?>
					</p>
					<p><i class="fas fa-phone"></i> <?= $data_contacts['tel']; ?></p>
					<p><b>@</b> <a href="mailto:<?= $data_contacts['email']; ?>"> <?= $data_contacts['email']; ?></a></p>
					<p><i class="fas fa-calendar-alt"></i> <?= $data_contacts['horaires']; ?></p>
				</div>
				<?php
				$contacts->closeCursor();
				?>
			</div><!-- END ROW -->
			
			<div class="row">
				
				<div class=" col-lg-8">
				
					<h2 class="mt-4">Send us a Message</h2>

					<form class="needs-validation mb-5" action="includes/traitement_contact.php" method="post" novalidate>
						<div class="form-group">
							<label for="name">Nom :</label>
							<input id="name" class="form-control" type="text" placeholder="Veuillez rentrer vôtre nom" name="name" required />

							<div class="invalid-feedback">Merci de remplir ce champ</div>
							<div class="valid-feedback">OK</div>
						</div>
						
						<div class="form-group">
							<label for="tel">Numero de téléphone :</label>
							<input id="tel" class="form-control" type="text" placeholder="Veuillez rentrer vôtre n° de téléphone" name="tel" required />

							<div class="invalid-feedback">Merci de remplir ce champ</div>
							<div class="valid-feedback">OK</div>
						</div>
						
						<div class="form-group">
							<label for="mail">Adresse e-mail :</label>
							<input id="mail" class="form-control" type="email" placeholder="Veuillez rentrer vôtre e-mail" name="email" required />

							<div class="invalid-feedback">Merci de remplir ce champ</div>
							<div class="valid-feedback">OK</div>
						</div>
						
						<div class=form-group>
							<label for="message">Message :</label>
							<textarea class="form-control" style="" id="message" placeholder="Bla Bla Bla" name = "message" required></textarea>
							
							<div class="invalid-feedback">Merci de remplir ce champ</div>
							<div class="valid-feedback">OK</div>
						</div>
						
						<button class="btn btn-primary" type="submit" name = "submit">Envoyer</button>
					</form>
					
				</div>
				
			</div>
			
			

		</div><!-- END CONTAINER  -->
		
		<!-- FOOTER ------------------------------------------- -->
				<?php	require_once 'includes/footer.php'; ?>

		
		<!-- ME(S) FICHIER(S) JAVASCRIPT(S) avant la fermeture de la balise BODY -->
		<?php require_once 'includes/scripts.php'; ?>
		
		<!-- JAVASCRIPT VERIFICATION FORMULAIRE -->
		<script src="js/formulaire.js"></script>
		
	</body>

</html>