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
			</div>
<p>Liste des membres étant inscrit au service maphoto.link: </p><br>

<h2>Liste des photographes<h2>

<?php foreach ($photographe as $news_item): ?>

        <h3><?php echo $news_item['IDPHOTOGRAPHE']; ?></h3>
        <div class="main bg-secondary">
                <?php //echo $news_item['text']; ?>
        </div>
        <p><a href="<?php //echo site_url('news/'.$news_item['slug']); ?>">View article</a></p>

<?php endforeach; ?>




















		</div>