<?php /* Page d'administration de gestion des albums */ ?>

		<section class="jumbotron text-center">
			<div class="container">
			  <h1>MaPhoto.Link</h1>
			  <p class="lead">Configuration des ablums des membres</p>
			</div>  
		</section>

	<div class="container">
			<div class="card-deck">
				<div class="card">

				<table class="table">
				<thead>
					<tr class="table-secondary">
						<th>Id</th>
						<th>IdPhotographe</th>
						<th>NomAlbum<t/h>
						<th>Description</th>
						<th>UrlAlbum</th>
						<th>IdPhoto</th>
						<th colspan="2" class="text-center">Action</th>
					</tr>
				</thead>
					
					<?php foreach ($album as $un_album){ ?>
						<tr class="table-class">
						    <td><p><?php echo $un_album['IDALBUM']; ?></p></td>
							<td><p><?php echo $un_album['NOMALBUM']; ?></p></td>
							<td><p><?php echo $un_album['DESCRIPTION']; ?></p></td>	
							<td><p><?php echo $un_album['URLALBUM']; ?></p></td>	
							<td><p><?php echo $un_album['IDPHOTO']; ?></p></td>
							<td class="text-center"><a class="btn btn-success" href="<?php echo site_url('admin/admin_edit_photographe/').$un_album['IDPHOTOGRAPHE'] ; ?>">Modifier</a></td>

							<td class="text-center"><a class="btn btn-danger" href="<?php echo site_url('admin/').$un_album['IDPHOTOGRAPHE'];?>">Supprimer</a></td>
						</tr>
				</table>	
					<?php } ?>	
				</div>
			</div>
	</div>

