<!DOCTYPE HTML>
<html>
	<head>
		<link rel="shortcut icon" href="images/ico/favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.png" type="image/png">
		<link rel="icon" sizes="32x32" href="images/ico/favicon-32.png" type="image/png">
		<link rel="icon" sizes="64x64" href="images/ico/favicon-64.png" type="image/png">
		<link rel="icon" sizes="96x96" href="images/ico/favicon-96.png" type="image/png">
		<title>MMI D'OR 2020</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="stylesheet" href="assets/css/schredule.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="index.php" class="logo"><img src="images/Logo-Half.png" style="width: 50%;"></a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li ><a href="index.php">Les MMI d'or ?</a></li>
							<li class="active"><a href="films.php">Les Films</a></li>
							<li><a href="soiree.php">La soirée</a></li>
							<li><a href="transport.php">Le transport</a></li>
							<li><a href="commande.php">Commander sa place</a></li>
						</ul>
						<ul class="icons">
							<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
							<!-- <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li> -->
						</ul>
					</nav>

				<!-- Main -->
					<div id="main" style="text-align: center;">
              <!-- <?php
                  // include("./config/bd.php");
                  // $sql = "SELECT * from films";
                  // $query = $pdo->prepare($sql);
                  // $query->execute();
									//
                  // $tab = array();
                  // while($line = $query->fetch()){
                  //     $tab [] = array(
                  //       $line[0]['nom'],
                  //       $line[0]['affiche'],
                  //       $line[0]['synopsis'],
                  //       $line[0]['duree'],
									// 			$line[0]['url']);
                  // }
									//
                  // for($i=0;$i<count($tab);$i++){
                  //   $tab[0][i][0];
                  //   $tab[0][i][1];
                  //   $tab[0][i][2];
                  //   $tab[0][i][3];
                  //   $tab[0][i][4];
                  // }
                  // print_r($tab);

