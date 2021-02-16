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
			
			<?php
			// on récupère le message de validation s'il existe
			if(isset($_GET['validation'])){

					// gestion des couleurs du message reçu
					if($_GET['color'] == 0){
							$color = 'success'; 
					} else {
							$color = 'danger';
					}

					$result  = '<div class="alert alert-' . $color . ' alert-dismissible fade show" role="alert">';
					$result .= '<button type="button" class="close" data-dismiss="alert">&times;</button>';
					$result .= $_GET['validation'];
					$result .= '</div>';

					echo $result;

			}


			// récupération en BDD des informations de l'article souhaité
			// on ne connait pas encore l'id donc on prépare notre requête avec la méthod prepare()
			// et on donne à la valeur id inconnu un nom temporaire arbitraire (ex :indentifiant)
			$article = $connexion->prepare("SELECT * FROM articles WHERE id = :identifiant");

			// on récupère :identifiant pour terminer notre requête SQL
			// on va tester notre URL pour récupérer en GET la valeur contenu de "article_id" s'il existe
			if(isset($_GET['article_id'])){
					$article_id = $_GET['article_id'];
			} else {
					header('Location: WebAgency.php');
			}

			// on va exécuter notre requête - on donne la valeur manquante à identifiant en passant par la méthode execute()
			$article->execute(array('identifiant' => $article_id));

			// on crée notre tableau contenant nos informations récupérées en BDD
			$data_article = $article->fetch();

			?>
			
			
			<!-- ARTICLE TITLE -->
			<h1 class="pt-4"><?= $data_article['title']; ?></h1>
			
			<!-- BREADCRUMB ----------------------------------- -->
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="WebAgency.php">Home</a>
				</li>
				<li class="breadcrumb-item active"><?= $data_article['title']; ?></li>
			</ol>
			
			<div class="row">
			
				<!-- LEFT COLUMN ---------------------------------------------------------------------------------- -->
				<!-- cette colonne contient toutes les cartes et la pagination -->
				<div class="col-lg-8">
					
					<img class="img-fluid rounded" src="<?= $data_article['src']; ?>" alt="<?= $data_article['alt']; ?>" />
					
					<hr />
					<?php
					// on re-travail le format d'affichage de la date et de l'heure
					setlocale(LC_TIME, 'French');
					$date = strftime('%A %d %B %Y - %H:%M:%S', strtotime($data_article['date']));
					
					
					// on reencode en UTF-8 pour eviter les accents erronnes (ex: Août)
					$date = utf8_encode($date);
					
					?>
					
					
					
					
					<p>Posté le <?= $date; ?></p>
					<hr />
					
					<p class = "text-justify"><?= nl2br($data_article['text']); ?></p>
					
					<blockquote class="blockquote">
						<footer class="blockquote-footer"> 
							<cite data-toggle="tooltip" data-placement="top" title="Source Title"><?= $data_article['author']; ?></cite>
						</footer>
					</blockquote>
					
					
					<hr>
					
					<!-- FORM LEAVE MESSAGE ------------------------ -->
					<div class="card my-4">
						<h5 class="card-header">Leave a comment:</h5>
						<div class="card-body">

							
							<!-- FORM -->
							<form class="needs-validation" action="includes/traitement_comments.php" method="post" novalidate>
								<div class="form-group">
									<textarea class="form-control" rows="3" name ="comments" required></textarea>
									<div class="invalid-feedback">Merci de remplir ce champ</div>
									<div class="valid-feedback">OK</div>
								</div>
								<!--  -->
								<input type = "hidden" name = "article_id" value ="<?= $article_id ?>" />
								
								<button type="submit" class="btn btn-primary" name = "submit">Submit</button>
							</form>
							
						</div>
					</div>
					
					<!-- COMMENTS ---------------------------------- -->
					
					<?php
					// avatar par défaut si aucun choisi par l'utilisateur
					$avatar = 'http://placehold.it/50x50';

					// connexion à la BDD sur la table comments pour récupérer tous les commentaires selon l'article souhaité
					$comments = $connexion->query("SELECT * FROM comments WHERE article_id = $article_id");
					while($data_comments = $comments->fetch()){
					
						
					if($data_comments['verification'] == 0)
						
					
					?>
                   
					<!-- SINGLE COMMENT -->
					<div class="media mb-4">
						<img class="d-flex mr-3 rounded-circle" src="<?= $avatar; ?>" alt="" />
						<div class="media-body">
							<h5 class="mt-0">Commenter Name</h5>
							<p><?= $data_comments['commentary']; ?></p>
						</div>
					</div>
                    
					<?php
					// fermeture de la boucle WHILE
					}

					// fermeture du curseur de connexion
					$comments->closeCursor();

					?>
					
					
					
				</div>
				
				<!-- RIGHT COLUMN --------------------------------------------------------------------------------- -->
				<!-- cette colonne contient la recherche, les catégories et la widget -->
				<div class="col-lg-4">
					
					<!-- CARD SEARCH ------------------------------- -->
					<div class="card mb-4">
						<h5 class="card-header">Search</h5>
						<div class="card-body">
						
                        <!-- FORM -->
                        <form action="" method="">
							<!-- INPUT GROUP WITH BUTTON -->
							<div class="input-group mb-3">
							
								
									<input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2" />
									<div class="input-group-append">
										<button class="btn btn-dark" type="button">Go!</button>
									</div>
								
								
							</div>
                        </form>
							
						</div>
					</div>
					
					<!-- CARD CATEGORIES	 ------------------------------- -->
					<div class="card mb-4">
						<h5 class="card-header">Categories</h5>
						<div class="card-body">
							<table class="table table-borderless table-sm my-0">
								<tbody>
									<tr>
										<td><a href="#">Web Design</a></td>
										<td><a href="#">JavaScript</a></td>
									</tr>
									<tr>
										<td><a href="#">HTML</a></td>
										<td><a href="#">CSS</a></td>
									</tr>
									<tr>
										<td><a href="#">Freebies</a></td>
										<td><a href="#">Tutorials</a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					
					<!-- CARD SIDE WIDGET ------------------------------ -->
					<div class="card mb-4">
						<h5 class="card-header">Side Widget</h5>
						<div class="card-body">
							You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers! 
						</div>
					</div>
					
				</div>
				
			</div>
			
		</div><!-- CONTAINER END ------------------------------ -->
		
		<!-- FOOTER ------------------------------------------- -->
		<?php	require_once 'includes/footer.php'; ?>
		
		<!-- ME(S) FICHIER(S) JAVASCRIPT(S) avant la fermeture de la balise BODY -->
		<?php	require_once 'includes/scripts.php'; ?>
		
		<!-- JAVASCRIPT VERIFICATION FORMULAIRE -->
		<script src="js/formulaire.js"></script>
		
		<!-- JAVASCRIPT TOOLTIP -->
		<script src="js/tooltip.js"></script>
		
		<!-- JAVASCRIPT FANCYBOX -->
		<script src="js/fancy.js"></script>
		
	</body>

</html>