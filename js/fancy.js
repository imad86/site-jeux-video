$(document).ready(function(){
                
	// initialisation fancybox manuellement pour lui passer des options :
	$('[data-fancybox="gallery"]').fancybox({
		loop: true,                     // arrivé à la dernière image, on repasse à la 1ère
		slideShow: {                    // slideShow peut avoir plusieurs options, donc c'est un objet
			autoStart: true,            // le diaporama se lance automatique dès l'ouverture de l'image
			speed: 3000                // temps avant changement d'image
		},
		transitionEffect: "slide"    // options: "fade, slide, circular, tube, zoom-in-out, rotate"
	});
	
});