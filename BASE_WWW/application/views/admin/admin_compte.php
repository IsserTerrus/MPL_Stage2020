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
				
			<p>Liste des membres étant inscrit au service maphoto.link: </p><br>



<h2><?php echo $title; ?></h2>

<?php foreach ($photographe as $photographesssss): ?>

        <?php echo $photographesssss['nomaffiche']; ?>
		<?php echo $news_item['text']; ?>
        
      

<?php endforeach; ?>


<?php
echo '<h2>'.$photographe['nomaffiche'].'</h2>';
echo $news_item['text'];

?>



	</div>
				</div>
			</div>



















		</div>