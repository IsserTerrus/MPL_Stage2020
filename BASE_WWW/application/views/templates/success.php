<!DOCTYPE html>
<html>
<head>
	<title>REUSSIE</title>
</head>
<body>
	<?php 
		if (isset($message_display)) 
		{
		?>
			<section class="jumbotron text-center">
				<div class="container">
				  <h1>MaPhoto.Link</h1>
				  <p class="lead">Deconnexion</p>
				</div>  
			</section>
			<div class="container bg-light">
				<div class="card text-center">
					<div class="card-body">
						<h1 class="display-4"><?php echo $message_display; ?></h1><br>
						<a class="btn btn-lg btn-success" href="<?php echo site_url('visiteur') ?>">Retour sur la page d'accueil</a>
					</div>
				</div>
				
			</div>
		<?php
		}
		else 
		{
		?>
	 	GOOD JOB !
	 	<a href="<?php echo site_url('member/member_index') ?>">Retour sur la page membre</a>
		<?php 
		} 
	?>
</body>
</html>