<?php /*Page d'accueil de l'administrateur */  ?>


			<section class="jumbotron text-center">
				<div class="container">
				  <h1>MaPhoto.Link</h1>
				  <p class="lead">Page administrateur</p>
				</div>  
			</section>

			<div class="container">
				<div class="card-deck">
					<div class="card">
					    <div class="card-header bg-dark text-white"><i class="fas fa-users-cog"></i>fgfg</div>
					    <div class="card-body">
					      <h5 class="card-title">Gestion des photos</h5>
					      <p class="card-text">Administration, configuration et gestion de l'ensemble des photos de l'application.</p>
					    </div>
					    <button class="btn btn-outline-secondary">Configurer</button>
					    <div class="card-footer">
					      <small class="text-muted">Dernière modification: </small>
					    </div>
					  </div>
					  <div class="card">
					    <img src="<?php echo base_url("assets/img/Amon_and_his_Equalists.png") ?>" class="card-img-top" alt="...">
					    <div class="card-body">
					      <h5 class="card-title">Gestion des albums</h5>
					      <p class="card-text">Administration, configuration et gestion de l'ensemble des albums de l'application.</p>
					    </div>
					    <button class="btn btn-outline-secondary">Configurer</button>
					    <div class="card-footer">
					      <small class="text-muted">Dernière modification: </small>
					    </div>
					  </div>
					  <div class="card">
					    <img src="<?php echo base_url("assets/img/Amon_and_his_Equalists.png") ?>" class="card-img-top" alt="...">
					    <div class="card-body">
					      <h5 class="card-title">Gestion des profils</h5>
					      <p class="card-text">Administration, configuration et gestion de l'ensemble des profils de l'application.</p>
					    </div>
					    <a class="btn btn-outline-secondary" href="<?php echo site_url("admin/admin_compte") ?>">Configurer</a>
					    <div class="card-footer">
					      <small class="text-muted">Dernière modification: </small>
					    </div>
					  </div>







<?php foreach ($photographe as $photographesssss): ?>

        <?php echo $photographe['nomaffiche']; ?>
		<?php echo $photographesssss['idphotographe']; ?>
        
      

<?php endforeach; ?>


<?php
echo '<h2>'.$photographe['nomaffiche'].'</h2>';
echo $news_item['text'];

?>




				</div>
			</div>
			<br>