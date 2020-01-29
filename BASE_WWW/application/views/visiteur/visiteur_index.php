<?php //Page principale de l'application web ?>

		<!-- Texte d'introduction -->
		<section class="jumbotron text-center">
			<div class="container">
			  <h2>MaPhoto.Link - Votre Partenaire Partage</h2>
			  <p class="lead">Application libre réalisée pour les besoins de nos photographes</p>
			  <hr class="my-4">
			  <p>Pour voir en détail les fonctionnalités de l'application, rendez-vous sur la page GitHub et référez vous de la documentation en cliquant sur le bouton !</p>
			  <a class="btn btn-dark btn-lg" href="<?php echo site_url("about") ?>" role="button">En savoir plus</a>
			</div>  
		</section>

		
		  <div class="container text-center">
		    <h1 class="display-4">Profiter pleinement de l'application web</h1>
		    <p class="lead text-muted">Des photos redimensionner suivant vos besoins (petite, moyenne, grande tailles et taille originale).</p>
		  </div>
		

		<!-- Mise en place d'un carousel pour faire défiler des images publiques aléatoire -->
		<div class="container">
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			  <ol class="carousel-indicators">
			    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
			  </ol>
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img src="<?php echo base_url("assets/img/SherlockHolme.jpg") ?>" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			        <h5>First slide label</h5>
			        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
			      </div>
			    </div>
			    <div class="carousel-item">
			      <img src="<?php echo base_url("assets/img/Amon_and_his_Equalists.png") ?>" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			        <h5>Second slide label</h5>
			        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			      </div>
			    </div>
			    <div class="carousel-item">
			      <img src="<?php echo base_url("assets/img/Amon_and_his_Equalists.png") ?>" class="d-block w-100" alt="...">
			      <div class="carousel-caption d-none d-md-block">
			        <h5>Third slide label</h5>
			        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
			      </div>
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Précédent</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Suivant</span>
			  </a>
			</div>
			<br>
			<div class="card">
			  <div class="card-header"><h2>Qu'est ce que c'est ?</h2></div>	
			  <div class="card-body">
			    <p>
					MaPhoto.Link est un service de partage de photo propulsé par l'Association FOKUZA (ex-DigitEyes). Il offre à l'ensemble des photographes référencés un service pour publier une photo et permettre son partage simplement.
					L'ensemble des données hébergées par ce service sont situées dans un DataCenter Français (Clermont-Ferrand) et donc restent sous la juridiction Française.	    	
			    </p>
			  </div>
			</div>
			<div class="card">  
			  <div class="card-header"><h2>Photographes:</h2></div>	
			  <div class="card-body">
			    <p>
					Si vous le souhaitez, vous pouvez utiliser le service MaPhoto.Link afin de publier vos photo en haute qualité tout en conservant les droits sur celles-ci (les services en ligne tel que Facebook et Google vous démuni de vos droits - <a href="https://www.nouvelobs.com/rue89/rue89-internet/20130203.RUE2939/a-qui-appartiennent-vos-donnees-sur-internet-mauvaises-nouvelles-et-conseils.html">Plus d'informations </a>) Pour tout renseignement ou adhésion, rendez-vous dans l'espace Photographe (lien ci-dessous).	    	
			    </p>
			  </div>				  
			</div><br>			
		</div>
		<br>

		<div class="container">
			<div class="row">
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-header text-light bg-dark text-center"><h2>Photos</h2></div>
			      <div class="card-body text-center">
			        <h5 class="card-title">Voir les photos</h5>
			        <p class="card-text">Consulter la liste des photos accessible au public</p>
			        <a href="<?php echo site_url('visiteur/liste_photos') ?>" class="btn btn-dark">Consulter</a>
			      </div>
			    </div>
			  </div>
			  <div class="col-sm-6">
			    <div class="card">
			      <div class="card-header text-light bg-dark text-center"><h2>Albums</h2></div>
			      <div class="card-body text-center">
			        <h5 class="card-title">Liste des albums</h5>
			        <p class="card-text">Consulter la liste des albums disponible au public</p>
			        <a href="<?php echo site_url('visiteur/liste_albums') ?>" class="btn btn-dark">Consulter</a>
			      </div>
			    </div>
			  </div>
			</div>				
		</div>
		<br>