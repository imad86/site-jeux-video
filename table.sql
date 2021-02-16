-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 16 fév. 2021 à 23:23
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `lasalle`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `src` varchar(255) COLLATE utf8_bin NOT NULL,
  `alt` varchar(255) COLLATE utf8_bin NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `date` datetime NOT NULL,
  `text` longtext COLLATE utf8_bin NOT NULL,
  `author` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `src`, `alt`, `title`, `date`, `text`, `author`) VALUES
(1, 'images/001.jpg', 'Star Wars', 'Star Wars Fallen Order', '2020-08-26 13:13:24', 'Star Wars, rien qu’à l’évocation de ce nom, un frisson de plaisir devrait vous parcourir l’échine, que vous ayez connu la licence à travers le cinéma, les romans ou tout autre produit dérivé. A l’image des grands récits mythologiques, Star Wars s’est forgé à travers la vision de son créateur, George Lucas, mais aussi et surtout celles de milliers de créatifs. En résulte aujourd’hui un univers unique ayant certes emprunté aux grandes épopées d’aventure (qu’elles nous viennent de Grèce ou du Japon) mais ayant créé un lore si vaste, si dense, si précis, qu’il regroupe désormais des millions de fans dans le monde entier. Le jeu vidéo a très vite participé à cet état de faits puisque le premier titre à avoir vu le jour date de 1983. 36 ans plus tard, la franchise est toujours vaillante et après une traversée du désert de neuf ans, nous arrive enfin un nouveau jeu purement solo centré sur son gameplay mais aussi son univers.\r\nOn ne le dira jamais assez mais Star Wars Jedi : Fallen Order est une sorte d’OVNI, du moins dans le catalogue d’Electronic Arts. Sur le papier, le titre semble même complètement à contre courant de ce que nous propose depuis quelques années l’éditeur en dehors de sa gamme Sports : un jeu solo empruntant des idées à Uncharted, Tomb Raider, God of War, proposant un gameplay technique, exigeant, ne disposant d\'aucune micro transaction et n\'ayant pour l\'instant aucun DLC d\'annoncé. Oubliez également le moteur Frostbite, pourtant coutumier des productions de la firme américaine, cette fois, le tout profite de l’Unreal Engine 4. Respawn a, semble-t-il, eu une vraie latitude dans le développement. Cela se ressent et ne nous mentons pas, ça fait vraiment plaisir à voir.', 'Imad-'),
(2, 'images/002.jpg', 'The Division', 'The Division 2', '2020-11-26 14:24:24', 'RETOUR EN TERRAIN CONNU\r\nThe Division 2 : Warlords of New York - Un DLC dans la lignée de l\'expérience originale\r\nAvant d\'aller plus loin, précisons que le contenu de ce DLC est destiné aux joueurs de niveau 30 ayant atteint un niveau d\'équipement World Tier 5. Si toutefois vous n\'aviez pas parcouru en long en large et en travers les différents épisodes et que votre équipement n\'étiez pas à jour, pas d\'inquiétude, il sera possible, pour l\'un de vos personnages, d\'activer un boost qui mettra votre stuff à niveau pour vous permettre de vous lancer directement dans l\'extension. Et si toutefois vous n\'aviez pas d\'agent actif, mais que vous désiriez – curieusement – commencer The Division 2 par Tom Clancy\'s The Division 2 : Warlords of New York, il vous sera possible de créer un nouveau personnage directement au niveau 30. En revanche, sachez qu\'il vous sera impossible de retourner à Washington tant que vous n\'aurez pas achevé la quête principale du DLC, choix qui s\'avère tout de même assez discutable.\r\n\r\nThe Division 2 : Warlords of New York - Un DLC dans la lignée de l\'expérience originale\r\nCeci étant dit, et une fois la mission récupérée à Washington, un petit tour d\'hélicoptère vous emmène dans la ville de New York, dans une zone différente de celle du premier épisode de The Division. Exit rues enneigées et bonjour Manhattan ensoleillée. Mais si le temps est plus clément dans la zone, cette dernière n\'en reste par moins hostile. Aaron Keener, agent devenu renégat, a assis son influence sur certaines zones de la Grande Pomme et a réparti certains de ses lieutenants dans la ville. En tant qu\'agent, il vous appartiendra de localiser le renégat. Pour ce faire, il s\'agira de vous rendre dans l\'une des quatre nouvelles zones de jeu dans l\'ordre de votre choix, d\'interroger la population locale afin de remonter la piste de votre cible et de préalablement tuer ses principaux sbires. Le scénario est assez convenu et même s\'il n\'est pas désagréable de croiser quelques visages familiers aperçus dans le premier The Division, l\'ensemble de la narration ne restera pas dans les mémoires.\r\n\r\nThe Division 2 : Warlords of New York - Un DLC dans la lignée de l\'expérience originaleThe Division 2 : Warlords of New York - Un DLC dans la lignée de l\'expérience originale\r\nUNE BOUCLE DE GAMEPLAY AGRÉABLE MAIS PRESQUE INCHANGÉE\r\nConçu comme une sorte d\'épisode augmenté, Warlords of New York se décompose en 5 missions principales ainsi que d\'une poignée de quêtes annexes et il vous faudra entre 5 à 7 heures environ pour en faire tout le tour. Nul besoin de chercher un quelconque bouleversement de The Division 2 dans le gameplay : les choses restent dans la droite lignée de l\'expérience principale, à savoir la progression dans des zones toujours soigneusement façonnées et l\'obligation de vous frayer votre chemin à coups de flingues jusqu\'au boss de la mission. Encore une fois, nous saluerons le travail réalisé sur certaines missions, qui proposent des environnements remplis de détails, variés dans leurs atmosphères et leurs architectures. En somme, c\'est à nouveau un vrai régal que d\'arpenter les zones scénarisées pour savoir quelles surprises visuelles les développeurs nous ont réservées. Notez d\'ailleurs que certains combats de boss, assez retors, font montre d\'une originalité un peu plus appuyée que précédemment dans leur structure et dans l\'ensemble, il conviendra de jouer sur la prudence et la mobilité de votre agent pour venir à bout de ces adversaires tenaces. Terrasser chacun des 4 lieutenants vous permettra d\'ailleurs de déverrouiller autant de nouveaux gadgets, chacun reprenant à son compte les capacités principales du boss affronté. Bien qu\'un peu anecdotique en pratique, la présence de nouveaux jouets de ce type permet de varier les plaisirs et de repenser au moins partiellement la manière de jouer son agent.\r\n\r\nThe Division 2 : Warlords of New York - Un DLC dans la lignée de l\'expérience originaleThe Division 2 : Warlords of New York - Un DLC dans la lignée de l\'expérience originaleThe Division 2 : Warlords of New York - Un DLC dans la lignée de l\'expérience originale\r\nLes nettoyeurs, ennemis assez portés sur la pyrotechnie, sont quant à eux plus agressifs que les Black Tusk et certains d\'entre eux sont tout simplement redoutables. Avec l\'allonge énorme de leur lance-flamme et la protection solide de leur combinaison, les nettoyeurs sont des adversaires à ne pas sous-estimer et leur philosophie de combat contraint le joueur à rester en mouvement, ôtant aux combats de Warlords of New York la dimension statique que l\'on pouvait à certains moments lui reprocher.\r\n\r\nThe Division 2 : Warlords of New York - Un DLC dans la lignée de l\'expérience originaleThe Division 2 : Warlords of New York - Un DLC dans la lignée de l\'expérience originaleThe Division 2 : Warlords of New York - Un DLC dans la lignée de l\'expérience originale\r\nToute cette progression dans l\'aventure vous permettra d\'accéder au niveau 40 (niveau d\'ailleurs requis pour accéder à la mission finale, vous « contraignant » à faire des activités et des missions annexes pour grimper en niveau) et donc d\'accéder à un nouveau système de progression. Effectivement, le end game de Warlords of New York déverrouille un « niveau SHD » qui vient remplacer les traditionnelles caches de maîtrise du terrain.\r\n\r\nThe Division 2 : Warlords of New York - Un DLC dans la lignée de l\'expérience originale\r\nAinsi, à mesure que vous continuerez à jouer et à engranger de l\'expérience, vous pourrez répartir des points parmi 4 branches à chaque niveau SHD obtenu. Vous pourrez ainsi choisir d\'augmenter certaines de vos capacités défensives, offensives, l\'efficacité de vos compétences ou tout simplement votre précision, stabilité ou vitesse de rechargement. Cette nouvelle manière de progresser vient seconder la refonte de votre équipement qui dont la modulation est désormais plus simple à consulter grâce à une interface remaniée et plus flexible afin que chaque joueur puisse adapter ses statistiques à sa manière de jouer, via un système de recalibration plus explicite. La fin du jeu sera également synonyme du lancement de saisons, qui, sur une durée de 3 mois, proposeront diverses missions scénarisées calquées sur le schéma de la campagne de cette extension et qui proposera donc des leaders à éliminer ainsi que de multiples activités dans l\'open world dont vous pouvez d\'ailleurs désormais régler la difficulté à tout moment. Ces deux nouveaux éléments permettent de rendre le end game de The Division 2 plus attractive, mais n\'ôte pour autant la dimension farm qui pourrait en rebuter certains.', 'Imad-'),
(3, 'images/003.jpg', 'Tomb Raider', 'Tomb Raider', '2020-11-24 06:27:09', 'Vous ne le savez peut-être pas, mais le monde du jeu vidéo vit comme celui du cinéma, au rythme du star-system. Les choses vont parfois très vite : en quelques années, un acteur ou un personnage jusqu\'alors incontournable disparaît peu à peu, ringardisé par l\'arrivée d\'une nouvelle génération d’icônes, virtuelles ou non. C\'est ce qu\'a vécu Lara Croft, star des années 90, mise sur la paille par des Kratos, des Nathan Drake, ou des Master Chief, les idôles post-bug de l\'an 2000. Mais la bougresse a fort bien réussi son come-back en 2013 et désormais, l\'Anglaise est redevenue l\'un de ces personnages incontournables du monde du jeu vidéo. Alors forcément, sa seconde aventure \"nouvelle formule\" était particulièrement attendue... Et elle ne devrait décevoir personne.\r\n\r\nNotre vidéo-test de Rise of the Tomb Raider\r\n\r\n\r\nQue vaut cette version PS4 ?\r\nNous n\'allions évidemment pas réécrire notre test originel, qui reste en l\'état représentatif de notre avis sur les dernières aventures de Lara Croft. Il convenait toutefois d\'ajouter quelques détails sur les nouveautés de cette version, qui s\'avère sans surprise être la meilleure façon de découvrir Rise of the Tomb Raider. Précisons d\'emblée que les joueurs PC et Xbox One peuvent également bénéficier de l\'ensemble de ces nouveautés via une mise à jour. Celles-ci sont au nombre de 3 et proposent chacune une nouvelle façon d\'aborder le titre : de la survie multijoueur avec le mode endurance en coop, de l\'horreur oppressante via \"Le cauchemar de Lara\" et une section solo axée enquête via \"Les liens du sang\".\r\n\r\nCette dernière vous occupera environ une heure - voire un peu plus si vous projetez de boucler la séquence à 100% - et est exclusivement basée sur des activités de recherche : de nombreux documents sont à retrouver au coeur du Manoir Croft, théâtre de cette brève aventure. Principal intérêt de la séquence, revenir aux premières amours de Lara Croft en marchant, d\'une part, sur les pas de son paternel qui a disséminé ci et la de quoi lancer une vaste chasse au trésor au sein du manoir, tout en s\'adonnant pour cela à plusieurs mini-puzzles et énigmes. Si l\'ensemble n\'est pas extrêmement complexe, l\'exploration du manoir s\'avère plaisante et riche en informations sur la famille Croft.\r\n\r\nUn extrait de la fameuse campagne \"Les liens du sang\"\r\n\r\n\r\nL\'ajout de la coopération au mode Endurance est sans doute la meilleure trouvaille de cette édition 20e anniversaire. Déjà intéressant, il s\'offre une nouvelle raison d\'être essayée par les amateurs de survie ayant un ami sous la main. Sachez simplement que vous pourrez réanimer votre coéquipier et que, sans surprise, l\'ensemble des ingrédients faisant le sel de la survie sont de la partie : jauge de faim, de froid, présence d\'animaux et d\'ennemis humains, séquence d\'exfiltration sous tension à cause des soldats prêts à vous plomber la carcasse... Le résultat est suffisamment convaincant pour que l\'on revienne sur le mode entre deux avancées du solo.\r\n\r\nPour rappel du concept : 10 minutes de survie dans le mode \"Endurance\" en solo\r\n\r\n\r\nOn conclura avec le petit dernier de la classe, bonnet d\'âne des nouveautés qui manque foncièrement de corps pour qu\'on daigne lui accorder plus qu\'un simple coup d\'oeil : Le cauchemar de Lara nous place à nouveau dans le manoir Croft, mais Lara doit cette fois-ci détruire des crânes volants en prenant soin d\'éviter les zombies errant dans les couloirs. Pas vraiment fun et peu maniable à cause d\'un décor chargé et donc peu approprié pour les grosses phases de fuite, il ne devrait pas vous accrocher bien longtemps malgré une idée de base loin de ridicule. Le placement aléatoire de Lara et des zombies à chaque partie rend même parfois votre partie perdue d\'avance, constat un poil frustrant pour les amateurs d\'infiltration/survie au coeur des décharnés.\r\n\r\nBon, parfois, c\'est aussi le skill du testeur qui fait défaut\r\n\r\n\r\nPour le reste, cette version PlayStation 4 s\'avère en tout point similaire à son homologue Xbox One, raison pour laquelle nous vous proposons ci-dessous notre test originel réalisé sur cette version il y a un an.\r\n\r\nNOTRE TEST DE RISE OF THE TOMB RAIDER\r\nEn 2013 donc, Tomb Raider faisait son grand retour, grâce à un reboot orchestré de concert par Square Enix et Crystal Dynamics. Les joueurs, habitués à une Lara Croft sûre d\'elle, impétueuse, et finalement presque sur-humaine, découvraient médusés les pérégrinations d\'une jeune adulte soudainement confrontée à la violence du monde, et à la barbarie des hommes. La Lara Croft façon 2013 morflait méchamment, sans doute trop d\'ailleurs, jusqu\'à se changer petit à petit en déesse vengeresse, nettement plus combative après des heures de jeu... et de torture. Voir cette icône \"rabaissée\" au rang de simple mortelle, d\'un vulnérabilité et d\'une fragilité en fait très humaine, avait créé un véritable choc. Pourtant ce parti-pris avait plu et Tomb Raider fut un succès. Une suite était donc à prévoir, mais il fallait s\'attendre à vivre quelque chose de différent... La suite devait revenir sur certains des gros défauts de Tomb Raider, tandis qu\'elle ne pourrait plus compter sur sa plus grande force : l\'évolution du personnage central, au cours du jeu. Pourtant, avec Rise of the Tomb Raider, Crystal Dynamics réussit une seconde fois à nous scotcher à notre manette, avec une aventure trépidante et pleine d\'action, de mystère et de magie.\r\n\r\nÀ propos des captures d\'écran\r\nIl arrive parfois que certains jeux rendent mal, une fois capturés sous la forme d\'images. Cela arrive peu souvent, heureusement, mais c\'est hélas le cas de Rise of the Tomb Raider : les images que vous trouverez dans ce test ne font pas tout à fait honneur au jeu de Crystal Dynamics.\r\nLA FEMME QUI TOMBE À PIQUE\r\nRise of the Tomb Raider : l\'édition ultime\r\nProfitez bien de la chaleur de la Syrie, ça ne durera pas.\r\nLara est donc de retour, bien déterminée à botter des fesses pour atteindre son objectif. Dans cette nouvelle aventure, elle s\'engage dans une folle course-poursuite après un artefact source d\'immortalité, une puissance qui attise la convoitise d\'une secte chrétienne millénaire. Son voyage la conduira de Syrie jusqu\'en Sibérie, où se déroulera l\'essentiel de l\'aventure. Si je préfère bien évidemment ne rien vous dire du scénario, je souhaiterais tout de même préciser que ce dernier n\'est pas très recherché, sans pour autant que cela se ressente manette en main. La star du jeu, une fois de plus, c\'est Lara : notre jeune archéologue a pris du galon et si l\'épisode du Yamatai et des Solarii l\'a visiblement marqué à vie, il lui a également permis de passer un cap. Lara est désormais beaucoup plus sûre d\'elle, et on la surprend plusieurs fois dans le jeu à jurer, à insulter ses ennemis et à prendre des décisions radicales. Parce qu\'elle ne fait pas que parler : ses capacités létales et sa volonté sont à la hauteur. Quelques troufions suréquipés font des misères aux gentils locaux ? Pas de soucis, Miss Croft s\'y rend l\'arme au poing et leur fait passer le sale quart d\'heure qu\'ils méritent.\r\n\r\nFace aux Trinitaires, Lara fait preuve d\'une grande assurance\r\n\r\nRise of the Tomb Raider : l\'édition ultimeRise of the Tomb Raider : l\'édition ultimeRise of the Tomb Raider : l\'édition ultime\r\nRise of the Tomb Raider : l\'édition ultime\r\nOn continue d\'avoir mal pour elle.\r\nOn ne sent donc plus la fragilité qui la rendait si intéressante il y a deux ans, mais sa nouvelle assurance est toutefois tempérée par une certaine naïveté qui continue de lui jouer des tours. On prend plaisir à découvrir tout au long du jeu sa personnalité, si radicalement différente de ce que l\'on savait de l\'icône que l\'on connaissait avant 2013. Le tout est rendu à la perfection par la modélisation de son visage, particulièrement expressif en toutes circonstances. Pour nous rappeler que malgré son évolution, elle reste une humaine comme les autres, son corps se recouvre régulièrement de coupures, éraflures et de sang, d\'un réalisme glaçant. Bref clairement, l\'intérêt principal du jeu, c\'est cette nouvelle Lara Croft, et l\'on aura à cœur de découvrir ce qui lui tombera sur le museau à chaque sortie de grotte, au prochain virage, à la moindre porte à ouvrir.\r\n\r\nSkill ou non, la pauvre Lara continue de jouer de malchance\r\n\r\nRise of the Tomb Raider : l\'édition ultimeRise of the Tomb Raider : l\'édition ultimeRise of the Tomb Raider : l\'édition ultime\r\nUNE AVENTURE HALETANTE\r\nRise of the Tomb Raider : l\'édition ultime\r\nLes Trinitaires répandent le sang depuis bien longtemps.\r\nSi dans Tomb Raider, il était surtout question de survivre, de fuir le Yamatai tout en en apprenant plus sur la fameuse Reine Himiko et ses Gardes Tempêtes, Rise of The Tomb Raider suit lui un chemin beaucoup plus classique pour la série. Il s\'agit ici de chercher un item aux pouvoirs miraculeux, en faisant en sorte de mettre la main dessus avant la bande d\'affreux jojos qui serviront d\'ennemis. Manichéen, Rise of the Tomb Raider ? Pas vraiment puisqu\'en avançant dans le jeu, on se rend compte que les méchants ne sont peut-être pas tous si méchants, qu\'ils doutent de leurs leaders, que les leaders doutent de leur hiérarchie. On comprend que les Trinitaires, qui se présentent sous la forme d\'une secte chrétienne extrémiste, ont en fait un héritage immense, remontant au Moyen Age, à une époque où ils agissaient directement mais secrètement sous les ordres du Pape en personne. Et c\'est tout Rise of the Tomb Raider qui nous fait voyager dans le passé, puisqu\'à mesure que Lara progressera dans le jeu, elle en apprendra plus sur les Trinitaires mais surtout sur l\'homme qu\'ils cherchaient à éliminer, un mystérieux prophète qui aurait possédé la Source divine. Et bien entendu, c\'est au joueur de faire l\'effort de chercher des documents ou de vieilles fresques pour comprendre tout cela. Un mini-travail d\'archéologie, en fin de compte, simple mais qui nous rappelle qu\'avant d\'être une porte-flingue, Lara est avant tout un rat de bibliothèque.\r\n\r\nEn remontant les pistes du prophète, Lara traverse le temps et l\'espace.\r\n\r\nRise of the Tomb Raider : l\'édition ultimeRise of the Tomb Raider : l\'édition ultime\r\nÀ vous de jouer les archéologues en inspectant mosaïques, textes médievaux ou les nombreux objets anciens que vous trouverez\r\n\r\nRise of the Tomb Raider : l\'édition ultimeRise of the Tomb Raider : l\'édition ultime\r\nUn mystère millénaire, de l\'ésotérisme et une touche de complotisme, voilà de quoi faire de ce Rise of the Tomb Raider un classique du genre. Trop classique peut-être ? Non car si le scénario reste finalement assez basique, le jeu prend le temps de fouiller le passé des forces en présence afin de maintenir éveillé l\'intérêt du joueur. Et surtout, surtout, il dispose d\'une mise en scène dans la lignée de ce que proposait le jeu précédent, et son modèle, la série des Uncharted. Explosions, avalanches, éboulements, glissement de terrain, tout arrive à la malheureuse archéologue qui bien souvent ne peut compter que sur son agilité et ses compétences nouvellement acquises pour s\'en sortir. Toutefois, il est possible que certains joueurs pointent du doigt la présence de QTE et les scripts qui se déclenchent en pagaille, mais force est de constater que cela fonctionne à la perfection et que de bout en bout, on ne souhaite qu\'une seule chose : savoir ce qu\'il va se passer une fois le danger évité. Cela étant, le jeu reste relativement classique et de ce point de vue là, il devrait moins marquer les joueurs que le reboot, si diamétralement différent de ce que l\'on connaissait de Tomb Raider jusque là.\r\n\r\nLARA CRAFT\r\nRise of the Tomb Raider : l\'édition ultime\r\nIl est toujours possible d\'améliorer son équipement\r\nLe premier Tomb Raider permettait de modifier et d\'améliorer les armes de Lara. Cette fois-ci, le crafting va un peu plus loin et enrichit quelque peu l\'expérience de jeu. Il faudra arpenter les différents niveaux pour amasser bois, tissus, peaux d\'animaux, champignons et j\'en passe pour bricoler des munitions spéciales, remplir son carquois ou simplement l\'agrandir, lui ou les différentes cartouchières de notre jeune archéologue. S\'il semblait assez superficiel dans le premier jeu, le craft impose ici une certaine patience, tout du moins dans les premières heures de l\'aventure. Un ours vous barre la route ? Ne pensez pas l\'abattre avec votre petit arc les rigolos : il faudra partir à la recherche de champignons vénéneux et d\'autres composants pour créer des flèches empoisonnées, plus à même d\'affaiblir le belliqueux ursidé. À termes, on débloquera de nouvelles compétences qui nous permettront de ramasser plus de stuff en faisant les poches de nos victimes, ou de repérer à l\'écran les arbres, nids et caisses qui pourraient contenir plumes, branches et pièces mécaniques. Si au début on compte chacune des flèches que l\'on tire, c\'est moins le cas passé quelques heures de jeu. Ce qui est peut-être dommage, aussi je conseillerai de choisir intelligemment la façon dont vous dépenserez vos points de compétence.\r\n\r\nOn continue d\'attribuer les points de compétence sur différentes caractéristiques\r\n\r\nRise of the Tomb Raider : l\'édition ultimeRise of the Tomb Raider : l\'édition ultime\r\nIl est bien entendu toujours possible d\'améliorer ses armes et l\'on remarque que la chose est moins aisée que précédemment. Les pièces mécaniques, notamment, sont plus rares, ce qui vous demandera de choisir les améliorations à débloquer en fonction de ce qui pourrait bientôt vous tomber sur la mouille. Le choix n\'est pas non plus cornélien puisqu\'en étant patient et en jouant bien, vous ne devriez pas être trop limités. Cela vous demandera en revanche de bien regarder autour de vous et ne pas hésiter à explorer les zones accessibles.\r\n\r\nTiens donc, ça serait bien utile, tout ça\r\n\r\nRise of the Tomb Raider : l\'édition ultime\r\nLARA L\'EXPLORATRICE\r\nRise of the Tomb Raider : l\'édition ultime\r\nCette grande vallée n\'est que l\'un des niveaux de Rise of the Tomb Raider\r\nC\'est l\'une des grosses critiques qu\'avaient fait les fans de Tomb Raider au reboot : avant lui, Tomb Raider était un jeu typé action/aventure et il fallait résoudre des énigmes et explorer les niveaux que l\'on traversait pour trouver clés, passages cachés, armes... S\'il était possible de visiter quelques tombeaux et d\'y résoudre de malins petits puzzles, reconnaissons que Tomb Raider version 2013 pouvait se jouer en ligne droite, rapprochant les aventures de Lara Croft de celles de Nathan Drake. Crystal Dynamics n\'a pas fait la sourde oreille, et de fait, Rise of the Tomb Raider est plus \"ouvert\". Il existe désormais de nombreuses petites zones à explorer, et toutes regorgent de secrets qu\'il vous faudra trouver. Parfois il suffit simplement de revenir sur ses pas pour utiliser un nouvel outil, parfois de repérer une fissure dans un mur. On comptera également plusieurs Tombeaux, mais également des grottes à explorer avec prudence : si la récompense est attirante, il faudra tout de même veiller aux quelques débris que l\'on pourrait trouver sur le sol . Généralement, la présence d\'os à même le sol est révélatrice : vous êtes peut-être entré dans la tanière d\'un ours, ou d\'une meute de loups ! Les tombeaux eux sont peut-être plus petits que dans le premier jeu, mais certains sont particulièrement sublimes. Tous apportent de la richesse au titre et une certaine variété. Conséquence : il y a toujours quelque chose à faire et l\'on ne s\'ennuie jamais.\r\n\r\nOn prend plaisir à découvrir et explorer les différentes grottes et passages secrets du jeu.\r\n\r\nRise of the Tomb Raider : l\'édition ultimeRise of the Tomb Raider : l\'édition ultime\r\nSquare Enix, Crystal Dynamics et Microsoft ont largement mis en avant l\'une des nouvelles compétences de Lara, à savoir la maîtrise des langues mortes et étrangères, ainsi que la possibilité d\'améliorer son niveau de traduction en trouvant dans le jeu des stèles, des vieux parchemins, etc. C\'est finalement la seule vraie déception de ce Rise of the Tomb Raider, en ce qui me concerne. La mécanique est finalement assez grossière et ne diffère pas vraiment des quêtes à XP classique. Il faudra simplement trouver et lire un maximum de paperasse et de gravures pour voir ses niveaux de grec, de mongole et de russe augmenter, donnant ainsi la possibilité de lire des textes plus complexes, certains donnant des indications finalement peu utiles, comme l\'emplacement de certains trésors. Rien de bien palpitant finalement, même si l\'on apprécie la tentative de justifier et de prouver les compétences plus cérébrales de Lara.\r\n\r\nLara passion traduction\r\n\r\nRise of the Tomb Raider : l\'édition ultimeRise of the Tomb Raider : l\'édition ultime\r\nBref si l\'on est encore loin d\'un The Elder Scrolls dans lequel le monde est d\'un gigantisme presque désespérant, Rise of the Tomb Raider propose tout de même une carte d\'une forte belle taille et surtout bien remplie, que ce soit d\'items à trouver, de grottes secrètes ou simplement de passages vers des zones de la carte que l\'on pensait inatteignables. De quoi contenter les amateur d\'exploration, en somme, et nous rappeler les plus belles heures de la série.\r\n\r\nBIEN ÉQUIPÉE POUR FAIRE FACE AU DANGER\r\nRise of the Tomb Raider : l\'édition ultime\r\nOn peut toujours opter pour une approche plus discrète.\r\nÀ sa sortie en 2013, Tomb Raider avait redéfini de nombreuses choses, à commencer par ses séquences d\'action. Les gunfight étaient particulièrement nerveux et ce n\'est pas ce nouveau jeu qui changera la donne. Surtout de désormais, notre Anglaise est capable de sprinter à volonté, et donc de mener la charge contre des ennemis parfois un peu cons, n\'ayons pas peur de le dire. Les divers contres que l\'on pourra acquérir via l\'arbre de compétence se montrent particulièrement intéressants en jeu, notamment lorsqu\'il s\'agit de finir un ennemi à terre à coup de fusil à pompe. Le feeling avec les armes est excellent, et mitrailler les bidasses de base est franchement plaisant. Les choses se corsent avec les ennemis en armure, mais l\'on apprend à utiliser roulade et contre pour trouver une ouverture et placer un méchant coup de piolet là où ça fait mal. Je conseillerais tout de même d\'élever d\'un cran la difficulté du jeu pour les amateurs de jeux un poil exigeants. Si Rise of the Tomb Raider n\'est pas un jeu vraiment difficile, le mode de difficulté éponyme est peut-être trop généreux, et l\'on ressentira plus de tension dans les niveaux de difficulté supérieur. Cela étant, par défaut le jeu permet de vivre une aventure fluide et extrêmement bien rythmée, que de trop nombreux « try again » pourraient perturber. À vous de choisir.\r\n\r\nRise of the Tomb Raider : l\'édition ultime\r\nAvec une flèche et de la corde, il est toujours possible d\'ouvrir certains pass\r\nCôté exploration, on retrouve cette composante Metroid qui vous forcera à revenir de temps à autre en arrière, pour utiliser des outils nouvellement acquis et qui vous permettront d\'accéder à de nouvelles zones. Dès le début du jeu, Lara est muni de deux piolets en métal et peut donc escalader les surfaces s\'y prêtant. Mais l\'on débloque ensuite un crochet pour ouvrir certaines portes, des flèches à planter et à escalader, un câble qui combiné à nos piolets fera un excellent grappin, et toujours la possibilité de créer des tyroliennes grâce à une flèche et de la corde. Dans de nombreuse séquences particulièrement intenses, il sera demandé au joueur de maîtriser chacun de ces outils pour passer rapidement de points en points, et sans se louper, au risque de se faire écraser sous un gros caillou (au hasard). Tout s\'enchaîne avec fluidité et donne naissance à des scènes particulièrement spectaculaires, renvoyant le courageux Nathan Drake à ses études. Le bellâtre aura fort à faire pour nous en mettre plein la vue dans Uncharted 4, puisque Rise of the Tomb Raider n\'a pas juste piqué la formule, il l\'a carrément sublimé. Voilà qui fait rêver quant à l\'avenir de ces deux franchises.\r\n\r\nLe jeu est rempli de séquences haletantes\r\n\r\nRise of the Tomb Raider : l\'édition ultimeRise of the Tomb Raider : l\'édition ultimeRise of the Tomb Raider : l\'édition ultime\r\nFRACTURE DE LA RÉTINE\r\nRise of the Tomb Raider : l\'édition ultime\r\n« Quest-ce que c\'est que ça ? » « Une lumière bleue. » «Et ça fait quoi ? » « Du bleu. »\r\nSi l\'on suit régulièrement l\'actualité, développer un jeu sur Xbox One paraît compliqué. Soit vous vous appelez Turn10 et vous êtes capables de pondre un jeu impeccable, tournant sans forcer à 60 images par seconde en 1080p, soit vous êtes plutôt 343 Industries et vous faites des compromis. C\'est ce qu\'a choisi de faire Crystal Dyanmics avec son jeu, en nous rappelant toutefois que l\'équipe en a sous la pédale. En 2013, Tomb Raider était superbe ; début 2014, c\'est Tomb Raider Definitive Edition qui venait confirmer le talent des Californiens. Leur nouvel effort est dans la même lignée. Le jeu est tout bonnement magnifique, notamment en intérieur ou dans les niveaux de taille moyenne, dans lesquels on appréciera la finesse des textures des rochers, de la pierre scuplté, des effets d\'eau et surtout de l\'incroyable travail fait sur la lumière. Visiter une grotte à la lumière d\'une bête loupiote est une véritable source d\'émerveillement.', 'Imad-'),
(4, 'images/004.jpg', 'Dragon', 'Dragon', '2020-01-26 01:10:20', 'Si la version Nintendo DS nous arrive en parallèle des moutures HD, le titre ici présent s\'avère légèrement différent de ses homologues. Bien qu\'on y retrouve les personnages du film d\'animation éponyme, l\'ensemble délaisse volontairement l\'aspect scénaristique pour se pencher davantage sur le gameplay. Est-ce une bonne chose ? A vous de voir mais voici d\'ores et déjà un début de réponse.\r\n\r\nDragons\r\nDans l\'absolu, rien ne différencie vraiment ce Dragons DS de ses grands frères sortis sur Xbox 360, PS3 et Wii. Pourtant, alors qu\'on y retrouve le jeune Harold et son dragon domestique embringués dans une histoire de tournoi de grosses bébêtes, la façon de présenter les choses est quelque peu différente. En fait, le point le plus important, loin d\'être à l\'avantage de cette version, vient de sa très grande linéarité. Ainsi, alors qu\'on peut très vite partir du village natal, notre liberté de mouvements sera constamment bridée par nos objectifs. En somme, après avoir parlé à un personnage, celui-ci nous donnera la plupart du temps une mission qui pourra se solder par un combat contre un dragon ou des objets à aller récupérer. Dans tous les cas, vous pourrez simplement vous déplacer en suivant un chemin prédéfini composé d\'étapes. L\'enjeu sera alors d\'atteindre un endroit spécifique en évitant la plupart des dragons patrouillant de manière aléatoire sur la map. Si jamais vous veniez à en rencontrer un, s\'ensuivrait alors une nouvelle rixe vous rapportant or et objets pour chaque victoire obtenue. En somme, bien qu\'on puisse éviter des combats superflus, cette méthode n\'est pas vraiment à préconiser, les divers éléments étant liés afin de permettre à votre dragon de progresser. Comment cela ? C\'est très simple.\r\n\r\nDragons\r\nUne fois que vous aurez rempli la jauge de rage, vos coups critiques seront plus nombreux.\r\nComme je le disais, chaque victoire vous rapportera piécettes, équipements et minerais. Si votre pactole vous servira simplement à acheter des items de soin ou de magie, les pièces d\'équipements, elles, vous seront autrement plus utiles. En effet, vous pourrez les utiliser sur votre dragon pour augmenter sa défense, son attaque, etc. Cet aspect est d\'ailleurs au centre de Dragons puisqu\'on pourra passer beaucoup de temps à modifier l\'aspect physique de son animal en changeant sa dentition, son épine dorsale, sa queue... Cependant, si ces caractéristiques s\'avèrent purement esthétiques, les armures auront un réel impact sur le résultat de vos batailles. Il sera donc intéressant de mettre à profit les schémas ou minerais cités plus haut afin de fabriquer ses propres plastrons, ses propres protège-patounes à l\'aide d\'un mini-jeu utilisant le micro et l\'écran tactile. Vous pourrez ainsi vous prendre pour un forgeron via plusieurs séquences singeant les étapes de la création d\'une pièce de métal. Ingénieux d\'autant que la qualité de votre armure dépendra de la dextérité avec laquelle vous aurez passé les épreuves. Pour autant, on regrettera que les développeurs n\'aient à aucun moment cherché à proposer un véritable challenge, une défaite nous renvoyant simplement sur la map avec l\'ensemble de nos points de vie et de magie. Idiot surtout qu\'on peut sauvegarder à tout moment. D\'autant plus incompréhensible que les affrontements restent relativement tactiques en nous demandant de jongler avec les techniques à notre disposition.\r\nDragons\r\nLes phases de shoot sont maniables mais bien trop longues.\r\nCes derniers, à la manière de ceux d\'un Pokémon Stadium, verront l\'affrontement de votre poulain, enfin de votre dragon, et d\'un adversaire à l\'intérieur d\'une arène. Vous aurez alors le choix entre plusieurs options. Outre le fait de pouvoir gober des objets remontant votre santé ou votre jauge de rage, vous aurez moyen de choisir entre six attaques différentes. Sachant qu\'il sera également permis de changer de tactiques entre chaque action, vous devrez bien prendre en compte les forces et faiblesses de votre adversaire. Si vous tombez par exemple sur un dragon à la peau très résistante, vous opterez plus facilement pour des attaques à base de flammes, celles-ci pouvant de plus occasionner des dégâts postérieurs durant plusieurs tours. On s\'amusera alors à switcher constamment entre nos attaques même si tout ceci prendra du temps et pourra donc nous faire perdre un tour. Malheureusement, si on dispose d\'une bonne palette d\'attaques, les combats auront tendance à tous se ressembler après seulement quelques heures. On pourra toujours essayer de fuir des combats inutiles à l\'aide d\'un mini-jeu utilisant le stylet mais on nous forcera constamment à affronter toujours plus d\'adversaires et donc à faire face à un rabâchage relativement fâcheux. Pour pallier ce problème, Griptonite a intégré une phase de vol synonyme de shoot\'em up vu de dessus. Marrant sauf que ces passages s\'avèrent beaucoup trop longs et inintéressants. Finalement, et bien que le gameplay soit relativement riche, Dragons n\'arrive pas à tenir la distance sur la portable de Nintendo. On aura beau y rajouter un mode multijoueur afin d\'affronter un pote en wi-fi, le coeur du titre, son mode solo, reste bien trop redondant, sans être forcément inintéressant, pour accrocher du début à la fin.', 'Imad-');

