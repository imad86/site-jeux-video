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
		<div class="container pb-2">
		
			<h1 class="font-weight-bold pt-4">404 <span class="font-weight-normal">Subheading</span></h1>
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="">Home</a></li>
				<li class="breadcrumb-item">404</li>
			</ul>
			
			<!-- JUMBOTRON -->
			<div class="jumbotron">

				<h2 class="display-2">404</h2>
				<p>The page you're looking for could not be found. Here are some helpful links to get you back on track:</p>
				
				<ul class="text-capitalize">
					<li><a href="index.html">Home</a></li>
					<li><a href="#">About</a></li>
					<li><a href="services.html">Service</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li>Portofio
						<ul>
							<li><a href="#">1 column portfolio</a></li>
							<li><a href="#">2 column portfolio</a></li>
							<li><a href="#">3 column portfolio</a></li>
							<li><a href="#">4 column portfolio</a></li>
							<li><a href="portofolio1.html">Portfolio item</a></li>
						</ul>
					</li>
					<li>Blog
						<ul>
							<li><a href="#">Blog home 1</a></li>
							<li><a href="#">Blog home 2</a></li>
							<li><a href="Blog.html">Blog post</a></li>
						</ul>
					</li>
					<li>Other Pages
						<ul>
							<li><a href="#">Full width page</a></li>
							<li><a href="#">Sidebar page</a></li>
							<li><a href="#">FAQ</a></li>
							<li><a href="404.html">404 page</a></li>
							<li><a href="#">Pricing table</a></li>
						</ul>
					</li>
				</ul>

			</div>

		</div><!-- CONTAINER END ------------------------------ -->
		
		<!-- FOOTER ------------------------------------------- -->
		<?php require_once 'includes/footer.php'; ?>
		
		<!-- ME(S) FICHIER(S) JAVASCRIPT(S) avant la fermeture de la balise BODY -->
		<?php require_once 'includes/scripts.php'; ?>
		
		<!-- JAVASCRIPT VERIFICATION FORMULAIRE -->
		<script src="js/formulaire.js"></script>
		
		<!-- JAVASCRIPT TOOLTIP -->
		<script src="js/tooltip.js"></script>
		
	</body>

</html>