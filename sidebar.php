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
			
			<!-- BREADCRUMB ------------------------------------->
			<h1 class="pt-4 mb-3">Sidebar Page <small>Subheading</small></h1>
			
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.html">Home</a>
				</li>
				<li class="breadcrumb-item active">Sidebar Page</li>
			</ol>
			
			<div class="row">
			
				<!-- LEFT COLUMN SIDEBAR ------------------------------->
				<div class="col-lg-3 mb-3">
					<!-- LIST-GROUP -->
					<div class="list-group">
						<a href="index.html" class="list-group-item list-group-item-action">Home</a>
						<a href="about.html" class="list-group-item list-group-item-action">About</a>
						<a href="services.html" class="list-group-item list-group-item-action">Services</a>
						<a href="contact.html" class="list-group-item list-group-item-action">Contact</a>
						<a href="portfolio-1-col.html" class="list-group-item list-group-item-action">1 Column Portfolio</a>
						<a href="portfolio-2-col.html" class="list-group-item list-group-item-action">2 Column Portfolio</a>
						<a href="portfolio-3-col.html" class="list-group-item list-group-item-action">3 Column Portfolio</a>
						<a href="portfolio-4-col.html" class="list-group-item list-group-item-action">4 Column Portfolio</a>
						<a href="portfolio-item.html" class="list-group-item list-group-item-action">Portfolio Item</a>
						<a href="blog-home-1.html" class="list-group-item list-group-item-action">Blog Home 1</a>
						<a href="blog-home-2.html" class="list-group-item list-group-item-action">Blog Home 2</a>
						<a href="blog-post.html" class="list-group-item list-group-item-action">Blog Post</a>
						<a href="full-width.html" class="list-group-item list-group-item-action">Full Width Page</a>
						<a href="sidebar.html" class="list-group-item list-group-item-action disabled active">Sidebar Page</a>
						<a href="faq.html" class="list-group-item list-group-item-action">FAQ</a>
						<a href="404.html" class="list-group-item list-group-item-action">404</a>
						<a href="pricing-table.html" class="list-group-item list-group-item-action">Pricing Table</a>
					</div>

				</div>
				
				<!-- RIGHT COLUMN --------------------------->
				<div class="col-lg-9 mb-4">
					<h2>Section Heading</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, et temporibus, facere perferendis veniam beatae non debitis, numquam blanditiis necessitatibus vel mollitia dolorum laudantium, voluptate dolores iure maxime ducimus fugit.</p>
				</div>
				
			</div>
			
		</div><!-- CONTAINER END -------------------------------->
		
		<!-- FOOTER ------------------------------------------- -->
		<?php require_once 'includes/footer.php'; ?>

		
		<!-- ME(S) FICHIER(S) JAVASCRIPT(S) avant la fermeture de la balise BODY -->
		<?php require_once 'includes/scripts.php'; ?>


	</body>

</html>