-- --------------------------------------------------------

--
-- Structure de la table `carousel`
--

CREATE TABLE `carousel` (
  `id` int(11) NOT NULL,
  `src` varchar(255) COLLATE utf8_bin NOT NULL,
  `alt` varchar(255) COLLATE utf8_bin NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `text` varchar(255) COLLATE utf8_bin NOT NULL,
  `button_txt` varchar(255) COLLATE utf8_bin NOT NULL,
  `link` varchar(255) COLLATE utf8_bin NOT NULL,
  `position` varchar(6) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `carousel`
--

INSERT INTO `carousel` (`id`, `src`, `alt`, `title`, `text`, `button_txt`, `link`, `position`) VALUES
(1, 'images/001.jpg', 'x-wing', 'first slide', 'Curabitur vulputate, nisi a sagittis placerat, nisl nibh pulvinar nisl.', 'En savoir plus', 'article.php?article_id=1', 'left'),
(2, 'images/002.jpg', 'New-York 2021', 'Second slide', 'Mauris sit amet elit lectus. Suspendisse porttitor tortor eget bibendum faucibus.', 'En savoir plus', 'article.php?article_id=2', 'center'),
(3, 'images/003.jpg', 'Forêt de broceliande', 'Third slide', 'Mauris sit amet elit lectus. Suspendisse porttitor tortor eget bibendum faucibus.', 'En savoir plus', 'article.php?article_id=3', 'right'),
(4, 'images/004.jpg', 'La créature sous le lit', 'Fourth slide', 'Donec venenatis, purus nec accumsan maximus, quam velit efficitur purus.', 'En savoir plus', 'article.php?article_id=4', 'center');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `commentary` varchar(255) COLLATE utf8_bin NOT NULL,
  `date` datetime NOT NULL,
  `verification` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `article_id`, `commentary`, `date`, `verification`) VALUES
