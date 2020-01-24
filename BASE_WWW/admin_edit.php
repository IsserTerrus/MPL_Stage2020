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
				<div class="card-header bg-secondary text-white"><h1 class="display-4 text-center">Update User</h1></div>
				<div class="card-body">
					<!-- <form id="formulaireCreation" class="bg-light text-center"> -->
					<?php echo form_open('admin/update_user', $attributes) ?>	
						<div class="form-group">
							<input type="text" name="pseudoName" placeholder="Pseudo" class="form-control" value=" <?php echo $data['NOMAFFICHE'] ; ?>"  required>		
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
</form>
				</div>
			</div>
		</div>
		<br>