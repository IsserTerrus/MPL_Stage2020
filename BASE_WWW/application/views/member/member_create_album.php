<?php
	echo validation_errors();
	$attributes = array('class' => 'bg-light form');

?>		


		<section class="jumbotron text-center">
			<div class="container">
			  <h1>Ajouter un nouveau album</h1>
			  <p class="lead">Rédiger le nom de votre album avec une description</p>
			  <hr class="my-4">
			</div>  			
		</section>

		<div class="container">
			<div class="card">
				<div class="card-header bg-dark text-light text-center"><h1>Création d'un album</h1></div>
				<div class="card-body">
					<?php echo form_open('album_creation', $attributes) ?>
						<div class="form-group">
						<label>Nom de l'album</label>
						<input type="text" name="titreAlbum" class="form-control" placeholder="Titre">							
						</div>
						<div class="form-group">
							<label>Description</label>
							<textarea placeholder="Description facultative" name="descAlbum" class="form-control" rows="4"></textarea>
						</div>
<!-- 						<div class="form-group">
							<label>Ajouter des photos //////INPUT A REVOIR</label>
							<input type="file" name="dropFile" class="form-control">
							
						</div> -->
						<div class="form-group">
							<label class="form-check-label">Statut:</label>
							<div class="form-check-inline">
								<input type="radio" name="btnStatut" id="btnPublic" class="form-check-input">
								<label class="form-check-label">Public</label>
							</div>
							<div class="form-check-inline">
								<input type="radio" name="btnStatut" id="btnPrivate" class="form-check-input" checked>
								<label class="form-check-label">Privé</label>
							</div>							
						</div>
						<div class="form-group text-center">
							<input type="submit" class="btn btn-lg btn-success" name="btnValidationAlbum" value="Création">
						</div>
					</form>					
				</div>
		
			</div>



		</div>