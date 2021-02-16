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
			<h1 class="font-weight-bold pt-4">Services <span class="font-weight-normal">Subheading</span></h1>
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="">Home</a></li>
				<li class="breadcrumb-item">Services</li>
			</ul>

			<div class="row">
				
				<!-- COLONNE 1 -->
				<div class="col-lg-6 my-3">

					<div class="card">
						<img class="card-img-top" src="images/proj1.jpg" alt="placeholder" />
						<div class="card-body">
							<a class="streched-link" href="" target="_blank">
								<h4 class="card-title font-weight-normal">Project One</h4>
							</a>
							<p class="card-text">Suspendisse potenti. Quisque aliquet dui eu ex faucibus pulvinar. Pellentesque malesuada tortor eu sollicitudin molestie. Donec cursus turpis nec ante volutpat tincidunt nec et metus. Curabitur tortor magna, laoreet vitae aliquam eu, tempus porttitor felis. Ut ultrices augue eget mi tincidunt aliquet</p>
						</div>
					</div>

				</div>
				
				<!-- COLONNE 2 -->
				<div class="col-lg-6 my-3">

					<div class="card">
						<img class="card-img-top" src="images/proj2.jpg" alt="placeholder" />
						<div class="card-body">
							<a class="streched-link" href="" target="_blank">
								<h4 class="card-title font-weight-normal">Project Two</h4>
							</a>
							<p class="card-text">Suspendisse potenti. Quisque aliquet dui eu ex faucibus pulvinar. Pellentesque malesuada tortor eu sollicitudin molestie. Donec cursus turpis nec ante volutpat tincidunt nec et metus. Curabitur tortor magna, laoreet vitae aliquam eu, tempus porttitor felis. Ut ultrices augue eget mi tincidunt aliquet</p>
						</div>
					</div>

				</div>
				
				<!-- COLONNE 3 -->
				<div class="col-lg-6 my-3">

					<div class="card">
						<img class="card-img-top" src="images/proj3.jpg" alt="placeholder" />
						<div class="card-body">
							<a class="streched-link" href="" target="_blank">
								<h4 class="card-title font-weight-normal">Project Three</h4>
							</a>
							<p class="card-text">Suspendisse potenti. Quisque aliquet dui eu ex faucibus pulvinar. Pellentesque malesuada tortor eu sollicitudin molestie. Donec cursus turpis nec ante volutpat tincidunt nec et metus. Curabitur tortor magna, laoreet vitae aliquam eu, tempus porttitor felis. Ut ultrices augue eget mi tincidunt aliquet</p>
						</div>
					</div>

				</div>
				
				<!-- COLONNE 4 -->
				<div class="col-lg-6 my-3">

					<div class="card">
						<img class="card-img-top" src="images/proj4.jpg" alt="placeholder" />
						<div class="card-body">
							<a class="streched-link" href="" target="_blank">
								<h4 class="card-title font-weight-normal">Project Fourth</h4>
							</a>
							<p class="card-text">Suspendisse potenti. Quisque aliquet dui eu ex faucibus pulvinar. Pellentesque malesuada tortor eu sollicitudin molestie. Donec cursus turpis nec ante volutpat tincidunt nec et metus. Curabitur tortor magna, laoreet vitae aliquam eu, tempus porttitor felis. Ut ultrices augue eget mi tincidunt aliquet</p>
						</div>
					</div>

				</div>
				
				<!-- COLONNE 5 -->
				<div class="col-lg-6 my-3">

					<div class="card">
						<img class="card-img-top" src="images/proj5.jpg" alt="placeholder" />
						<div class="card-body">
							<a class="streched-link" href="" target="_blank">
								<h4 class="card-title font-weight-normal">Project Five</h4>
							</a>
							<p class="card-text">Suspendisse potenti. Quisque aliquet dui eu ex faucibus pulvinar. Pellentesque malesuada tortor eu sollicitudin molestie. Donec cursus turpis nec ante volutpat tincidunt nec et metus. Curabitur tortor magna, laoreet vitae aliquam eu, tempus porttitor felis. Ut ultrices augue eget mi tincidunt aliquet</p>
						</div>
					</div>

				</div>
				
				<!-- COLONNE 6 -->
				<div class="col-lg-6 my-3">

					<div class="card">
						<img class="card-img-top" src="images/proj6.jpg" alt="placeholder" />
						<div class="card-body">
							<a class="streched-link" href="" target="_blank">
								<h4 class="card-title font-weight-normal">Project Six</h4>
							</a>
							<p class="card-text">Suspendisse potenti. Quisque aliquet dui eu ex faucibus pulvinar. Pellentesque malesuada tortor eu sollicitudin molestie. Donec cursus turpis nec ante volutpat tincidunt nec et metus. Curabitur tortor magna, laoreet vitae aliquam eu, tempus porttitor felis. Ut ultrices augue eget mi tincidunt aliquet</p>
						</div>
					</div>

				</div>

			</div><!-- END ROW CARDS -->

			<div class="row justify-content-center"><!-- START ROW PAGINATION -->
			
				<ul class="pagination">
					<li class="page-item"><a class="page-link" href="">&laquo;</a></li>
					<li class="page-item active"><a class="page-link" href="">1</a></li>
					<li class="page-item"><a class="page-link" href="">2</a></li>
					<li class="page-item"><a class="page-link" href="">3</a></li>
					<li class="page-item"><a class="page-link" href="">&raquo;</a></li>
				</ul>
				
			</div><!-- END ROW PAGINATION -->


		</div><!-- END CONTAINER  -->
		
		<!-- FOOTER ------------------------------------------- -->
		<?php require_once 'includes/footer.php'; ?>
		
		<!-- ME(S) FICHIER(S) JAVASCRIPT(S) avant la fermeture de la balise BODY -->
		<?php require_once 'includes/scripts.php'; ?>

	</body>

</html>