(1, 2, 'Hello', '2020-11-26 17:07:29', 0),
(2, 3, 'This Article is Ok', '2020-11-26 17:12:50', 0),
(3, 4, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer tincidunt tempor tempus. Etiam gravida risus eleifend, gravida sapien laoreet, varius erat. ', '2020-11-26 17:14:50', 0),
(6, 4, 'Hello World!', '2020-11-26 17:16:53', 0);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `adress1` varchar(255) COLLATE utf8_bin NOT NULL,
  `adress2` varchar(255) COLLATE utf8_bin NOT NULL,
  `tel` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `horaires` varchar(255) COLLATE utf8_bin NOT NULL,
  `map` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `title`, `adress1`, `adress2`, `tel`, `email`, `horaires`, `map`) VALUES
(1, 'Contact Information', '39-43 avenue Jean-Jaurès', '18100 Vierzon', '02 48 75 52 34', 'cfc-vierzon@lasalle-bourges.net', 'Lundi - Vendredi de 8:00 à 18:00', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2709.2646428436424!2d2.04295211581123!3d47.23096912184347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47fad90b4ce42d8d%3A0x17e81699970fae9f!2s39%20Avenue%20Jean%20Jaur%C3%A8s%2C%2018100%20Vierzon!5e0!3m2!1sfr!2sfr!4v1596458090960!5m2!1sfr!2sfr\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>');

-- --------------------------------------------------------

--
-- Structure de la table `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `texte` varchar(255) COLLATE utf8_bin NOT NULL,
  `conditions_txt` varchar(255) COLLATE utf8_bin NOT NULL,
  `conditions_lien` varchar(255) COLLATE utf8_bin NOT NULL,
  `termes_txt` varchar(255) COLLATE utf8_bin NOT NULL,
  `termes_lien` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `footer`
--

INSERT INTO `footer` (`id`, `titre`, `texte`, `conditions_txt`, `conditions_lien`, `termes_txt`, `termes_lien`) VALUES
(1, 'social network', 'copyright &copy; mon site 2020', 'conditions générales d\'utilisation', 'terms.php', 'politique de confidentialité', 'privacy.php');

-- --------------------------------------------------------

--
-- Structure de la table `index_ads`
--

CREATE TABLE `index_ads` (
  `id` int(9) NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `text` text COLLATE utf8_bin NOT NULL,
  `button` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `index_ads`
--

INSERT INTO `index_ads` (`id`, `title`, `text`, `button`) VALUES
(1, 'Carte Titre 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eleifend tincidunt cursus. Phasellus ex metus, sagittis eu mollis eget, elementum vitae neque. Fusce non enim at turpis faucibus lacinia.', 'En savoir plus'),
(2, 'Carte Titre 2', 'Curabitur vulputate, nisi a sagittis placerat, nisl nibh pulvinar nisl, quis lobortis nisl augue sit amet urna. In justo leo, bibendum at maximus a, sollicitudin quis velit. Phasellus laoreet erat non nisi elementum, eu semper velit pulvinar. Nunc rhoncus ex ac nunc vulputate, at egestas ligula fringilla.', 'En savoir plus'),
(3, 'Carte Titre 3', 'Mauris gravida placerat dapibus. Nam blandit metus eget diam tempor fringilla. Mauris sit amet elit lectus. Suspendisse porttitor tortor eget bibendum faucibus. Donec venenatis, purus nec accumsan maximus, quam velit efficitur purus, sed fermentum enim enim et lacus. ', 'En savoir plus');

-- --------------------------------------------------------

--
-- Structure de la table `index_cards`
--

CREATE TABLE `index_cards` (
  `id` int(9) NOT NULL,
  `image` varchar(255) COLLATE utf8_bin NOT NULL,
  `alternatif` varchar(255) COLLATE utf8_bin NOT NULL,
  `link` varchar(255) COLLATE utf8_bin NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `text` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `index_cards`
--

INSERT INTO `index_cards` (`id`, `image`, `alternatif`, `link`, `title`, `text`) VALUES
(1, 'images/jv01.jpg', 'lol', 'article.php', 'league of legends', 'Venez vooir le test de notre jeu populaire'),
(2, 'images/jv02.jpg', 'Anthem', 'article.php', 'Anthem', 'Venez voir le test de ce third person shooter'),
(3, 'images/jv03.jpg', 'Avatar', 'article.php', 'Anvatar', 'Le dernier film de James Cameroon'),
(4, 'images/jv04.jpg', 'Dishonored', 'article.php', 'Dishonored', 'un fps immersif'),
(5, 'images/jv06.jpg', 'Harry Potter', 'article.php', 'Harry Potter', 'Dernieres nouvelles concernant le jeu'),
(6, 'images/jv05.jpg', 'Lord of the ring', 'article.php', 'Lord of the ring', 'vivez unz grande aventure dans ce rpg'),
(7, 'images/jv01.jpg', 'lol', 'article.php', 'league of legends', 'Venez vooir le test de notre jeu populaire');

-- --------------------------------------------------------

--
-- Structure de la table `index_informations`
--

CREATE TABLE `index_informations` (
  `id` int(9) NOT NULL,
  `title` varchar(255) COLLATE utf8_bin NOT NULL,
  `subtitle` varchar(255) COLLATE utf8_bin NOT NULL,
  `list` text COLLATE utf8_bin NOT NULL,
  `text` varchar(255) COLLATE utf8_bin NOT NULL,
  `src` varchar(255) COLLATE utf8_bin NOT NULL,
  `alt` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `index_informations`
--

INSERT INTO `index_informations` (`id`, `title`, `subtitle`, `list`, `text`, `src`, `alt`) VALUES
(1, 'éducation', 'Lorem ipsum dolor sit amet', 'Bootstrap v4;Font Awesome;Working contact form with validation;Unstyled page elements for easy customization;jQuery;Javascript', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eleifend tincidunt cursus. Phasellus ex metus, sagittis eu mollis eget, elementum vitae neque. Fusce non enim at turpis faucibus lacinia. Vivamus fermentum diam et vulputate malesuada. In a mo', 'images/jv07.jpg', 'Genshin Impact');

-- --------------------------------------------------------

--
-- Structure de la table `index_info_contact`
--

CREATE TABLE `index_info_contact` (
  `id` int(11) NOT NULL,
  `text` text COLLATE utf8_bin NOT NULL,
  `button_txt` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `index_info_contact`
--

INSERT INTO `index_info_contact` (`id`, `text`, `button_txt`) VALUES
(1, 'Nunc condimentum ligula vitae purus sodales, ac aliquet lectus sagittis. Morbi vestibulum nunc quis velit tristique blandit. Sed tincidunt justo nunc, ornare egestas ante eleifend a. Nulla sollicitudin cursus mi, eu tristique risus iaculis vitae. Duis fermentum varius mi, quis scelerisque orci faucibus eget.', 'Nous contacter');

-- --------------------------------------------------------

--
-- Structure de la table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_bin NOT NULL,
  `alt` varchar(255) COLLATE utf8_bin NOT NULL,
  `titre` varchar(255) COLLATE utf8_bin NOT NULL,
  `texte` text COLLATE utf8_bin NOT NULL,
  `lien_texte` varchar(255) COLLATE utf8_bin NOT NULL,
  `lien_url` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `portfolio`
--

INSERT INTO `portfolio` (`id`, `image`, `alt`, `titre`, `texte`, `lien_texte`, `lien_url`) VALUES
(1, 'http://placehold.it/700x300', 'image', 'Projet 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ligula tristique, convallis risus in, sagittis purus. Etiam tincidunt est at turpis cursus, at volutpat erat mollis. Sed eget eros mattis turpis feugiat consequat id vel ante. Quisque malesuada ligula velit, sed varius nisi feugiat ut. Praesent consequat lobortis dapibus. Duis convallis velit non sollicitudin mattis. Nullam sit amet nulla nec sem eleifend lobortis.', 'voir le projet', 'article.php'),
(2, 'http://placehold.it/700x300', 'image', 'Projet 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ligula tristique, convallis risus in, sagittis purus. Etiam tincidunt est at turpis cursus, at volutpat erat mollis. Sed eget eros mattis turpis feugiat consequat id vel ante. Quisque malesuada ligula velit, sed varius nisi feugiat ut. Praesent consequat lobortis dapibus. Duis convallis velit non sollicitudin mattis. Nullam sit amet nulla nec sem eleifend lobortis.', 'voir le projet', 'article.php'),
(3, 'http://placehold.it/700x300', 'image', 'Projet 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ligula tristique, convallis risus in, sagittis purus. Etiam tincidunt est at turpis cursus, at volutpat erat mollis. Sed eget eros mattis turpis feugiat consequat id vel ante. Quisque malesuada ligula velit, sed varius nisi feugiat ut. Praesent consequat lobortis dapibus. Duis convallis velit non sollicitudin mattis. Nullam sit amet nulla nec sem eleifend lobortis.', 'voir le projet', 'article.php'),
(4, 'http://placehold.it/700x300', 'image', 'Projet 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ligula tristique, convallis risus in, sagittis purus. Etiam tincidunt est at turpis cursus, at volutpat erat mollis. Sed eget eros mattis turpis feugiat consequat id vel ante. Quisque malesuada ligula velit, sed varius nisi feugiat ut. Praesent consequat lobortis dapibus. Duis convallis velit non sollicitudin mattis. Nullam sit amet nulla nec sem eleifend lobortis.', 'voir le projet', 'article.php'),
(5, 'http://placehold.it/700x300', 'image', 'Projet 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ligula tristique, convallis risus in, sagittis purus. Etiam tincidunt est at turpis cursus, at volutpat erat mollis. Sed eget eros mattis turpis feugiat consequat id vel ante. Quisque malesuada ligula velit, sed varius nisi feugiat ut. Praesent consequat lobortis dapibus. Duis convallis velit non sollicitudin mattis. Nullam sit amet nulla nec sem eleifend lobortis.', 'voir le projet', 'article.php'),
(6, 'http://placehold.it/700x300', 'image', 'Projet 6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ligula tristique, convallis risus in, sagittis purus. Etiam tincidunt est at turpis cursus, at volutpat erat mollis. Sed eget eros mattis turpis feugiat consequat id vel ante. Quisque malesuada ligula velit, sed varius nisi feugiat ut. Praesent consequat lobortis dapibus. Duis convallis velit non sollicitudin mattis. Nullam sit amet nulla nec sem eleifend lobortis.', 'voir le projet', 'article.php'),
(7, 'http://placehold.it/700x300', 'image', 'Projet 7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ligula tristique, convallis risus in, sagittis purus. Etiam tincidunt est at turpis cursus, at volutpat erat mollis. Sed eget eros mattis turpis feugiat consequat id vel ante. Quisque malesuada ligula velit, sed varius nisi feugiat ut. Praesent consequat lobortis dapibus. Duis convallis velit non sollicitudin mattis. Nullam sit amet nulla nec sem eleifend lobortis.', 'voir le projet', 'article.php'),
(8, 'http://placehold.it/700x300', 'image', 'Projet 8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed ligula tristique, convallis risus in, sagittis purus. Etiam tincidunt est at turpis cursus, at volutpat erat mollis. Sed eget eros mattis turpis feugiat consequat id vel ante. Quisque malesuada ligula velit, sed varius nisi feugiat ut. Praesent consequat lobortis dapibus. Duis convallis velit non sollicitudin mattis. Nullam sit amet nulla nec sem eleifend lobortis.', 'voir le projet', 'article.php');

-- --------------------------------------------------------

--
-- Structure de la table `social_networks`
--

CREATE TABLE `social_networks` (
  `id` int(11) NOT NULL,
  `icone` varchar(255) COLLATE utf8_bin NOT NULL,
  `lien` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `social_networks`
--

INSERT INTO `social_networks` (`id`, `icone`, `lien`) VALUES
(1, 'fab fa-facebook-f', 'http://facebook.com/donaldjtrump'),
(2, 'fab fa-twitter', 'https://twitter.com/donaldtrump'),
(3, 'fab fa-snapchat-ghost', 'https://snapchat.com/donaldtrump');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `index_ads`
--
ALTER TABLE `index_ads`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `index_cards`
--
ALTER TABLE `index_cards`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `index_informations`
--
ALTER TABLE `index_informations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `index_info_contact`
--
ALTER TABLE `index_info_contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `social_networks`
--
ALTER TABLE `social_networks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `index_ads`
--
ALTER TABLE `index_ads`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `index_cards`
--
ALTER TABLE `index_cards`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `index_informations`
--
ALTER TABLE `index_informations`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `index_info_contact`
--
ALTER TABLE `index_info_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `social_networks`
--
ALTER TABLE `social_networks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
