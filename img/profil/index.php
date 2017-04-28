<!DOCTYPE HTML>
<html>
	<head>
		
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <title>Portfolio</title>
        
        <!--Javascript-->
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script> 
        <script src="js/bootstrap.min.js"></script>  
        <script src="js/wow.js"></script>
        
        <script src="js/jquery.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/localscroll/jquery.localscroll.js"></script>
    	<script type="text/javascript" src="js/localscroll/jquery.scrollTo.js"></script>
    	<script type="text/javascript" src="js/lancement.js"></script>
        
        <!--CSS--> 
        <link rel="stylesheet" href="css/animate.css" >
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        <link rel="stylesheet" href="css/style.css" >
        
	</head>
    
    <body>
    
    	<script>
			new WOW().init();
		</script>
        
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">PREVOST-MAYNEN Alexis</a>
                </div>
        
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#profil">Profil</a></li>
                        <li><a href="#competence">Compétences</a></li>
                        <li><a href="#experience">Expérience</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            
            </div>
        </nav>
    	
        <section>
        	
            <!-- DEBUT - PROFIL -->
        	<div class="profil">
            	
                <div class="imgProfil" > 
                	<img src="img/profil/header.png" alt="Programmeur_en_recherche_de_stage">
                </div>
                <div id="profil"></div>
                <div class="contenuProfil">
                    <div class="container marketing">
                        <div class="row featurette">
                            <div class="texte">
                                <h1>Qui suis-je ?</h1>
                                
                                <p class="lead">
                                Je m'appelle Alexis Prevost-Maynen, j'ai 21ans. <br>Actuellement en Licence Informatique, 3éme année,  
                                je suis actuellement en stage de dernière année. Ce stage d'une durée de huit semaines, se déroule du 4 avril au 27 mai 2016. 
                                <br><br>
                                Futur ingénieur, je suis plus motivé que jamais, mon envie d'en apprendre toujours plus n'est jamais rassasié, <a href="#contact">contactez-moi</a>.
                               
								</p>
                            </div>
                            <div class="miniDiapo">
                            	<div id="slideshow">
                                    <div><img src="img/Moi2.jpg"  alt="moi"  /></div>
                                    <div><img src="img/profil/life.png" alt="lifeEnCode"  /> </div>
                                    <div><img src="img/profil/etudes.png" alt="etudes"  /></div>
                                </div>
                                <script>
									$("#slideshow > div:gt(0)").hide();
	
									setInterval(function() { 
									  $('#slideshow > div:first')
										.fadeOut(2500)
										.next()
										.fadeIn(2500)
										.end()
										.appendTo('#slideshow');
									},  5000);
								</script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            <!-- FIN - PROFIL -->
            
            <!-- DEBUT - COMPETENCES -->
            <hr id="competence"> <br>
            
            <div class="competence">
                <div class="container">
            		<h1>Compétences</h1>
                	<div class="row">
                        <table class="col-md-3">
                            <tr><th>Développement</th></tr>
                            <tr><td>JAVA</td></tr>
                            <tr><td>SQL</td></tr>
                            <tr><td>C</td></tr>
                            <tr><td>LISP</td></tr>
                            <tr><td>Shell</td></tr>
                        </table>
                        
                        <table class="col-md-3">
                            <tr><th>Web</th></tr>
                            <tr><td>HTML</td></tr>
                            <tr><td>CSS</td></tr>
                            <tr><td>PHP</td></tr>
                            <tr><td>JAVASCRIPT</td></tr>
                            <tr><td>JSP</td></tr>
                        </table>
                        
                        <table class="col-md-3">
                            <tr><th>Logiciels</th></tr>
                            <tr><td>Eclipse</td></tr>
                            <tr><td>Notepad++</td></tr> 
                            <tr><td>PowerPoint</td></tr>
                        </table>
                        
                        <table class="col-md-3">
                            <tr><th>Possibilité</th></tr>
                            <tr><td>Conception jeu vidéo</td></tr>
                            <tr><td>WebMaster</td></tr>
                            <tr><td>Développement d'application mobile</td></tr>
                            <tr><td>Développment logiciel</td></tr>
                        </table>
                	</div>
                </div>
            </div>
            <!-- FIN - COMPETENCES -->
            
            <!-- DEBUT - EXPERIENCES -->
            <hr id="experience"> <br>
            
            <div class="experience">
                <div class="container marketing">
                	
                    <h1>Mes expèriences</h1>
                	
                    <!-- pour plus tard
                	<hr class="featurette-divider">
                    
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">All</button>
                        <button type="button" class="btn btn-default">Développement</button>
                        <button type="button" class="btn btn-default">Web</button>
                        <button type="button" class="btn btn-default">Autres</button>
                    </div>-->
                    
                    <hr class="featurette-divider">
                	
                    <div class="row featurette">
                        <div class="col-md-7">
                            <h2 class="featurette-heading wow fadeInDown">
                            	Création d'un portfolio  en ligne. 
                            	<span class="text-muted"><a href="index.php">alexisPrevostMaynen.fr</a></span>
                            </h2>
                            
                            <p class="lead wow fadeInLeft" data-wow-duration="2s">
                            	J'ai créé se portfolio pour que les entreprises et écoles puissent voir mes compétences et mes projets effectué. 
                                Grâce à ce Site je propose également le moyen de me contacter directement. On peut aussi observer directement mes compétences Web.
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img data-wow-duration="2s" class="featurette-image img-responsive wow fadeInRight" data-src="holder.js/500x500/auto" alt="500x500" src="img/experience/portfolio.png" data-holder-rendered="true">
                        </div>
                    </div>
                    
                    <hr class="featurette-divider">
                    
                    <div class="row featurette">
                        <div class="col-md-5">
                        <img data-wow-duration="2s" class="featurette-image img-responsive wow fadeInLeft" data-src="holder.js/500x500/auto" alt="500x500" src="img/experience/logo.png" data-holder-rendered="true">
                        </div>
                        <div class="col-md-7">
                        <h2 class="featurette-heading wow fadeInDown">
                        	Rédacteur pour un site internet. 
                        	<span class="text-muted"><a href="http://www.wiiuniverse.fr/author/draxxo/">WiiUniverse.fr</a></span>
                        </h2>
                        <p class="lead wow fadeInRight">
                        En février 2015, j'ai rejoint un site internet parlant de l'actualité Nintendo et plus particulièrement de la Wii U. 
                        J'ai été rédacteur pour se site, j'ai donc écris quotidiennement des news sous le pseudonyme de "Draxxo".
						J'ai malheureusement du arrêter depuis aout 2016</p>
                        </div>
                    </div>
                
                	<hr class="featurette-divider">
                	
                    <div class="row featurette">
                        <div class="col-md-7">
                            <h2 class="featurette-heading wow fadeInDown">
                            	Participation à la première game jam de Normandie (2014). 
                            	<span class="text-muted"><a href="http://www.viking-game-jam.fr/jeux-de-la-premiere-edition/les-gros-sacs/">vikingGameJam.fr</a></span>
                            </h2>
                            
                            <p class="lead wow fadeInLeft" data-wow-duration="2s">
                            	Le but était de créer un jeu vidéo en 24h. Le jeu a été réalisé en JAVA à l'aide la librairie Slick2D, 
                            	constitué d'une équipe de cinq membres le jeu Mega Undercover Stach Testified Accrossed Conventionnal Humanity Elements : 
                                The movie The game est né c'est un shooter arena dans lequel vous incarnez une moustache rebelle ne voulant pas se faire couper. 
                                Vous devez tuer les ciseaux et les rasoirs du méchant barbier... <a href="dl/mustache_game.jar">Télécharger le jeu</a>
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img data-wow-duration="2s" class="featurette-image img-responsive wow fadeInRight" data-src="holder.js/500x500/auto" alt="500x500" src="img/experience/moustache.jpg" data-holder-rendered="true">
                        </div>
                    </div>
                    
                    <hr class="featurette-divider">
                    
                    <div class="row featurette">
                        <div class="col-md-5">
                        <img class="featurette-image img-responsive" data-src="holder.js/500x500/auto" alt="500x500" src="img/experience/wh.png" data-holder-rendered="true">
                        </div>
                        <div class="col-md-7">
                        <h2 class="featurette-heading">Développement partiel d'un site internet. <span class="text-muted"><a href="wh/">wh.fr</a></span></h2>
                        <p class="lead">
                        	J'ai commencé le développement d'un site internet pour un ami qui aurait aimé vendre des T-shirts qu'il personnalisait lui-même. 
							Le site n'a pas été terminé car il a abandonné son projet. j'ai développé et mis en oeuvre à partir de nos idées communes. 
							J'ai tous de même mis un lien vers ce qu'aurait pu être "wh".
                        </p>
                        </div>
                    </div>
                    
                    <hr class="featurette-divider">
					
					<div class="row featurette">
                        <div class="col-md-7">
                            <h2 class="featurette-heading wow fadeInDown">
                            	Création d'un site internet.
                            	<span class="text-muted"><a href="minecrafoss/">minecrafoss.fr</a></span>
                            </h2>
                            
                            <p class="lead wow fadeInLeft" data-wow-duration="2s">
                            	C'est au lycée que j'ai eu l'occasion de créer mon premier site internet.<br>
								A cette époque j'avais un ami qui gérait un serveur Minecraft. Comme il n'avait pas le temps nécessaire, 
                                j'ai créé pour lui un site pour promouvoir son serveur. Réalisé en HTML & CSS il est resté en ligne un an avant d'être supprimé.
                            </p>
                        </div>
                        <div class="col-md-5">
                            <img data-wow-duration="3s" class="featurette-image img-responsive wow fadeIn" data-src="holder.js/500x500/auto" alt="500x500" src="img/experience/minecrafoss.png" data-holder-rendered="true">
                        </div>
                    </div>
                    
					<hr class="featurette-divider">
					
                </div>
                
            </div>
            <!-- FIN - EXPERIENCE -->
            
            <!-- DEBUT - CONTACT -->
            <hr id="contact">
            
            <div class="contact">
            	
                <h1>Contact</h1>
                <?php
                	if(isset($_GET['envoi'])) {
						$envoi = $_GET['envoi'];
						echo "<h3";
						if($envoi == 1)
							echo " class=\"vert\">Message envoyé";
						else if($envoi == 2)
							echo " class=\"rouge\">Email invalide";
						else
							echo " class=\"rouge\">Message non envoyé";
						
						echo "</h3>";
					}
				?>
				<form action="traitement.php" class="form-horizontal wow fadeIn" method="post" data-wow-duration="4s">
                	<div class="form-group">
                    	<label for="nom" class="col-sm-2 control-label">Nom & prénom</label>
                        <div class="col-sm-9">
                        	<input id="nom" name="nom" type="text" placeholder="Nom & prénom" class="form-control" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label" >Email</label>
                        <div class="col-sm-9">
                        	<input type="text" class="form-control" id="email" name="email" placeholder="email" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="objet" class="col-sm-2 control-label" >Objet</label>
                        <div class="col-sm-9">
                        	<input type="text" class="form-control" id="objet" name="objet" placeholder="Objet" required />
                        </div>
                    </div>
                    <div class="form-group">
                    	<label for="message"  class="col-sm-2 control-label">Message</label>
                        <div class="col-sm-9">
                    		<textarea class="form-control" rows="15" id="message" name="message" placeholder="Tapez votre message" required ></textarea>
                    	</div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-9">
                        	<button type="submit" class="btn btn-default">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- FIN - CONTACT -->
            
        </section>
        
        <!-- DEBUT - FOOTER -->
        <footer> 
        	<h4>Portfolio - <a href="index.php">Alexis Prevost-Maynen</a> - 2015</h4>
            <p>site réalisé avec HTML, CSS, PHP, <a href="http://getbootstrap.com/">Bootstrap</a> &amp; <a href="http://mynameismatthieu.com/WOW/">wow.js</a></p>
        </footer>
        <!-- FIN - FOOTER -->
    
    </body>
 
</html>