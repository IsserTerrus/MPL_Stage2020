<?php //Page principale de l'application web ?>
			<!-- Texte d'introduction -->
			<section class="jumbotron text-center">
				<div class="container">
				  <h1>MaPhoto.Link</h1>
				  <p class="lead">Application libre réalisée pour les besoins de nos photographes</p>
				  <hr class="my-4">
				  <p>Pour voir en détail les fonctionnalités de l'application, rendez-vous sur la page de la documentation en cliquant sur le bouton !</p>
				  <a class="btn btn-primary btn-lg" href="#" role="button">En savoir plus</a>
				</div>  
			</section>

			
			  <div class="container text-center">
			    <h1 class="display-4">Profiter pleinement de l'application web</h1>
			    <p class="lead text-muted">Des photos redimensionner suivant vos besoins (petite , moyenne, grande tailles et taille originale</p>
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
				      <img src="assets/img/MaPhotoLink.png" class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <h5>First slide label</h5>
				        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img src="..." class="d-block w-100" alt="...">
				      <div class="carousel-caption d-none d-md-block">
				        <h5>Second slide label</h5>
				        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				      </div>
				    </div>
				    <div class="carousel-item">
				      <img src="..." class="d-block w-100" alt="...">
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

				<div class="row text-center">
					<div class="col-12">
						<h1 class="display-4 text-center">Venez tester notre application !</h1>
						<button type="button" class="btn btn-primary btn-lg">Connexion</button>
						<button type="button" class="btn btn-secondary btn-lg">S'inscrire</button>
					</div>



				</div>
			</div>