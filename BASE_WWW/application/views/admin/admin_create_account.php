<?php echo validation_errors(); ?>

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
			<form id="formulaireCreation">
				<div class="form-group">
					<label>Pseudo</label>
					<input type="text" name="pseudoName" placeholder="Nom">
					<label>Adresse</label>
					<input type="text" name="adress" placeholder="Adresse">
					<label>Email</label>
					<input type="email" name="mail" placeholder="Email">
					<label>Description</label>
					<input type="text" name="desc" placeholder="Une description">
					<label>Mot de passe</label>
					<input type="password" name="pwd" placeholder="Mot de passe">
					<input type="submit" name="valid_btn" value="Création">
				</div>
			</form>
		</div>