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
				<div class="card-header bg-secondary text-white"><h1 class="display-4 text-center">Modification</h1></div>
				<div class="card-body">
					<?php echo form_open('admin/admin_edit_photographe', $attributes); ?>	
						<div class="form-group">
							<input type="text" name="pseudoName" placeholder="Pseudo" class="form-control" value="<?php echo $photographe['NOMAFFICHE']; ?>" required>
						</div>
						<div class="form-group">
							<input type="text" name="adress" placeholder="Adresse" class="form-control" value="<?php echo $photographe['ADRESSE'] ; ?>" required>
						</div>
						<div class="form-group">
							<input type="text" name="mail" placeholder="Email" class="form-control" value="<?php echo $photographe['MAIL'] ; ?>" required>
						</div>	
						<div class="form-group">
							<textarea type="desc" name="desc" placeholder="Description facultative" class="form-control" id="description" rows="3" required><?php echo $photographe['DESCRIPTION']; ?></textarea>
						</div>	
						<div class="form-group">
							<input type="password" name="pwd" placeholder="Mot de passe" class="form-control" value="<?php echo $photographe['PASSWORD'] ; ?>" required>
						</div>
						<input type="hidden" name="id_hidden" value="<?php echo $photographe['IDPHOTOGRAPHE'] ?>">
						<input type="submit" class="btn btn-lg btn-success" value="Confirmer">
					</form>
					</div>

				</div>
			</div>
		</div>
		<br>