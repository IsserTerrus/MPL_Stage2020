<!DOCTYPE html>
<html>
<head>
	<title>REUSSIE</title>
</head>
<body>
	<?php 
		if (isset($message_display)) 
		{
			echo $message_display;
			?>
			<a href="<?php echo site_url('visiteur') ?>">Retour sur la page d'accueil</a>
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