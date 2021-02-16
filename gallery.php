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
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	</head>

	
	<body>
		
		<!-- NAVIGATION ------------------------------------- -->
		<?php 
	
	require_once 'includes/navigation.php'
	
	?>
		
		<!-- CONTAINER START ---------------------------------- -->
		<div class="container">
			
			<!-- BREADCRUMB ------------------------------------->
			<h1 class="pt-4 mb-3">Portfolio Item <small>Subheading</small></h1>
			
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.html">Home</a>
				</li>
				<li class="breadcrumb-item active">Portfolio Item</li>
			</ol>
			
			<!-- PORTFOLIO ITEM CONTENT -------------------------->
			<div class="row">
				
				<!-- LEFT COLUMN -->
				<div class="col-md-8">
					<img class="img-fluid" src="http://placehold.it/750x500" alt="image" />
				</div>
				
				<!-- RIGHT COLUMN -->
				<div class="col-md-4">
					<h3 class="my-3">Project Description</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
					<h3 class="my-3">Project Details</h3>
					<ul>
						<li>Lorem Ipsum</li>
						<li>Dolor Sit Amet</li>
						<li>Consectetur</li>
						<li>Adipiscing Elit</li>
					</ul>
				</div>
				
			</div>
			
			<h3 class="my-4">Gallery</h3>

			<div class="row">

				<div class="col-md-3 col-sm-6 mb-4">
					<a data-fancybox="gallery" data-caption="Galerie image .1" href="http://placehold.it/1920x1080">
						<img class="img-fluid" src="http://placehold.it/500x300" alt="image" />
					</a>
				</div>

				<div class="col-md-3 col-sm-6 mb-4">
					<a data-fancybox="gallery" data-caption="Galerie image .2" href="http://placehold.it/1920x1080">
						<img class="img-fluid" src="http://placehold.it/500x300" alt="image" />
					</a>
				</div>
				
				<div class="col-md-3 col-sm-6 mb-4">
					<a data-fancybox="gallery" data-caption="Galerie image .3" href="http://placehold.it/1920x1080">
						<img class="img-fluid" src="http://placehold.it/500x300" alt="image" />
					</a>
				</div>
				
				<div class="col-md-3 col-sm-6 mb-4">
					<a data-fancybox="gallery" data-caption="Galerie image .4" href="http://placehold.it/1920x1080">
						<img class="img-fluid" src="http://placehold.it/500x300" alt="image" />
					</a>
				</div>
				
				<div class="col-md-3 col-sm-6 mb-4">
					<a data-fancybox="gallery" data-caption="Galerie image .5" href="http://placehold.it/1920x1080">
						<img class="img-fluid" src="http://placehold.it/500x300" alt="image" />
					</a>
				</div>
				
				<div class="col-md-3 col-sm-6 mb-4">
					<a data-fancybox="gallery" data-caption="Galerie image .6" href="http://placehold.it/1920x1080">
						<img class="img-fluid" src="http://placehold.it/500x300" alt="image" />
					</a>
				</div>
				
				<div class="col-md-3 col-sm-6 mb-4">
					<a data-fancybox="gallery" data-caption="Galerie image .7" href="http://placehold.it/1920x1080">
						<img class="img-fluid" src="http://placehold.it/500x300" alt="image" />
					</a>
				</div>
				
				<div class="col-md-3 col-sm-6 mb-4">
					<a data-fancybox="gallery" data-caption="Galerie image .8" href="http://placehold.it/1920x1080">
						<img class="img-fluid" src="http://placehold.it/500x300" alt="image" />
					</a>
				</div>
				
				<div class="col-md-3 col-sm-6 mb-4">
					<a data-fancybox="gallery" data-caption="Galerie image .9" href="http://placehold.it/1920x1080">
						<img class="img-fluid" src="http://placehold.it/500x300" alt="image" />
					</a>
				</div>
				
				<div class="col-md-3 col-sm-6 mb-4">
					<a data-fancybox="gallery" data-caption="Galerie image .10" href="http://placehold.it/1920x1080">
						<img class="img-fluid" src="http://placehold.it/500x300" alt="image" />
					</a>
				</div>
				
				<div class="col-md-3 col-sm-6 mb-4">
					<a data-fancybox="gallery" data-caption="Galerie image .11" href="http://placehold.it/1920x1080">
						<img class="img-fluid" src="http://placehold.it/500x300" alt="image" />
					</a>
				</div>
				
				<div class="col-md-3 col-sm-6 mb-4">
					<a data-fancybox="gallery" data-caption="Galerie image .12" href="http://placehold.it/1920x1080">
						<img class="img-fluid" src="http://placehold.it/500x300" alt="image" />
					</a>
				</div>

			</div>
			
			<!-- PAGINATION	------------------------------------->
			<ul class="pagination justify-content-center">
				<li class="page-item">
					<a class="page-link" href="#" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
						<span class="sr-only">Previous</span>
					</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">1</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">2</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">3</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
						<span class="sr-only">Next</span>
					</a>
				</li>
			</ul>
			
		</div><!-- CONTAINER END -------------------------------->
		
		<!-- FOOTER ------------------------------------------- -->
		<?php require_once 'includes/footer.php'; ?>
		
		<!-- ME(S) FICHIER(S) JAVASCRIPT(S) avant la fermeture de la balise BODY -->
		<?php require_once 'includes/scripts.php'; ?>
		<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
		
		<!-- JAVASCRIPT TOOLTIP -->
		<script src="js/fancy.js"></script>
		
		<!-- JAVASCRIPT TOOLTIP -->
		<script src="js/tooltip.js"></script>
		
	</body>

</html>