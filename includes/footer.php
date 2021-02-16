<?php 
$footer = $connexion->query("SELECT * FROM footer");
$data_footer = $footer->fetch();

?>

<footer class="bg-dark text-center text-white py-5">
		<h4 class="text-uppercase font-weight-bold">
			<?= $data_footer['titre']; ?>
			
			<?php 
			
			$return = '';
			
			$network = $connexion->query("SELECT * FROM social_networks");
			while($data_network = $network->fetch()){
				$return .= '<a class="px-2" href="' . $data_network["lien"] . '" target="_blank">';
				$return .= '<i class="' . $data_network["icone"] . '"></i>';
				$return .= '</a>';
			}
			
			echo $return;
			?>
			
			
			
			
		</h4>
		<p><?= $data_footer['texte']; ?><a href="<?= $data_footer['conditions_lien']; ?>"><?= $data_footer['conditions_txt']; ?></a> - <a href="<?= $data_footer['termes_lien']; ?>"><?= $data_footer['termes_txt']; ?></a></p>
	<?php 
	$network->closeCursor();
	$footer->closeCursor();
	
	?>
	
	
	</footer>