<?php//Page publique pour l'installation de l'application web ?>
			
			<section class="jumbotron text-center">
				<div class="container">
				  <h1>MaPhoto.Link</h1>
				  <p class="lead">Pour pouvoir utiliser notre application, il vous est demandé avant tout d'avoir un compte adhérant.</p>
				  <hr class="my-4">
				  <p>Si vous avez déja un compte, cliquer directement sur le bouton juste en dessous.</p>
				  <a class="btn btn-dark btn-lg" href="<?php echo base_url("application/views/member/member_identification.php") ?>" role="button">Connexion</a>
				</div>  
			</section>
			<div class="container">
				<div class="card-deck mb-3 text-center">
					<div class="card mb-4 shadow-sm">
					    <div class="card-header">
					      <h4 class="my-0 font-weight-normal">Adhésion à FOKUZA</h4>
					    </div>
					    <div class="card-body">
					      <h1 class="card-title pricing-card-title">30 €</h1>
					      <ul class="list-unstyled mt-3 mb-4">
					        <li>Cotisation d'adhésion si le photographe n'est pas ''Adhérent Photographe'' à l'Association FOKUZA</li><br>
					        <li></li>
					      </ul>
					    </div>
					    <div class="card-footer">
					    	<button type="button" class="btn btn-lg btn-block btn-dark">Adhérer</button>
					    </div>
					</div>	
					<div class="card mb-4 shadow-sm">
					    <div class="card-header">
					      <h4 class="my-0 font-weight-normal">Abonnement Annuel</h4>
					    </div>
					    <div class="card-body">
					      <h1 class="card-title pricing-card-title">10 € <small class="text-muted">/ an</small></h1>
					      <ul class="list-unstyled mt-3 mb-4">
					        <li>3Go inclus - soit environ 3000 photos (selon qualité de l'original)</li>
					        <li>+2€ par Go en plus par an</li>
					        <li>En cas de non-renouvellement les précédents partages seront effacés</li>
					      </ul>
					    </div>
					    <div class="card-footer">
					    	<button type="button" class="btn btn-lg btn-block btn-dark">S'abonner</button>
					    </div>					    
					</div>	
				</div>
				<div class="jumbotron text-center bg-light">
				  <h1>Contact</h1><br>
				  <ul class="list-group">
					<li class="list-group-item"><h3>Email: contact@fokusa.fr</h3></li><br>
					<li class="list-group-item"><h3>Tél: 06.36.78.30.61</h3></li>
				  </ul>
				</div>	
			</div>		
			<br>	