<?php /* Page d'administration de gestion des comptes */ ?>

		<section class="jumbotron text-center">
			<div class="container">
			  <h1>MaPhoto.Link</h1>
			  <p class="lead">Configuration des comptes des membres</p>
			</div>  
		</section>

		<div class="container">
			<div class="card-deck">
				<div class="card">
					<div class="card-header">Créer un nouvelle utilisateur</div>
					<div class="card-body">
						<p class="card-text text-center">Ajouter un nouvelle utilisateur en lui attribuant différentes données</p><br>
						<a  class="btn btn-outline-success btn-lg btn-block" href="<?php echo site_url("admin/admin_create_account") ?>">Ajouter un nouveau membre</a>
					</div>
					<div class="card-footer">
						<p class="card-text"><small class="text-muted">Dernière modification</small></p>
					</div>
				</div>
			</div><br>

			<h2>Liste des photographes</h2>
			<table class="table">
				<thead>
					<tr class="table-secondary">
						<th>Id</th>
						<th>Pseudo</th>
						<th>Adresse</th>
						<th>Description</th>
						<th>Mail</th>
						<th>Admin</th>
						<th colspan="2" class="text-center">Action</th>
					</tr>
					
					<?php foreach ($photographe as $un_photographe){ ?>
						<tr class="table-class">
						    <td><p><?php echo $un_photographe['IDPHOTOGRAPHE']; ?></p></td>
							<td><p><?php echo $un_photographe['NOMAFFICHE']; ?></p></td>
							<td><p><?php echo $un_photographe['ADRESSE']; ?></p></td>
							<td><p><?php echo $un_photographe['DESCRIPTION']; ?></p></td>	
							<td><p><?php echo $un_photographe['MAIL']; ?></p></td>	
							<td><p><?php echo $un_photographe['BOOLADMIN']; ?></p></td>
							<td class="text-center"><button class="btn btn-success">Modifier</button></td>
							<td class="text-center"><button class="btn btn-danger">Supprimer</button></td>						
						</tr>

					<?php } ?>						
						
					</tr>
				</thead>
		</table> 
		</div>	




















		</div>