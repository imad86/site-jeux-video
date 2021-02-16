<div id="monCarousel" class="carousel slide carousel-fade mt-5" data-ride="carousel">
			
				<!-- LES INDICATEURS -->
				<ul class="carousel-indicators">
					
					
					<?php 
					// connexion a la BDD sur la table carousel pour compter le nombre d'enregistrements presents
					// SELECT COUNT(*) veut dire que l'on compte le nombre d'entree contenu dans la table carousel
					$indicators = $connexion->query('SELECT COUNT(*) FROM carousel');
					$num_indicators = $indicators->fetch();
					// pour connaitre le nombre d'entrée de notre array on consultera :
					// var_dump($num_indicators);
					
					// on cree un variable $active que l'on valorise avec une string "active"
					$active = "active";
					
					for($i = 0; $i < $num_indicators[0]; $i++){
						
						if($i != 0){
							$active = "";
						}
						echo '<li data-target="#monCarousel" data-slide-to="' . $i . '"class="' . $active . '"></li>';
					}					
					?>
				</ul>
				<?php
				$indicators->closeCursor();
				?>

				<!-- CAROUSEL SLIDES - IMAGES  taille 1140x300 recommandé  sinon 1920x300 si pas de container -->
				<div class="carousel-inner">
					<?php
					// on crée une variable $x pour compter le nombre de boucle du carousel
					$x = 1;
					// on cree un variable $active que l'on valorise avec une string "active"
					$active = "active";
					$carousel = $connexion->query("SELECT * FROM carousel");
					while($data_carousel = $carousel->fetch()){
						
						if($x != 1){
							$active = "";
						}
						
					?>
					<!-- SLIDE <?= $data_carousel['id']; ?> -->
					<div class="carousel-item <?= $active; ?>">
						<img class="img-fluid" src="<?= $data_carousel['src']; ?>" alt="<?= $data_carousel['alt']; ?>" />
						<!-- CAPTION DE L'IMAGE -->
						<div class="carousel-caption text-<?= $data_carousel['position']; ?>">
							<h4><?= $data_carousel['title']; ?></h4>
							<p><?= $data_carousel['text']; ?></p>
							<a class="btn btn-primary" href = "<?= $data_carousel['link']; ?>"><?= $data_carousel['button_txt']; ?></a>
						</div>
					</div>
					<?php 
						// on incremente la variable $x de 1
						$x ++;
						
					}
					$carousel->closeCursor();
					?>
				</div>

				<!-- NAVIGATION ARROW LEFT -->
				<a class="carousel-control-prev" href="#monCarousel" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				
				<!-- NAVIGATION ARROW RIGHT -->
				<a class="carousel-control-next" href="#monCarousel" data-slide="next">
					<!-- On peut utliser font awesome -->
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>