// 									$tab = [["2nuts","./images/movies/2nuts.png","2Nuts retrace l'histoire d'un frère, Ben, et de sa soeur, Jeanne, blessés par la faillite de la boulangerie familiale de leurs parents. Une faillite causée en grande partie par l'émergence d'une nouvelle entreprise de production de donuts ; 2Nuts. Les deux vont alors n'avoir plus qu'un but : découvrir l'origine d’un tel succès de 2Nuts et essayer de démanteler l'entreprise qui a détruit leur famille...","9",
// 														"https://www.youtube.com/watch?v=0RgHbZXDVS8"],
// 													["A moi","./images/movies/a_moi.png",,"Hugo sort du coma et se retrouve face à Jade, son docteur, mais aussi sa femme. Elle empêchera Hugo de vivre et fera en sorte de refréner sa curiosité, jusqu'au moment où il découvrira ce qu'il n'aurait pas dû découvrir.",
// 														"8","https://youtu.be/Ae0SJG26FXI"],
// 													["Betarisk","./images/movies/betarisk.png","Le court-métrage met en scène une application qui se nomme
// 															BetaRisk. Celle-ci est le cœur de l’histoire et le fil rouge.
// 															Elle permet aux utilisateurs de faire des défis et d’en proposer.
// 															Les défis sont validés grâce aux vidéos prises en live (qui font office
// 															de preuves). Ceux-ci peuvent être une simple vengeance entre
// 															voisinage avec une poubelle renversée et aller jusqu’au meurtre. Un
// 															système de niveau va permettre aux utilisateurs d'atteindre des défis
// 															de plus en plus corsés et d’être de plus en plus payés pour les
// 															accomplir. Le paiement s'effectue par bitcoins, car cette monnaie est
// 															actuellement en plein essor.
// 															Durant le court-métrage, nous allons donc découvrir la vie de
// 															Romain qui est adepte de l’application et de sa sœur, Betty, qui va
// 															essayer de le dissuader d’y jouer. La vie d’Ugo, le meilleur ami de
// 															Romain, va être remise en question à cause de cette application…","--","A venir"],
// 													["Bokeh","./images/movies/bokeh.png","Photographe de nature très renfermé, Paul part comme à son habitude faire un shooting en pleine nature. C’est alors qu'il fera la découverte d'un mystérieux objet lumineux possédant d'étranges propriétés électroniques. Le lendemain, il fera la connaissance d'Emma au détour d'un rayon. Elle se présentera à Paul en tant que débutante en photographie et profitera de l'occasion pour demander au jeune homme quelques conseils pratiques.
// 													    Au fil de leurs rendez-vous, une relation va naître entre les deux protagonistes...Une relation qui bouleversera à jamais la vie de Paul.","11","https://www.youtube.com/watch?v=vZAWJrVXdXs "],
// 													["Desirium","./images/movies/desirium.png","Organisation qui étudie le comportement humain, Desirium se penche sur la question « jusqu’où peut aller l’être humain pour un profit (ici de l’argent) ».
// Nous retrouvons donc ici Harold et Clothilde, deux jeunes adultes, qui tous deux seront cobayes de cette agence.
// Mais jusqu’où seront-ils prêt à aller pour gagner de l’argent ?","--","https://youtu.be/x7zoHKCz2cM"],
// 													["Future note","./images/movies/future_note.png","Alex, un jeune garçon mauvais élève est en classe en train d’écouter le cour, le professeur distribue les copies de la dernière interrogation et celui-ci en donnant sa copie lui explique que cela va être difficile pour lui de faire des études car l’examen final approche. Alex, dépité et complètement perdu dans ses pensées rentre chez lui et se fait une nouvelle fois sermonner par ses parents à cause de sa mauvaise note. Furieux, il décide de sortir pour se calmer et en chemin, il découvre un papier étrange. Sur le papier il est écrit «Future Note». En feuilletant celui-ci, Alex se rend compte que ce papier raconte ce qui vient de lui arriver dans les moindres détails. Au premier abord effrayé, il se décide à poursuivre la lecture du papier et d’aller au-delà du moment présent. Il s’endort sur le livre et se réveille en retard pour les cours. En courant sur la route il se souvient des obstacles qu’il va se prendre sur la route, il arrive à les éviter et arrive finalement en cours. Heureux d’être arrivé à l’heure, il s’empresse d’aller voir Pierre son meilleur ami mais au dernier moment il se bloque et se dit que c’est mieux de garder le secret, pour l’instant il se contente juste de lui dire que son stylo va tomber. Quelques secondes plus tard, le stylo tombe et Alex regarde Pierre en haussant les épaules. Durant la journée, tout va bien pour Alex, il lit souvent son cahier dans les couloirs pour mémoriser ce qui va se passer et ne pas avoir à le ressortir à chaque fois, après l’avoir rangé dans son sac il prend le chemin du retour avec Pierre, sur la route Alex anticipe toutes ses questions ce qui a tendance à agacer ce dernier qui le laisse pour continuer sa route tout seul. Alex ne se pose pas plus de questions et rentre chez lui, en rentrant il dit qu’il a hâte de manger les lasagnes de sa mère, celle-ci lui demande comment il sait, il lui répond que c’est une simple intuition. Affalé dans son lit, Alex jubile et se dit qu’il a hâte de voir la tête du prof quand il va réussir l’examen final. Le lendemain, avant de partir, il fouille dans son sac pour lire un peu ce qui va lui arriver aujourd’hui et ne trouve pas le cahier, il s’empresse de courir vers l’école. Arrivé là-bas il croise Pierre et lui demande s’il na pas vu un cahier avec son nom dessus, ce dernier lui répond que non et surenchérit en disant que son stylo va tomber, Alex en ramassant son stylo jette un regard dubitatif à Pierre qui répond avec un haussement d’épaules en souriant. En sortant de l’école Alex, derrière un arbre se pose et se dit que Pierre lui a volé le cahier en se rappelant qu’il avait laissé son sac en classe en allant aux toilettes, il réfléchit à une solution pour le récupérer, sinon il peut dire adieu à l’examen final. Pierre le voit au loin et lui demande si tout va bien, Alex répond oui, lui jette un regard noir puis décide de rentrer seul chez lui. La nuit tombée, Alex ne trouve pas le sommeil, il se retourne, son cœur bat la chamade, il décide de se lever et envoie un message à Pierre pour lui dire de sortir de chez lui. Arrivé chez lui, ce dernier lui dit de se dépêcher parce qu’il est tard, Alex commence à l’agripper par le col, le plaque au mur et lui crie dessus en lui demandant de lui rendre son cahier, Pierre le tient à son tour en lui répétant qu’il ne l’a pas et qu’il s’en fout de son cahier, qu’il ne sait pas ce qu’il y a dedans et que ça ne va surement pas l’aider pour l’examen final. Alex, furieux se retourne et commence à crier qu’il est foutu s’il ne l’a pas, il s’arrache les cheveux et s’écroule en pleurant. Pierre le regarde de haut avec pitié et lui fait comprendre qu’il est ridicule et que ce n’est pas un vulgaire cahier qui va changer sa vie. Alex, paniqué rentre chez lui et scrute les moindres recoins de sa maison, accablé par l’absence de son cahier, il décide de partir. Le lendemain, pendant l’examen final, le professeur fait l’appel et Alex ne répond pas présent, Pierre se retourne pour vérifier et le professeur lui fait comprendre qu’il ne viendra pas. En sortant de l’examen, la mère d’Alex appelle Pierre et lui fait comprendre qu’Alex est n’est plus là depuis hier et que son comportement a changé depuis la découverte d’un certain cahier, Pierre dit qu’il en a aussi entendu parler et en marchant tombe devant le Future Note.","--","https://www.youtube.com/watch?v=EYgi0_jFaO0"],
// 													["Perceptis","./images/movies/perceptis.png","Antoine, jeune scientifique de renom, décroche un entretien dans un nouveau centre de recherche.
// Cependant, il y découvre une pièce pour le moins étrange … Le contenu qu’elle renferme pourrait bien chambouler le monde et entraîner des répercussions irréversibles, mais Antoine est bien décidé à en apprendre davantage …","--","A venir"],
// 													["Surexposée","./images/movies/souvenir_perdu.png","Deux meilleures amies, Rachel qui rêve de devenir mannequin depuis toujours et Clémence, étudiante en droit. Rachel pense qu’elle arrivera sans soucis à percer dans ce milieu.
// Mais contre toute attente, c’est son amie Clémence qui va attirer l’oeil d’un photographe. ","--","A venir"],
// 													["Souvenir perdu","./images/movies/surexposee.png","Daniel Le Vallet est mort. Sa femme, Sarah, et leurs enfants, Gabrielle et Mike, doivent faire leurs deuils et passer la difficile épreuve du rendez-vous chez le notaire. Aucun d’entre eux ne sait à quoi il aura le droit.
// Sarah, mère de famille, est la première sur le testament. Sans surprise, elle recevra la totalité des biens immobiliers. Chose plus étrange cependant, elle aura également la bibliothèque personnelle de son mari. Cette dernière faisait surtout office de bureau pour le défunt et Sarah n’a jamais eu le droit d’y mettre les pieds, ni même de ne serait-ce que dépasser un peu le seuil de la porte.
// Gabrielle, l’aînée, aura droit à la voiture de son père. Ce n’est pas totalement inattendu; elle est même plutôt heureuse. C’était avec lui qu’elle avait appris à conduire et ils se retrouvaient souvent tous les deux à laver le véhicule ensemble, à rigoler, à jouer parfois avec l’eau et les éponges gorgées de savon.
// Enfin, Mike, le cadet, voit son tour arriver. Il recevra la guitare de son père, celle avec qui ce dernier lui jouait toujours mille et un morceaux de sa composition. Ce n’est peut-être pas aussi tape-à-l’oeil que la voiture de sa soeur mais il n’en a que faire. Ce legs a, à ses yeux, une valeur inégalable.
// Normalement, le testament devrait s’arrêter là. Daniel n’avait que peu d’amis proches et ne parlait quasiment plus à sa propre famille.
// Pourtant, voilà que le notaire ne donne pas mine de vouloir arrêter sa lecture. Un autre nom est prononcé. “Layla Anna Constance Carpentier”. Qui est donc cette femme dont ni Sarah, ni Gabrielle, ni Mike n’ont jamais entendue parler ? Pourquoi Daniel lui lègue-t-il quelque chose ? Que contient donc cette boîte blanche ?","7","https://youtu.be/4qiQMMjqGuo"]
// 												];
//
// 									echo"<div class=movies>";
// 										for($i=0;i<count($tab);$i++){
// 											echo"<div class=movie style=background-image:url(' .$tab[i,2]. ');>";
//											echo"</div>";
// 										}
//									echo"</div>";
//
//
// 											</div>
// 										</div>";
              ?> -->


						<div class=movies>
							<div class=movie>
								<h2>2nuts</h2>
									<div style="background-image: url(./images/movies/2nuts.png);">
									</div>
							</div>
							<div class=movie>
								<h2>A moi</h2>
									<div style="background-image: url(./images/movies/a_moi.png);">
									</div>
							</div>
							<div class=movie>
								<h2>Betarisk</h2>
									<div style="background-image: url(./images/movies/betarisk.png);">
									</div>
							</div>
							<div class=movie>
								<h2>Bokeh</h2>
									<div style="background-image: url(./images/movies/bokeh.png);">
									</div>
							</div>
							<div class=movie>
								<h2>Desirium</h2>
									<div style="background-image: url(./images/movies/desirium.png);">
									</div>
							</div>
							<div class=movie>
								<h2>Future note</h2>
									<div style="background-image: url(./images/movies/future_note.png);">
									</div>
							</div>
							<div class=movie>
								<h2>Perceptis</h2>
									<div style="background-image: url(./images/movies/perceptis.png);">
									</div>
							</div>
							<div class=movie>
								<h2>Souvenir<br> perdu</h2>
									<div style="background-image: url(./images/movies/souvenir_perdu.png);">
									</div>
							</div>
							<div class=movie>
								<h2>Surexposée</h2>
									<div style="background-image: url(./images/movies/surexposee.png);">
									</div>
							</div>
						</div>



					</div>




				<!-- Footer -->

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
					</div>



		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
