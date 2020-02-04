<?php /* Page d'administration pour identification */?>

<?php

echo validation_errors();
$attributes = array('class' => 'form-signin text-center');

?>
			
			<section class="jumbotron text-center">
				<div class="container">
				  <h1>Vous êtes membre ?</h1>
				  <p class="lead">Il suffit simplement de saisir vos identifiants dans le formulaire en dessous.</p>
				</div>  
			</section>

				<div class="container">
					<div class="card">
						<div class="card-header bg-secondary text-white text-center"><h1 class="display-4 text-center">Connexion</h1></div>
						<div class="card-body">
							<!-- <form class="form-signin text-center"> -->
							<?php echo form_open('member/login', $attributes); ?>	
							  	<div class="form-group">
								  <label for="inputLogin" class="sr-only">Identifiant</label>
								  <input type="text" id="inputLogin" name="pseudo" class="form-control text-center" placeholder="Pseudo" required autofocus>
								</div>
								<div class="form-group">
								  <label for="inputPassword" class="sr-only">Mot de passe</label>
								  <input type="password" id="inputPassword" class="form-control text-center" placeholder="Mot de passe" name="password" required>
								</div>
							  	<div class="checkbox mb-3">
							    	<label>
							      	<input type="checkbox" value="remember-me"> Se souvenir de moi
							   		</label>
							  	</div>
							  <button class="btn btn-lg btn-dark" type="submit">Connexion</button>
							</form>	
						</div>						
					</div>				
				</div> <br>


