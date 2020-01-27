<?php 
	echo validation_errors();
	$attributes = array('class' => 'bg-light text-center');
?>

		<section class="jumbotron text-center">
			<div class="container">
			  <h1>Gerer un compte </h1>
			  <p class="lead">
			  	Modifier un membre<br>
			  				  </p>
			</div> 			
		</section>
		<div>
		</div>
		<div class="container">
			<div class="card">
				<div class="card-header bg-secondary text-white"><h1 class="display-4 text-center">Update User</h1></div>
				<div class="card-body">
					<?php echo form_open('admin/get_user', $attributes); ?>	
						<div class="form-group">
							<input type="text" name="pseudoName" placeholder="Pseudo" class="form-control" value="<?php echo $photographe['NOMAFFICHE'] ; ?>" >
						</div>
						<div class="form-group">
							<input type="text" name="adress" placeholder="Adresse" class="form-control" value="<?php echo $photographe['ADRESSE'] ; ?>" >
						</div>
						<div class="form-group">
							<input type="text" name="mail" placeholder="Email" class="form-control" value="<?php echo $photographe['MAIL'] ; ?>">
						</div>	
						<div class="form-group">
							<input type="desc" name="desc" placeholder="Description facultative" class="form-control" id="description" rows="3" value="<?php echo $photographe['DESCRIPTION']; ?>" >
						</div>	
						<div class="form-group">
							<input type="password" name="pwd" placeholder="Mot de passe" class="form-control" value="<?php echo $photographe['PASSWORD'] ; ?>">
						</div>
						<button type="submit" class="btn btn-lg btn-success">Confirmer</button>
							</form>
					</div>

				</div>
			</div>
		</div>
		<br>