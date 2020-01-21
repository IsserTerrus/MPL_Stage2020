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
					<label>Nom</label>
					<input type="text" name="name" placeholder="Nom">
					<label>Prénom</label>
					<input type="text" name="firstname" placeholder="Prénom">
					<label>Adresse</label>
					<input type="text" name="adress" placeholder="Adresse">
					<label>Email</label>
					<input type="email" name="mail" placeholder="Email">
					<label>Description</label>
					<input type="text" name="desc" placeholder="Une description">
					<label>Pseudo</label>
					<input type="text" name="Pseudo" placeholder="Pseudo">
					<label>Mot de passe</label>
					<input type="password" name="nom" placeholder="Mot de passe">
					<label>Administrateur</label>
					<input type="boolean" name="boolean" placeholder="Administrateur">




					<input type="submit" name="enregistrer" value="Création">
				</div>
			</form>
		</div>