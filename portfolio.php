<!DOCTYPE html>
<html lang="fr">

<head>
	<?php
		// on ouvre la balise php pour commencer à faire du php
		// on inclut le fichier head.php grâce à include, include_once, require ou require_once.
		// include n'interromp pas la création de la page si erreur.
		// require interromp la création si erreur
		// _once pour dire qu'onl'inclut qu'UNE SEULE FOIS dans la page
		require_once 'includes/head.php';
		
		?>

</head>

<body>

	<!-- NAVIGATION ------------------------------------- -->
	<?php 
	
	require_once 'includes/navigation.php'
	
	?>

	<!-- CONTAINER START ---------------------------------- -->
	<div class="container">

		<!-- BREADCRUMB ----------------------------------- -->
		<h1 class="font-weight-bold pt-4">Portofolio 1 <span class="font-weight-normal">Subheading</span></h1>
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="">Home</a></li>
			<li class="breadcrumb-item">Portfolio 1</li>
		</ul>

		<?php
		/****************************************
		* CONFIGURATION DE LA PAGINATION
		******************************************/
		
		// on compte le nombre d'entrée contenu dans notre table portfolio
		$projets_total = $connexion->query("SELECT COUNT(*) FROM portfolio");
		$nbre_projets  = $projets_total->fetch();
		// $nbre_projets[0] nous retourne le nombre d'enrrgistrement contenu dans notre tableau
	
		// déclarations de variables pour configurer notre pagination
		$projets_par_page = 3;
		$nbre_de_pages    = $nbre_projets[0] / $projets_par_page;
		$nbre_de_pages    = ceil($nbre_de_pages); 	//la fonction ceil() arrondi à l'entier supérieur
	
		// on ferme le curseur de connexion 
		$projets_total->closeCursor();
	
	// récuperation dans l'URL de la page
	
	if(isset($_GET['page'])){
		
		$page_actuelle = $_GET['page'];
		$page_actuelle = intval($page_actuelle);
	}else{$page_actuelle = 1;
		  
		 }
	$index = ($page_actuelle - 1) * $projets_par_page;

	
	/* **************************************************** */
				
		// connexion à la BDD sur la table portfolio
			$project = $connexion->query("SELECT * FROM portfolio ORDER BY id DESC LIMIT $index, $projets_par_page");

	
			while($data_project = $project->fetch()){
					
				
			?>
		<!-- PROJET <?php echo $data_project['id']; ?>-->
		<div class="row">
			<div class="col-lg-7 my-1">
				<img class="img-fluid rounded" src="<?php echo $data_project['image']; ?>" alt="<?php echo $data_project['alt']; ?>" />
			</div>
			<div class="col-lg-5 ">
				<h3><?php echo $data_project['titre']; ?></h3>
				<p>
					<?php echo $data_project['texte']; ?>
				</p>

				<a class="btn btn-primary" href="<?php echo $data_project['lien_url']; ?>" target="_blank"><?php echo $data_project['lien_texte']; ?> <i class="fas fa-chevron-right"></i></a>
			</div>
		</div>
		<hr>

		<?php
			
			}
			
			$project->closeCursor();
		?>
		<!-- PAGINATION ------------------------------------- -->

		<div class="row justify-content-center">
			<ul class="pagination">

				<!-- Flèche de gauche -->
				<?php 
				$page_precedente = $page_actuelle - 1;
				if($page_actuelle == 1){
					$page_precedente = 1;
					$inactif = 'disabled';
				}else{
					$inactif = '';
				}
				
				echo '<li class="page-item ' . $inactif . '"><a class="page-link" href="portfolio.php?page=' . $page_precedente . '">&laquo;</a></li>';

//				<!-- Boutons des pages -->

				
				// on va créeer autant de boutons que l'on a de page(s) pour afficher tous les projet
				for($i = 1; $i <= $nbre_de_pages; $i++){
					
					//on va déterminer sur quelle page on se trouve et placer la class active
					if($i == $page_actuelle){
						$active = 'active';
					}else{
						$active = '';
					}
					
				     echo '<li class="page-item ' . $active . '"><a class="page-link" href="portfolio.php?page=' . $i . '">' . $i . '</a></li>';
				}
				
				



//				<!-- Flèche de droite -->
				// préparation pour le bouton SUIVANT
				$page_suivante = $page_actuelle + 1;
				if($page_actuelle == $nbre_de_pages){
					$page_suivante = $nbre_de_pages;
					$inactif ='disabled';
				}else{
					$inactif = '';
				}
				
				echo '<li class="page-item ' . $inactif . '"><a class="page-link" href="portfolio.php?page= ' . $page_suivante . '">&raquo;</a></li>';
				
					?>
			</ul>
		</div>


	</div><!-- END CONTAINER  -->

	<!-- FOOTER ------------------------------------------- -->
	<?php require_once 'includes/footer.php'; ?>

	<!-- ME(S) FICHIER(S) JAVASCRIPT(S) avant la fermeture de la balise BODY -->
	<?php require_once 'includes/scripts.php'; ?>

</body>

</html>
