<?php /* Page publique des albums, meta donnée à insérer */ ?>

		<section class="jumbotron text-center">
			<div class="container">
			  <h1>Vos albums</h1>
			  <p class="lead">Découvre l'ensemble de vos albums</p>
			  <hr class="my-4">
			  <p>Vous voulez ajouter un nouvelle album ?</p>
			  <a class="btn btn-primary btn-lg" href="#" role="button">Ajouter de nouveaux albums</a>
			</div>  
		</section>
		<div class="container">			
			<div class="row">
				<div class="col-outer mt-3  col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12" data-grid-classes=" col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
				    <div class="card card-thumbnail">
				      <div class="h-100">
				        <a href="index/category/conventions" class="ripple d-block">
				          <img class="card-img-top" src="assets/img/MaPhotoLink.png" alt="Affiché des photos aléatoire de l'album" title="Conventions - montre les photos à la racine de cet album">
				        </a>
				        <div class="card-body">
				          <h5 class="card-title ellipsis ">
				          <a href="index/category/conventions">Un titre</a> <!-- titre de l'album -->
				          </h5>
				          <div class="card-text">
				              <div class="description  d-block"><p>
								<em><span style="font-size:14px;">Une description</span></em></p> <!-- description de l'album -->
							  </div>
				          </div>
				        </div>
				        <div class="card-footer text-muted text-center">
				        	<div class="d-inline-block ellipsis">Des détails sur l'albums (nombre de photos, de sous albums si il en existe</div>
							  <button type="button" class="btn btn-sm btn-outline-secondary">Voir</button>
							  <button type="button" class="btn btn-sm btn-outline-secondary">Modifier</button>					        	
				        </div>  <!-- information complémentaire -->				        
				      </div>
				    </div>
				</div>				
			</div>
		</div>
					
