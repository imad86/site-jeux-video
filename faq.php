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
			<h1 class="pt-4">Sidebar Page <small>Subheading</small></h1>
			
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.html">Home</a>
				</li>
				<li class="breadcrumb-item active">FAQ</li>
			</ol>
			
			<!-- ACCORDEON -------------------------------------->
			<div id="accordion" class="pb-4">
				
				<!-- CARD 1 -->
				<div class="card">
					<div class="card-header" id="headingOne">
						<h5 class="mb-0">
							<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Question 1 ?
							</button>
						</h5>
					</div>
					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body">
							Réponse 1: Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						</div>
					</div>
				</div>
				
				<!-- CARD 2 -->
				<div class="card">
					<div class="card-header" id="headingTwo">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Question 2 ?
							</button>
						</h5>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						<div class="card-body">
							Réponse 2: Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						</div>
					</div>
				</div>
				
				<!-- CARD 3 -->
				<div class="card">
					<div class="card-header" id="headingThree">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								Question #3 ?
							</button>
						</h5>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
						<div class="card-body">
							Réponse 3: Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
						</div>
					</div>
				</div>
				
			</div>
			
		</div><!-- CONTAINER END -------------------------------->
		
		<!-- FOOTER ------------------------------------------- -->
		<?php require_once 'includes/footer.php'; ?>
		<!-- ME(S) FICHIER(S) JAVASCRIPT(S) avant la fermeture de la balise BODY -->
		<?php require_once 'includes/scripts.php'; ?>
		
	</body>

</html>