<?php 
	echo validation_errors();
	$attributes = array('class' => 'bg-light text-center');
?>

		<section class="jumbotron text-center">
			<div class="container">
			  <h1>Création d'un compte</h1>
			  <p class="lead">
			  	Veuillez insérer les informations du nouveau membre.<br>
			  	Les informations ayant "*", sont des informations essentiels !  
			  </p>
			</div> 			
		</section>
		<div class="container">
			<div class="card">
				<div class="card-header bg-secondary text-white"><h1 class="display-4 text-center">Formulaire d'inscription</h1></div>
				<div class="card-body">
					<!-- <form id="formulaireCreation" class="bg-light text-center"> -->
					<?php echo form_open('creation', $attributes) ?>	
						<div class="form-group">
							<input type="text" name="pseudoName" placeholder="Pseudo" class="form-control" required>
						</div>
						<div class="form-group">
							<input type="text" name="adress" placeholder="Adresse" class="form-control" required>
						</div>	
						<div class="form-group">
							<input type="text" name="mail" placeholder="Email" class="form-control" required>
						</div>	
						<div class="form-group">
							<textarea placeholder="Description facultative" class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3"></textarea>
						</div>	
						<div class="form-group">
							<input type="password" name="pwd" placeholder="Mot de passe" class="form-control" required>
						</div>
						<button type="submit" class="btn btn-lg btn-success">Confirmer</button>



						<!-- <button type="button" class="btn btn-lg btn-secondary" data-toggle="modal" data-target="#ModalConfirmation" class="mx-auto">Confirmation de l'inscription</button> -->

						<!-- Modal -->
<!-- 						<div class="modal fade" id="ModalConfirmation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						  <div class="modal-dialog" role="document">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLongTitle">Confirmation des données du nouveau membre</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						      </div>
						      <div class="modal-body">
						        Son pseudo: <br>
						        Son adresse: <br>
						        Son email: <br>
						        Son mot de passe: <br>

						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
						        <button type="submit" class="btn btn-success">Confirmer</button>
						      </div>
						    </div>
						  </div>
						</div>	 -->			
					</form>
				</div>
			</div>
		</div>
		<br>