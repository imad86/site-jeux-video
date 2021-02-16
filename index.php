<!DOCTYPE html>
<html lang="fr">

	<head>
		<?php 
			// on ouvre la balise PHP pour commencer la programmation serveur
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
		
			<!-- CAROUSEL ------------------------------------- -->
			
				<?php	include_once 'includes/carousel.php'; ?>

			<!-- 1ST ROW - cartes contenues dans la table index_cards ------- -->
			<div class="row">
			<?php
				/*
				- on recupere les informations de nos cartes sur la table index_cards en se connectant a notre BDD lasalle
				- on utilise la  methode query de l'objet connexion afin de faire la requete en sql
				- SELECT (le nom des colonnes ou * pour tout selectionner) FROM nomDeLaTable ORDER BY nomDeLaColonne(pour effectuer le filtre) DESC (pour decroissant ou ASC pour croissant) LIMIT(elle attend 2 arguments, le 1er l'index suer lequel on se positionne pour recuperer les informations, le 2eme le nombre d'enregistrement a rapporter)
				
				- ici on peut l'ecrir:
				$cards = $connexion->query("SELECT id, image, alternatif, link, title, text FROM index_cards ORDER BY id DESC LIMIT 0, 3");
				ou
				$cards = $connexion->query("SELECT * FROM index_cards ORDER BY id DESC LIMIT 0, 3");
				
				- on boucle sur l'objet $cards en parcourant chacuns des enregistrements contenus a l'interieur grace a la methode fetch (parcoure et recherche)
				chaque enregistrement a chaque boucle est alors stockee dans une variable, ici $data_cards sous forme de tableau						
				*/												
			$cards = $connexion->query("SELECT * FROM index_cards ORDER BY id DESC LIMIT 0, 3");
			while($data_cards = $cards->fetch()){
					
				
			?>	
		
				<!-- COLONNE <?php echo $data_cards['id']; ?> -->
				<div class="col-md-6 col-lg-4 mt-3">
				
					<div class="card h-100">
						<img class="card-img-top" src="<?php echo $data_cards['image']; ?>" alt="<?php echo $data_cards['alternatif']; ?>" />
						<div class="card-body">
							<a class="stretched-link" href="<?php echo $data_cards['link']; ?>" target="_blank">
								<h4 class="card-title font-weight-normal"><?php echo $data_cards['title']; ?></h4>
							</a>
							<p class="card-text "><?php echo $data_cards['text']; ?></p>
						</div>
					</div>
				</div>
				
			<?php
			// fermeture de ma boucle while
			}
				
			// on libere le curseur de connexion a la BDD
			$cards->closeCursor();
			?>
			</div>
			
			<!-- 2ND ROW informations generales contenues dans la table index_information ------- -->
			<div class="row mt-3">
			
				
				<?php 
					// requete en BDD sur la table index_informations
				$info = $connexion->query("SELECT * FROM index_informations");
				$data_info = $info->fetch();
				?>
				<!-- COLONNE 1 -->
				<div class="col-lg-6 order-2 order-lg-12">
				
					<h2 class = "text-uppercase"><?= $data_info['title']; ?></h2>
					
					<p><?= $data_info['subtitle']; ?></p>
					
					<ul>
						<?php 
							// 2 arguments attendus (le caractère de separation et la string)
							$myList = explode(";", $data_info['list']);
							
							//var_dump($myList);								// var_dump(); sert a consulté le contenu d'un tableau
						
							// on compte le nombre d'elements contenus dans mon tableau et on le stock dans un variable
							$nbr = count($myList);
						
						
							for($i = 0; $i < $nbr; $i++){
								echo "<li> $myList[$i] </li>";
							}
						?>
					</ul>
					
					<p><?= $data_info['text']; ?></p>
				
				</div>
				
				<!-- COLONNE 2 -->
				<div class="col-lg-6 order-1 order-lg-12">
					<img class="img-fluid rounded" src="<?= $data_info['src']; ?>" alt="<?= $data_info['alt']; ?>" />
				</div>
				<?php
					$info->closeCursor();
				?>
			</div>
			
			<!-- 3RD ROW - cartes contenues dans la table index_ads ------- -->
			<div class="row">
				
				
			<?php
			$ads = $connexion->query("SELECT * FROM index_ads ORDER BY id DESC LIMIT 0, 3");
			while($data_ads = $ads->fetch()){
					
				?>	
			
				
				<!-- COLONNE <?= $data_ads['id']; ?> -->
				<div class="col-md-6 col-lg-4 mt-3">
				
					<div class="card h-100">
						<div class="card-header">
							<h2><?= $data_ads['title']; ?></h2>
						</div>
						<div class="card-body">
							<p class="card-text"><?= $data_ads['text']; ?></p>
						</div>
						<div class="card-footer"><a href="#" class="btn btn-primary"><?= $data_ads['button']; ?></a></div>
					</div>
				</div>
				<?php 
				}
				
				$ads->closeCursor();
				
				?>
			</div>	
			<!-- 4TH ROW -information contenue dans la table index_end ------- -->
			<div class="row mt-3">
				
				<?php 
					$contact = $connexion->query("SELECT text, button_txt FROM index_info_contact");
					$data_contact = $contact->fetch();
				?>
				
				<!-- COLONNE 1 -->
				<div class="col-sm-8 text-justify">
					<p>
						<?= $data_contact['text'] ?>
					</p>
				</div>
				
				<!-- COLONNE 2 -->
				<div class="col-sm-4">
					<a href="contact.php" class="btn btn-primary btn-block btn-lg "><?= $data_contact['button_txt'] ?></a>
				</div>
				<?php 
				$contact->closeCursor();
				?>
			</div>


		</div><!-- CONTAINER END ------------------------------ -->
			
		<!-- FOOTER ------------------------------------------- -->
		<?php require_once 'includes/footer.php'; ?>
		
		<!-- ME(S) FICHIER(S) JAVASCRIPT(S) avant la fermeture de la balise BODY -->
		<?php require_once 'includes/scripts.php'; ?>

	</body>

</html>